<?php

namespace App\Http\Controllers\v2;

use App\Http\Controllers\Controller;
use App\Models\v2\CategoryModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function indexcategory(Request $request){
        $data['getRecord'] = CategoryModel::getRecord($request);

        return view('backenddashboard.category.indexcategory', $data);
    }

    public function addcategory(){
        return view('backenddashboard.category.addcategory');
    }

    public function postcategory(Request $request)
    {
        $save = new CategoryModel;
        $save->name = trim($request->name);
        $save->slug = trim(Str::slug($request->name));
        $save->status = trim($request->status);
        $save->title = trim($request->title);
        $save->save();

        return redirect('/category')->with('success', "Category Succesfully Created");
    }

    public function editcategory($id){
        $data['getRecord'] = CategoryModel::getSingle($id);
        return view('backenddashboard.category.editcategory', $data);
    }

    public function updatecategory($id, Request $request){
        $save = CategoryModel::getSingle($id);
        $save->name = trim($request->name);
        $save->slug = trim(Str::slug($request->name));
        $save->status = trim($request->status);
        $save->title = trim($request->title);
        $save->save();

        return redirect('/category')->with('success', "Category Succesfully Updated");
    }

    public function deletecategory($id){
        $data = CategoryModel::getSingle($id);
        $data->delete();

        return redirect('/category')->with('error', "Category Succesfully Delete");

    }

}
