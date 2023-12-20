<?php

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\PostDec;
use Illuminate\Routing\Controller;
use App\Http\Requests\StorePostRequest;
use Symfony\Component\HttpFoundation\RateLimiter\RequestRateLimiterInterface;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $data = Post::all();
        $data =Post::orderBy('id','desc')->get();
       
       
       
        return view('home', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
       
        // $post = new Post();
        // $post->title = $request->title;
        // $post->description = $request->description;
        // $post->save();
        Post::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);
        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     * you can use Route Model Binding (Post $post)
     */
    public function show(Post $post) 
    {
        // dd($post); 
        // $post = Post::findOrFail($id);
        dd($post->categories->name);
        return view('show', compact('post'));
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        // dd($post);
        // $edit = Post::findOrFail($id);
        return view('edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorePostRequest $request, Post $post)
    {
        // $update= Post::findOrFail($id);
        // $request->validate([
        //     'title' => 'bail|required|max:255',
        //     'description' => 'required|max:255',
        // ]);
        $post->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
            return redirect('/posts');

     }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Post::findOrFail($id)->delete();
        return redirect('/posts');
    }
}
