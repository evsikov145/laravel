<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{

    public function categoryNews(){
        return view('News.categoryNews', ['category' => Category::all()]);
    }

    public function categoryOne($id) {
        return view('News.categoryNewsOne', ['category' => Category::where('id', $id)->first()]);
    }

}
