<section class="container pt-5">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="card card-body mb-2">
                <h5 class="card-title"><?php the_title() ?></h5>
                <p class="card-text"><?php the_excerpt(); ?></br></p>
                <a href="<?php the_permalink() ?>">Read More</a>
            </div>
    <?php endwhile; endif; ?>
</section>