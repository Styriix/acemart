<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Open graphics meta tags -->

    <!-- Acebook open graphics -->
    <meta property="og:title" content="{$blog->blog_title} - {$app.name}">
    <meta property="og:description" content="{$blog->blog_contents|strip_tags:true|replace:'"':''|replace:"'":''|truncate:300}">
    <meta property="og:image" content="{if $blog->blog_preview}{$blogg.blog_img}{$blog->blog_preview}{else}{$blogg.no-img}{/if}">
    <meta property="og:url" content="{$url.main}blog/{$blog->blog_slug}">

    <!-- Twitter open graphics -->
    <meta name="twitter:title" content="{$blog->blog_title} - {$app.name}">
    <meta name="twitter:description" content="{$blog->blog_contents|strip_tags:true|replace:'"':''|replace:"'":''|truncate:300}">
    <meta name="twitter:image" content="{if $blog->blog_preview}{$blogg.blog_img}{$blog->blog_preview}{else}{$blogg.no-img}{/if}">
    <meta name="twitter:card" content="{$url.main}blog/{$blog->blog_slug}">

    <!-- Meta Tags -->
    <title>{$blog->blog_title} | {$app.name} </title>
    <meta name="description" content="{$app.descrip}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name='keyword' content="{$app.meta_keys}">
    <meta name="theme-color" content="{$app.site_color}">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{$app.favicon}">

    <link rel="stylesheet" href="{$ast}/css/plugins.min.css">
    <link rel="stylesheet" href="{$ast}/css/style.css">

    <link rel="stylesheet" href="{$ast}/dist/css/social-share-kit.css" type="text/css">

    <link rel="stylesheet" href="{$ast}/css/modal-login.csss">

    {block name=item_deails_css} {/block}
    {block name=cat_head} {/block}

    <!-- Modernizr Js -->
    <link href="{$ast}/css/login-register.css" rel="stylesheet" />
    <script src="{$ast}/js/login-register.js" type="text/javascript"></script>
    {block name=stripe_js}{/block}
    {$head.inn}
    </head>
    <body>