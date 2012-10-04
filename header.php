<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" <? language_attributes(); ?>>
<head>
    <meta charset="<? bloginfo('charset'); ?>" />
    <title><? wp_title('&#8250;', true, 'right'); ?><? bloginfo('name'); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="alternate" type="application/rss+xml" title="<? bloginfo('name'); ?>" href="<? bloginfo('rss2_url'); ?>" />

    <link rel="stylesheet" type="text/css" href="<? bloginfo('template_url'); ?>/stylesheets/style.css?v=1" />
    <link rel="pingback" href="<? bloginfo('pingback_url'); ?>" />
    <link rel="shortcut icon" href="<? bloginfo('template_url'); ?>/favicon.ico" />
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <? wp_head(); ?>
</head>
<body>

<header class="header">
    <div class="wrap">
        <h1>
            <a href="<?= bloginfo('url') ?>"><? bloginfo('name'); ?></a>
            <span>blog</span>
        </h1>
        <nav>
            <ul>
                <li><a href="http://seevolution.com/">Seevolution home</a></li>
                <li><a href="#">Support and contact</a></li>
            </ul>
        </nav>
        <div class="social-icons">
            <ul>
                <li><a class="rss" href="#">Rss</a></li>
                <li><a class="facebook" href="#">Facebook</a></li>
                <li><a class="twitter" href="#">Twitter</a></li>
                <li><a class="google" href="#">Google</a></li>
            </ul>
        </div>
    </div>
    <div class="notice">
        <div class="wrap">
            <p>
                This is the official SeeVolution Blog. We cover the most important about Analytics, Visitor Traking and Sales.
                SeeVolution developes a heatmaping tool. Rather than navigating away from a website to analyze visitor trends, once logged in to SeeVolution,
                users see a movable, live traffic feed that lays transparently over the page users are tracking.
            </p>
        </div>
    </div>
</header>

<div class="wrap">