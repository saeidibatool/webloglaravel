<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Article;

class CommentController extends Controller
{
    public function add(Article $article){
      // return $article;
      $this->validate(request(),[
        'comment'=>'required',
      ]);
      Comment::create([
        'user_id'=>auth()->user()->id,
        'article_id'=>$article->id,
        'comment'=>request('comment'),
      ]);
      return back();
    }
}
