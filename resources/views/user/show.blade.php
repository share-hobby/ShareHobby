<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title }} の詳細</title>
    <!-- 外部CSSファイルのリンク -->
    <link rel="stylesheet" href="{{ asset('css/post_detail.css') }}">
    <style>
        /* ボタンの共通スタイル */
        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px 5px;
            text-decoration: none;
            color: #fff;
            background-color: #007BFF;
            border: none;
            border-radius: 5px;
            text-align: center;
            font-size: 16px;
            transition: background-color 0.3s, transform 0.2s;
        }

        .btn:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        .btn-danger {
            background-color: #ff1000b8;
        }

        .btn-danger:hover {
            background-color: #b30000;
        }

        .btn-edit {
            background-color: #28A745;
        }

        .btn-edit:hover {
            background-color: #1e7e34;
        }

        .btn-back {
            background-color: #6c757d;
        }

        .btn-back:hover {
            background-color: #5a6268;
        }

        /* コンテナのスタイリング */
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .btn-container {
            text-align: center;
        }

        .post-image {
            text-align: center;
        }
    </style>

</head>

<body>
    <div class="container">
        <h1>{{ $post->title }} の詳細</h1>
        
        <!-- 投稿の本文 -->
        <div class="post-body">
            <p>本文: {{ $post->body }}</p>
        </div>
        
        <!-- 投稿に画像がある場合 -->
        @if($post->image)
            <div class="post-image">
                <img src="{{ asset('storage/' . $post->image) }}" alt="投稿画像">
            </div>
        @endif

        <!-- 求める生徒像 -->
        <div class="post-student_image">
            <p>求める生徒像:{{ $post->student_image }}</p>
        </div>
        
        <!-- 生徒のレベル感 -->
        <div class="post-student_level">
            <p>生徒のレベル感:{{ $post->student_level }}</p>
        </div>

        <!-- 作成日時と投稿者 -->
        <div class="post-meta">
            <p><strong>作成日時:</strong> {{ $post->created_at->format('Y-m-d H:i') }}</p>
        </div>

        <form action="{{ route('post.destroy', $post->id) }}" method="POST" onsubmit="return confirm('本当に削除しますか？')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">この投稿を削除する</button>
        </form>
        <br>
        <!-- ボタンリンク -->
        <div class="btn-container">
            <a href="{{ route('post.edit', $post->id) }}" class="btn btn-edit">投稿を編集する</a>

            <a href="{{ route('user.dashboard') }}" class="btn btn-back">投稿一覧に戻る</a>
        </div>
    </div>
</body>
</html>
