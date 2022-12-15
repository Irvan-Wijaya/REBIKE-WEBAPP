<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

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
            'content' => 'required|min:20'
        ]);

		Post::create([
			'title' => $validatedData['title'],
			'content' => $validatedData['content'],
            'user_id' => Auth::user()->id,
            'slug' => Str::slug($validatedData['title'])
		]);
		return redirect('/forum')->with('post_create_success', 'Successfully added a new post');
    }

    public function destroy(Post $post){
        Post::destroy($post->id);
        return redirect('/forum')->with('post_delete_success', 'Your post has been deleted');
    }

    public function show(Post $post){
        return view('forum.post', [
            'post' => $post
        ]);
    }
}
