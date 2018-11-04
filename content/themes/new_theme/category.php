<?php get_header();?>


<h1 style="text-transform: uppercase;">je suis la page category.php</h1>

<?php $tab=[
        'title_li'        => '',
        'style'           => 'none',
        'echo'            => false,
        'show_option_all' => 'all'
];  ?>

<?php $all_posts_url = get_post_type_archive_link('post'); ?>

<a href="<?php echo esc_url( $all_posts_url ); ?>">Show All</a>
<a href="<?php echo esc_url( home_url( '/wp/articles/' ) ); ?>">very all</a>


<?php echo str_replace("<br />", "", wp_list_categories($tab) ); ?>


<!-- Début de la Boucle. -->
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

 <!-- Ce qui suit teste si l'Article en cours est dans la Catégorie 3. -->
 <!-- Si c'est le cas, le bloc div reçoit la classe CSS "post-cat-three". -->
 <!-- Sinon, le bloc div reçoit la classe CSS "post". -->



 <?php if ( in_category('3') ) { ?>
           <div class="post-cat-three">
 <?php } else { ?>
           <div class="post">
 <?php } ?>

 <!-- Affiche le Titre en tant que lien vers le Permalien de l'Article. -->
 <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

 <!-- Affiche la Date. -->
 <small><?php the_time('F jS, Y'); ?></small>

 <!-- Affiche le corps (Content) de l'Article dans un bloc div. -->
 <div class="entry">
   <?php the_content(); ?>
 </div>

 <!-- Affiche une liste des Catégories des Articles séparées par des virgules. -->
 <p class="postmetadata">Posted in <?php the_category(', '); ?></p>
 </div> <!-- Fin du premier bloc div -->

 <!-- Fin de La Boucle (mais notez le "else:" - voir la suite). -->
 <?php endwhile; else: ?>

 <!-- Le premier "if" testait l'existence d'Articles à afficher. Cette -->
 <!-- partie "else" indique que faire si ce n'est pas le cas. -->
 <p>Sorry, no posts matched your criteria.</p>

 <!-- Fin REELLE de La Boucle. -->
 <?php endif; ?>
<?php get_footer();?>
