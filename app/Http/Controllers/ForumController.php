<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function index(){
        return view('forum.index', [
            'posts' => Post::latest()->paginate(25)->withQueryString()
        ]);
    }

    public function create(){
        return view('forum.create');
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'title' => 'required',
            'body' => 'required|min:20'
        ]);

		Post::create([
			'title' => $validatedData['title'],
			'body' => $validatedData['body']
		]);
		return redirect('/forum')->with('post_create_success', 'Successfully added a new post');
    }

    public function show(Post $post){
        return view('forum.post', [
            'post' => $post
        ]);
    }
}
