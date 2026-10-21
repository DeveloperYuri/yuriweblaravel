<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\LamaranPekerjaan;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;

class LamaranPekerjaanApiController extends Controller
{
    /**
     * Daftar lamaran masuk.
     */
    public function index(Request $request)
    {
        $query = LamaranPekerjaan::with([
            'pekerjaan:id,title'
        ]);

        // Pencarian nama atau email pelamar.
        if ($request->filled('search')) {
            $search = $request->search;

            $query->where(function ($q) use ($search) {
                $q->where('nama', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%");
            });
        }

        // Filter berdasarkan status.
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Filter berdasarkan posisi pekerjaan.
        if ($request->filled('pekerjaan_id')) {
            $query->where(
                'pekerjaan_id',
                $request->pekerjaan_id
            );
        }

        $lamaran = $query
            ->orderByDesc('created_at')
            ->paginate(10);

        return response()->json([
            'success' => true,
            'message' => 'Daftar lamaran berhasil diambil.',
            'data' => $lamaran,
        ]);
    }

    /**
     * Detail lamaran.
     */
    public function show($id)
    {
        $lamaran = LamaranPekerjaan::with('pekerjaan')
            ->find($id);

        if (!$lamaran) {
            return response()->json([
                'success' => false,
                'message' => 'Lamaran tidak ditemukan.',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $lamaran,
        ]);
    }

    /**
     * Mengubah status lamaran.
     */
    public function updateStatus(Request $request, $id)
    {
        $validated = $request->validate([
            'status' => [
                'required',
                Rule::in([
                    'Submitted',
                    'Screening',
                    'Interview',
                    'Accepted',
                    'Rejected',
                ]),
            ],
            'catatan_hr' => ['nullable', 'string', 'max:5000'],
        ]);

        $lamaran = LamaranPekerjaan::find($id);

        if (!$lamaran) {
            return response()->json([
                'success' => false,
                'message' => 'Lamaran tidak ditemukan.',
            ], 404);
        }

        $lamaran->status = $validated['status'];

        if (array_key_exists('catatan_hr', $validated)) {
            $lamaran->catatan_hr = $validated['catatan_hr'];
        }

        $lamaran->save();

        return response()->json([
            'success' => true,
            'message' => 'Status lamaran berhasil diperbarui.',
            'data' => $lamaran,
        ]);
    }

    /**
     * Download CV pelamar.
     */
    public function downloadCv($id)
    {
        $lamaran = LamaranPekerjaan::find($id);

        // Periksa apakah lamaran tersedia.
        if (!$lamaran) {
            return response()->json([
                'success' => false,
                'message' => 'Lamaran tidak ditemukan.',
            ], 404);
        }

        // Ambil path CV dari database.
        $cvPath = $lamaran->cv_path;

        // Periksa apakah path CV tersedia.
        if (!$cvPath) {
            return response()->json([
                'success' => false,
                'message' => 'CV belum diunggah oleh pelamar.',
            ], 404);
        }

        // Lokasi: storage/app/lamaran-cv/
        $filePath = storage_path('app/' . $cvPath);

        // Periksa apakah file benar-benar ada.
        if (!file_exists($filePath)) {
            return response()->json([
                'success' => false,
                'message' => 'File CV tidak ditemukan.',
                'path' => $filePath,
            ], 404);
        }

        // Download file CV.
        return response()->download($filePath);
    }
}
