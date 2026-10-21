<?php

namespace App\Http\Controllers;

use App\Models\LamaranPekerjaan;
use App\Models\Pekerjaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;
use Throwable;

class LamaranPekerjaanController extends Controller
{

    public function store(Request $request)
    {
        $validated = $request->validate([
            'pekerjaan_id' => [
                'required',
                'integer',
                'exists:pekerjaan,id',
            ],
            'nama' => [
                'required',
                'string',
                'max:150',
            ],
            'email' => [
                'required',
                'email',
                'max:255',
            ],
            // TAMBAHAN: Nomor handphone
            'nomor_handphone' => [
                'required',
                'string',
                'max:20',
            ],
            // TAMBAHAN: Domisili
            'domisili' => [
                'required',
                'string',
                'max:150',
            ],
            'cv' => [
                'required',
                'file',
                'mimes:pdf',
                'max:2048',
            ],
        ], [
            'pekerjaan_id.required' => 'Lowongan pekerjaan wajib dipilih.',
            'pekerjaan_id.exists' => 'Lowongan pekerjaan tidak ditemukan.',
            'nama.required' => 'Nama lengkap wajib diisi.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',

            // TAMBAHAN: Pesan validasi
            'nomor_handphone.required' => 'Nomor handphone wajib diisi.',
            'nomor_handphone.max' => 'Nomor handphone maksimal 20 karakter.',
            'domisili.required' => 'Domisili wajib diisi.',
            'domisili.max' => 'Domisili maksimal 150 karakter.',

            'cv.required' => 'File CV wajib diunggah.',
            'cv.mimes' => 'CV harus berformat PDF.',
            'cv.max' => 'Ukuran CV maksimal 2 MB.',
        ]);

        // Pastikan lowongan masih aktif.
        $pekerjaan = Pekerjaan::query()
            ->where('id', $validated['pekerjaan_id'])
            ->where('status', 'Active')
            ->first();

        if (!$pekerjaan) {
            return response()->json([
                'success' => false,
                'message' => 'Lowongan sudah tidak tersedia atau tidak aktif.',
            ], 422);
        }

        $cvPath = null;

        try {
            // Simpan CV di storage privat, bukan public.
            $cvPath = $request->file('cv')
                ->store('lamaran-cv', 'local');

            DB::transaction(function () use ($validated, $cvPath) {
                LamaranPekerjaan::create([
                    'pekerjaan_id' => $validated['pekerjaan_id'],
                    'nama' => $validated['nama'],
                    'email' => $validated['email'],

                    // TAMBAHAN: Simpan nomor handphone dan domisili
                    'nomor_handphone' => $validated['nomor_handphone'],
                    'domisili' => $validated['domisili'],

                    'cv_path' => $cvPath,
                    'status' => 'Submitted',
                ]);
            });

            return response()->json([
                'success' => true,
                'message' => 'Lamaran berhasil dikirim. Terima kasih telah melamar!',
            ], 201);
        } catch (\Throwable $e) {
            // Hapus CV jika penyimpanan data gagal.
            if ($cvPath && Storage::disk('local')->exists($cvPath)) {
                Storage::disk('local')->delete($cvPath);
            }

            report($e);

            return response()->json([
                'success' => false,
                'message' => 'Lamaran gagal disimpan. Silakan coba kembali.',
            ], 500);
        }
    }
}
