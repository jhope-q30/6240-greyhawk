<?php

define("docroot", "/6240-greyhawk/");

$page_name = isset( $page_name ) ? $page_name : "home";

function returnNavActive( $page_name, $link_name ){

	return $page_name == $link_name ? "active" : "";

}

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo $page_name ? "Greyhawk: " . $page_name : "Greyhawk"; ?></title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="//fonts.googleapis.com/css?family=Lusitana:400,700|Lato:300,400,700" rel="stylesheet">
<link href="<?php echo docroot; ?>css/default.css" rel="stylesheet">
</head>
<body>
<header id="gh-header">
    <div class="gh-logo">
        <a href="<?php echo docroot; ?>">
            <img src="<?php echo docroot; ?>img/Grayhawk-logo-website.svg" alt="Greyhawk">
        </a>
    </div>
    <nav id="gh-nav" role="navigation">
        <a href="<?php echo docroot; ?>our-people/" class="<?php echo returnNavActive( $page_name, 'Our people' ); ?>">Our people</a>
        <a href="<?php echo docroot; ?>contact/" class="<?php echo returnNavActive( $page_name, 'Contact' ); ?>">Contact</a>
    </nav>
</header>
<div class="gh-wrapper">

<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <em>upgrade your browser</em> to improve your experience.</p>
<![endif]-->

