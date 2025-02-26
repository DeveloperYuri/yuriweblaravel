<?php

namespace App\Http\Controllers\v2;

use App\Http\Controllers\Controller;
use App\Models\ArtikelBaru;
use App\Models\v2\ArticleModel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index(Request $request){
        $data['getRecord'] = ArticleModel::getRecord($request);
        return view('backenddashboard.article.index', $data);
    }
}
