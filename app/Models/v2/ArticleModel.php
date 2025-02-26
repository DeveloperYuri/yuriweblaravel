<?php

namespace App\Models\v2;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;

class ArticleModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'title',
        'description'
    ];

    static public function getRecord($request)
    {
        $return = self::select('article_models.*')
            //->where('status', '=', 'active')
            ->orderBy('id', 'desc');

            if (!empty(Request::get('title'))) {
                $return = $return->where('article_models.title', 'like', '%' . Request::get('title') . '%');
            }

        $return = $return->paginate(10);
        return $return;
    }
}
