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
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
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
    </style>
    </head>

    <body>
    <div class="container">
        <div class="form-container">
            <h2>投稿内容</h2>

            <!-- 投稿作成フォーム -->
            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="title">タイトル</label>
                    <input type="text" name="title" id="title" class="form-control" placeholder="例: 新しい投稿タイトル" required>
                </div>

                <div class="form-group">
                    <label for="body">本文</label>
                    <textarea name="body" id="body" class="form-control" rows="5" placeholder="例: 投稿の詳細をここに記入してください" required></textarea>
                </div>

                <div class="form-group">
                    <label for="zoomurl">Zoomリンク (任意)</label>
                    <input type="url" name="zoomurl" id="zoomurl" class="form-control" placeholder="例: https://zoom.us/your-meeting-link">
                </div>

                <div class="form-group">
                    <label for="image">画像 (任意)</label>
                    <input type="file" name="image" id="image" class="form-control">
                </div>

                <div class="form-group">
                    <label for="student_image">求める生徒像 (任意)</label>
                    <input type="text" name="student_image" id="student_image" class="form-control" placeholder="例: 積極的な生徒を求めています">
                </div>

                <div class="form-group">
                    <label for="student_level">生徒レベル (任意)</label>
                    <input type="text" name="student_level" id="student_level" class="form-control" placeholder="例: 中級者以上">
                </div>

                <div class="form-action">
                    <button type="submit" class="btn-submit">投稿する</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS (必要であれば使用) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    
</html>