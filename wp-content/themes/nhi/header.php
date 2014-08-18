<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title><?php wp_title(); ?></title>
    <link href="<?php echo get_stylesheet_directory_uri();?>/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="<?php echo get_stylesheet_directory_uri();?>/style.css" rel="stylesheet"/>
    <?php wp_head(); ?>
    <?php
    $curUrl='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    ?>
  </head>
  <body>
    <div class="row visible-xs text-center">
        <div class="col-md-12">
                  <a href="<?php echo get_home_url();?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" width="100px" style="margin-top: 10px;"/></a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
<nav class="navbar navbar-default" role="navigation">
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
      <ul class="nav navbar-nav header-menu">
                            <?php
                            $menu_name = 'header-menu';
                                if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
                                                $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
                                                $menu_items = wp_get_nav_menu_items($menu->term_id);
                                                
                                                    foreach ( (array) $menu_items as $key => $menu_item ) {
                                                        if($menu_item->url==$curUrl){
                                                            $menu_list .= '<li class="'.$menu_item->classes[0].' active"><a title="' .$menu_item->title. '" href="' .$menu_item->url. '">'.$menu_item->title.'</a><span>'.$menu_item->attr_title.'</span></li>';
                                                        }else{
                                                            $menu_list .= '<li class="'.$menu_item->classes[0].'"><a title="' .$menu_item->title. '" href="' .$menu_item->url. '">'.$menu_item->title.'</a><span>'.$menu_item->attr_title.'</span></li>';
                                                        }
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
    
    <div class="row area-search">
        <div class="col-md-1">
        &nbsp;
        </div>
        <div class="col-md-7 slogan">
        Roxy-Pacific Holdings presents a stunning freehold development located at 111 Tampines Road.
        </div>
        <div class="col-md-3 text-center">
        <input  type="text" class="txtsearch"/>
        <input  type="button" class="bntsearch" value="Search"/>
        </div>
        <div class="col-md-1">
        &nbsp;
        </div>
    </div>