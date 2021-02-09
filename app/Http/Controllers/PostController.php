<?php

namespace App\Http\Controllers;

use App\Author;
use App\Category;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function getAuthorPosts($id){

        $author_exists = Author::where("id", $id)->exists();

        if(!$author_exists){
            return response()->json(["message" => "Author is not found with this id", "ok" => false], 200);
        }

        $posts = Post::where("author_id", $id)->get();

        if(count($posts) === 0){
            return response()->json(["message" => "This author has not published any post yet.", "ok" => false], 200);
        }

        return response()->json(["posts" => $posts, "ok" => true], 200);

    }

    public function getCategoryPosts($id){

        $category_exists = Category::where("id", $id)->exists();

        if(!$category_exists){
            return response()->json(["message" => "Category is not found with this id", "ok" => false], 200);
        }

        $posts = DB::table('post')
            ->select(["post.id", "post.title", "post.description", "post.content", "post.author_id"])
            ->join('post_categories', 'post.id', '=', 'post_categories.post_id')
            ->join('category', 'post_categories.category_id', '=', 'category.id')
            ->distinct("post.id")->get();

        if(count($posts) === 0){
            return response()->json(["message" => "This category has not any posts yet", "ok" => false], 200);
        }

        return response()->json(["posts" => $posts, "ok" => true], 200);

    }

    public function getAuthors(){
        $authors = Author::all();

        if(count($authors) === 0){
            return response()->json(["message" => "There are not any authors", "ok" => false], 200);
        }

        return response()->json(["authors" => $authors, "ok" => true], 200);

    }

    public function getPostById($id){

        $posts = Post::where("id", $id)->first();

        if(count($posts) === 0){
            return response()->json(["message" => "Post is not found with this id", "ok" => false], 200);
        }

        return response()->json(["post" => $posts, "ok" => true], 200);

    }
}
