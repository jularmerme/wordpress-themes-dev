<?php // Navigation //

  $theme_logo_URL = 'http://placehold.it/50x50';

  function themeLogo() {

    if ($theme_logo_URL) {
      echo '<img src="'.$theme_logo_URL.'" alt="Logo Image">';
    }
    else {
      echo '<h1>Dockerized WP</h1>';
    }
  }

?>

<!-- top-area Start -->
<header class="top-area">
  <div class="header-area">
    <!-- Start Navigation -->
      <nav class="navbar navbar-default bootsnav navbar-fixed dark no-background">

          <div class="container">

              <!-- Start Header Navigation -->
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                      <i class="fa fa-bars"></i>
                  </button>

                  <?php if($theme_logo_URL) {
                      echo '<a class="navbar-brand" href="index.html">julian</a>';
                    } else {
                      echo '<a href="' . site_url() . '" class="logo">';
                      echo themeLogo();
                      echo '</a>';
                    }
                  ?>

              </div><!--/.navbar-header-->
              <!-- End Header Navigation -->

              <!-- <a href="#" class="navigation-menu-button" id="js-mobile-menu">Menu</a> -->

              <!-- Collect the nav links, forms, and other content for toggling -->
              <!-- WP Menu creation funcion -->
              <?php
                wp_nav_menu( array(
                    'theme_location'	 => 'header-menu',
                    'container'			      => 'div',
                    'container_class'	 => 'collapse navbar-collapse menu-ui-design',
                    'container_id'     => "navbar-menu",
                    'menu_class'		   => 'nav navbar-nav navbar-right',
                    'add_li_class'      => 'smooth-menu',
                    'items_wrap'     => '<ul class="%2$s" data-in="fadeInDown" data-out="fadeOutUp">%3$s</ul>',
                  )
                );
              ?>

          </div><!--/.container-->
      </nav><!--/nav-->
      <!-- End Navigation -->
  </div><!--/.header-area-->

    <div class="clearfix"></div>

</header><!-- /.top-area-->
<!-- top-area End -->