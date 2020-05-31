<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{

    public function news() {
        return view('News.news', ['news' => News::all()]);
    }

    public function newsOne($id) {
        return view('News.newsOne', ['news' => News::where('id', $id)->first()]);
    }
    public function addNews(){

    }
    public function editNews($id){

    }
    public function deleteNews($id){

    }
}
