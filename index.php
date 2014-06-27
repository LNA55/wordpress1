<?php get_header(); ?>

<!-- on met tous les éléments dans le nouveau document home.php -->

  <div class="container">
      <h1><?php wp_title( '', true); ?></h1>            
            <?php if (have_posts()) : ?>
              <?php while (have_posts()) : the_post(); ?>
                  <div class="excerpt">
                    <?php the_content(); ?>
                  </div>
              <?php endwhile; ?>
            <?php endif; ?>   
  </div>

<?php get_footer(); ?>
