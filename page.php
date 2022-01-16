<?php get_header(); ?>
    <main id="main-wrapper">
        <section class="container pt-5">
            <h5><?php the_title( ) ?></h5>
            <?php if (have_posts(  )):while (have_posts(  )) : the_post(  ); ?>

                <?php the_content( ); ?>

            <?php endwhile; endif;?>
        </section>
    </main>

<?php get_footer(); ?>