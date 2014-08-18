<?php
/**
 * Template Name:Home
 */
 get_header();
 ?>
 
    <div class="row">
        <div class="col-md-1">&nbsp;</div>
        <div class="col-md-12 area-slide">
            <?php layerslider(1);?>
        </div>
        <div class="col-md-1">&nbsp;</div>
    </div>
    
    <div class="row">
        <div class="col-md-1">&nbsp;</div>
        <div class="col-md-10 post-content">
            <?php echo apply_filters( 'the_content',$post->post_content); ?>
        </div>
        <div class="col-md-1">&nbsp;</div>
    </div>
    <a name="reg"></a>
    <div class="row area-form">
        <div class="col-md-1">&nbsp;</div>
        <div class="col-md-10 formbkregvip">
            <?php echo do_shortcode('[contact-form-7 id="21" title="Register VVIP Preview"]');?>
        </div>
        <div class="col-md-1">&nbsp;</div>
    </div>
    
<?php
get_footer();
?>