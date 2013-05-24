<? include_once($_SERVER['FRAMEWORK_PATH']."/include/segment.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- (c) & (p) hvadhedderde.com 2009-2013 -->
	<!-- Common Public Attribution License Version 1.0 (CPAL-1.0), http://hvadhedderde.com/legal -->
	<title><?= $page_title ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="keywords" content="HTML5 CSS3 JavaScript custom web development programming shop website mobile accessibility usability php mysql" />
	<meta name="description" content="<?= $page_description ?>" />
	<meta name="viewport" content="width=device-width; initial-scale=1.0; minimum-scale=1.0; maximum-scale=1.0;" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
	<? if($_SESSION["dev"]) { ?>
		<link type="text/css" rel="stylesheet" media="all" href="/css/lib/seg_<?= $_SESSION["segment"] ?>_include.css" />
		<script type="text/javascript" src="/js/lib/seg_<?= $_SESSION["segment"] ?>_include.js"></script>
	<? } else { ?>
		<link type="text/css" rel="stylesheet" media="all" href="/css/seg_<?= $_SESSION["segment"] ?>.css" />
		<script type="text/javascript" src="/js/seg_<?= $_SESSION["segment"] ?>.js"></script>
	<? } ?>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=233720426672242";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<link rel="alternate" type="application/atom+xml" href="http://hvadhedderde.com/atom.xml" title="Hvadhedderde.com" />
</head>

<body class="<?= $body_class ?>">

<div id="page" class="i:page">

	<div id="header">
		<div class="fb-like" data-href="http://hvadhedderde.com" data-send="false" data-width="450" data-show-faces="false" data-font="trebuchet ms"></div>
		<ul class="servicenavigation">
			<li class="keynav navigation access"><a href="#navigation" rel="nofollow">Menu</a></li>
			<li class="keynav help access"><a href="/help" rel="nofollow">Help</a></li>
		</ul>
	</div>

	<div id="content">
