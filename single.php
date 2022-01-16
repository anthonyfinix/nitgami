<?php get_header(); ?>
<main id="main-wrapper">
    <div id="single-post-wrapper">
        <div id="single-post-cover-image">
            <img src="<?php echo the_post_thumbnail_url(); ?>" class="img-fluid" alt="">
            <div class="container">
                <h1 class="post-title text-white"><?php the_title() ?></h1>
            </div>
        </div>
        <section class="container pt-5">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <p class="card-text"><?php the_content(); ?></br></p>
            <?php endwhile;
            endif; ?>
        </section>
    </div>
</main>

<?php get_footer(); ?>