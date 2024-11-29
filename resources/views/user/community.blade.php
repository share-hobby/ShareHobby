<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ギター・音楽のおすすめコミュニティ</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            text-align: center;
            margin-bottom: 40px;
            font-size: 2.5rem;  /* 見出しを大きく */
        }
        .community-item {
            background: #fff;
            border-radius: 15px;  /* 角の丸みを大きく */
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);  /* 影を強調 */
            margin-bottom: 40px;  /* 下の余白を広げる */
            padding: 50px;  /* パディングを広げる */
            display: flex;
            flex-direction: column;
            align-items: center;
            overflow: hidden;
            transition: transform 0.3s ease;
            width: 100%;
        }
        .community-item img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 20px;  /* 画像と文字の間隔を広げる */
        }
        .community-item h2 {
            font-size: 2rem;  /* 見出しのフォントサイズを大きく */
            margin-bottom: 15px;
            line-height: 1.4;
        }
        .community-item p {
            font-size: 1.2rem;  /* 本文のフォントサイズを大きく */
            margin-bottom: 20px;
            line-height: 1.6;  /* 行間を広げて読みやすく */
        }
        .community-item a {
            display: inline-block;
            padding: 18px 36px;
            background-color: #007BFF;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1.2rem;  /* ボタンのフォントサイズを大きく */
            text-align: center;
            transition: background-color 0.3s;
        }
        .community-item a:hover {
            background-color: #0056b3;
        }
        .community-meta {
            font-size: 1.1rem;  /* メタ情報のフォントサイズを少し大きく */
            color: #555;
            margin-top: 10px;
        }
        .btn-back {
            display: inline-block;
            padding: 15px 30px;
            background-color: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1.2rem;
            transition: background-color 0.3s ease;
            text-align: center;
            margin: 20px auto 0; /* 中央揃えと上部の余白を調整 */
        }
        .btn-back:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>あなたへのおすすめコミュニティ</h1>
        
        <!-- Community 1 -->
        <div class="community-item">
            <img src="{{ asset('images/guitar1.jpg') }}" alt="ギターコミュニティ 1">
            <h2>アコースティックギターの会</h2>
            <p>初心者から上級者まで楽しめるアコースティックギターのコミュニティです。</p>
            <p class="community-meta"><strong>平均年齢:</strong> 65歳</p>
            <a href="/views/user/community/acoustic-guitar">詳しく見る</a>
        </div>

        <!-- Community 2 -->
        <div class="community-item">
            <img src="{{ asset('images/guitar2.jpg') }}" alt="ギターコミュニティ 2">
            <h2>エレキギター愛好会</h2>
            <p>ロックやジャズ、ブルースなど幅広いジャンルをカバーするコミュニティです。</p>
            <p class="community-meta"><strong>平均年齢:</strong> 62歳</p>
            <a href="/views/user/community/electric-guitar">詳しく見る</a>
        </div>

        <!-- Community 3 -->
        <div class="community-item">
            <img src="{{ asset('images/guitar6.jpg') }}" alt="ギターコミュニティ 3">
            <h2>弾き語りセッション</h2>
            <p>歌とギターを組み合わせて表現を楽しむメンバーが集まる場です。</p>
            <p class="community-meta"><strong>平均年齢:</strong> 68歳</p>
            <a href="/views/user/community/singer-songwriter">詳しく見る</a>
        </div>

        <!-- Community 4 -->
        <div class="community-item">
            <img src="{{ asset('images/guitar4.jpg') }}" alt="ギターコミュニティ 4">
            <h2>音楽理論を学ぼう</h2>
            <p>音楽の基礎知識を学び、演奏に活かすコミュニティです。</p>
            <p class="community-meta"><strong>平均年齢:</strong> 66歳</p>
            <a href="/views/user/community/music-theory">詳しく見る</a>
        </div>

        <!-- Community 5 -->
        <div class="community-item">
            <img src="{{ asset('images/guitar5.jpg') }}" alt="ギターコミュニティ 5">
            <h2>アマチュアバンドクラブ</h2>
            <p>バンド活動を通して仲間と音楽を楽しむコミュニティです。</p>
            <p class="community-meta"><strong>平均年齢:</strong> 64歳</p>
            <a href="/views/user/community/band">詳しく見る</a>
        </div>
        
        <!-- Back button -->
        <div style="text-align: center; margin-top: 40px;">
            <a href="{{ route('user.dashboard') }}" class="btn-back">戻る</a>
        </div>
    </div>
</body>
</html>
