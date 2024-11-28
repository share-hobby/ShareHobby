<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン選択</title>
    <link rel="stylesheet" href="{{ asset('css\welcome.css') }}">
</head>

<body>
    <div class="container">
        <h1>ログインする役割を選んでください</h1>

        <!-- 生徒の場合 -->
        <button onclick="location.href='{{ url('/user/login') }}'">講師はこちら</button>

        <!-- 講師の場合 -->
        <button onclick="location.href='{{ url('/admin/login') }}'">生徒はこちら</button>
    </div>
</body>

</html>

</body>

</html>