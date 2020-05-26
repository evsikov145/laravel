<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{

    public function categoryNews(){

        $category = DB::table('categories')->get();

        return view('News.categoryNews', ['category' => $category]);
    }

    public function categoryOne($id) {

        $category = DB::table('categories')->find($id);

       return view('News.categoryNewsOne', ['category' => $category]);
    }

}
