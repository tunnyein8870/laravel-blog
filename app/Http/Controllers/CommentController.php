<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function add(){
        $validate = validator(request()->all(), [
            "content" => "required",
            "article_id"=> "required",
        ]);
        if($validate->fails()){
            return back()->withErrors($validate);
        }
        $data = new Comment();
        $data->content = request()->content;
        $data->article_id  = request()->article_id;
        $data->save();
        return back();
    }
    public function delete($id){
        Comment::find($id)->delete();
        return back();
    }
}
