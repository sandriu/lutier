<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<meta name="description" content="Violinmaker Felix Daniel Rotaru creates violins, violas and violoncelli following the classical italian tradition for the most demanding musicians. All his instruments are entirely handmade using traditional tools and methods. His limited production is available to try and purchase in his shop in Vienna, Austria." />
<meta name="keywords" content="violin, violino, geige, violon, viola, alto, bratsche, violoncello, cello, Stradivari, Guarneri, Bergonzi, Montagnana, Guadagnini, handmade, luthier,  lutier, liutaio, violinmaker, geigenbauer, violin maker, Lutherie, violinmaking, geigenbau, liuteria, Vienna, Austria" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>?v=2383" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/jplayerClassicalSkin.css" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.jplayer.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jplayer.playlist.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/mine.js"></script>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>

<!-- Google Analytics -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-26549376-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed">
	<header id="branding" role="banner">
			
                      	       <!-- ################### place for logo ####################### -->
                               <section id="my_logo">
				 
                                  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                    <img src="/../wp-content/uploads/2011/11/logo_8c1f07.png" width="245" height="138"/>
                                  </a>
                                  <p id="siteDescription">Fine String Instruments In The Italian Tradition</p>
                               </section>
 

                               <!-- ####################### section for mp3 player ################## -->
                               <section id="my_mp3_player">
				  <div id="jquery_jplayer_1" class="jp-jplayer"></div> 
 
				<div id="jp_container_1" class="jp-audio"> 
				<div class="jp-type-playlist"> 
				<div class="jp-gui jp-interface"> 
					<ul class="jp-controls"> 
						<li><a href="javascript:;" class="jp-previous" tabindex="1" title="Previous song">previous</a></li> 
						<li><a href="javascript:;" class="jp-play" tabindex="2">play</a></li> 
						<li><a href="javascript:;" class="jp-pause" tabindex="3">pause</a></li> 
						<li><a href="javascript:;" class="jp-next" tabindex="4" title="Next song">next</a></li> 
						<!-- li><a href="javascript:;" class="jp-stop" tabindex="5">stop</a></li --> 
						<li>
							<div class="jp-progress"> 
								<div class="jp-seek-bar"> 
									<div class="jp-play-bar"></div> 
								</div> 
							</div>
						</li>
						<li><a href="javascript:;" class="jp-mute" tabindex="6">mute</a></li> 
						<li><a href="javascript:;" class="jp-unmute" tabindex="7">unmute</a></li> 
						
					</ul>
					
				</div> 
				<div class="jp-playlist"> 
					<ul> 
						<li></li> 
					</ul> 
				</div> 
				<!-- no Flash required :) --> 
				</div> 
				</div> 	 
			       </section>      
           

                               <!--######################### area for testimonials ################# -->
		               <section id="my_testimonials">
                                    <p id="my_paragraph">
				        <?php
                                        $quotes = array(array('author' => 'Olga Semenova', 'text' => '"Solistic, rich, deep sound. Easy to play. A truly complete instrument!"'),
						        array('author' => 'Adelina Oprean', 'text' => '"The violin is great, I play it regularly alongside my Storioni instrument, they complete each other lovely."'), array('author' => 'Krzysztof Khorzelsky', 'text' => '"I am very impressed, you did a great, great job!"')
					          /** add more quotes here here **/
					);
                                        $i = rand(0, count($quotes) - 1);
                                        printf("%s<br/><span style=\"font-weight: bold\">%s</span>", $quotes[$i]['text'], $quotes[$i]['author']);
				        ?>
                                    </p>
                                </section>
                                <!--end area for testimonials-->
		                          

			<nav id="access" role="navigation">
				<h3 class="assistive-text"><?php _e( 'Main menu', 'twentyeleven' ); ?></h3>
				<?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff. */ ?>
				<div class="skip-link"><a class="assistive-text" href="#content" ><?php _e( 'Skip to primary content', 'twentyeleven' ); ?></a></div>
				<div class="skip-link"><a class="assistive-text" href="#secondary"><?php _e( 'Skip to secondary content', 'twentyeleven' ); ?></a></div>
				<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assiged to the primary position is the one used. If none is assigned, the menu with the lowest ID is used. */ ?>
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav><!-- #access -->
	</header><!-- #branding -->


	<div id="main">
