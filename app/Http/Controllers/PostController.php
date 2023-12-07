<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {  
        $title = '';
        if(request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        return view('forums', [
            "title" => "All Posts" . $title,
            "posts" => Post::latest()->filter(request(['search', 'author']))->paginate(7)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        return view('forum', [
            "title" => "Single Post",
            "post" => $post
        ]);
    }

    public function store(Request $request){

        $validatedData = $request->validate([
            "title" => ["required", "max:200"],
            "body" => ["required"],
            "slug" => ["required", "unique:posts"],
        ]);

        $validatedData["excerpt"] = Str::limit(strip_tags($request->body), 40, "...");
        $validatedData["user_id"] = auth()->user()->id;

        Post::create($validatedData);

        return redirect("/forums")->with("success", "Post has been created");
    }

    public function destroy(Post $post){

        Post::destroy($post->id);

        return redirect("/forums")->with("success", "Post has been deleted");
    }

    public function update(Request $request, Post $post){
        
        $validatedData = $request->validate([
            "title" => ["required", "max:200"],
            "body" => ["required"]
        ]);

        $validatedData["excerpt"] = Str::limit(strip_tags($request->body), 40, "...");
        $validatedData["user_id"] = auth()->user()->id;

        Post::where("id", $post->id)->update($validatedData);

        return redirect("/forums")->with("success", "Post has been updated");
    }
}