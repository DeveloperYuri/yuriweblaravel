<?php

namespace App\Http\Controllers;

use App\Models\Pekerjaan;
use Illuminate\Http\Request;

class CareerApiProxyController extends Controller
{
    public function index(Request $request)
    {
        $query = Pekerjaan::query()
            ->where('status', 'Active');

        // Pencarian lowongan
        if ($request->filled('search')) {
            $search = $request->input('search');

            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                    ->orWhere('department', 'like', "%{$search}%")
                    ->orWhere('description', 'like', "%{$search}%");
            });
        }

        // Filter departemen
        if ($request->filled('department')) {
            $query->where(
                'department',
                $request->input('department')
            );
        }

        // Filter tipe pekerjaan
        if ($request->filled('employment_type')) {
            $query->where(
                'employment_type',
                $request->input('employment_type')
            );
        }

        // Filter sistem kerja
        if ($request->filled('work_location_type')) {
            $query->where(
                'work_location_type',
                $request->input('work_location_type')
            );
        }

        // Urutan lowongan
        if ($request->input('sort') === 'title') {
            $query->orderBy('title', 'asc');
        } else {
            $query->orderBy('id', 'desc');
        }

        $jobs = $query->paginate(5)->withQueryString();

        // Format respons menyesuaikan JavaScript frontend
        return response()->json([
            'data' => $jobs,
        ]);
    }

    public function show(string $id)
    {
        $job = Pekerjaan::query()
            ->where('status', 'Active')
            ->where('id', $id)
            ->first();

        if (!$job) {
            return response()->json([
                'message' => 'Lowongan tidak ditemukan.',
            ], 404);
        }

        return response()->json([
            'data' => $job,
        ]);
    }
}
