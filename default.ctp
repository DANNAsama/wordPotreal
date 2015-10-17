<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>wordPot</title>

    <!-- Bootstrap core CSS -->
    <link href="/wordPot/assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/wordPot/assets/css/main.css" rel="stylesheet">
    <link href="/wordPot/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="/wordPot/Rateit/src/rateit.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="/wordPot/assets/js/chart.js"></script>
    <script src="/wordPot/Rateit/src/jquery.rateit.min.js"></script>



    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Fixed navbar -->
    <div class="navbar navbar-fixed-top">
      <div class="container">
        <a href="/wordPot/user_words/mypage" class="navbar-brand" href="#"><img style="width:58px;" src="/wordPot/word Pot.png" /></a>
        <p class="name"><?php echo $user_profiles['UserProfile']['nickname'] ;?>さん、こんにちは！</p>
        
        <ul style="list-style:none;">

          <li class="navbar-right">
            <input class="btn" style="background-color: #ffbd66;" type="button" onclick="location.href='/wordPot/Users/top'"value="ログアウト">
          </li>

          <li class="headlink">
            <a href="/wordPot/user_profiles/edit?id=<?php echo $user_profile['UserProfile']['user_id']; ?>" style="font-size:14px; margin-right: 18px;" class="headanchor nav navbar-nav">プロフィール編集</a>
          </li>

          <li class="headlink">
            <a href="/wordPot/favorite_user_words/index" style="font-size:14px; margin-right: 18px;" class="headanchor nav navbar-nav">お気に入り</a>
          </li>

          <li class="headlink">
            <a href="/wordPot/words/searchindex" style="font-size:14px; margin-right: 18px;" class="headanchor nav navbar-nav">検索</a>
          </li>

          <li class="headlink">
            <a href="/wordPot/user_words/add" style="font-size:14px; margin-right: 18px;" class="headanchor nav navbar-nav">追加</a>
          </li>

          <li class="headlink">
            <a href="/wordPot/user_words/index" style="font-size:14px; margin-right: 18px;" class="headanchor nav navbar-nav">あなたの単語帳</a>
          </li>

          <li class="headlink" >
            <a href="/wordPot/user_words/mypage" style="font-size:14px; margin-right: 18px;" class="headanchor nav navbar-nav">タイムライン</a>
          </li>
          
        </ul>
      </div>
    </div>

    <?php echo $this->Flash->render(); ?>

	<?php echo $this->fetch('content'); ?>

    <div id="f">
      <div class="container">
        <div class="row">
          <p>Copyright 2015 Team wordPot&nbsp;/&nbsp;Crafted with <i class="fa fa-heart"></i> by BlackTie.co.</p> 	
        </div>
      </div>
    </div>




  <script src="/wordPot/assets/js/bootstrap.js"></script>
  <?php echo $this->element('sql_dump'); ?>

  </body>
</html>