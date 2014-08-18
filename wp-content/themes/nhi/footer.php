      <div class="row footer-top text-center">
        <div class="col-md-12 connect-site">
            Connect with My Site 
            <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cta-email.png" /></a>
            <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cta-facebook.png" /></a>
            <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cta-twitter.png" /></a>
            <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cta-google-plus.png" /></a>
            <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images//cta-linkedin.png" /></a>
            <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cta-youtube.png" /></a>
        </div>
        <div class="col-md-1">&nbsp;</div>
        <div class="col-md-3 f-area f-left">
           <a href="<?php echo get_home_url(); ?>/photo-gallery/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/connect-photo.png" /></a>
        </div>
        <div class="col-md-4 f-area">
           <a href="<?php echo get_home_url(); ?>/blog/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/connect-blog.png" /></a>
        </div>
        <div class="col-md-3 f-area f-right">
            <a href="<?php echo get_home_url(); ?>/guest-reviews/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/connect-reviews.png" /></a>
        </div>
        <div class="col-md-1">&nbsp;</div>
      </div>
      

   
      <!-- Example row of columns -->
      <div class="row footer text-center mobile">
            <div class="col-md-12">
                <nav class="navbar navbar-default nav-footer" role="navigation">
                  <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                    </div>
                
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav">
                            <?php
                            $menu_name = 'footer-menu';
                            $menu_list='';
                                if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
                                                $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
                                                $menu_items = wp_get_nav_menu_items($menu->term_id);
                                                    foreach ( (array) $menu_items as $key => $menu_item ) {
                                                    $menu_list .= '<li><a title="' .$menu_item->title. '" href="' .$menu_item->url. '">'.$menu_item->title.'</a></li>';
                                                    }
                                                
                                }
                            echo ($menu_list);
                            ?>
                      </ul>
                    </div><!-- /.navbar-collapse -->
                  </div><!-- /.container-fluid -->
                </nav>
            </div>
      </div>

      <div class="row footerinfor text-center">
            <div class="col-md-12 text-middle">
            <p>
            © 2014 TRILIVE @ 111 Tampines Road (Kovan). All rights reserved. | For Sales Enquiry Call:<strong> +65 9232-7888 / +65 9782-6939</strong><br />
            Disclaimer | Privacy Policy | Contact Us<br />
            SEO Perfected by <strong>Xportal</strong><br />
            </p>
            </div>
      </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri();?>/js/bootstrap.min.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>