<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LamaranPekerjaan extends Model
{
    protected $table = 'lamaran_pekerjaans';

    protected $fillable = [
        'pekerjaan_id',
        'nama',
        'email',
        'cv_path',
        'status',
        'catatan_hr',
        'nomor_handphone',
        'domisili'
    ];

    public function pekerjaan(): BelongsTo
    {
        return $this->belongsTo(
            Pekerjaan::class,
            'pekerjaan_id'
        );
    }
}
