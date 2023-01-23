<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Contraooler;
use App\Post;
use App\User;

class PostController extends Controller
{
    public function add()
    {
        return view('post.create');
    }

    public function create(Request $request)
    {
        // Varidationを行う
        $this->validate($request, Post::$rules);

        $post = new Post;
        $form = $request->all();

        // フォームから送信されてきた_tokenを削除する
        unset($form['_token']);

        // データベースに保存する
        $post->fill($form);
        $post->save();


        // post/createにリダイレクトする
        return redirect('post/create');
    }

    public function index(Request $request)
    {
        $users = User::all();
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('post.create', ['posts' => $posts, 'users' => $users]);
    }

    public function delete(Request $request)
    {
        // 該当するPost Modelを取得
        $post = Post::find($request->id);
        // 削除する
        $post->delete();

        return redirect('post/create');
    }
}
