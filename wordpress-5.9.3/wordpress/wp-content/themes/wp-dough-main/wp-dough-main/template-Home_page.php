<?php
/*
 * Template Name: Home_page
 */

$title = get_the_title();
$content = get_the_content();
$site = get_site_url();


?>

<body>
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
            <?php echo $content ?>
        </div>
        <div class="container">
            <img src="https://www.walibi.nl/sites/default/files/2020-07/%7Bec4c8a26-5cfb-4410-9be6-3d07b407c9e7%7D_Walibi_LG_HL_NI_2D_wit.png" alt="Walibi" width="100%" height="100%">

       
    
    <section class="cards" id="Categories">
        <h2 class="title">reviews</h2>
        <div class="content">
            <?php
            $args = ['post_type' => 'reviews', 'orderby' => 'date', 'order' => 'DESC', 'numberposts' => 2];
            $reviewPosts = get_posts($args);
            ?>
            <?php foreach($reviewPosts as $review): ?>
            <div class="card">
                <div class="img-card">
                    <?php $img = get_field('image', $category->ID);
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
         
</body>

