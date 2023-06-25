<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getPosts(){

        $posts = Post::with('category')->get();

        foreach ($posts as $post) {
            echo "Post: " . $post->name . "<br>";
            echo "Category: " . $post->category->name . "<br>";
            echo "Post: " . $post->description . "<br>";
            echo "<br><hr><br>";
        }
    }
}
