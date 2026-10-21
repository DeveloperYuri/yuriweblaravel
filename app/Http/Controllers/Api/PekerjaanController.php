<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pekerjaan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class PekerjaanController extends Controller
{
    /**
     * Display a listing of jobs.
     */

    public function index(Request $request)
    {
        $query = Pekerjaan::query();

        // Pencarian judul, departemen, dan lokasi
        if ($request->filled('search')) {
            $search = $request->search;

            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                    ->orWhere('department', 'like', "%{$search}%")
                    ->orWhere('location', 'like', "%{$search}%");
            });
        }

        // Hanya tampilkan lowongan aktif dan belum melewati deadline
        $query->where('status', 'Active')
            ->where(function ($q) {
                $q->whereNull('deadline_at')
                    ->orWhereDate('deadline_at', '>=', now()->toDateString());
            });

        // Filter departemen
        if ($request->filled('department')) {
            $query->where('department', $request->department);
        }

        // Filter tipe pekerjaan
        if ($request->filled('employment_type')) {
            $query->where('employment_type', $request->employment_type);
        }

        // Filter sistem kerja
        if ($request->filled('work_location_type')) {
            $query->where(
                'work_location_type',
                $request->work_location_type
            );
        }

        // Urutan data
        if ($request->input('sort') === 'title') {
            $query->orderBy('title', 'asc');
        } else {
            $query->orderBy('id', 'desc');
        }

        // Pagination: 10 lowongan per halaman
        $jobs = $query->paginate(10)->withQueryString();

        return response()->json([
            'success' => true,
            'message' => 'Daftar lowongan berhasil diambil',
            'data' => $jobs,
        ]);
    }


    /**
     * Store a newly created job.
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
                'sometimes',
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

        $pekerjaan = Pekerjaan::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Lowongan kerja berhasil ditambahkan',
            'data' => $pekerjaan,
        ], 201);
    }

    /**
     * Display the specified job.
     */
    public function show(string $id)
    {
        $pekerjaan = Pekerjaan::findOrFail($id);

        return response()->json([
            'success' => true,
            'message' => 'Detail lowongan berhasil diambil',
            'data' => $pekerjaan,
        ]);
    }

    /**
     * Update the specified job.
     */
    public function update(Request $request, string $id)
    {
        $pekerjaan = Pekerjaan::findOrFail($id);

        $validated = $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'department' => 'sometimes|required|string|max:255',
            'job_level' => [
                'sometimes',
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
                'sometimes',
                'required',
                Rule::in([
                    'Full-time',
                    'Part-time',
                    'Contract',
                    'Internship',
                ]),
            ],
            'work_location_type' => [
                'sometimes',
                'required',
                Rule::in(['On-site', 'Remote', 'Hybrid']),
            ],
            'location' => 'sometimes|nullable|string|max:255',
            'description' => 'sometimes|required|string',
            'responsibilities' => 'sometimes|required|string',
            'requirements' => 'sometimes|required|string',
            'salary_min' => 'sometimes|nullable|numeric|min:0',
            'salary_max' => 'sometimes|nullable|numeric|min:0|gte:salary_min',
            'show_salary' => 'sometimes|boolean',
            'deadline_at' => 'sometimes|nullable|date_format:Y-m-d',
            'status' => [
                'sometimes',
                'required',
                Rule::in(['Draft', 'Active', 'Closed']),
            ],
        ]);

        if (
            isset($validated['title']) &&
            $validated['title'] !== $pekerjaan->title
        ) {
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

        $pekerjaan->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'Lowongan kerja berhasil diperbarui',
            'data' => $pekerjaan->fresh(),
        ]);
    }

    /**
     * Remove the specified job.
     */
    public function destroy(string $id)
    {
        $pekerjaan = Pekerjaan::findOrFail($id);
        $pekerjaan->delete();

        return response()->json([
            'success' => true,
            'message' => 'Lowongan kerja berhasil dihapus',
        ]);
    }
}
