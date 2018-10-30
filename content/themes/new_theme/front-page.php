<?php get_header();?>



<h1 style="text-transform: uppercase;">je suis la front-page</h1>











              <?php if (have_posts()): while(have_posts()): the_post(); ?>

                <!-- <?php $category = get_the_category();
                $categoryArticle = $category[0];
                $classCategory = $categoryArticle->slug;
                ?> -->

              <div class="actu_wrapper_box">

                <a href="<?php the_permalink(); ?>">
                  <figure class="actu_wrapper_img_hover">
                    <?php the_post_thumbnail(); ?>
                    <figcaption class="<?php echo 'imghover' . $classCategory ?>">
                      <i class="fa fa-angle-right"></i>
                    </figcaption>
                  </figure>
                </a>
                <div class="<?php echo 'color' . $classCategory ?>">
                  <?php the_title('<h3>', '</h3>' ); ?>

                </div>
                <div class="actu_wrapper_box_desc">
                  <span class="actu_wrapper_box_date"><?php echo get_the_date('d,m,Y'); ?></span> - <span class="actu_wrapper_box_author"> <?php the_author(); ?></span>
                </div>
                <div class="actu_wrapper_box_p">
              <?php the_excerpt(); ?>
                </div>

                <a href="<?php the_permalink(); ?>" class="<?php echo 'permalink' . $classCategory ?>"> lire la suite </a>

              </div>



              <?php endwhile; endif; ?>



<br>
<br>
<br>


<hr>
<hr>
<hr>



<br>
<br>
<br>
<!-- ///////////// -->
<!-- Boucle Custom -->
<!-- ///////////// -->

              <?php
              $args_query_recipe = [
              'post_type' => 'projet',
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
                    <?php the_excerpt(); ?>
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




<?php get_footer();?>
