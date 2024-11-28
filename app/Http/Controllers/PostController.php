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

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('user.dashboard')->with('success', '投稿が削除されました');
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('user.edit', compact('post'));
    }

    public function update(Request $request, $id)
{
    // 投稿を取得
    $post = Post::findOrFail($id);

    // 投稿を更新
    $post->title = $request->input('title');
    $post->body = $request->input('body');
    $post->zoomurl = $request->input('zoomurl');
    $post->student_image = $request->input('student_image');
    $post->student_level = $request->input('student_level');
    $post->user_id = Auth::id();  // ログインユーザーIDを設定

    // 更新された投稿を保存
    $post->save();

    // 投稿更新後にリダイレクト
    return redirect()->route('user.dashboard')->with('success', '投稿が更新されました');
}
}
