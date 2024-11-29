<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Skydash Admin</title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

        <link rel="stylesheet" href="/vendors/feather/feather.css">
        <link rel="stylesheet" href="/vendors/ti-icons/css/themify-icons.css">
        <link rel="stylesheet" href="/vendors/css/vendor.bundle.base.css">

        <!-- endinject -->
        <!-- Plugin css for this page -->
        <link rel="stylesheet" href="/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
        <link rel="stylesheet" href="/vendors/ti-icons/css/themify-icons.css">
        <link rel="stylesheet" type="text/css" href="/usertemplate/js/select.dataTables.min.css">
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="/css/vertical-layout-light/style.css">
        <!-- endinject -->
        <link rel="shortcut icon" href="/images/favicon.png" />


        <style>
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
        .form-container {
            max-width: 600px;
            margin: 30px auto;
            padding: 20px;
            background: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        .form-container h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #343a40;
        }
        .btn-submit {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        .btn-submit:hover {
            background-color: #0056b3;
        }
        .btn-back {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            background-color: #28a745;
        }
        label {
            font-weight: bold;
            color: #495057;
        }
        .form-control {
            margin-bottom: 15px;
            border-radius: 5px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-action .btn {
        width: 48%; /* ボタン幅を統一 */
        text-align: center; /* テキストの中央揃え */
        }
    </style>
    </head>

    <body>
    <div class="container">
        <div class="form-container">
            <h1>投稿内容</h1>

            <!-- 投稿作成フォーム -->
            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <h3 class="pt-3">タイトル</h3>
                    <input type="text" name="title" id="title" class="form-control" placeholder="例: 新しい投稿タイトル" required>
                </div>

                <div class="form-group">
                    <h3 class="pt-3">本文</h3>
                    <textarea name="body" id="body" class="form-control" rows="5" placeholder="例: 投稿の詳細をここに記入してください" required></textarea>
                </div>

                <div class="form-group">
                    <h3 class="pt-3">Zoomリンク(任意)</h3>
                    <input type="url" name="zoomurl" id="zoomurl" class="form-control" placeholder="例: https://zoom.us/your-meeting-link">
                </div>

                <div class="form-group">
                    <h3 class="pt-3">画像（任意）</h3>
                    <input type="file" name="image" id="image" class="form-control">
                </div>

                <div class="form-group">
                    <h3 class="pt-3">求める生徒像（任意）</h3>
                    <input type="text" name="student_image" id="student_image" class="form-control" placeholder="例: 積極的な生徒を求めています">
                </div>

                <div class="form-group">
                    <h3 class="pt-3">生徒レベル (任意)</h3>
                    <input type="text" name="student_level" id="student_level" class="form-control" placeholder="例: 中級者以上">
                </div>

                <div class="form-action d-flex justify-content-between pt-3">
                    <!-- 戻るボタン -->
                    <a href="{{ route('user.dashboard') }}" class="btn btn-back">戻る</a>
                    <!-- 投稿ボタン -->
                    <button type="submit" class="btn btn-submit">投稿する</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS (必要であれば使用) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    
</html>

<!--
<div class="form-action">
    <button type="submit" class="btn-submit">投稿する</button>
</div>
-->