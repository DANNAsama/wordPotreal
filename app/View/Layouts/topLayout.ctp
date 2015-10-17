<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Word Pot</title>

    <!-- Bootstrap core CSS -->
    <link href="/wordPot/assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/wordPot/assets/css/main.css" rel="stylesheet">
    <link href="/wordPot/assets/css/font-awesome.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="/wordPot/assets/js/chart.js"></script>


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  	<?php echo $this->Session->flash('auth'); ?>
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img style="width:70px;" src="/wordPot/word Pot.png" /></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right" style="margin-top:10px;">
          	<div style="display:inline">
          		<li>
          			<form method='post' action='/wordPot/users/login'>
          				<input name="data[User][username]" type="text" placeholder="ユーザーネーム" style="margin-right:10px;">
          				<input name="data[User][password]" type="password" placeholder="パスワード" style="margin-right:10px;" style="margin-left:10px;">
            			<button type="submit" class="btn" style="background-color: #ffbd66;">ログイン</button>
            		</form>
            	</li>
        	</div>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

	<div id="hello">
	    <div class="container">
	    	<div class="row">
	    		<div class="col-lg-8 col-lg-offset-2 centered">
	    			<!--<img src="/wordPot/word Pot.png" /> -->
	    			<h1>Word Pot</h1>
	    		</div><!-- /col-lg-8 -->
	    	</div><!-- /row -->
	    	<div class="centered">
	    		<form id="shinki" method="post" action="/wordPot/users/signup">
	    			<input type="text" name="data[User][username]" placeholder="ユーザーネーム" style="margin-right:10px; background-color:#ffefd5;">
	    			<input type="password" name="data[User][password]" placeholder="パスワード"
	    			style="margin-right:10px;margin-left:10px;  background-color:#ffefd5;">
	    			<input type="submit" value="新規登録" class="btn" style="background-color: #ffbd66;">
	    		</form>
	    	</div>
	    </div> <!-- /container -->
	</div><!-- /hello -->
	
	<div id="green">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 centered">
					<h3>英単語をストックしよう!</h3>
					<p>あなたが今日、学んだ英単語を保存しよう。<br>意味は入力しなくても表示されるので便利です。<br>単語に対してメモをつけることもできます。</p>
				</div>
				<div class="col-lg-5 centered">
					<img src="/wordPot/assets/img/words.png" width="350px" height="310px" alt="" style="border:solid 2px #ffbd66;">
				</div>
			</div>
		</div>
	</div>

	<div id="green">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 centered">
					<img src="/wordPot/assets/img/meaning.png" width="380px" height="280px" alt="" style="border:solid 2px #ffbd66;">
				</div>
				<div class="col-lg-7 centered">
					<h3>意味を覚えるのに最適</h3>
					<p>意味はカーソルを合わせると表示されるので<br>意味を覚えるのに最適です。</p>
				</div>
				
			</div>
		</div>
	</div>

	<div id="green">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 centered">
					<h3>英単語を共有しよう！</h3>
					<p>タイムラインで他のユーザーが<br>どんな単語を学んでいるか知ることができます。<br>気になる単語は、お気に入り登録！</p>
				</div>
				<div class="col-lg-5 centered">
					<img src="/wordPot/assets/img/timeline.png" alt="" width="477px" height="263px" style="border:solid 2px #ffbd66;">
				</div>
			</div>
		</div>
	</div>

	


	<div id="f">
		<div class="container">
			<div class="row">
				<p>Created by Team WordPot (ty yn yk ys)</p>
			</div>
		</div>
	</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/wordPot/assets/js/bootstrap.js"></script>
  </body>
</html>
