<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;

use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function index(){
        //$articles = DB::select('select * from articles');
        $articles=Article::all();
        //return $articles;
        return view('article')->with('articles',$articles);
    }
    public function add(){
        return view('article-content');
    }

    public function store(Request $request){
        //$request->dump();
        $this->validate($request,[
            'title'=>'required|max:50',
            'description'=>'required|max:250',
            'content'=>'required',
            'author'=>'required'
        ]);
        $data = $request -> all();
        $article = new Article;
        $article -> fill($data);
        $article -> save();
        return redirect('/article');
    }

}
