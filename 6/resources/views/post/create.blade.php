{{-- layouts/admin.blade.phpを読み込む --}}
{{-- @extends('layouts.admin') --}}
@extends('layouts.app')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'Home')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
 
    <form
        class="tweet-input"
        action="{{ action('PostController@create') }}" method="post" enctype="multipart/form-data"
    >

        @if (count($errors) > 0)
            <ul>
                @foreach($errors->all() as $e)
                    <li>{{ $e }}</li>
                @endforeach
            </ul>
        @endif
            <h3>ホーム</h3>
            <!-- <label class="" for="body">つぶやき</label> -->
            <p>
                <input type="text" class="" name="body" placeholder="いまどうしてる？" value="{{ old('body') }}">
            </p>
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            {{ csrf_field() }}
            <input type="submit" value="つぶやく">
    </form>

    <div class="">
        @foreach($posts as $post)
            <div class="tweet">
                @foreach($users as $user)
                    @if($user->id == $post->user_id)
                        <div class="tweet-info">
                            <div class="username">{{ $user->name }}</div>
                            <div class="timestamp">{{ $post->created_at }}</div>
                        </div>
                        <div class="">{{ $post->body }}</div>
                        @if(Auth::id() == $post->user_id)
                            <div class="delete-link">
                                <a href="{{ action('PostController@delete', ['id' => $post->id]) }}">削除</a>
                            </div>
                        @endif
                    @endif
                @endforeach
            </div>
        @endforeach
    </div>

@endsection