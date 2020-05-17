<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

        return view('News.news', ['news' => $this -> news]);

    }

    public function newsOne($id) {

        $news = $this->getNewsById($id);

        return view('News.newsOne', ['news' => $news]);
    }

    private function getNewsById($id){
        foreach($this->news as $news){
            if($news['id'] == $id){
                return $news;
            }
        }
        return [];
    }



}
