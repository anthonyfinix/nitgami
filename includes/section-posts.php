<section class="container py-5">
    <section class="post-carouse-wrapper">
        <?php $count = 0; ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <a href="<?php echo the_permalink() ?>" style="animation-delay:<?php echo (++$count/10).'s' ?>" class="single-post-wrapper mb-3 w-100">
                    <h5 class="post-title"><?php echo the_title() ?></h5>
                    <p class="post-excerpt"><?php echo get_the_excerpt() ?></p>
                    <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php echo the_post_thumbnail_url(); ?>" class="img-fluid" alt="">
                    <?php endif; ?>
                </a>
            <?php endwhile; ?>
        <?php else : ?>
            <h5> No posts at the moment </h5>
        <?php endif; ?>

    </section>
</section>