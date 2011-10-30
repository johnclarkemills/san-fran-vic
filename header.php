<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta property="fb:admins" content="651695863" />
	<meta property="fb:page_id" content="151489671584023" />
	<title><?php if (function_exists('seo_title_tag')) { seo_title_tag(); } else { bloginfo('name'); wp_title();} ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="http://feeds2.feedburner.com/SanFranVic" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />	
	<?php wp_head(); ?>
</head>
<body>
<div id="wraper">
	<div class="tc"><span>&nbsp;</span></div>
		
			<!-- Header Start -->
			<div id="header">
				<h1><a href="<?php bloginfo('url'); ?>">San Fran<span class="dark-title">cisco</span> Vic<span class="dark-title">torian</span></a></h1>
				<span class="title"><?php bloginfo('description'); ?></span>								 				
				<span class="smallNav">
				<ul class="globalNav">
					<li><a href="http://feeds2.feedburner.com/SanFranVic">Subscribe via RSS</a></li>
					<li class="last"><a href="http://feedburner.google.com/fb/a/mailverify?uri=SanFranVic&amp;loc=en_US">Subscribe via Email</a></li>
				</ul>
				<iframe id="fb" src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FSan-Fran-Vic%2F151489671584023&amp;layout=standard&amp;show_faces=true&amp;width=450&amp;action=like&amp;colorscheme=light" scrolling="no" frameborder="0" allowTransparency="true" height="70"></iframe>
				</span>
			</div>
			<div id="mainNav">
				<ul>
					<li<?php echo ' class="first"' ?>><a href="<?php bloginfo('url'); ?>/">Home</a></li>
					<?php wp_list_pages('title_li='); ?>
				</ul>
				
				<div style="float: right; width: 250px;">
					<a href="https://twitter.com/johnclarkemills" data-link-color="#FFFFFF" class="twitter-follow-button">Follow @johnclarkemills</a>
					<script src="//platform.twitter.com/widgets.js" type="text/javascript"></script>
				</div>
			</div>
			<!-- Header End-->
