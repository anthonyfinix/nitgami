<?php # Template Name: About Us ?>
<?php get_header(); ?>
    <main id="main-wrapper">
        <section class="container pt-5">
            <h5 class="font-weight-bold"><?php the_title( ) ?></h5>
            <?php if (have_posts(  )):while (have_posts(  )) : the_post(  ); ?>

                <?php the_content( ); ?>

            <?php endwhile; endif;?>
        </section>
    </main>

<?php get_footer(); ?>

