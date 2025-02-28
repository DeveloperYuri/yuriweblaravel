<?php

namespace App\Models\v2;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Auth;

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
        // $return = self::select('article_models.*')
        //     //->where('status', '=', 'active')
        //     ->orderBy('id', 'desc');

        // if (!empty(Request::get('title'))) {
        //     $return = $return->where('article_models.title', 'like', '%' . Request::get('title') . '%');
        // }

        $return = self::select('article_models.*', 'users.name as user_name', 'category_models.name as category_name', 'category_models.slug as category_slug')
            ->join('users', 'users.id', '=', 'article_models.user_id')
            ->join('category_models', 'category_models.id', '=', 'article_models.category_id')
            ->orderBy('id', 'desc');

        // if (!empty(Auth::check()) && Auth::user()->is_admin != 1) {
        //     $return = $return->where('article_models.user_id', '=', Auth::user()->id);
        // }

        // if (!empty(Request::get('id'))) {
        //     $return = $return->where('article_models.id', '=', Request::get('id'));
        // }

        // if (!empty(Request::get('username'))) {
        //     $return = $return->where('article_models.name', 'like', '%' . Request::get('username') . '%');
        // }

        // if (!empty(Request::get('title'))) {
        //     $return = $return->where('article_models.title', 'like', '%' . Request::get('title') . '%');
        // }

        // if (!empty(Request::get('category'))) {
        //     $return = $return->where('category_models.name', 'like', '%' . Request::get('category') . '%');
        // }

        $return = $return->paginate(10);
        return $return;
    }
}
