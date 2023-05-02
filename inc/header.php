<?php
// Start the session
session_start();

include __DIR__. "/functions.php";
include __DIR__. "/projects.php";
$styles = baseUrl() . "css/main.css";
$favicon = baseUrl() . "img/favicon-2.png";

?>

<!DOCTYPE html>

<html lang="en">
<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.typekit.net/xnr8rnt.css" media="all">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?php echo $styles ?>">
  <link rel="icon" type="image/png" href="<?php echo $favicon ?>">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <meta name="description" content="<?php

    if(isset($metaD) && !empty($metaD)) {
       echo $metaD;
    }
    else {
       echo "I am a UX Designer based in Nottingham, UK.";
    } ?>" />

  <title>
    <?php
      if(isset($title) && !empty($title)) {
         echo $title;
      }
      else {
         echo "Daniel Guy | UX Designer";
      }
    ?>
  </title>

  <?php
    if(isset($noIndex)) {
      echo '<meta name="robots" content="noindex,nofollow">';
    }
  ?>


</head>

<body class="black">
  <a class="skip-link" data-module="skip-link" href="#content">Skip to main content</a>
  <header>
    <div id="navbar" class="navbar">
      <a href="<?php echo baseUrl(); ?>" class="navbar__logo">
        <svg class="svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="30px" role="presentation">
          <path class="logo" d="M100 95c-24.9 0-45-20.1-45-45S75.1 5 100 5v90zM0 5c24.9 0 45 20.1 45 45S24.9 95 0 95V5z"/>
        </svg>
        <span class="logo__text">Daniel Guy</span>
      </a>
      <nav aria-label="main navigation">

        <ul id="menu">
          <li class="nav-item"><a href="<?php echo baseUrl(); ?>" class="<?php thisPage( baseUrl() ) ?>">Home</a></li>
          <li class="nav-item"><a href="<?php echo baseUrl() . 'resume.php' ?>" class="<?php thisPage('resume.php') ?>">Résumé</a></li>
          <li class="nav-item"><a href="<?php echo baseUrl() . 'about.php' ?>" class="<?php thisPage('about.php') ?>">About</a></li>
          <li class="nav-item"><a href="<?php echo baseUrl() . 'blog.php' ?>" class="<?php thisPage('blog.php') ?>">Blog</a></li>
          <li class="nav-item"><a href="<?php echo baseUrl() . 'contactme.php' ?>" class="<?php thisPage('contactme.php') ?>">Contact</a></li>
        </ul>

      </nav>
    </div>
  </header>

  <?php
    if (isset($backLink)) {
      $lastUrl = htmlspecialchars($_SERVER['HTTP_REFERER']);
      echo "<div class='before-content'>";
      echo "<a class='back-link' href='$lastUrl'>";
      echo '<svg class="svg" width="22" height="22" viewBox="0 0 22 22" aria-hidden="true" focusable="false">
              <rect class="arrow-top" height="12" width="20" y="12" x="0"/>
              <rect class="arrow-bottom" height="2" width="20" y="12" x="0"/>
              <rect class="arrow-line" height="2" width="20" y="12" x="0"/>
            </svg>';
      echo "back</a>";
      echo "</div>";
    }
  ?>

  <main id="content" class="col black" role="main">
