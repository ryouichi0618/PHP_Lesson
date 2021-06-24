<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>
</header>

<main>
<h2>Practice</h2>
<pre>
<?php
// ファイルを読み込むファンクション
$news = file_get_contents('../../news_data/news.txt');
$news .= "\n2021-06-25 ニュースを追加しました。";
file_put_contents('../../news_data/news.txt', $news);
print($news);

// 変数を使わずに読み込む(プログラムを呼び込むのに便利だが再加工、受け取った内容を使いプログラムの動作変更はできないので上記のを使う)
// readfile('../../news_data/news.txt');
?>
</pre>
</main>
</body>
</html>