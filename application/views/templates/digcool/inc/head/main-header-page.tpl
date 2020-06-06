<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{$page->page_name} | {$app.name}</title>
    <meta name="description" content="{$app.descrip}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name='keyword' content="{$app.meta_keys}">
    <meta name="theme-color" content="{$app.site_color}">

    <!-- inject:css -->
    <link rel="stylesheet" href="{$ast}/css/plugins.min.css">
    <link rel="stylesheet" href="{$ast}/css/style.css">
    <!-- endinject -->

    {block name=item_deails_css} {/block}
    {block name=cat_head} {/block}


    <!-- Modernizr Js -->
    <link href="{$ast}/css/login-register.css" rel="stylesheet" />
    <script src="{$ast}/js/login-register.js" type="text/javascript"></script>
    {$head.inn}
    </head>
    <body>