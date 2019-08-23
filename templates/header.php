<header class="banner">
  <div class="container">
    <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
    <?php if ( function_exists( 'mltlngg_display_switcher' ) ) mltlngg_display_switcher(); ?>
    <nav class="nav-primary">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>
    <a href="#" id="burguer"></a>
    <nav class="nav-secondary oculto" id="nav-secondary">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav-m']);
      endif;
      ?>
    </nav>

  </div>
</header>
