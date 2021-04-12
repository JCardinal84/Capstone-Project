<?php
    session_start();
	//$token = $_SESSION['token']; 
	require_once 'VerifyEmail.php';
?>
<!DOCTYPE html>
<html lang="en-US" class="no-js no-svg">

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
		<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>
<title>Password Reset &#8211; Canvas API</title>
<meta name='robots' content='max-image-preview:large' />
<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel='dns-prefetch' href='//s.w.org' />
<link rel="alternate" type="application/rss+xml" title="Canvas API &raquo; Feed" href="http://localhost/ws/wordpress/feed/" />
<link rel="alternate" type="application/rss+xml" title="Canvas API &raquo; Comments Feed" href="http://localhost/ws/wordpress/comments/feed/" />
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/localhost\/ws\/wordpress\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.7"}};
			!function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){var a=String.fromCharCode;p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,e),0,0);e=i.toDataURL();return p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,t),0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(!p||!p.fillText)return!1;switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])?!1:!s([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!s([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]);case"emoji":return!s([55357,56424,8205,55356,57212],[55357,56424,8203,55356,57212])}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(n=t.source||{}).concatemoji?c(n.concatemoji):n.wpemoji&&n.twemoji&&(c(n.twemoji),c(n.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
	<link rel='stylesheet' id='wp-block-library-css'  href='http://localhost/ws/wordpress/wp-includes/css/dist/block-library/style.min.css?ver=5.7' type='text/css' media='all' />
<link rel='stylesheet' id='wp-block-library-theme-css'  href='http://localhost/ws/wordpress/wp-includes/css/dist/block-library/theme.min.css?ver=5.7' type='text/css' media='all' />
<link rel='stylesheet' id='searchandfilter-css'  href='http://localhost/ws/wordpress/wp-content/plugins/search-filter/style.css?ver=1' type='text/css' media='all' />
<link rel='stylesheet' id='godhuli-style-css'  href='http://localhost/ws/wordpress/wp-content/themes/godhuli/style.css?ver=5.7' type='text/css' media='all' />
<link rel='stylesheet' id='owl-carousel-css'  href='http://localhost/ws/wordpress/wp-content/themes/godhuli/css/owl-carousel.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='material-designicons-css'  href='http://localhost/ws/wordpress/wp-content/themes/godhuli/css/materialdesignicons.min.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='bootstrap-css'  href='http://localhost/ws/wordpress/wp-content/themes/godhuli/css/bootstrap.min.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='godhuli-block-css'  href='http://localhost/ws/wordpress/wp-content/themes/godhuli/css/blocks.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='colorbox-css'  href='http://localhost/ws/wordpress/wp-content/themes/godhuli/css/colorbox.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='Lora-css'  href='https://fonts.googleapis.com/css?family=Lora%3A400%2C400i%2C500%2C500i%2C600%2C700&#038;display=swap&#038;ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='select2-css'  href='http://localhost/ws/wordpress/wp-content/themes/godhuli/css/select2.min.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='godhuli-main-styles-css'  href='http://localhost/ws/wordpress/wp-content/themes/godhuli/css/main.css?ver=1.0.0' type='text/css' media='all' />
<style id='godhuli-main-styles-inline-css' type='text/css'>
.entry-content a {
	    color: ;
	}
	.entry-content a:focus {
	    border: 1px dashed ;
	}
	a:hover,
	a:focus {
	    color: ;
	}
	.btn-outline-custom {
	    color: ;
	    border-color: ;
	}
	.btn-outline-custom.active,
	.btn-outline-custom:hover,
	.btn-outline-custom:active,
	.show>.btn-outline-custom.dropdown-toggle {
	    background-color: ;
	    border-color: ;
	}
	.btn-outline-custom.active,
	.btn-outline-custom:focus,
	.btn-outline-custom:active,
	.show>.btn-outline-custom.dropdown-toggle {
	    background-color: ;
	    border-color: ;
	}
	#topnav .has-submenu.active .submenu li.active > a {
	    color: ;
	}
	#topnav .has-submenu.active > a,
	#topnav .navigation-menu li.active > a {
	    color: ;
	}
	#topnav .has-submenu.active .menu-arrow {
	    border-color: ;
	}
	#topnav .navbar-toggle.open span:hover,
	#topnav .navbar-toggle.open span:focus {
	    background-color: ;
	}
	#topnav .navbar-toggle:hover,
	#topnav .navbar-toggle:focus,
	#topnav .navigation-menu > li > a:hover,
	#topnav .navigation-menu > li > a:focus {
	    color: ;
	}
	#topnav .navigation-menu > li > a:hover,
	#topnav .navigation-menu > li .submenu li a:hover,
	#topnav .navigation-menu > li.has-submenu.open > a,
	#topnav .menu-extras .menu-item .cart > a:hover,
	#topnav .menu-extras .menu-item .search > a:hover {
	    color: ;
	}
	#topnav .navigation-menu > li > a:focus,
	#topnav .navigation-menu > li .submenu li a:focus,
	#topnav .navigation-menu > li.has-submenu.open > a,
	#topnav .menu-extras .menu-item .cart > a:focus,
	#topnav .menu-extras .menu-item .search > a:focus {
	    color: ;
	}
	.badge-custom {
	    background-color: ;
	}
	.post-tags a:hover,
	.post-tags a:focus {
	    background: ;
	}
	.search-button:hover,
	.search-button:focus {
	    color: ;
	}
	.widget-title:after {
	    border-bottom: 1px solid ;
	}
	.widget {
	    border-color: ;
	    border: 4px double ;;
	}
	.widget ul li a:hover,
	.widget ol li a:hover {
	    color: ;
	}
	.widget ul li a:focus,
	.widget ol li a:focus {
	    color: ;
	}
	.widget select:focus {
	    border-color: ;
	}
	.tagcloud > a:hover,
	.tagcloud > a:focus {
	    background: ;
	}
	.searchform > .button:hover,
	.searchform > .button:focus {
	    background-color: ;
	}
	.media-heading a:hover,
	.media-heading a:focus {
	    color: ;
	}
	.blog_comments ul .trackback a,
	.blog_comments ul .pingback a {
	    color: ;
	}
	.comment-form input[type=submit]:hover, .comment-form input[type=submit]:focus {
	    background-color: ;
	    border-color: ;
	}
	.related-post .post-header a:hover,
	.related-post .post-header a:focus {
	    color: ;
	}
	.post-author-box .socials li a:focus {
	    background-color: ;
	    border-color: ;
	}
	.quote-post .blockquote {
	    border: 2px solid ;
	}
	.quote-post .blockquote:before {
	    color: ;
	}
	.link-post {
	    background-color: ;
	}
	th {
	    background: ;
	}
	.page-numbers > .active > a,
	.page-numbers > .active > span {
	    background-color: ;
	    border-color: ;
	}
	.page-numbers > li > a:hover,
	.page-numbers > li > a:focus,
	.page-numbers > li > span:hover,
	.page-numbers > li > span:focus {
	    background-color: ;
	    border-color: ;
	}
	.page-numbers > .active > a,
	.page-numbers > .active > a:focus,
	.page-numbers > .active > a:hover,
	.page-numbers > .active > span,
	.page-numbers > .active > span:focus,
	.pagination > .active > span:hover,
	.pagination .nav-links .page-numbers:hover
	 {
	    background-color: ;
	    border-color: ;
	}
	.page-numbers > li > span.current, .pagination .nav-links .page-numbers.current {
	    background-color: ;
	    border-color: ;
	}
	
	.socials li a:hover,
	.socials li a:focus {
	    background-color: ;
	}
	.flex-center a.reply-btn:hover,
	.flex-center a.reply-btn:focus {
	    color: ;
	}
	.wp-block-cover__video-background:focus,
	video:focus,
	iframe:focus,
	.wp-block-embed__wrapper:focus, .wp-block-audio audio:focus {
	    border: 2px solid ;
	}
	.blocks-gallery-item figure:focus,
	figure:focus {
	    border: 1px dashed ;
	}
	.screen-reader-text:focus {
	    background-color:;
	}
	[type=reset], [type=submit], button, html [type=button] {
	    background: ;
	    border: 1px solid ;
	}
	.js .nav-collapse .dropdown-toggle:hover, .js .nav-collapse .dropdown-toggle:focus, .js .nav-collapse .dropdown-toggle:active {
	    background-color: ;
	}
	.nav-collapse ul li.active > a {
	    color: 
	}
	.wp-block-calendar table th {
	    background: ;
	}
	.wp-block-search .wp-block-search__input:focus,
	input:focus,
	textarea:focus {
	    border: 1px dashed ;
	}
	.wp-block-search .wp-block-search__button:focus, [type=submit]:focus {
	    border: 1px dashed  !important;
	}
	button:not(.toggle),
	.button,
	.faux-button,
	.wp-block-button__link,
	.wp-block-file .wp-block-file__button,
	input[type='button'],
	input[type='reset'],
	input[type='submit'],
	.bg-accent,
	.bg-accent-hover:hover,
	.bg-accent-hover:focus,
	:root .has-accent-background-color {
	    background-color: ;
	}
	.is-style-outline .wp-block-button__link {
	    border: 2px solid ;
	}
	.badge-custom:focus {
	    background-color: transparent;
	    color: #333 !important;
	    border: 1px dashed ;
	}
	.wp-block-button__link:focus, .wp-block-file .wp-block-file__button:focus {
	    border: 2px solid  !important;
	}
	.is-style-outline .wp-block-button__link:focus {
	    background:  !important;
	}
	.wp-block-gallery .blocks-gallery-item figure a:focus {
        border: 2px solid ;
	}
	.mejs-container:focus {
	    border: 2px solid ;
	}
	.js .nav-collapse .dropdown-toggle:hover, .js .nav-collapse .dropdown-toggle:focus, .js .nav-collapse .dropdown-toggle:active {
	    background-color: ;
	    border: 1px solid ;
	}
