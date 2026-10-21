<?php

namespace App\Http\Controllers;

use App\Models\LamaranPekerjaan;
use App\Models\Pekerjaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class LamaranDashboardController extends Controller
{
    /**
     * Menampilkan dashboard lamaran pekerjaan.
     */
    public function index(Request $request)
    {
        // Statistik seluruh lamaran.

        $user = Auth::user();
        
        $totalLamaran = LamaranPekerjaan::count();

        $lamaranBaru = LamaranPekerjaan::where(
            'status',
            'Submitted'
        )->count();

        $dalamSeleksi = LamaranPekerjaan::whereIn(
            'status',
            ['Screening', 'Interview']
        )->count();

        $diterima = LamaranPekerjaan::where(
            'status',
            'Accepted'
        )->count();

        // Query daftar lamaran.
        $query = LamaranPekerjaan::with('pekerjaan');

        // Pencarian nama atau email.
        if ($request->filled('search')) {
            $search = $request->search;

            $query->where(function ($q) use ($search) {
                $q->where('nama', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%");
            });
        }

        // Filter status lamaran.
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Filter posisi pekerjaan.
        if ($request->filled('pekerjaan_id')) {
            $query->where(
                'pekerjaan_id',
                $request->pekerjaan_id
            );
        }

        // Pagination.
        $lamaran = $query
            ->orderByDesc('created_at')
            ->paginate(10)
            ->withQueryString();

        // Daftar posisi untuk filter.
        $daftarPekerjaan = Pekerjaan::orderBy('title')->get();

        return view(
            'baru.backenddashboardupdate.lamaranpekerjaan.index',
            compact(
                'lamaran',
                'totalLamaran',
                'lamaranBaru',
                'dalamSeleksi',
                'diterima',
                'daftarPekerjaan',
                'user'
            )
        );
    }

    /**
     * Memperbarui status dan catatan HR.
     */
    public function updateStatus(Request $request, $id)
    {
        $validated = $request->validate([
            'status' => [
                'required',
                'in:Submitted,Screening,Interview,Accepted,Rejected',
            ],
            'catatan_hr' => [
                'nullable',
                'string',
                'max:5000',
            ],
        ]);

        $lamaran = LamaranPekerjaan::findOrFail($id);

        $lamaran->status = $validated['status'];
        $lamaran->catatan_hr = $validated['catatan_hr'] ?? null;
        $lamaran->save();

        return redirect()
            ->back()
            ->with('success', 'Status lamaran berhasil diperbarui.');
    }

    /**
     * Mengunduh CV dari penyimpanan privat.
     */
    public function downloadCv(int $id)
    {
        $lamaran = LamaranPekerjaan::findOrFail($id);

        $path = $lamaran->cv_path;

        $disk = Storage::disk('local');

        if (empty($path) || !$disk->exists($path)) {
            abort(404, 'File CV tidak ditemukan.');
        }

        return response()->download(
            $disk->path($path),
            'CV_' . $lamaran->id . '.pdf',
            [
                'Content-Type' => 'application/pdf',
            ]
        );
    }
}
