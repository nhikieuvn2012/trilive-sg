<?php
 get_header();
 ?>
    
    <div class="row">
        <div class="col-md-1">&nbsp;</div>
        <div class="col-md-10 post-content">
            <h4 style="padding: 3px;margin: 3px;border-bottom: solid 1px gold;"><?php echo $post->post_title; ?></h4>
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