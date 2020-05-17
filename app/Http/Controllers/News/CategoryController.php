<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $category = [
        [
            'id' => 1,
            'title' => 'Важные',
        ],
        [
            'id' => 2,
            'title' => 'Главные',
        ],
        [
            'id' => 3,
            'title' => 'Новые',
        ],
        [
            'id' => 4,
            'title' => 'Опроверженные',
        ],
        [
            'id' => 5,
            'title' => 'Прошлые',
        ],
    ];

    public function categoryNews(){
        return view('News.categoryNews', ['category' => $this -> category]);
    }

    public function categoryOne($id) {

        $category = $this->getCategoryById($id);

       return view('News.categoryNewsOne', ['category' => $category]);
    }

    private function getCategoryById($id){
        foreach($this->category as $category){
            if($category['id'] == $id){
                return $category;
            }
        }
        return [];
    }
}
