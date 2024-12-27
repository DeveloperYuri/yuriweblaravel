<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

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
}
