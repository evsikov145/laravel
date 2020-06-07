<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class News extends Model
{
    protected $table = 'news';
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $fillable = ['id','title', 'description', 'slug'];
}
