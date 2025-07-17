<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;


class EventRegistration extends Model
{
    protected $table = 'registrationevent';

    protected $fillable = [
        'nama',
        'nomor_telepon',
        'email',
        'domisili',
        'tanggal_lahir',
        'umur',
        'kategori_lomba',
        'info_event',
        'image_upload',
        'link'
    ];

    static public function getRecord($request)
    {
        $return = self::select('registrationevent.*')
            //->where('status', '=', 'active')
            ->orderBy('id', 'desc');

            if (!empty(Request::get('nama'))) {
                $return = $return->where('registrationevent.nama', 'like', '%' . Request::get('nama') . '%');
            }

        $return = $return->paginate(10);
        return $return;
    }
}
