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
  require('dbconnect.php');
  $statement = $db->prepare('INSERT INTO memos SET memo=?, created_at=NOW()');
  // $statement->execute(array($_POST['memo']));

  // 複数の値(?)を受け取る場合は下記のやり方にする
  $statement->bindParam(1, $_POST['memo']);
  $statement->execute();
  echo 'メッセージが登録されました。';

  // こちらの書き方だとSQLを破壊する構文を受け取ってしまう可能性がある。
  // $db->exec('INSERT INTO memos SET memo="' . $_POST['memo'] . '", created_at=NOW()');
  ?>
  <br>
  <a href="index.php">memo一覧へ</a><br>
  <a href="input.html">続けてメモを追加する</a>
</pre>
</main>
</body>
</html>