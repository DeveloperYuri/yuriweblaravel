<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;

class EventModel extends Model
{
    use HasFactory;

    protected $table = 'event';

    protected $fillable = [
        'image',
        'description'
    ];

    static public function getRecord($request)
    {
        $return = self::select('event.*')
            //->where('status', '=', 'active')
            ->orderBy('id', 'desc');

            if (!empty(Request::get('description'))) {
                $return = $return->where('event.description', 'like', '%' . Request::get('description') . '%');
            }

        $return = $return->paginate(10);
        return $return;
    }
}
