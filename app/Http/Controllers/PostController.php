<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function store(PostRequest $request)
    {
        $post = new Post();
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->zoomurl = $request->input('zoomurl');
        $post->user_id = Auth::id();//$request->userId();  // ログインユーザーIDを設定
        $post->student_image = $request->input('student_image');
        $post->student_level = $request->input('student_level');

        if ($request->hasFile('image')) {
            $post->image = $request->file('image')->store('images', 'public');
        }
    
        $post->save();
    
        // 投稿一覧ページにリダイレクト
        return redirect()->route('user.dashboard');
    }

    public function create()
    {
        return view('user.create');
    }
}
