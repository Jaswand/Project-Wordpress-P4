<?php
/** @var string $title */
/** @var string $content */
/** @var array $buttonGroup */

if(!$buttonGroup){
    $buttonGroup = null;
}
?>

<div class="home">

    <?php if($title): ?>
        <h1><?php echo $title; ?></h1>
    <?php endif; ?>

    <hr>

    <?php if($content): ?>
        <?php echo $content; ?>
    <?php endif; ?>

    <?php if($buttonGroup): ?>
        <?php render('views/molecules/button-collection.php', compact('buttonGroup')); ?>
    <?php endif; ?>

</div>
