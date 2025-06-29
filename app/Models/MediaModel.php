<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
