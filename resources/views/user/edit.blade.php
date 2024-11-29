<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>投稿編集</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* 背景と全体レイアウト */

        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background-image: linear-gradient(135deg, #A2D9FF 25%, #E0F7FF 75%);
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
            color: #333;
            position: relative;
        }
        /* 背景画像 */
        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 33.33%;
            background: url('/images/longblue3.png') no-repeat center center;
            background-size: cover;
            z-index: -1;
            background-color: #A9D0F5;
        }


        .container {
            background: #fff; /* 白背景 */
            border-radius: 12px;
            padding: 2rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* 優しいシャドウ */
            max-width: 600px;
            width: 100%;
        }

        h1 {
            text-align: center;
            margin-bottom: 1.5rem;
            font-size: 1.8rem;
            color: #333; /* ダークグレー */
        }

        label {
            font-weight: bold;
            color: #555; /* ミディアムグレー */
        }

        .form-control {
            background: #f9f9f9; /* 明るいグレー */
            color: #333;
            border: 1px solid #ddd; /* 薄い枠線 */
            border-radius: 8px;
        }

        .form-control:focus {
            background: #fff;
            color: #333;
            border: 1px solid #4caf50; /* 緑色のフォーカス */
            outline: none;
            box-shadow: 0 0 5px rgba(76, 175, 80, 0.5); /* フォーカス時のエフェクト */
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .btn-primary {
            background: #4caf50; /* 緑色 */
            border: none;
            border-radius: 8px;
            transition: background 0.3s ease;
            padding: 0.8rem 1.5rem;
            font-size: 1rem;
        }

        .btn-primary:hover {
            background: #45a049; /* 濃い緑 */
        }

        .btn-secondary {
            background: #808080; /* グレー */
            border: none;
            border-radius: 8px;
            transition: background 0.3s ease;
            padding: 0.8rem 1.5rem;
            font-size: 1rem;
        }

        .btn-secondary:hover {
            background: #696969; /* 濃いグレー */
        }

        .form-action {
            text-align: center;
        }

        .form-action .btn {
            margin: 0 2rem; /* 左右に1remの間隔を設定 */
        }

    </style>
</head>
<body>
    <div class="container">
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
                <label for="student_level">生徒レベル (任意)</label>
                <input type="text" name="student_level" id="student_level" class="form-control" value="{{ old('student_level', $post->student_level) }}">
            </div>

            <div class="form-action">
                <a href="{{ route('user.dashboard') }}" class="btn btn-secondary">戻る</a>
                <button type="submit" class="btn btn-primary">更新する</button>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
