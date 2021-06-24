<?php

use App\Http\Controllers\CourceController;
use App\Http\Controllers\lecturerController;
use App\Http\Controllers\StudViewController;
use App\Models\Post;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use function PHPSTORM_META\map;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\JointableController;
use App\Http\Controllers\classController;
use App\Http\Controllers\StudInsertController;
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
/*
Route::get('/', function () {
    //\Log::info(collect(File::files(resource_path("posts"))));
    return view('posts',[
        'posts' => Post::all()
    ]);
});



Route::get('posts/{post}', function ($id) {

    return view ('post',[
        'post'=>Post::findOrFail($id)
    ]);
});

//Route::get('\', function () {
    //return view('main');
//});

Route::get('/test',function(){
$posts=DB::select("select * from posts");
foreach($posts as $post){
echo $posts;
}
dd($posts);
});


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


Route::get('/test',function(){
$class=DB::table('classes')
    ->select('name');
dd($class->content);

});
*/

Route::get('/test',[StudViewController::class, 'index'])->name('student');
Route::get('/test1',[lecturerController::class, 'index'])->name('lecturer');
Route::get('/test2',[CourceController::class, 'index'])->name('course');
//Route::get('/click', 'click/HomeController@index');
Route::get('/click',function(){
    return view('click');
});
Route::get('/join_table', [JointableController::class, 'index'])->name('join_table');
Route::get('/test3',[classController::class, 'index'])->name('classes');

Route::get('/test/{id}',[StudViewController::class, 'show']);
Route::post('/test/{id}',[StudViewController::class, 'edit']);


Route::get('insert',[StudInsertController::class, 'store'])->name('insert');
Route::post('create',[StudInsertController::class, 'insert']);
