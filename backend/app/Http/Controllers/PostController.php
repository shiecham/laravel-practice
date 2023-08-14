<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //


    public function save()
    {
        $post = new Post;

        $post->title = "This is laravel eloquent";
        $post->content = "This is the asdfghjkl.";
        $post->save();

        return "Post saved successfully";

        // INSERT INTO users (title,content)VALUES("This is the asdfghjkl.")

    }

    public function create()
    {
        $post = new Post;

        $array = [
            "title" => "This is using create method",
            "content" => "in oder for you to save a content using create method, you need to enable something inside the model"
        ];

        $post->create($array);

        return "";
    }

    public function display()
    {
        // resarch / use AI or google
        // display all post
        // you use echo

        // foreach (Post::all() as $post) {
        //     echo $post->title . $post->content;
        //     // echo $post->content;
        //     echo "<br>";
        // }

        $posts = Post::all();
        echo "All posts";
        foreach ($posts as $post) :

            echo "<ul>";
            echo "<li> TITLE: $post->title </li>";
            echo "</ul>";
            echo "<li> CONTENT: $post->content </li>";
            echo "</ul>";
            echo "</ul>";

        endforeach;
    }

    public function delate($id)

    {
        // delate one data from table
        // delate multiple in 1 line code
        Post::where('id', $id)->delete();

    }

    public function deleteMultiple($id1, $id2)

    {
        // delate one data from table
        // delate multiple in 1 line code
        // Post::whereIn('id', [$id1, $id2])->delete();
        Post::destroy($id1, $id2);
    }

    public function destroy($post_id)

    {
       $post_m = new Post;

       $post_m->destroy($post_id);
    //    Post::destroy($post_id); コレは上と同じだが、ショートカットver

    }

    public function index()
    {
        return "Index Method, Post Controller";
    }

    // public function viewPost($post_id){
    //     return "Post Controller : This is post $post_id";
    // }

    public function show($name)
    {

        $posts = [
            "How to make french toast",
            "Japanese cheesecake recipe",
            "How to Cook Steak",
            "The Best Places in Tokyo For Shokupan Bread",
            "Cambodian Style Fried Chicken Wings"

        ];

        return view('show')->with('name', $name)->with('posts', $posts);
    }

    // return "Hello " . strtoupper($name)."!";






    public function echoPost($post_id, $post_born)
    {
        return "Your name is " . strtoupper($post_id) . "and" . "Born in" . $post_born . ".";
    }

    public function viewAll()
    {
        $posts = [
            "Pyton vs Java",
            "The Cloud",
            "How To Stay Productive",
            "Coding during a pandemic",
        ];

        $footercomment = "This is the footer.";

        return view('view-all')->with('footercomment', $footercomment)->with('posts', $posts);
    }




    public function viewPost($username, $post_id)
    {
        return view('view-post')
            ->with('id', $post_id)
            ->with('uname', $username);
    }

    public function read($post_id)
    {
        $post_m = new Post;
        $post = $post_m->findOrFail($post_id);
        return view('posts.show')->with('post',$post);
    }

    public function readWhere($post_id)
    {
        $post_m = new Post;
        // $result = $post_m->where('id', $post_id)->get();
        $result = $post_m->latest()->get();

        return view('posts.show')->with('result' , $result);
    }
}
