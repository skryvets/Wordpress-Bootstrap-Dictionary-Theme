<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<base href="<?php bloginfo('template_url') ?>/" />
	<title><?php bloginfo('name'); ?></title>
	<base href="<?php bloginfo('template_url') ?>/" />
	<!--Bootstrap CSS-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!--Jquery-->
	<script src="js/jquery-1.12.3.min.js"></script>
	<!--Bootstrap JS-->
	<script src="js/bootstrap.min.js"></script>
	<!--Hash-change-->
<!--	<script src="js/jquery.ba-hashchange.min.js"></script>-->
	<!--Custom CSS-->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!--Custom and tabs JS-->
	<!--	<script src="js/tabs.js"></script>-->
	<script src="js/main.js"></script>
</head>
<body>
<div class="container header-container">
	<header>
		<a href="<?php echo get_home_url(); ?>" class="logo">
			<img src="images/logo.png" alt="" class="img-responsive">
		</a>
		<h1><a href="<?php echo get_home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
		<h2><a href="<?php echo get_home_url(); ?>"><?php bloginfo('description'); ?></a></h2>
	</header><!--header-->
</div><!--.header-container-->