<?php
/*
 * Template Name: review_page
 */

$title = get_the_title();
$content = get_the_content();
$args = ['post_type' => 'reviews', 'orderby' => 'date', 'order' => 'DESC', 'numberposts' => 20];
$reviewPosts = get_posts($args);




?>
     <ul>
        <li class="nav-item">
             <a href="http://jaswandwordpress/homepage/">Home</a>
        <li class="nav-item">
            <a href="http://jaswandwordpress/kikkervisje/">review</a>
        <li class="nav-item">
            <a href="http://jaswandwordpress/about-us/"">About us</a>  
    </ul>
<section class="cards" id="Categories">
            <h2 class="title"><?php echo $title ?></h2>
            <div class="content">
                <?php foreach($reviewPosts as $review): ?>
                <div class="card">
                <div class="img-card">
                    <?php $img = get_field('image', $review->ID);
                    ?>
                        <img src="<?php echo $img['url']; ?>" alt="">
                    </div>
                    <div class="info">
                        <h1><?php echo $review->post_title ?></h1>
                        <p><?php echo $review->post_content ?></p>
                        <p class="email-card"><?php echo get_field('email', $review->ID)?></p>

                        <a href="<?php echo get_field('url', 'email', $review->ID)?>"><button class="button-85" role="button"></button></a>
                        <p> <?php echo get_field('tekst',  $review->ID)?></p>
                    </div>
                </div>

                <?php endforeach ?>
            </div>
        </section>

