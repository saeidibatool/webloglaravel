 <?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'ArticleController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/add', 'ArticleController@add');
Route::post('/store', 'ArticleController@store');
Route::get('/detail/{article}', 'ArticleController@detail');

Route::get('/test', function(){
  Session::flash('status', 'matne peygham');
  return view('test');
});

Route::get('/test', function(){
  // session()->flash('status', 'Matne peygham');
  // session()->flash('message', 'Matne peygham');
  // session()->flash('alertClass', 'danger');
  flash('Matne peygham', 'danger');
  return view('test');
});

// Route::middleware('auth')->get('/add', 'ArticleController@add');
// Route::get('/add', 'ArticleController@add')->middleware('auth');

Route::get('/upload', 'ArticleController@upload');
Route::post('/uploader', 'ArticleController@uploader');

//pages routes
Route::resource('pages', 'PageController');

//categorie routes
Route::resource('categories', 'CategoryController');

Route::get('/category/{category}','CategoryController@index');

//comments
Route::post('/comment/add/{article}','CommentController@add')->name('comment.add');
