<?php

namespace App\Http\Controllers;

use App\Models\Post;


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

    public function getTotalPostsByCategory($id){
        $totalPosts = Post::getTotalPostsCategorywise($id);
        return $totalPosts;
    }

    public function deletePost($id){

        $post = Post::findOrFail($id);
        $result = $post->delete();


        if($result){
            return $result;
        }
        
       
        
    }

    public function getDeletedPosts(){
        $deletedPosts = Post::getDeletedPosts();
        

        foreach ($deletedPosts as $post) {
            echo "Post: " . $post->name . "<br>";
            echo "Category: " . $post->category->name . "<br>";
            echo "Post: " . $post->description . "<br>";
            echo "<br><hr><br>";
        }
    }
}
