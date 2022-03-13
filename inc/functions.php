<?php

// $directoryURI = $_SERVER['REQUEST_URI'];
// $path = parse_url($directoryURI, PHP_URL_PATH);
// $components = explode('/', $path);
// $first_part = $components[1];

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
    $home = "https://danguydesign.com/";
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
