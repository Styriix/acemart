<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{$up->user_username}'s Profile |{$app.name}</title>
    <meta name="description" content="{$app.descrip}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name='keyword' content="{$app.meta_keys}">
    <meta name="theme-color" content="{$app.site_color}">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{$app.favicon}">

     <!-- inject:css -->
    <link rel="stylesheet" href="{$ast}/css/plugins.min.css">
    <link rel="stylesheet" href="{$ast}/css/style.css">
    <!-- endinject -->

    {block name=item_deails_css} {/block}
    {block name=cat_head} {/block}
    {block name=p_s_head} {/block}
    {block name=w_css} {/block}


    {block name=datatable_css} {/block}

    <!-- Modernizr Js -->
    <link href="{$ast}/css/login-register.css" rel="stylesheet" />
    <script src="{$ast}/js/login-register.js" type="text/javascript"></script>
    {$head.inn}
    </head>
    <body>