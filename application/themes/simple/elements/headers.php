<!DOCTYPE html>
<html lang="en">
  <head>
	 <?php Loader::element('header_required') ?> 
<!--
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">
-->

    <title>STANLEY - Free Bootstrap Theme </title>

    <!-- Bootstrap core CSS -->
    <link href="<?= $view->getThemePath() ?>/assets/css/bootstrap.css" rel="stylesheet"> 


    <!-- Custom styles for this template -->
    <link href="<?= $view->getThemePath() ?>/assets/css/main.css" rel="stylesheet">

  <!--  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script> -->
    <script src="<?= $view->getThemePath() ?>/assets/js/hover.zoom.js"></script>
    <script src="<?= $view->getThemePath() ?>/assets/js/hover.zoom.conf.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
	<div class="<?= $c->getPageWrapperClass() ?>">
    <!-- Static navbar -->

    <div class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="">
	
<?php
$site = Config::get('concrete.site');
echo $site;
?>

</a>
        </div>
						
        <div class="navbar-collapse collapse">
			<?php
			$bt = BlockType::getByHandle('autonav');
			$bt->controller->displayPages = 'top';
			$bt->controller->orderBy = 'display_asc';
			$bt->render('templates/header_tmenu');
			?>
         
        </div><!--/.nav-collapse -->
      </div>
    </div>
