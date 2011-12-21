<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <title>Dave Gamache: Designer &amp; Developer</title>
  <meta name="description" content="Dave Gamache: Designer and Developer at Twitter in San Francisco">
  <meta name="author" content="Dave Gamache, @dhg">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico">
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <script type="text/javascript" src="http://use.typekit.com/cjx7kil.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
  <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.fittext.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/respond.min.js"></script>
</head>

<body>
  <div class="wrapper">
    <nav class="nav<?php if($postMeta["white_header"] == "true"){ ?> white<?php } if($postMeta["category"]) { ?> fixed<?php } ?>">
      <a id="logo" href="<?php bloginfo('url'); ?>">
        <h1>DG</h1>
      </a>
      <ul class="nav-primary">
        <li><a href="<?php bloginfo('url'); ?>/articles">Articles</a></li>
        <li>/</li>
        <li><a href="<?php bloginfo('url'); ?>/about">About</a></li>
      </ul>
    </nav>