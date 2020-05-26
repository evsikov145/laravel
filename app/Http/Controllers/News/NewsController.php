<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    private $news = [
        [
            'id' => 1,
            'title' => 'Новость',
            'info' => 'Подробное описание новости 1'
        ],
        [
            'id' => 2,
            'title' => 'Новость',
            'info' => 'Подробное описание новости 2'
        ],
    ];



    public function news() {

        $news = DB::table('news')->get();
        return view('News.news', ['news' => $news]);

    }

    public function newsOne($id) {

        $news = DB::table('news')->find($id);

        if (empty($news)){
            return redirect()->route('News.news');
        }
        return view('News.newsOne', ['news' => $news]);
    }




}
