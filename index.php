<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Banana
 */

get_header(); ?>

  <div id="primary" class="content-area container">
    <main id="main" class="site-main" role="main">
    <h1>I'm Back Bitches</h1>

    <div class="columns four">
      <div class="column">
        <h4>I'm a Column #1!</h4>
      </div>
      <div class="column">
        <h4>I'm a Column #2!</h4>
      </div>
      <div class="column">
        <h4>I'm a Column #3!</h4>
      </div>
      <div class="column">
        <h4>I'm a Column #4!</h4>
      </div>
      <div class="column">
        <h4>I'm a Column #5!</h4>
      </div>
      <div class="column">
        <h4>I'm a Column #6!</h4>
      </div>
      <div class="column">
        <h4>I'm a Column #7!</h4>
      </div>
      <div class="column">
        <h4>I'm a Column #8!</h4>
      </div>
      <div class="column">
        <h4>I'm a Column #9!</h4>
      </div>
      <div class="column">
        <h4>I'm a Column #10!</h4>
      </div>
      <div class="column">
        <h4>I'm a Column #11!</h4>
      </div>
      <div class="column">
        <h4>I'm a Column #12!</h4>
      </div>
    </div>

    <?php if ( have_posts() ) : ?>

      <?php /* Start the Loop */ ?>
      <?php while ( have_posts() ) : the_post(); ?>

        <?php
          /* Include the Post-Format-specific template for the content.
           * If you want to override this in a child theme, then include a file
           * called content-___.php (where ___ is the Post Format name) and that will be used instead.
           */
          get_template_part( 'content', get_post_format() );
        ?>

      <?php endwhile; ?>

      <?php the_posts_navigation(); ?>

    <?php else : ?>

      <?php get_template_part( 'content', 'none' ); ?>

    <?php endif; ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>