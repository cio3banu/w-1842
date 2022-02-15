<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;

use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function index(){
        $articles = DB::select('select * from articles where id = ?', [1]);
        //$articles=Article::all();
        //return $articles;
        return view('article')->with('articles',$articles);
    }
}
