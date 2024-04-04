<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<title>Call of Shadows | Bright Evolution Web Design</title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Standard meta tags -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="{{ description }}">
	<meta name="keywords" content="">
	<link rel="canonical" href="">

	<!--Social Media Display-->
	<meta property="og:title" content="Call of Shadows" />
	<meta property="og:description" content="Call of Shadows" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="" />
	<meta property="og:image" content="/images/Author-Logo.png" />
	<meta property="og:image:secure_url" content="/images/Author-Logo.png" />

	<link rel="profile" href="https://gmpg.org/xfn/11">

	<style>html{visibility: hidden;opacity:0;}</style>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<header>
		<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" >
			<div class="container">
				<a class="navbar-brand" aria-label="Scroll to Page Top" href="/"><img alt="CJ Kinsley Author Logo" src="<?php echo get_template_directory_uri(); ?>/images/Author-Logo.png"></a>
				
				<button  class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span> 
				</button>
				<div class="navbar-collapse collapse" id="navbarResponsive" >
					<ul class="navbar-nav text-uppercase  mx-auto py-4 py-lg-0">
						<li class="nav-item"><a class="nav-link" href="javascript:scrollTo('book');">The Book</a></li>
						<li class="nav-item"><a class="nav-link" href="javascript:scrollTo('about');">About the Author</a></li>
						<li class="nav-item"><a class="nav-link" href="javascript:scrollTo('contact');">Contact</a></li>
					</ul>
					<a href="javascript:scrollTo('subscribe');" class="action-button mobile btn-primary btn text-center mx-auto">Get First Chapter</a>
				</div>
				<a href="javascript:scrollTo('subscribe');" class="action-button desktop btn-primary btn text-center mx-auto">Get First Chapter</a>
			</div>
		</nav> 
	</header>
