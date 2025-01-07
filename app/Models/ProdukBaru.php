<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Illuminate\Support\Facades\Request;


class ProdukBaru extends Model
{
    use HasFactory, Searchable;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'image',
        'description'
    ];

    public function toSearchableArray()
    {
        return [
            'description' => $this->description
        ];
    }

    static public function getRecord($request)
    {
        $return = self::select('produk_barus.*')
            //->where('status', '=', 'active')
            ->orderBy('id', 'desc');

            if (!empty(Request::get('description'))) {
                $return = $return->where('produk_barus.description', 'like', '%' . Request::get('description') . '%');
            }

        $return = $return->paginate(10);
        return $return;
    }
}
