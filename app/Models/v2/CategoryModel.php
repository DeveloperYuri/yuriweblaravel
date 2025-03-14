<?php

namespace App\Models\v2;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;

class CategoryModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'status'
    ];

    static public function getRecord($request)
    {
        $return = self::select('category_models.*')
            // ->where('status', '=', '1')
            ->orderBy('id', 'desc');

            if (!empty(Request::get('title'))) {
                $return = $return->where('category_models.title', 'like', '%' . Request::get('title') . '%');
            }

        $return = $return->paginate(10);
        return $return;
    }

    static public function getSingle($id){
        return CategoryModel::find($id);
    }

    static public function getCategory(){
        return self::select('category_models.*')
        ->where('status', '=', 1)
        ->get();
    }

}
