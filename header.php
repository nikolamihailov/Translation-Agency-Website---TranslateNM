<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>TranslateNM</title>

    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Favicon
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon.png">

    <!-- Stylesheets
    ================================================== -->
    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('template_directory'); ?>/assets/css/style.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/assets/css/responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

    <header id="masthead" class="site-header">
        
        <nav id="primary-navigation" class="site-navigation">
            <div class="container">
 
            
                <div class="navbar-header" style="margin-top: 10px;">
                   
                    <a class="site-title" style="font-weight: bold;"><span>Translate</span>NM</a>

                </div><!-- /.navbar-header -->

                <div class="collapse navbar-collapse" id="agency-navbar-collapse">

                <!--
                    <ul class="nav navbar-nav navbar-right">

                        <li class="active"><a href="index.html" data-toggle="dropdown">Начало</a></li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Услуги<i class="fa fa-caret-down hidden-xs" aria-hidden="true"></i></a>

                            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                              <li><a href="portfolio.html">Бърз превод</a></li>
                              <li><a href="blog.html">Бавен превод</a></li>
                            </ul>

                        </li>
                        <li><a href="portfolio.html">Цени</a></li>
                        <li><a href="<?php bloginfo('template_directory'); ?>/blog.php">Блог</a></li>
                        <li><a href="contact.html">За нас</a></li>
                        <li><a href="contact.php">Контакти</a></li>

                    </ul>
                
-->

<?php 
				wp_nav_menu(array(
					'theme_location'  => 'top-menu',
					'menu'            => 'navigation',
					'container'       => 'nav',
					'container_id'    => 'primary-navigation',
					'container_class'    => 'site-navigation',
					'menu_class'      => 'nav navbar-nav navbar-right',
					'menu_id'         => 'idm',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
					'depth'           => 0,
					'walker'          => ''
				));
			?>
              
                </div>

            </div>   
        </nav><!-- /.site-navigation -->
    </header><!-- /#mastheaed -->

    
    