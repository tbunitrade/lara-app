<?php


namespace App\Models;


use Illuminate\Database\Eloquent\ModelNotFoundException;

class Post
{
    public static function find($slug)
    {
        //base_path();
        if (!file_exists($path = resource_path("/posts/{$slug}.html")))  {
        //if (!file_exists($path = __DIR__ . "/../resources/posts/{$slug}.html"))  {
            //return redirect('/posts');
            throw new ModelNotFoundException();
        }

        return  cache()->remember("posts.{$slug}", 1200, fn() => file_get_contents($path));
        //$post = cache()->remember("posts.{$slug}", 1200, fn() => file_get_contents($path));

        //return view('post', [ 'post' => $post ]);
    }
}
