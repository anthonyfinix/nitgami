<?php # Template Name: Create Post 
?>
<?php

if ('POST' == $_SERVER['REQUEST_METHOD'] && !empty($_POST['action']) &&  $_POST['action'] == "new_post") {

    $new_post = array(
        'post_title'    => $_POST['title'],
        'post_content' => $_POST['content'],
        'post_status'   => 'publish',
    );

    wp_insert_post($new_post);
    echo get_bloginfo('url');
}

?>
<?php get_header(); ?>
<main id="main-wrapper">
    <section class="container pt-5">
        <h5 class="font-weight-bold"><?php the_title() ?></h5>
        <div id="postbox">
            <form id="new_post" name="new_post" method="post" action="">
                <input type="text" id="title" value="" placeholder="Post Title" tabindex="1" size="20" name="title" />
                <textarea name="content" cols="30" rows="10" placeholder="Post Contents"></textarea>
                <button type="submit">Submit</button>
                <input type="hidden" name="action" value="new_post" />
            </form>
        </div>
    </section>
</main>

<?php get_footer(); ?>