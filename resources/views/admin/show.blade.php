<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>投稿詳細</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
        <div class="container">
         <div class="container">
        <h1>{{ $post->title }}</h1>
        
        <!-- 投稿の本文 -->
        <div class="post-body">
            <p>{{ $post->body }}</p>
        </div>
        
        <!-- 投稿に画像がある場合 -->
        @if($post->image)
            <div class="post-image">
                <img src="{{ asset('storage/' . $post->image) }}" alt="投稿画像">
            </div>
        @endif

        <!-- 求める生徒像 -->
        <div class="post-student_image">
            <p>{{ $post->student_image }}</p>
        </div>
        
        <!-- 生徒のレベル感 -->
        <div class="post-student_level">
            <p>{{ $post->student_level }}</p>
        </div>

        <!-- 作成日時 -->
        <div class="post-meta">
            <p><strong>作成日時:</strong> {{ $post->created_at->format('Y-m-d H:i') }}</p>
        </div>
        <div>
            <a href="{{ route('admin.dashboard') }}">投稿一覧に戻る</a>
        </div>

</body>
</html>