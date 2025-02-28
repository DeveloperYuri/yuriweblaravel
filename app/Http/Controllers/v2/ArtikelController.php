<?php

namespace App\Http\Controllers\v2;

use App\Http\Controllers\Controller;
use App\Models\ArtikelBaru;
use App\Models\v2\ArticleModel;
use App\Models\v2\CategoryModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class ArtikelController extends Controller
{
    public function index(Request $request){
        $data['getCategory'] = CategoryModel::getCategory();
        $data['getRecord'] = ArticleModel::getRecord($request);
        
        return view('backenddashboard.article.index', $data);
    }

    public function addarticle(){
        $data['getCategory'] = CategoryModel::getCategory();
        return view('backenddashboard.article.addarticle', $data);
    }

    public function postarticle(Request $request)
    {
        $save = new ArticleModel;

        $save->user_id = Auth::user()->id;
        $save->title = trim($request->title);
        $save->category_id = trim($request->category_id);
        $save->slug = trim(Str::slug($request->title));
        $save->description = trim($request->description);
        $save->is_publish = trim($request->is_publish);
        $save->save();

        return redirect('/artikelupdate')->with('success', "Category Succesfully Created");
    }

    public function getarticlecategory(){
        $data['getCategory'] = CategoryModel::getCategory();
    }

    // public function editcategory($id){
    //     $data['getRecord'] = CategoryModel::getSingle($id);
    //     return view('backenddashboard.category.editcategory', $data);
    // }

    // public function updatecategory($id, Request $request){
    //     $save = CategoryModel::getSingle($id);
    //     $save->name = trim($request->name);
    //     $save->slug = trim(Str::slug($request->name));
    //     $save->status = trim($request->status);
    //     $save->title = trim($request->title);
    //     $save->save();

    //     return redirect('/category')->with('success', "Category Succesfully Updated");
    // }

    // public function deletecategory($id){
    //     $data = CategoryModel::getSingle($id);
    //     $data->delete();

    //     return redirect('/category')->with('error', "Category Succesfully Delete");

    // }
}
