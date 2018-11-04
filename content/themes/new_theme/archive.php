<?php
/*
Template Name: Archives
*/
?>
<?php get_header();?>


<h1 style="text-transform: uppercase;">je suis la page archive.php</h1>

<?php $tab=[
        'title_li'        => '',
        'style'           => 'none',
        'echo'            => false,
        'show_option_all' => 'all'
];  ?>

<?php echo str_replace("<br />", "", wp_list_categories($tab) ); ?>

<?php if (have_posts()): while(have_posts()): the_post(); ?>




  <?php
  $args_query_recipe = [
  'post_type' => 'post',
  'posts_per_page' => 4,
  // 'category_name' => 'projet'
  ];
  $query_recipe = new WP_Query($args_query_recipe);
  if ($query_recipe->have_posts()):
  while($query_recipe->have_posts()):
  $query_recipe->the_post();?>

  <?php $category_projet = get_the_category();
  $categoryArticle_projet = $category_projet[0];
  $classCategory_projet = $categoryArticle_projet->slug;
  ?>



  <a href="<?php the_permalink(); ?>">
    <figure class="projets_wrapper_img_hover">
      <?php the_post_thumbnail(); ?>
      <figcaption class="<?php echo 'imghover' . $classCategory_projet ?>">

        <p>Pôle <?php $cat = get_the_category(); $cat = $cat[0]; echo $cat->cat_name;  ?></p>




        <?php the_title('<h3>', '</h3>' ); ?>
        <?php the_content(); ?>
      </figcaption>
    </figure>
  </a>
  <?php
  endwhile;
  endif;
  wp_reset_postdata();
  // $cat = get_the_category()
  //
  // var_dump($cat);
  ?>





<?php endwhile; endif; ?>



<?php get_footer();?>
