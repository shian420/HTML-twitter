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
  <main>
    <header>
<h2>ホーム</h2>
      <div class="search">
        <div class="search-btn">
          <i class="fas fa-search"></i>
        </div>
      <input class="search-box" type="search" name="search" placeholder="キーワードで検索">
    </div>
    </header>

    <div class="tweet-form">

    <form action="index.php" method="post">
      <div>
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
</div>
<div class="clear-right"></div>
投稿内容を表示↓
    </form>

  </div>
  </main>
  <aside>
    <h2>いまどうしてる？</h2>
  </aside>
</div>
</div>
</body>
</html>
