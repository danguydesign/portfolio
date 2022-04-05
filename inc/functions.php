<?php

// If string ends with
function endsWith($haystack, $needle) {
  $length = strlen($needle);
  return $length > 0 ? substr($haystack, -$length) === $needle : true;
}

// Get url
function getUrl() {
  if (isset($_SERVER['HTTPS'])) {
      $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
  } else {
      $protocol = 'http';
  }
  $url = $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
  return $url;
}

// Test if sever or local
function baseUrl() {
  if (strpos(getUrl(), "danguydesign.com")) {
    if (isset($_SERVER['HTTPS'])) {
      $home = "https://danguydesign.com/";
    } else {
      $home = "http://danguydesign.com/";
    }
  } else {
    $home = "/portfolio/";
  }
  return $home;
}

// If this page ends with $x then echo "this-page"
function thisPage($x) {
  $link = getUrl();
  if (endsWith($link, $x)) {
    echo "this-page";
  }
}

?>
