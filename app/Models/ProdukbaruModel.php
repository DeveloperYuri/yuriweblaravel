<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdukbaruModel extends Model
{
    use HasFactory;

    protected $table = 'produk_baru';

    protected $fillable = [
        'image',
        'description'
    ];
}
