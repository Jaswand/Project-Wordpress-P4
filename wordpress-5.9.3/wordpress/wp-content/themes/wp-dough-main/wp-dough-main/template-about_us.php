<?php

/**
 * Template Name: about_us
**/

$title = get_the_title();
$content = get_the_content();

// render('views/templates/custom.php', compact('title', 'content'));

?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width-device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title><?php echo $title ?></title>
</head>
<body>
    <ul>
        <li class="nav-item">
             <a href="http://jaswandwordpress/homepage/">Home</a>
        <li class="nav-item">
            <a href="http://jaswandwordpress/kikkervisje/">review</a>
        <li class="nav-item">
            <a href="http://jaswandwordpress/about-us/"">About us</a>  
    </ul>
  <div class="about-section">
    <div class="inner-container">
      <h1><?php echo $title ?><h1>
        <p class="text">
        <?PHP echo $content ?>

          </p>
          <div class="skills">
            <div class="test">
            <div class="card">
              <img src="https://rutgerdijkstra.com/wp-content/uploads/RUTGER_DIJKSTRA.png" alt="Avatar" style="width:100%">
              <div class="container">
              <p>
              Lorem Ipsum ie like Aldus Pa
              geMaker including versions of Lorem Ipsum.
              </p>
                <h4>Sandur</h4>
              </div>
            </div>
            
            <div class="card">
              <img src="https://rutgerdijkstra.com/wp-content/uploads/RUTGER_DIJKSTRA.png" alt="Avatar" style="width:100%">
              <div class="container">
              <p>
              Lorem Ipsum ie like Aldus Pa
              geMaker including versions of Lorem Ipsum.
              Lorem Ipsum ie like Aldus Pa
              geMaker including versions of Lorem Ipsum.
              </p>
                <h4>Wob</h4> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </body>