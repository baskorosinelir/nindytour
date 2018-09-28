<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Localhost</title>
	<!-- <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;lang=en" /> -->
	<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<!-- style FSA -->
	<link href="assets/css/style.css" rel="stylesheet" type="text/css" />

</head>
<body>
	<?php include('constant.php');?>
	<?php include('function.php');?>
	<header>
		<nav class="navbar navbar-default navbar-fixed-top">
		  <div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo BASE_URL;?>"><div class="logo"></div></a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="?dest=add">Promo</a></li>
					<li><a href="?dest=add">Cek Pesanan</a></li>
					<?php if(!empty($_SESSION['login'])):?>
					<li><a href="?dest=logout">Log out</a></li>
					<?php else:?>
					<li><a href="?dest=login">Log in</a></li>
					<?php endif;?>
				</ul>
			</div>
		  </div>
		</nav>
	</header>
	<div id="content">
		<?php if(empty($_GET)):?>
			<div class="home">
				<?php include('home.php');?>
			</div>
		<?php endif;?>
		<?php if(!empty($_GET) && $_GET['dest'] == 'login'):?>
			<div class="container login">
				<?php include('login.php');?>
			</div>
		<?php elseif(!empty($_GET) && $_GET['dest'] == 'register'):?>
			<div class="container register">
				<?php include('register.php');?>
			</div>
		<?php elseif(!empty($_GET) && $_GET['dest'] == 'forget-password'):?>
			<div class="container forget-password">
				<?php include('forget-password.php');?>
			</div>
		<?php elseif(!empty($_GET) && $_GET['dest'] == 'logout'):?>
			<?php
			if( session_destroy() ){
				header('Location: index.php');
			}
			?>
		<?php endif;?>
	</div>
	<footer>
		<div class="footer container">
			<div class="pull-left">&copy; Nindy Tour <?php echo date('Y')?></div>
			<!-- <div class="pull-right">kanan</div> -->
		</div>
	</footer>

	<!-- jQuery -->
	<script src="assets/js/jquery-3.3.1.min.js"></script>
	<!-- engine bootstrap -->
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- form validation -->
	<script src="assets/js/jquery.validate.min.js"></script>
	<!-- engine site -->
	<script src="assets/js/additional-methods.min.js"></script>
	<!-- engine site -->
	<script src="assets/js/engine_js.js"></script>
	<script src="assets/js/tinymce/tinymce.min.js"></script>
</body>
</html>

<?php
// if(!empty($_POST)){
// 	if($_POST['action'] == 'add-lyric'){
// 		echo "add lyrics";
// 	}
// }

?>