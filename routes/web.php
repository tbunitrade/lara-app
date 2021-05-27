<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
    //return 'hello world';
    //return ['foo' => 'bar'];
    //return ['foo' => ['bar','bar2']];
});

Route::get('/posts', function () {
    return view('posts');
});

Route::get('posts/{post}', function ($slug) {
    //comments// Find a post by its slug and pass it to a view called "post"

    //return $slug;
//Route::get('/post', function () {
    //$post = file_get_contents(__DIR__ . '/../resources/posts/my-first-post.html' );
    //$post = file_get_contents(__DIR__ . "/../resources/posts/{$slug}.html" );
    //$path = __DIR__ . "/../resources/posts/{$slug}.html" ;

    //ddd($path);
    if (!file_exists($path = __DIR__ . "/../resources/posts/{$slug}.html"))
    {
        //dd('file dos not exist');
        //ddd('file dos not exist');
        //abort(404);
        return redirect('/posts');

    }

     $post = cache()->remember("posts.{$slug}", now()->addMiinutes(40), function() use ($path){
         var_dump('file_get_contents');
         return file_get_contents($path);
     } );
    //$post = cache()->remember("posts.{$slug}", 1200, fn() => file_get_contents($path));
    //$post = file_get_contents($path);

    return view('post', [
        //'post' => '<h1>Hello world</h1>'
        //'post' => file_get_contents(__DIR__ . '/../resources/posts/my-first-post.html' )
        'post' => $post
    ]);
})->where('post','[A-z_\-]+');
//})->whereAlpha('post');

