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
$fruits = ['りんご', 'ぶどう', 'レモン'];
print($fruits[1]);
echo '<br>';
$fruits2 = [
  'apple'=>'りんご',
  'frape'=>'ぶどう',
  'lemon'=>'レモン',
  'tomato'=>'トマト',
  'peach'=>'もも'
];
foreach($fruits2 as $englesh => $japanese) {
  print($englesh.':'.$japanese."\n");
  print($englesh.':'.$japanese);
  echo '<br>';
}
?>
</pre>
</main>
</body>
</html>