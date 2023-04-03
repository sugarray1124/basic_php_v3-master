<?php 

$n = mt_rand(1,4);
if($n==1) {
  $message = 'はじめまして！';
}elseif($n==2) {
  $message = 'プログラミング勉強中！';
}elseif($n==3) {
  $message = 'PHP勉強中！';
}else {
  $message = '気合と根性';
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>宮崎真太朗のポートフォリオ</title>
  <link rel="icon" href="favicon.ico">
  <meta name="description" content="宮崎真太朗です。">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <header>
    <div class="container">
      <div class="icon">
        <img src="img/shintaro001.png" width="120" height="120">
      </div>
      <div class="info">
        <h1>宮崎真太朗</h1>
        <p><?php echo $message ?></p>
        <ul>
          <li>
            <a href="https://sugarray1124.github.io/gunplapla/" target="_blank">
              <img src="img/blog.png" width="20" height="20" alt="ブログサイトへのリンク画像です">
            </a>
          </li>
          <li>
            <a href="https://sugarray1124.github.io/gunplapla/" target="_blank">
              <img src="img/photos.png" width="20" height="20" alt="写真サイトへのリンク画像です">
            </a>
          </li>
        </ul>
      </div>
    </div>
  </header>

  <section class="works">
    <h1>自己紹介</h1>