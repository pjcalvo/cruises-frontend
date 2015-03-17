<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>GSA - Cruceros </title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="/css/bootstrap.min.css">
		<link rel="stylesheet" href="/css/main.min.css">

		<!--[if lt IE 9]>
			<script src="js/vendor/respond.js"></script>
			<script src="js/vendor/html5shiv.js"></script>
		<![endif]-->
        
        
        
        <!--<script>
            
            $(window).scroll(function () {
                if( $(window).scrollTop() > 0   ){
                    $('header').addClass('posi');
                
                
            }else if ($(window).scrollTop() <= 0){
                    $('header').removeClass('posi');
            }}
            );
        
        </script>-->
    
        <?php include_once("partials/analyticstracking.php") ?>
	</head>
	<body>    
		<header>
            <div class="fixed-header">
			<div class="container-fluid top-head">
                    <ul>
						<li><img src="/img/logo-cruceros.png" alt="Cruseros"></li>
					</ul>
                    <p class="countries">Costa Rica - Nicaragua - Honduras - El Salvador - Belice - IR</p>
                    <p><strong>Tel. (506) 2234-1818</strong></p>
			</div>			
				<div id= "menu-header" class="header-container extended">
                    <div class="container-fluid navbar-container">
                    <?php
                        if (has_nav_menu('primary_navigation')) : wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'menu'));
                        endif;
                    ?>
					<!--<ul>
						<li><a href="#">INICIO</a></li>
						<li><a href="#">NOSOTROS</a></li>
						<li><a href="#">BARCOS</a></li>
						<li><a href="#">DESTINOS</a></li>
						<li><a href="#">ESPECIALES</a></li>
                        <li><a href="#">ESCAPADAS</a></li>
                        <li><a href="#">CONTÁCTENOS</a></li>
					</ul>-->
				</div>
			</div>
            </div>
		</header>