<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;


class MediaModel extends Model
{
    use HasFactory;

    protected $table = 'media';

    protected $fillable = [
        'image',
        'title',
        'link',
        'description'
    ];

    static public function getRecord($request)
    {
        $return = self::select('media.*')
            //->where('status', '=', 'active')
            ->orderBy('id', 'desc');

            if (!empty(Request::get('title'))) {
                $return = $return->where('media.title', 'like', '%' . Request::get('title') . '%');
            }

        $return = $return->paginate(10);
        return $return;
    }
}
