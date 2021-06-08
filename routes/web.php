<?php

use App\Models\Post;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use function PHPSTORM_META\map;

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

