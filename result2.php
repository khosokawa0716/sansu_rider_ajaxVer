<?php
session_start();

$score = $_SESSION['score'];
// たおした敵の数は、画面に表示されている敵の数よりも1少ない
$defeatedEnemies = $_SESSION['whatEnemy'] - 1;
$numCorrect = $_SESSION['numCorrect'];
$numWrong = $_SESSION['numWrong'];

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>算数ライダー</title>
    <meta name="viewport" content="width=375" >
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>
<body>
<main>
    <div class="container">
        <h1 class="title">けっかはっぴょう</h1>
        <div class="top_content">
            <ul class="top">
                <li>スコア：<br><?php echo $score; ?>てん</li>
                <li>たおしたライダー：<br><?php echo $defeatedEnemies; ?>たい</li>
                <li>せいかいしたかず：<br><?php echo $numCorrect; ?>もん</li>
                <li>まちがえたかず：<br><?php echo $numWrong; ?>もん</li>
                <li>あそんでくれてありがとう。<br>またちょうせんしてね。</li>
            </ul>
        </div>
        <img src="img/025_ジオウトリニティ.png" alt="ジオウトリニティ" width="294" class="top_img">
        <div class="">
            <button class="btn-back" onclick="location.href='top2.html'">もどる</button>
        </div>
        <a href="https://twitter.com/intent/tweet?text=【算数ライダー】〜現役の教員と5歳のおとこのこが監修〜&hashtags=ウェブカツ&url=http://localhost:8888/sansu_rider/top2.html" class="twitter-icon" target="_blank"><i class="fab fa-twitter-square fa-2x"></i></a>
        <div class="bottom_content">
            <ul class="top">
                <li><a href="https://webukatu.com/">こんなゲームをつくりたい<br>ウェブカツはこちら</a></li>
                <li><a href="">このゲームについて</a></li>
            </ul>
        </div>
    </div>
</main>
</body>
</html>