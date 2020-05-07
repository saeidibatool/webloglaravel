<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Article;
use App\Category;
use Hekmatinasser\Verta\Verta;

class ArticleController extends Controller
{
    // public function __construct(){
    //   $this->middleware('auth');
    // }

    public function add(){
      $categories = Category::all();
      return view('articles.add', compact('categories'));
    }

    public function store(Request $request){
      // return $request->all();die;
      $this->validate(request(),[
        'title'=>'required|min:5|max:50',
        'demo'=>'required',
        'text'=>'required',
      ]);
      $article = Article::create([
        'title'=>$request['title'],
        'demo'=>$request['demo'],
        'text'=>$request['text']
      ]);
      $article->category()->attach(request('category'));
    }

    public function index(){
      // $articles = Article::get();
      $categories = Category::all();
      $articles = Article::latest()->paginate(12);
      return view('welcome', compact('articles', 'categories'));
    }

    public function detail(Article $article){
      return view('articles.detail', compact('article'));
    }

    public function upload(){
      return view('articles.uploader');
    }

    public function uploader(Request $request){
      $file = $request->file('pic');
      $filename = time()."-".$file->getClientOriginalName();
      $path = public_path('/images');
      $file->move($path,$filename);
      return back();
    }
}
