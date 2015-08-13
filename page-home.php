<?php

/*
	Template Name: Home Page
*/

get_header();  ?>
<main class="home-wrapper">
	<div class="main">
	  <div class="container">

	    <?php // Start the loop ?>
	    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	      <h2><?php the_title(); ?></h2>
	      <?php the_content(); ?>

	    <?php endwhile; // end the loop?>
	  </div> <!-- /.container -->
	</div> <!-- /.main -->
</main><!--home-wrapper-->


<?php get_footer(); ?>