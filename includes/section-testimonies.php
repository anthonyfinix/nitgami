<section class="py-5 bg-gray-100">
    <div class="container">
        <div class="pb-5">
            <p class="text-xl text-center font-bold">From the clients' desk</p>
            <p class="text-sm text-center font-medium">"See what our clients think and say about our services"</p>
        </div>
        <div class="grid grid-cols-2 gap-10">
            <?php $posts = get_posts(['post_type'=>'review','posts_per_page'=>'4']);
                foreach($posts as $post){
                    $meta_details = get_post_meta($post->ID); ?>
                    <div class="flex flex-col bg-white rounded-md px-4 py-3 gap-2">
                        <div class="flex gap-1">
                            <?php for ($i=1; $i<=$meta_details['rating'][0]; $i++) { ?> <span class="material-icons text-yellow-500">star</span> <?php } ?>
                        </div>
                        <p class="text-sm"><?php echo $meta_details['review'][0] ?></p>
                        <p class="italic text-xs font-bold"><?php echo $meta_details['name'][0] ?></p>
                    </div>
                <?php
                };
            ?>
        </div>
        <div class="flex justify-center mt-5">
            <a href="<?php echo get_post_type_archive_link( "review" )?>" class="text-sm font-bold bg-black text-white px-4 py-2 rounded-full">View all review</a>
        </div>
    </div>
</section>