

<?php get_header();?>

<div class="wrap_error">

<div class="text_error">
  <div class="number_error">
    404
  </div>
  <p>Cette page n'existe pas ou plus.</p>
  <p>Nous nous excusons pour la gêne occasionnée et vous invitons à revenir à la <a class="link_error" href="<?php echo get_home_url(); ?>">page d'acceuil</a>.</p>

</div>

<div class="img_error">
  <img src="<?php echo get_theme_file_uri() . '/'?>" alt="">
</div>


</div>


<?php get_footer();?>
