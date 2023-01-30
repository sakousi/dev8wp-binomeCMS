<?php get_header(); ?>
<header class="p-4">
    <h1 class="text-4xl font-bold">Les derniers articles de DC Rennes</h1>
</header>

<article>
<img src="">

</article>

<?php




$args= array(

    'post_type'=>'post',
    'posts_per_page'    => -1,
    'order'             => 'ASC'



);
// the query
$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>

    <!-- pagination here -->

    <!-- the loop -->
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <h2><?php the_title(); ?></h2>
    <?php endwhile; ?>
    <!-- end of the loop -->

    <!-- pagination here -->

    <?php wp_reset_postdata(); ?>

<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
