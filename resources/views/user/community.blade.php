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
            background-color: rgb(178, 235, 242);  /* 明るい青系背景 */
            color: #333;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 40px 20px;
        }
        h1 {
            text-align: center;
            margin-bottom: 40px;
            font-size: 3rem;  /* 見出しを大きく */
            color: #0277bd;  /* 青色 */
        }
        .community-item {
            background: #fff;
            border-radius: 20px;  /* 角を丸める */
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);  /* 影を強調 */
            margin-bottom: 30px;  /* 下の余白を広げる */
            padding: 40px 20px;  /* パディングを広げる */
            display: flex;
            flex-direction: column;
            align-items: center;
            overflow: hidden;
            transition: transform 0.3s ease;
        }
        .community-item img {
            max-width: 100%;
            height: auto;
            border-radius: 15px;
            margin-bottom: 20px;
        }
        .community-item h2 {
            font-size: 2.5rem;  /* 見出しのフォントサイズを大きく */
            margin-bottom: 10px;
            line-height: 1.4;
            color: #0288d1;  /* 見出しの色を少し濃い青に */
        }
        .community-item p {
            font-size: 1.5rem;  /* 本文のフォントサイズを大きく */
            margin-bottom: 20px;
            line-height: 1.8;
        }
        .community-item a {
            display: inline-block;
            padding: 20px 40px;
            background-color: #0288d1;  /* 青色 */
            color: #fff;
            text-decoration: none;
            border-radius: 8px;
            font-size: 1.5rem;  /* ボタンのフォントサイズを大きく */
            text-align: center;
            transition: background-color 0.3s ease;
            margin-bottom: 20px;
        }
        .community-item a:hover {
            background-color: #01579b;  /* ボタンホバー時の色 */
        }
        .community-meta {
            font-size: 1.3rem;
            color: #555;
            margin-top: 10px;
        }
        .btn-back {
            display: inline-block;
            padding: 20px 40px;
            background-color: #4caf50;  /* 緑色の戻るボタン */
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-size: 1.5rem;
            transition: background-color 0.3s ease;
            text-align: center;
            margin-top: 30px;
        }
        .btn-back:hover {
            background-color: #388e3c;
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