</style>
<!--[if lt IE 9]>
<link rel='stylesheet' id='godhuli-ie8-css'  href='http://localhost/ws/wordpress/wp-content/themes/godhuli/css/ie8.css?ver=1.0' type='text/css' media='all' />
<![endif]-->
<link rel='stylesheet' id='um_fonticons_ii-css'  href='http://localhost/ws/wordpress/wp-content/plugins/ultimate-member/assets/css/um-fonticons-ii.css?ver=2.1.16' type='text/css' media='all' />
<link rel='stylesheet' id='um_fonticons_fa-css'  href='http://localhost/ws/wordpress/wp-content/plugins/ultimate-member/assets/css/um-fonticons-fa.css?ver=2.1.16' type='text/css' media='all' />
<link rel='stylesheet' id='um_crop-css'  href='http://localhost/ws/wordpress/wp-content/plugins/ultimate-member/assets/css/um-crop.css?ver=2.1.16' type='text/css' media='all' />
<link rel='stylesheet' id='um_modal-css'  href='http://localhost/ws/wordpress/wp-content/plugins/ultimate-member/assets/css/um-modal.css?ver=2.1.16' type='text/css' media='all' />
<link rel='stylesheet' id='um_styles-css'  href='http://localhost/ws/wordpress/wp-content/plugins/ultimate-member/assets/css/um-styles.css?ver=2.1.16' type='text/css' media='all' />
<link rel='stylesheet' id='um_profile-css'  href='http://localhost/ws/wordpress/wp-content/plugins/ultimate-member/assets/css/um-profile.css?ver=2.1.16' type='text/css' media='all' />
<link rel='stylesheet' id='um_account-css'  href='http://localhost/ws/wordpress/wp-content/plugins/ultimate-member/assets/css/um-account.css?ver=2.1.16' type='text/css' media='all' />
<link rel='stylesheet' id='um_misc-css'  href='http://localhost/ws/wordpress/wp-content/plugins/ultimate-member/assets/css/um-misc.css?ver=2.1.16' type='text/css' media='all' />
<link rel='stylesheet' id='um_fileupload-css'  href='http://localhost/ws/wordpress/wp-content/plugins/ultimate-member/assets/css/um-fileupload.css?ver=2.1.16' type='text/css' media='all' />
<link rel='stylesheet' id='um_datetime-css'  href='http://localhost/ws/wordpress/wp-content/plugins/ultimate-member/assets/css/pickadate/default.css?ver=2.1.16' type='text/css' media='all' />
<link rel='stylesheet' id='um_datetime_date-css'  href='http://localhost/ws/wordpress/wp-content/plugins/ultimate-member/assets/css/pickadate/default.date.css?ver=2.1.16' type='text/css' media='all' />
<link rel='stylesheet' id='um_datetime_time-css'  href='http://localhost/ws/wordpress/wp-content/plugins/ultimate-member/assets/css/pickadate/default.time.css?ver=2.1.16' type='text/css' media='all' />
<link rel='stylesheet' id='um_raty-css'  href='http://localhost/ws/wordpress/wp-content/plugins/ultimate-member/assets/css/um-raty.css?ver=2.1.16' type='text/css' media='all' />
<link rel='stylesheet' id='um_scrollbar-css'  href='http://localhost/ws/wordpress/wp-content/plugins/ultimate-member/assets/css/simplebar.css?ver=2.1.16' type='text/css' media='all' />
<link rel='stylesheet' id='um_tipsy-css'  href='http://localhost/ws/wordpress/wp-content/plugins/ultimate-member/assets/css/um-tipsy.css?ver=2.1.16' type='text/css' media='all' />
<link rel='stylesheet' id='um_responsive-css'  href='http://localhost/ws/wordpress/wp-content/plugins/ultimate-member/assets/css/um-responsive.css?ver=2.1.16' type='text/css' media='all' />
<link rel='stylesheet' id='um_default_css-css'  href='http://localhost/ws/wordpress/wp-content/plugins/ultimate-member/assets/css/um-old-default.css?ver=2.1.16' type='text/css' media='all' />
<script type='text/javascript' src='http://localhost/ws/wordpress/wp-includes/js/jquery/jquery.min.js?ver=3.5.1' id='jquery-core-js'></script>
<script type='text/javascript' src='http://localhost/ws/wordpress/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2' id='jquery-migrate-js'></script>
<script type='text/javascript' src='http://localhost/ws/wordpress/wp-content/plugins/ultimate-member/assets/js/um-gdpr.min.js?ver=2.1.16' id='um-gdpr-js'></script>
<link rel="https://api.w.org/" href="http://localhost/ws/wordpress/wp-json/" /><link rel="alternate" type="application/json" href="http://localhost/ws/wordpress/wp-json/wp/v2/pages/94" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://localhost/ws/wordpress/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://localhost/ws/wordpress/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 5.7" />
<link rel="canonical" href="http://localhost/ws/wordpress/password-reset/" />
<link rel='shortlink' href='http://localhost/ws/wordpress/?p=94' />
<link rel="alternate" type="application/json+oembed" href="http://localhost/ws/wordpress/wp-json/oembed/1.0/embed?url=http%3A%2F%2Flocalhost%2Fws%2Fwordpress%2Fpassword-reset%2F" />
<link rel="alternate" type="text/xml+oembed" href="http://localhost/ws/wordpress/wp-json/oembed/1.0/embed?url=http%3A%2F%2Flocalhost%2Fws%2Fwordpress%2Fpassword-reset%2F&#038;format=xml" />
		<style type="text/css">
			.um_request_name {
				display: none !important;
			}
		</style>
	<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style><style type="text/css" id="custom-background-css">
