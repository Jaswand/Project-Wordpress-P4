<?php

$title = 'reviews archief';

$arguments = ['post_type' => 'reviews', 'numberposts' => 5, 'category' => 0, 'orderby' => 'date', 'order' => 'DESC'];
$reviewsItemCollection = get_posts($arguments);

render('views/templates/reviews-archive.php', compact('title', 'reviewsItemCollection'));


?>

<ul>
<?php foreach($listOfreviews as $reviews): ?>
    <li><?php echo $reviews->post_title ?></li>
    <a href="<?php echo get_field('url', $review->ID)?>">Klik op deze link</a>
    <?php endforeach; ?>
</ul>