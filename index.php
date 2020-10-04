<!DOCTYPE html>
<html lang="ja">
<meta charset="utf-8">
<head>
<title>配置テスト</title>
<link rel="stylesheet" href="styleseet.css">
<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/a1bcc1e98a.js" crossorigin="anonymous"></script>
</head>
<body>

  <div class="chat-wrapper">
<div class="chat-container">
  <nav class="side-nav">
    <i class="fab fa-twitter fa-lg"></i>
    <li><div><i class="fas fa-home fa-lg"></i></div><span>ホーム</span></li>
    <li><div><i class="fas fa-hashtag fa-lg"></i></div><span>話題の検索</span></li>
    <li><div><i class="far fa-bell fa-lg"></i></div><span>通知</span></li>
    <li><div><i class="far fa-envelope fa-lg"></i></div><span>メッセージ</span></li>
    <li><div><i class="far fa-bookmark fa-lg"></i></div><span>ブックマーク</span></li>
    <li><div><i class="far fa-list-alt fa-lg"></i></div><span>リスト</span></li>
    <li><div><i class="far fa-user fa-lg"></i></div><span>プロフィール</span></li>
    <li>もっと見る</li>
    <button class="btn large">ツイートする</button>
  </nav>
  <!--投稿＆タイムライン部分!-->
  <main>
    <!--ヘッダー!-->
    <header>
<h2>ホーム</h2>
      <div class="search">
        <div class="search-btn">
          <i class="fas fa-search"></i>
        </div>
      <input class="search-box" type="search" name="search" placeholder="キーワードで検索">
    </div>
    </header>
    <!--ヘッダー終了!-->

<!--フォーム開始!-->
    <div class="tweet-form">
    <form action="index.php" method="post">
      <div class="tweet-textbox">
      <input type="text" name="name" placeholder="あなたの名前は？" >
      <textarea name="tweet" placeholder="いまどうしてる？"></textarea>
    </div>
    <div class="tw-items">
      <i class="far fa-image"></i>
      <i class="far fa-sad-cry"></i>
      <i class="fas fa-poll-h"></i>
      <i class="far fa-smile"></i>
      <i class="far fa-share-square"></i>
<button type="submit" class="btn tweet">ツイートする</button>
<div class="clear-right"></div>
</div>
    </form>
  </div>
  <!--フォーム終了!-->

<!--タイムライン部分!-->
    <div class="timeline-wraper">
      <div class="user-image">
      <img class="iroha" src="./image/iroha.png" alt="アカウントアイコン">
</div>
<div class=timeline-flex>
  <div class="username">
  <h3>い・ろ・は・す</h3>
  <p class="user-id">@iroha416</p>
</div>
        <p>私がいない</p>
        <img class="oregairu" src="./image/3期.jpg" alt="ツイート画像">
<i class="far fa-comment"></i>
<i class="fas fa-retweet"></i>
<i class="far fa-heart"></i>
<i class="fas fa-download"></i>
    </div>
  </div>

  <div class="timeline-wraper">
    <div class="user-image">
    <img class="iroha" src="./image/hi.jpg" alt="アカウントアイコン">
</div>
<div class=timeline-flex>
<div class="username">
<h3>ヒッキー</h3>
<p class="user-id">@maxcoffee</p>
</div>
      <p>いろはすと無理矢理ツーショット<br>(兄には内緒で投稿☆)</p>
<div class="content">
      <img class="oregairu" src="./image/s.jpg" alt="ツイート画像">
</div>
<i class="far fa-comment"></i>
<i class="fas fa-retweet"></i>
<i class="far fa-heart"></i>
<i class="fas fa-download"></i>
  </div>
</div>

<div class="timeline-wraper">
  <div class="user-image">
  <img class="iroha" src="./image/yui.png" alt="アカウントアイコン">
</div>
<div class=timeline-flex>
<div class="username">
<h3>ゆいゆい</h3>
<p class="user-id">@hxy61888</p>
</div>
    <p>またあの頃のように3人で...</p>
    <img class="oregairu" src="./image/hh.jpg" alt="ツイート画像">
<i class="far fa-comment"></i>
<i class="fas fa-retweet"></i>
<i class="far fa-heart"></i>
<i class="fas fa-download"></i>
</div>
</div>

<div class="timeline-wraper">
  <div class="user-image">
  <img class="iroha" src="./image/ukino.png" alt="アカウントアイコン">
</div>
<div class=timeline-flex>
<div class="username">
<h3>ゆきのん</h3>
<p class="user-id">@nekononn</p>
</div>
    <p>由比ヶ浜さんと旅行</p>
    <img class="oregairu" src="./image/d.jpg" alt="ツイート画像">
<i class="far fa-comment"></i>
<i class="fas fa-retweet"></i>
<i class="far fa-heart"></i>
<i class="fas fa-download"></i>
</div>
</div>
  </main>

  <aside>
    <h2>いまどうしてる？</h2>
    知りません。
  </aside>
</div>
</div>
</body>
</html>
