<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Open graphics meta tags -->

    <!-- Acebook open graphics -->
    <meta property="og:title" content="Buy {$item->item_name} - {$app.name}">
    <meta property="og:description" content="{$item->item_description|strip_tags:true|replace:'"':''|replace:"'":''|truncate:300}">
    <meta property="og:image" content="{$prd_img}{$item->pre_name}">
    <meta property="og:url" content="{$url.main}{$item->item_id}/{$item->item_slug}">

    <!-- Twitter open graphics -->
    <meta name="twitter:title" content="Buy {$item->item_name} - {$app.name}">
    <meta name="twitter:description" content="{$item->item_description|strip_tags:true|replace:'"':''|replace:"'":''|truncate:300}">
    <meta name="twitter:image" content="{$prd_img}{$item->pre_name}">
    <meta name="twitter:card" content="{$prd_img}{$item->pre_name}">

    <!-- Meta Tags -->
    <title>{$item->item_name} | {$app.name} </title>
    <meta name="description" content="{$app.descrip}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name='keyword' content="{$app.meta_keys}">
    <meta name="theme-color" content="{$app.site_color}">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{$app.favicon}">

    <!-- Normalize CSS --> 
    <link rel="stylesheet" href="{$ast}/css/normalize.css">

    <!-- Main CSS -->         
    <link rel="stylesheet" href="{$ast}/css/main.css">

    <!-- Bootstrap CSS --> 
    <link rel="stylesheet" href="{$ast}/css/bootstrap.min.css">

    <!-- Animate CSS --> 
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="{$ast}/dist/css/social-share-kit.css" type="text/css">

    <!-- Font-awesome CSS-->
    <link rel="stylesheet" href="{$ast}/css/font-awesome.min.css">
    
    <!-- Owl Caousel CSS -->
    <link rel="stylesheet" href="{$ast}/vendor/OwlCarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="{$ast}/vendor/OwlCarousel/owl.theme.default.min.css">
    
    <!-- Main Menu CSS -->      
    <link rel="stylesheet" href="{$ast}/css/meanmenu.min.css">

    <!-- Datetime Picker Style CSS -->
    <link rel="stylesheet" href="{$ast}/css/jquery.datetimepicker.css">

        <!-- ReImageGrid CSS -->
    <link rel="stylesheet" href="{$ast}/css/reImageGrid.css">

    <!-- Switch Style CSS -->
    <link rel="stylesheet" href="{$ast}/css/hover-min.css">

    <link rel="stylesheet" href="{$ast}/css/modal-login.css">
    <link rel="stylesheet" href="{$timer}/flipclock.css">

    {block name=item_deails_css} {/block}
    {block name=cat_head} {/block}

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{$ast}/css/style.css">

    <!-- Modernizr Js -->
    <link href="{$ast}/css/login-register.css" rel="stylesheet" />
    <script src="{$ast}/js/login-register.js" type="text/javascript"></script>
    <script src="{$ast}/js/modernizr-2.8.3.min.js"></script>
    {block name=stripe_js}{/block}
    {$head.inn}
    </head>
    <body>