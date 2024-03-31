<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

get_header();
?>



<?php
	$post_id = false; // current post
	$post_id = 1; // post ID = 1
	$post_id = "user_2"; // user ID = 2
	$post_id = "category_3"; // category term ID = 3
	$post_id = "event_4"; // event (custom taxonomy) term ID = 4
	$post_id = "option"; // options page
	$post_id = "options"; // same as above

	//echo($post_id);

	$post_id = false; // current post

	$book_title = get_field('book_title');

	//echo($book_title);


	$hero_group_id = 'group_65fc174264359'; // Replace with group ID
	$hero_fields      = array();

	$fields = acf_get_fields( $hero_group_id );


	foreach ( $fields as $field ) {
		$field_value = get_field( $field['name'] );   //Putting true as second param means this doesn't work.
		//echo($field['name']);
		//the_field($field['name']);
		//echo("<br/>");

		if ( ! empty( $field_value ) ) {
			//echo("not empty");
			$hero_fields[ $field['name'] ] = $field_value;
		}

		// Works now:
		//echo($field_value);
		//echo("<br/>");
	}

	// Getting a single field.
	//the_field('the_squirrels');
	//echo("<br/><br/>");
	$fields = get_field_objects();


//echo("<br/><br/>");
//the_field('hero_section');
//the_field('book_title');
?>


	<main id="primary" class="site-main">

	<!-- Hero -->
	<section id="hero" class="" >
		<div class="container text-center pt-5">
			<div class="row pt-3">
				<div class="col-12">
					<h1 class="pt-5 mt-5">CALL OF<br/> SHADOWS</h1>
					<h2 class="subtitle pt-4" >A journey to a distant land... and an ancient magic unearthed.</h2>
					<a href="" class="btn btn-primary mt-5">
						<span>Preorder Now</span>
					</a>
				</div>


				<div class="col-md-7" style="display:none;">
					<p class="white topper pt-5">COMING SOON</p>
					<h1 class="white fw-bold"><?php echo($hero_fields['book_title']) ?></h1>
					<h2 class="white"><?php echo($hero_fields['book_subtitle']) ?></h2>
					

					<div class="pt-5">
						<a href="" class="btn btn-primary">
							<span>Buy On Amazon
							<svg width="24" height="24" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="white" focusable="false"><path d="M13.582,8.182C11.934,8.367,9.78,8.49,8.238,9.166c-1.781,0.769-3.03,2.337-3.03,4.644 c0,2.953,1.86,4.429,4.253,4.429c2.02,0,3.125-0.477,4.685-2.065c0.516,0.747,0.685,1.109,1.629,1.894 c0.212,0.114,0.483,0.103,0.672-0.066l0.006,0.006c0.567-0.505,1.599-1.401,2.18-1.888c0.231-0.188,0.19-0.496,0.009-0.754 c-0.52-0.718-1.072-1.303-1.072-2.634V8.305c0-1.876,0.133-3.599-1.249-4.891C15.23,2.369,13.422,2,12.04,2 C9.336,2,6.318,3.01,5.686,6.351C5.618,6.706,5.877,6.893,6.109,6.945l2.754,0.298C9.121,7.23,9.308,6.977,9.357,6.72 c0.236-1.151,1.2-1.706,2.284-1.706c0.584,0,1.249,0.215,1.595,0.738c0.398,0.584,0.346,1.384,0.346,2.061V8.182z M13.049,14.088 c-0.451,0.8-1.169,1.291-1.967,1.291c-1.09,0-1.728-0.83-1.728-2.061c0-2.42,2.171-2.86,4.227-2.86v0.615 C13.582,12.181,13.608,13.104,13.049,14.088z M20.683,19.339C18.329,21.076,14.917,22,11.979,22c-4.118,0-7.826-1.522-10.632-4.057 c-0.22-0.199-0.024-0.471,0.241-0.317c3.027,1.762,6.771,2.823,10.639,2.823c2.608,0,5.476-0.541,8.115-1.66 C20.739,18.62,21.072,19.051,20.683,19.339z M21.336,21.043c-0.194,0.163-0.379,0.076-0.293-0.139 c0.284-0.71,0.92-2.298,0.619-2.684c-0.301-0.386-1.99-0.183-2.749-0.092c-0.23,0.027-0.266-0.173-0.059-0.319 c1.348-0.946,3.555-0.673,3.811-0.356C22.925,17.773,22.599,19.986,21.336,21.043z"></path></svg>
							</span>
						</a>
						<a href="#reviews" class="btn btn-secondary">Learn More 
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
								<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
							</svg>
						</a>
					</div>
					
				</div>
				<div class="col-md-5" style="display:none;">
					<img class="img-fluid d-block pb-4" alt="The Omega Project Paperback" data-aos="fade-up" data-aos-once="true" loading="eager" src="<?php echo get_template_directory_uri(); ?>/images/OmegaProjectPaperback.png">
				</div>
			</div>
		</div>
	</section>

	<!-- Book Details -->
	<section id="book" class="bg-darkColor pt-5 pb-5 px-2">
		<div class="container pt-5 pb-5 white align-items-center">
			<div class="row pt-5 pb-5 align-items-center">
				<div class="col-lg-5 col-md-5 col-sm-12 text-center">
					<img class="img-fluid" loading="lazy" alt="Call of Shadows Book Cover" data-aos="fade-up" data-aos-once="true" height="500" src="<?php echo get_template_directory_uri(); ?>/images/Call-Of-Shadows-Paperback.png">
				</div>
				<div class="col-lg-7 col-md-7 col-sm-12 details" >
					<p class="topper">COMING IN AUGUST 2024</p>
					<h2 class="subtitle">CALL OF SHADOWS</h2>
					<p>An ancient magic has been unearthed. Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
						sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sollicitudin aliquam ultrices sagittis orci a 
						scelerisque purus semper. Massa sapien faucibus et molestie ac feugiat sed lectus. </p>
					<p>Pellentesque habitant morbi tristique senectus. Hac habitasse platea dictumst quisque sagittis. </p>
					<div class="pt-5">
						<p class="pb-2"><strong>Where to get <i>Call of Shadows</i></strong></p>
						<button aria-label="Amazon" class="btn btn-primary">Buy on Amazon 
						<svg width="24" height="24" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="white" focusable="false"><path d="M13.582,8.182C11.934,8.367,9.78,8.49,8.238,9.166c-1.781,0.769-3.03,2.337-3.03,4.644 c0,2.953,1.86,4.429,4.253,4.429c2.02,0,3.125-0.477,4.685-2.065c0.516,0.747,0.685,1.109,1.629,1.894 c0.212,0.114,0.483,0.103,0.672-0.066l0.006,0.006c0.567-0.505,1.599-1.401,2.18-1.888c0.231-0.188,0.19-0.496,0.009-0.754 c-0.52-0.718-1.072-1.303-1.072-2.634V8.305c0-1.876,0.133-3.599-1.249-4.891C15.23,2.369,13.422,2,12.04,2 C9.336,2,6.318,3.01,5.686,6.351C5.618,6.706,5.877,6.893,6.109,6.945l2.754,0.298C9.121,7.23,9.308,6.977,9.357,6.72 c0.236-1.151,1.2-1.706,2.284-1.706c0.584,0,1.249,0.215,1.595,0.738c0.398,0.584,0.346,1.384,0.346,2.061V8.182z M13.049,14.088 c-0.451,0.8-1.169,1.291-1.967,1.291c-1.09,0-1.728-0.83-1.728-2.061c0-2.42,2.171-2.86,4.227-2.86v0.615 C13.582,12.181,13.608,13.104,13.049,14.088z M20.683,19.339C18.329,21.076,14.917,22,11.979,22c-4.118,0-7.826-1.522-10.632-4.057 c-0.22-0.199-0.024-0.471,0.241-0.317c3.027,1.762,6.771,2.823,10.639,2.823c2.608,0,5.476-0.541,8.115-1.66 C20.739,18.62,21.072,19.051,20.683,19.339z M21.336,21.043c-0.194,0.163-0.379,0.076-0.293-0.139 c0.284-0.71,0.92-2.298,0.619-2.684c-0.301-0.386-1.99-0.183-2.749-0.092c-0.23,0.027-0.266-0.173-0.059-0.319 c1.348-0.946,3.555-0.673,3.811-0.356C22.925,17.773,22.599,19.986,21.336,21.043z"></path></svg>
						</button>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Subscribe -->
	<section id="subscribe" >
		<div class="wrapper">
			<div class="container pt-5 pb-5">
				<div class="row pt-5 pb-5">
					<div class="col-12 text-center pt-5 pb-5">
						<h2 class="pt-5 subtitle">Newsletter Subscribe</h2>
						<p class="pt-1 pb-4">Subscribe to the newsletter and get the first chapter of <i><strong>Call of Shadows</strong></i> for free in your inbox.</p>
						<?php echo(do_shortcode('[mc4wp_form id=8]')) ?>
					</div>
				</div>
			</div>

			<!-- Video -->
			<video id="background-video" loading="lazy" autoplay loop muted poster="<?php echo get_template_directory_uri(); ?>/images/Dungeon.mp4">
				<source src="<?php echo get_template_directory_uri(); ?>/images/Dungeon.mp4" type="video/mp4">
			</video>

			  <!-- Pause button -->
			<button type="pause-button" class="btn btn-dark pause-button" id="btn-pause-video" title="Pause/Play Video" alt="Pause video" onclick="pauseVidToggle()">
				<svg id="pause" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" class="bi bi-pause-fill" viewBox="0 0 16 16">
					<path d="M5.5 3.5A1.5 1.5 0 0 1 7 5v6a1.5 1.5 0 0 1-3 0V5a1.5 1.5 0 0 1 1.5-1.5m5 0A1.5 1.5 0 0 1 12 5v6a1.5 1.5 0 0 1-3 0V5a1.5 1.5 0 0 1 1.5-1.5"/>
				</svg>

				<!-- Play -->
				<svg id="play" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" class="hide bi bi-play-fill" viewBox="0 0 16 16">
					<path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393"/>
				  </svg>
			</button>
		</div>
	</section>

	<!-- About The Author -->
	<section id="about" class="bg-darkColor white pt-5 pb-5">
		<div class="container pt-5 pb-5">
			<div class="row pt-5 pb-5">
				<div class="col-md-12 col-lg-4 gx-5">
					<div class="img-div">
						<img alt="Author Photo" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/Author-Photo.jpg">
					</div>
					
				</div>
				<div class="col-md-12 col-lg-8 gx-5">
					<p class="topper about pt-3">About The Author</p>
					<h2 class="subtitle name">Meet CJ Kingsley</h2>
					<p class="author-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
					sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sollicitudin aliquam ultrices sagittis orci a 
					scelerisque purus semper. Massa sapien faucibus et molestie ac feugiat sed lectus.</p>
					<p class="author-description">Sollicitudin aliquam ultrices sagittis orci a 
						scelerisque purus semper. Massa sapien faucibus et molestie ac feugiat sed lectus.</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Contact with CF7 -->
	<section id="contact" class="bg-dark white" >
		<div class="container align-items-center">
			<div class="row align-items-center">
				<div class="image-col col-lg-5 col-md-12">
					
					<img class="the-image" loading="lazy" alt="Palace Background" src="<?php echo get_template_directory_uri(); ?>/images/Palace-Background.jpg">
				</div>
				
				<div class="col-lg-7 col-md-12 pt-5 pb-5 px-5 ">
					<h2 class="subtitle pt-5">Contact</h2>
					<p class="pt-1 pb-4">Please fill out the form below to contact CJ Kingsley.</p>
						<?php echo do_shortcode('[contact-form-7 id="76bfc21" title="ContactForm"]'); ?>
				</div>
				
			</div>
		</div>
	</section>		

	</main><!-- #main -->

<?php
get_footer();
