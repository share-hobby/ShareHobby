<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>生徒ホーム</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard_user.css') }}">
</head>

<body>

    <div class="container-scroller">
        <div class="main-panel">

            <h4 class="page-name">生徒</h4>
            <h3 class="font-weight-bold">
                ようこそ
                @if($LoggedAdminInfo)
                <span>{{ $LoggedAdminInfo['name'] }}</span>
                <span class="badge badge-primary">{{ $LoggedAdminInfo['role'] }}</span>
                @endif

                さん
            </h3>

            <div class="container">
                <a href="{{ route('admin.chats') }}" class="btn-chat">チャット画面へ</a>
                <a href="{{ route('admin.profileview') }}" class="btn-chat">プロフィール画面へ</a>

                <form action="{{ route('admin.logout') }}" method="POST" class="logout-form">
                    @csrf
                    <button type="submit" class="btn-logout">ログアウト</button>
                </form>

            </div>

            <h2>投稿一覧</h2>
            @if($posts->isEmpty())
            <p>投稿はまだありません。</p>
            @else
            <ul>
                @foreach($posts as $post)
                <li class="post-item">
                    <div class="post-content">
                        <h3 class="title">{{ $post->title }}</h3>
                        <p>作成日時: {{ $post->created_at->format('Y-m-d H:i') }}</p>
                        <a href="{{ route('admin.shows', $post->id) }}" class="btn-detail">詳細を見る</a>
                    </div>
                    @if($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" alt="投稿画像">
                    @endif
                </li>
                @endforeach
            </ul>
            @endif
        </div>
    </div>
</body>

</html>