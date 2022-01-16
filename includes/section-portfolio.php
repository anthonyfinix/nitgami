<section class="py-5 bg-gray-100">
    <div class="container mx-auto">
        <div class="pb-5">
            <p class="text-xl text-center font-bold">Creativity speaks itself</p>
            <p class="text-sm text-center font-medium">"Some of the awesome things created by our designers"</p>
        </div>
        
        <div id="portfolio_grid">
        <?php
        $posts = get_posts(['post_type'=>'portfolio','posts_per_page'=>'4']);
        $count = 0;
        $areaName = range("A","D");
        foreach($posts as $post){
            $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ),'full')[0];
        ?>
            <div
            class="hero_grid_item"
            style="
                background-image:url('<?php echo $featured_image?>');
                grid-area:<?php echo $areaName[$count] ?>
            "
            >
            </div>
        <?php
        $count++;
        };
        ?>
        </div>
    </div>
</section>