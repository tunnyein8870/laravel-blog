<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index(){
        $data = Article::latest()->paginate(5);
        return view('articles/index', [
            'article_contents' => $data
        ]);
    }
    public function detail($aid){
        $content = Article::find($aid);
        return view('articles/detail', [
            "detail_content" => $content
        ]);
    }
    public function add(){
        $data = [
            ["id"=>1, "name"=>"IT"],
            ["id"=>2, "name"=>"Business"],
        ];
        return view('articles/add', [
            'add_contents' => $data
        ]);
    }
    public function create(){
        $validate = validator(request()->all(), [
            "title" => "required",
            "body" => "required",
            "cat_id" => "required",
        ]);

        if ($validate->fails()){
            return back()->withErrors($validate);
        }
        $item = new Article();
        $item->title = request()->title;
        $item->body = request()->body;
        $item->cat_id = request()->cat_id;
        $item->save();
        return redirect(url("/"));
    }
    public function delete($did){
        Article::find($did)->delete();
        return redirect(url("/"));
    }
}
