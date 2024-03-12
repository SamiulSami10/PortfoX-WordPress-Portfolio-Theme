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

<div class="posts">
    <h2>Holy Ramadan Month Starts Today</h2>
    <img src="<?php echo get_template_directory_uri();?>/images/using laptop.jpg" alt="">
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic sapiente, dolorum facilis ut, nobis voluptatibus sint debitis saepe vitae cupiditate animi ratione eum ducimus recusandae? Voluptates autem hic eveniet sequi eius perspiciatis consequatur tempore voluptatem. Praesentium ex ut totam, autem, qui doloribus et odio unde illo nesciunt ab saepe tempora, non quae sint optio reprehenderit aut. Ratione fugit, illo deserunt tempora pariatur blanditiis corporis. Cum aliquam ipsum expedita consequuntur libero deserunt! Aperiam recusandae voluptatum hic magnam et porro provident commodi beatae maiores. Laudantium, magnam nisi? Quis, repudiandae suscipit sed illum quo, inventore aliquid officiis numquam, totam id aut nobis nemo?</p>
</div>





 <?php wp_footer(); ?>
</body>
</html>


