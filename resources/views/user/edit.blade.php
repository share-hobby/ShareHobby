<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>投稿編集</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>投稿を編集</h1>

        <!-- 投稿編集フォーム -->
        <form action="{{ route('post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT') <!-- PUTメソッドを使用して更新するため -->

            <div class="form-group">
                <label for="title">タイトル</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $post->title) }}" required>
            </div>

            <div class="form-group">
                <label for="body">本文</label>
                <textarea name="body" id="body" class="form-control" required>{{ old('body', $post->body) }}</textarea>
            </div>

            <div class="form-group">
                <label for="zoomurl">Zoomリンク (任意)</label>
                <input type="url" name="zoomurl" id="zoomurl" class="form-control" value="{{ old('zoomurl', $post->zoomurl) }}">
            </div>

            <div class="form-group">
                <label for="student_image">求める生徒像 (任意)</label>
                <input type="text" name="student_image" id="student_image" class="form-control" value="{{ old('student_image', $post->student_image) }}">
            </div>

            <div class="form-group">
                <label for="student_level">生徒レベル(任意)</label>
                <input type="text" name="student_level" id="student_level" class="form-control" value="{{ old('student_level', $post->student_level) }}">
            </div>

            <div class="form-action">
                <button type="submit" class="btn btn-primary">更新する</button>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
