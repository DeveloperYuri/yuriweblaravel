<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Illuminate\Support\Facades\Request;


class Artikel extends Model
{
    use HasFactory, Searchable;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'image',
        'title',
        'description'
    ];

    public function toSearchableArray()
    {
        return [
            'title' => $this->title,
            'description' => $this->description
        ];
    }

    static public function getRecord($request)
    {
        $return = self::select('artikels.*')
            //->where('status', '=', 'active')
            ->orderBy('id', 'desc');

            if (!empty(Request::get('title'))) {
                $return = $return->where('artikels.title', 'like', '%' . Request::get('title') . '%');
            }

        $return = $return->paginate(10);
        return $return;
    }
}
