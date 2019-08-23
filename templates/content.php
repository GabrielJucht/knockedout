<article <?php post_class(); ?>>
	<?php if ( has_post_thumbnail() ) { ?>
      <div class="featured-image">
         <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail( 'featured-image' ); ?></a>
      </div>
   <?php } ?>
  <div class="der"> 
	  <header>
	    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	    <?php get_template_part('templates/entry-meta'); ?>
	  </header>
	  <div class="entry-summary">
	    <?php the_excerpt(); ?>
	    <a href="<?php the_permalink(); ?>" class="ver-mas">Ver más</a>
	  </div>
  </div>
</article>
