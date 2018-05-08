<?php
    $title = "Home";
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en" ng-app="myApp"> <!--<![endif]-->

   <head>

      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- css plugins -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/yeti-bootstrap-theme.min.css">
      <link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
      <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="css/blueimp-gallery.min.css">
      <!-- <link rel="stylesheet" href="css/normalize.css"> -->

      <!-- custom css -->
      <link rel="stylesheet" href="css/main.css">

      <title> <?=$title;?> | Jobhunt </title>

   </head>

 <body ng-cloak>

	 <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    	<![endif]-->

<nav class="navbar navbar-default navbar-static-top navbar-fixed-top">

    <div class="navbar-header"><!-- Navbar header holds the webpage logo and the collapse button-->

        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-One-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <a href="index.php" class="navbar-brand">
            <img src="" class="img-responsive logo" alt="Jobhunt">
        </a>

    </div>

    <div class="collapse navbar-collapse" id = "bs-One-navbar-collapse-1"><!--This creates a collapsed navbar when screen is below 768px-->

        <ul class="nav navbar-nav navbar-right">
          <li><a href="index.php">Home</a></li>
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sign in<b class="caret"></b></a>
              <ul class="dropdown-menu">
                  <li><a href="" data-toggle="modal" data-target="#signinseeker">As Job seeker</a></li>
                  <li><a href="" data-toggle="modal" data-target="#signinemployer">As Employer</a></li>
              </ul>

              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sign up<b class="caret"></b></a>
              <ul class="dropdown-menu">
                  <li><a href=""  data-toggle="modal" data-target="#signupseeker">As Job seeker</a></li>
                  <li><a href="employer-signup.php">As Employer</a></li>
              </ul>
          </li>

        </ul>

    </div>

</nav>

<?php
      require('include/layout/modal.php');
      require('include/layout/page-header.php');
      require('include/layout/indexscript.php');
?>
