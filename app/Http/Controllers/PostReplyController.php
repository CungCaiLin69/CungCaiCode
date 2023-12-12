<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostReply;
use App\Http\Requests\StorePostReplyRequest;
use App\Http\Requests\UpdatePostReplyRequest;
use Illuminate\Support\Str;

class PostReplyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "body" => ["required"],
            "post_id" => ["required"]
        ]);

        $validatedData["user_id"] = auth()->user()->id;

        PostReply::create($validatedData);

        return redirect("/forums")->with("success", "Post has been uploaded");

        // $request->request->add(["user_id" => auth()->user()->id]);
        // PostReply::create($request->all());
        // return redirect("/forums")->with("success", "Reply has been added");
    }

    /**
     * Display the specified resource.
     */
    public function show(PostReply $postReply)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PostReply $postReply)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostReplyRequest $request, PostReply $postReply)
    {
        $validatedData = $request->validate([
            "body" => ["required"]
        ]);

        $validatedData["user_id"] = auth()->user()->id;

        PostReply::where("id", $postReply->id)->update($validatedData);

        return redirect("/forums")->with("success", "Post has been updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PostReply $postReply)
    {
        PostReply::destroy($postReply->id);

        return redirect("/forums")->with('success', 'Reply has been deleted');
    }
}