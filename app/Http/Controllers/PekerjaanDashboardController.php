<?php

namespace App\Http\Controllers;

use App\Models\Pekerjaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class PekerjaanDashboardController extends Controller
{
    /**
     * Menampilkan daftar pekerjaan.
     */
    public function index(Request $request)
    {
        // Ambil user yang sedang login
        $user = Auth::user();

        // Query pekerjaan
        $query = Pekerjaan::query();

        if ($request->filled('search')) {
            $search = $request->search;

            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                    ->orWhere('department', 'like', "%{$search}%")
                    ->orWhere('location', 'like', "%{$search}%");
            });
        }

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        $pekerjaan = $query
            // ->orderBy('updated_at', 'desc')
            ->orderBy('id', 'desc')
            ->paginate(10)
            ->withQueryString();

        return view(
            'baru.backenddashboardupdate.pekerjaan.index',
            compact('pekerjaan', 'user')
        );
    }

    /**
     * Menampilkan form tambah pekerjaan.
     */

    public function create()
    {
        $user = Auth::user();

        return view(
            'baru.backenddashboardupdate.pekerjaan.create',
            compact('user')
        );
    }


    /**
     * Menyimpan pekerjaan baru.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'job_level' => [
                'required',
                Rule::in([
                    'Entry-level',
                    'Junior',
                    'Mid-level',
                    'Senior',
                    'Manager',
                ]),
            ],
            'employment_type' => [
                'required',
                Rule::in([
                    'Full-time',
                    'Part-time',
                    'Contract',
                    'Internship',
                ]),
            ],
            'work_location_type' => [
                'required',
                Rule::in(['On-site', 'Remote', 'Hybrid']),
            ],
            'location' => 'nullable|string|max:255',
            'description' => 'required|string',
            'responsibilities' => 'required|string',
            'requirements' => 'required|string',
            'salary_min' => 'nullable|numeric|min:0',
            'salary_max' => 'nullable|numeric|min:0|gte:salary_min',
            'show_salary' => 'sometimes|boolean',
            'deadline_at' => 'nullable|date_format:Y-m-d',
            'status' => [
                'required',
                Rule::in(['Draft', 'Active', 'Closed']),
            ],
        ]);

        $baseSlug = Str::slug($validated['title']) ?: 'lowongan';
        $slug = $baseSlug;
        $counter = 1;

        while (Pekerjaan::where('slug', $slug)->exists()) {
            $slug = $baseSlug . '-' . $counter++;
        }

        $validated['slug'] = $slug;
        $validated['show_salary'] = $request->boolean('show_salary');

        Pekerjaan::create($validated);

        return redirect()
            ->route('pekerjaanindex')
            ->with('success', 'Lowongan pekerjaan berhasil ditambahkan.');
    }

    /**
     * Menampilkan form edit pekerjaan.
     */
    public function edit(string $id)
    {
        $user = Auth::user();

        $pekerjaan = Pekerjaan::findOrFail($id);

        return view(
            'baru.backenddashboardupdate.pekerjaan.edit',
            compact('user', 'pekerjaan')
        );
    }

    /**
     * Memperbarui pekerjaan.
     */
    public function update(Request $request, string $id)
    {
        $pekerjaan = Pekerjaan::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'job_level' => [
                'required',
                Rule::in([
                    'Entry-level',
                    'Junior',
                    'Mid-level',
                    'Senior',
                    'Manager',
                ]),
            ],
            'employment_type' => [
                'required',
                Rule::in([
                    'Full-time',
                    'Part-time',
                    'Contract',
                    'Internship',
                ]),
            ],
            'work_location_type' => [
                'required',
                Rule::in(['On-site', 'Remote', 'Hybrid']),
            ],
            'location' => 'nullable|string|max:255',
            'description' => 'required|string',
            'responsibilities' => 'required|string',
            'requirements' => 'required|string',
            'salary_min' => 'nullable|numeric|min:0',
            'salary_max' => 'nullable|numeric|min:0|gte:salary_min',
            'show_salary' => 'sometimes|boolean',
            'deadline_at' => 'nullable|date_format:Y-m-d',
            'status' => [
                'required',
                Rule::in(['Draft', 'Active', 'Closed']),
            ],
        ]);

        if ($validated['title'] !== $pekerjaan->title) {
            $baseSlug = Str::slug($validated['title']) ?: 'lowongan';
            $slug = $baseSlug;
            $counter = 1;

            while (
                Pekerjaan::where('slug', $slug)
                ->where('id', '!=', $pekerjaan->id)
                ->exists()
            ) {
                $slug = $baseSlug . '-' . $counter++;
            }

            $validated['slug'] = $slug;
        }

        $validated['show_salary'] = $request->boolean('show_salary');

        $pekerjaan->update($validated);

        return redirect()
            ->route('pekerjaanindex')
            ->with('success', 'Lowongan pekerjaan berhasil diperbarui.');
    }

    /**
     * Menghapus pekerjaan.
     */
    public function destroy(string $id)
    {
        $pekerjaan = Pekerjaan::findOrFail($id);
        $pekerjaan->delete();

        return redirect()
            ->route('pekerjaanindex')
            ->with('success', 'Lowongan pekerjaan berhasil dihapus.');
    }
}
