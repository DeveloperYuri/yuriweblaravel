<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;


class ArtikelBaru extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'title',
        'description',
        'viewer'
    ];

    static public function getRecord($request)
    {
        $return = self::select('artikel_barus.*')
            //->where('status', '=', 'active')
            ->orderBy('id', 'desc');

            if (!empty(Request::get('title'))) {
                $return = $return->where('artikel_barus.title', 'like', '%' . Request::get('title') . '%');
            }

        $return = $return->paginate(10);
        return $return;
    }

}
