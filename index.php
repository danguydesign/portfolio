<?php
  $page = "home";
  $title = "Dan Guy | Human-centered Designer";
  $metaD = "";
  include 'inc/header.php';
  include 'inc/cards.php';
  include 'inc/accordion.php';

  // Set redirect so that GET values can be used to set session data
  if ( strpos(getUrl(), "show=all") ) {
      $_SESSION['all'] = "true";
      // $_SESSION['show'] = "all";
      // header("Location: " . baseUrl() . "?all=true");
      //exit;
  } 
  
  // else if ( strpos(getUrl(), "all=false") ) {
  //     header("Location: " . baseUrl() . "?show=none");
  //     exit;
  // }

  // Conditionally set session values to show private projects
  // if ( filter_input( INPUT_GET, "all", FILTER_SANITIZE_STRING ) == "true" ) {
  //   $_SESSION['all'] = "true";
  //   $_SESSION['show'] = "all";
  // } 

?>

<header class="header">
  <div class="header-text-box">
    <h1 class="heading-1">I believe in <span class="italic coral-text">ethical</span>, human-centred design.</h1>
  </div>
</header>

<section class="col">

  <section class="col">
    <div class="col padding-double padding-bottom-0">
      <h2 class="heading-2 margin-bottom-0" id="about">About me</h2>
    </div>
    <div class="row padding-responsive">
      <div class="col-third padding">
        <div class="img-box radius">
          <img src="img/about/me-x.jpg" alt="Daniel Guy" class="portrait-img">
        </div>
      </div>

      <div class="col-twothird">
          <div class="text-box">
            <p class="massive-p margin-bottom-0">I am a human-centred designer who has delivered products and services in both the private and public sectors. I have improved usability and conversion rate for ecommerce websites and have designed public facing Government services that are fit for the future. I specialise in form design and prototyping. <a class="blue-text" style="font-weight: 400;" href="about.php">Find out more about me</a>.</p>
          </div>
      </div>
    </div>
  </section>

  <section class="col">
    <div class="col padding-double padding-bottom-4">
      <h2 class="heading-2 margin-bottom-0" id="portfolio">My work</h2>
    </div>
    <div class="row padding-responsive">
      <?php
        echo create_cards($projects, 'cards-1');
      ?>
    </div>
  </section>

  <!-- <section class="section-padding">
      <div class="col padding-double">
          <h2 class="heading-2">Live work</h2>
          <ul class="list-type-none list-spaced">
            <li><a href="https://fordandguy.co.uk/" target="_blank" class="coral-hover large-p underlined menu-item">Ford & Guy (2022)</a></li>
            <li><a href="https://cewe-photoworld.com/" target="_blank" class="coral-hover large-p underlined menu-item">CEWE (2019)</a></li>
            <li><a href="https://cewe-photoworld.com/blog" target="_blank" class="coral-hover large-p underlined menu-item">CEWE blog (2019)</a></li>
            <li><a href="https://www.korb.com.au/shop" target="_blank" class="coral-hover large-p underlined menu-item">Korb (2017)</a></li>
            <li><a href="https://www.rdcaviation.com/" target="_blank" class="coral-hover large-p underlined menu-item">RDC Aviation (2016)</a></li>
          </ul>
      </div>
  </section> -->

<?php
  include 'inc/footer.php';
?>