body.custom-background { background-color: #dddddd; }
</style>
	
</head>


<body class="page-template-default page page-id-94 custom-background wp-embed-responsive um-page-password-reset um-page-loggedout full-width-contain singular missing-post-thumbnail has-no-pagination">

	 <a class="skip-link screen-reader-text" href="#content">Skip to the content</a>

<div class="logo-box">

	<a class="navbar-logo" href="http://localhost/ws/wordpress/"><h1>Canvas API</h1></a><p class="site-description">Course Information</p>
</div>

<!-- Navigation Bar-->
<header id="topnav">

	<div class="container">

		<span class="logo-mobile">
		<a class="navbar-logo" href="http://localhost/ws/wordpress/"><h1>Canvas API</h1></a><p class="site-description">Course Information</p>		</span>




	</div>
</header>
<!-- End Navigation Bar-->


<section class="section">
	<div id="content" class="container">
		<div class="row">

				<!-- Content-->
				<div class="col-sm-8">

					
<article id="post-94" class="post post-94 page type-page status-publish hentry">

	<header class="entry-header">
		<h2 class="text-left mt-0 mb-4 text-uppercase"><b>Password Reset</b></h2>	</header><!-- .entry-header -->

	
	<div class="blog-detail-description">
		
<div class="um um-password um-um_password_id">
	<div class="um-form">
		<form method="post" action="">
			
			<div style="text-align:center;">To reset your password, please enter your email address below: </div>
			<input type="text" name="email" placeholder="Enter email" required/><br />
			<input type="submit" name="submit" value="Submit" /><br />
			
		</form>
			
		<?php
			if(isset($_GET['Wrong'])){
				echo "<script> alert('Your email is incorrect.') </script>";
			}
		?>

	</div>
</div><style type="text/css">
.um-um_password_id.um {
	max-width: 450px;
}</style>

	</div><!-- .entry-content -->


	

</article><!-- #post-94 -->

				</div>
				<!-- Content end-->


				

		</div>
	</div> <!-- end container -->
</section>



<footer>

<!-- copy-wrapper -->
	<div class="copy-wrapper">
		<div class="container center">



			
			<p class="copyright">

				
									<a class="site-name" href="http://localhost/ws/wordpress/" rel="home">Canvas API</a>,
				
				<a href="https://wordpress.org/" class="imprint">
					Proudly powered by WordPress.				</a>

			</p><!-- .site-info -->

				


		</div>
	</div>
	<!-- end copy-wrapper -->
</footer>




<div id="um_upload_single" style="display:none"></div>
<div id="um_view_photo" style="display:none">

	<a href="javascript:void(0);" data-action="um_remove_modal" class="um-modal-close"
	   aria-label="Close view photo modal">
		<i class="um-faicon-times"></i>
	</a>

	<div class="um-modal-body photo">
		<div class="um-modal-photo"></div>
	</div>

</div><script type='text/javascript' src='http://localhost/ws/wordpress/wp-content/themes/godhuli/js/umd/popper.min.js?ver=1.0.0' id='popper-js'></script>
<script type='text/javascript' src='http://localhost/ws/wordpress/wp-content/themes/godhuli/js/bootstrap.min.js?ver=1.0.0' id='bootstrap-js'></script>
<script type='text/javascript' src='http://localhost/ws/wordpress/wp-content/themes/godhuli/js/owl.carousel.min.js?ver=1.0.0' id='owl-carousel-js'></script>
<script type='text/javascript' src='http://localhost/ws/wordpress/wp-content/themes/godhuli/js/jquery.colorbox.min.js?ver=1.6.4' id='colorbox-js'></script>
<script type='text/javascript' src='http://localhost/ws/wordpress/wp-content/themes/godhuli/js/jquery.app.js?ver=1.0.0' id='godhuli-app-js-js'></script>
<script type='text/javascript' src='http://localhost/ws/wordpress/wp-content/themes/godhuli/js/responsive-nav.js?ver=20151215' id='responsive-nav-js'></script>
<script type='text/javascript' src='http://localhost/ws/wordpress/wp-content/themes/godhuli/js/skip-link-focus-fix.js?ver=20151215' id='godhuli-skip-link-focus-fix-js'></script>
<script type='text/javascript' src='http://localhost/ws/wordpress/wp-content/themes/godhuli/js/select2.min.js?ver=20151215' id='select2-js'></script>
<!--[if lt IE 9]>
<script type='text/javascript' src='http://localhost/ws/wordpress/wp-content/themes/godhuli/js/html5.js?ver=3.7.3' id='html5-js'></script>
<![endif]-->
<script type='text/javascript' src='http://localhost/ws/wordpress/wp-includes/js/underscore.min.js?ver=1.8.3' id='underscore-js'></script>
<script type='text/javascript' id='wp-util-js-extra'>
/* <![CDATA[ */
var _wpUtilSettings = {"ajax":{"url":"\/ws\/wordpress\/wp-admin\/admin-ajax.php"}};
/* ]]> */
</script>
<script type='text/javascript' src='http://localhost/ws/wordpress/wp-includes/js/wp-util.min.js?ver=5.7' id='wp-util-js'></script>
<script type='text/javascript' src='http://localhost/ws/wordpress/wp-content/plugins/ultimate-member/assets/js/um-crop.min.js?ver=2.1.16' id='um_crop-js'></script>
<script type='text/javascript' src='http://localhost/ws/wordpress/wp-content/plugins/ultimate-member/assets/js/um-modal.min.js?ver=2.1.16' id='um_modal-js'></script>
<script type='text/javascript' src='http://localhost/ws/wordpress/wp-content/plugins/ultimate-member/assets/js/um-jquery-form.min.js?ver=2.1.16' id='um_jquery_form-js'></script>
<script type='text/javascript' src='http://localhost/ws/wordpress/wp-content/plugins/ultimate-member/assets/js/um-fileupload.min.js?ver=2.1.16' id='um_fileupload-js'></script>
<script type='text/javascript' src='http://localhost/ws/wordpress/wp-content/plugins/ultimate-member/assets/js/pickadate/picker.js?ver=2.1.16' id='um_datetime-js'></script>
<script type='text/javascript' src='http://localhost/ws/wordpress/wp-content/plugins/ultimate-member/assets/js/pickadate/picker.date.js?ver=2.1.16' id='um_datetime_date-js'></script>
<script type='text/javascript' src='http://localhost/ws/wordpress/wp-content/plugins/ultimate-member/assets/js/pickadate/picker.time.js?ver=2.1.16' id='um_datetime_time-js'></script>
<script type='text/javascript' src='http://localhost/ws/wordpress/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=7.4.4' id='wp-polyfill-js'></script>
<script type='text/javascript' id='wp-polyfill-js-after'>
( 'fetch' in window ) || document.write( '<script src="http://localhost/ws/wordpress/wp-includes/js/dist/vendor/wp-polyfill-fetch.min.js?ver=3.0.0"></scr' + 'ipt>' );( document.contains ) || document.write( '<script src="http://localhost/ws/wordpress/wp-includes/js/dist/vendor/wp-polyfill-node-contains.min.js?ver=3.42.0"></scr' + 'ipt>' );( window.DOMRect ) || document.write( '<script src="http://localhost/ws/wordpress/wp-includes/js/dist/vendor/wp-polyfill-dom-rect.min.js?ver=3.42.0"></scr' + 'ipt>' );( window.URL && window.URL.prototype && window.URLSearchParams ) || document.write( '<script src="http://localhost/ws/wordpress/wp-includes/js/dist/vendor/wp-polyfill-url.min.js?ver=3.6.4"></scr' + 'ipt>' );( window.FormData && window.FormData.prototype.keys ) || document.write( '<script src="http://localhost/ws/wordpress/wp-includes/js/dist/vendor/wp-polyfill-formdata.min.js?ver=3.0.12"></scr' + 'ipt>' );( Element.prototype.matches && Element.prototype.closest ) || document.write( '<script src="http://localhost/ws/wordpress/wp-includes/js/dist/vendor/wp-polyfill-element-closest.min.js?ver=2.0.2"></scr' + 'ipt>' );( 'objectFit' in document.documentElement.style ) || document.write( '<script src="http://localhost/ws/wordpress/wp-includes/js/dist/vendor/wp-polyfill-object-fit.min.js?ver=2.3.4"></scr' + 'ipt>' );
</script>
<script type='text/javascript' src='http://localhost/ws/wordpress/wp-includes/js/dist/hooks.min.js?ver=50e23bed88bcb9e6e14023e9961698c1' id='wp-hooks-js'></script>
<script type='text/javascript' src='http://localhost/ws/wordpress/wp-includes/js/dist/i18n.min.js?ver=db9a9a37da262883343e941c3731bc67' id='wp-i18n-js'></script>
<script type='text/javascript' id='wp-i18n-js-after'>
wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
</script>
<script type='text/javascript' src='http://localhost/ws/wordpress/wp-content/plugins/ultimate-member/assets/js/um-raty.min.js?ver=2.1.16' id='um_raty-js'></script>
<script type='text/javascript' src='http://localhost/ws/wordpress/wp-content/plugins/ultimate-member/assets/js/um-tipsy.min.js?ver=2.1.16' id='um_tipsy-js'></script>
<script type='text/javascript' src='http://localhost/ws/wordpress/wp-includes/js/imagesloaded.min.js?ver=4.1.4' id='imagesloaded-js'></script>
<script type='text/javascript' src='http://localhost/ws/wordpress/wp-includes/js/masonry.min.js?ver=4.2.2' id='masonry-js'></script>
<script type='text/javascript' src='http://localhost/ws/wordpress/wp-includes/js/jquery/jquery.masonry.min.js?ver=3.1.2b' id='jquery-masonry-js'></script>
<script type='text/javascript' src='http://localhost/ws/wordpress/wp-content/plugins/ultimate-member/assets/js/simplebar.min.js?ver=2.1.16' id='um_scrollbar-js'></script>
<script type='text/javascript' src='http://localhost/ws/wordpress/wp-content/plugins/ultimate-member/assets/js/um-functions.min.js?ver=2.1.16' id='um_functions-js'></script>
<script type='text/javascript' src='http://localhost/ws/wordpress/wp-content/plugins/ultimate-member/assets/js/um-responsive.min.js?ver=2.1.16' id='um_responsive-js'></script>
<script type='text/javascript' src='http://localhost/ws/wordpress/wp-content/plugins/ultimate-member/assets/js/um-conditional.min.js?ver=2.1.16' id='um_conditional-js'></script>
<script type='text/javascript' id='um_scripts-js-extra'>
/* <![CDATA[ */
var um_scripts = {"nonce":"af08ed8152"};
/* ]]> */
</script>
<script type='text/javascript' src='http://localhost/ws/wordpress/wp-content/plugins/ultimate-member/assets/js/um-scripts.min.js?ver=2.1.16' id='um_scripts-js'></script>
<script type='text/javascript' src='http://localhost/ws/wordpress/wp-content/plugins/ultimate-member/assets/js/um-profile.min.js?ver=2.1.16' id='um_profile-js'></script>
<script type='text/javascript' src='http://localhost/ws/wordpress/wp-content/plugins/ultimate-member/assets/js/um-account.min.js?ver=2.1.16' id='um_account-js'></script>
<script type='text/javascript' src='http://localhost/ws/wordpress/wp-includes/js/wp-embed.min.js?ver=5.7' id='wp-embed-js'></script>
		<script type="text/javascript">
			jQuery( window ).on( 'load', function() {
				jQuery('input[name="um_request"]').val('');
			});
		</script>
	
</body>

</html>
