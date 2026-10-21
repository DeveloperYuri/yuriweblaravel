<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pekerjaan extends Model
{
    protected $table = 'pekerjaan';

    protected $fillable = [
        'title',
        'slug',
        'department',
        'job_level',
        'employment_type',
        'work_location_type',
        'location',
        'description',
        'responsibilities',
        'requirements',
        'salary_min',
        'salary_max',
        'show_salary',
        'deadline_at',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'salary_min' => 'decimal:2',
            'salary_max' => 'decimal:2',
            'show_salary' => 'boolean',
            'deadline_at' => 'date:Y-m-d',
        ];
    }
}