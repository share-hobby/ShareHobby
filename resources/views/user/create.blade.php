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
    </head>        
    <body>
        <h1>投稿作成</h1>

        <!-- 投稿作成フォーム -->
        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="title">タイトル</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="body">本文</label>
                <textarea name="body" id="body" class="form-control" required></textarea>
            </div>

            <div class="form-group">
                <label for="zoomurl">Zoomリンク (任意)</label>
                <input type="url" name="zoomurl" id="zoomurl" class="form-control">
            </div>

            <div class="form-group">
                <label for="image">画像 (任意)</label>
                <input type="file" name="image" id="image" class="form-control">
            </div>

            <div class="form-group">
                <label for="student_image">求める生徒像 (任意)</label>
                <input type="text" name="student_image" id="student_image" class="form-control">
            </div>

            <div class="form-group">
                <label for="student_level">生徒レベル(任意)</label>
                <input type="student_level" name="student_level" id="student_level" class="form-control">
            </div>
            <div class="form-action">
                <button type="submit" class="btn-submit">投稿する</button>
            </div>
        </form>
    </body>
</html>