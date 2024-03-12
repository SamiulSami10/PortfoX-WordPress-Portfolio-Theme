<!DOCTYPE html>
<html <?php language_attributes();?>  >
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href=" <?php echo get_template_directory_uri(); ?>/style.css">

    <title><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>

    <?php wp_head(); ?>

</head>
<body <?php body_class();?> >


 <!-- Showing website's title  -->
 <!-- <h2><?php bloginfo( 'name' ) ?></h2> --> 

 <!-- showing website's tagline  -->
 <!-- <h2><?php bloginfo( 'description' ) ?></h2> -->

 <!-- showing website's home page url  -->
 <!-- <p><?php bloginfo( 'home' ) ?></p> -->

 <!-- showing website's url  -->
 <!-- <p><?php bloginfo( 'url' ) ?></p> -->
 
 <!-- <img src=" <?php header_image(); ?> " alt=""> -->
  


<!-- Making menu dynamic  -->

<?php 
wp_nav_menu( [
    'theme_location' => 'mainmenu',
    'container_class' => 'header_class',
    'container_id' => 'header_id',
    'menu_class' => ' ',
    'menu_id' => ' ',

]);

?>




<!-- Making Sidebar Dynamic  -->

<!-- <div class="left-sidebar">
    
<?php dynamic_sidebar('ls'); ?>

</div>


<div class="right-sidebar">

<?php dynamic_sidebar('rs'); ?>

</div> -->





 

<!-- Custom Post Dynamic  -->



<?php while (have_posts()) : the_post(); ?>



<div class="posts">
    <h2><?php the_title(); ?></h2>
    <?php the_post_thumbnail(); ?>
    <p><?php the_excerpt(); ?></p>
    <p><?php the_content(); ?></p>
</div>


<?php endwhile ;?>




 <?php wp_footer(); ?>
</body>
</html>


