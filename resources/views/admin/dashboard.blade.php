
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>生徒ホーム</title>
    <link rel="stylesheet" href="{{ asset('css/student_home.css') }}">
</head>
<body>

    <div class="container">
        <p>あなたは生徒です</p>
        <form action="{{ route('admin.logout') }}" method="POST" class="logout-form">
                @csrf
                <button type="submit" class="btn-logout">ログアウト</button>
        </form>

        <a href="{{ route('admin.chats') }}" class="btn-chat">チャット画面へ</a>

        <h2>投稿一覧</h2>
        @if($posts->isEmpty())
            <p>投稿はまだありません。</p>
        @else
            <ul>
                @foreach($posts as $post)
                    <li class="post-item">
                        <h3>{{ $post->title }}</h3>
                        @if($post->image)
                            <img src="{{ asset('storage/' . $post->image) }}" alt="投稿画像">
                        @endif
                        <p>作成日時: {{ $post->created_at->format('Y-m-d H:i') }}</p>
                        <a href="{{ route('posts.shows', $post->id) }}" class="btn-detail">詳細を見る</a>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
</body>
</html>





