<?php

  // loop over projects
  foreach ($projects as $project) {

    if (isset($project['href'])) {
      $href = $project['href'];
      if ( strpos(getUrl(), $href) || getUrl() === $href ) {

        $projectIndex = array_search($project, $projects);
        $nextProject = $projectIndex + 1;
        $prevProject = $projectIndex - 1;
        echo '<div class="padding-double after-content">';

        if ( isset($projects[$prevProject]) ) {
          if (isset($projects[$prevProject]['href'])) {
            echo '<a id="prev" class="link" href="' . $projects[$prevProject]['href'] .'">Previous project</a>';     
          }         
        }
        if ( isset($projects[$nextProject]) ) {
          if (isset($projects[$nextProject]['href'])) {
            echo '<a id="next" class="link" href="' . $projects[$nextProject]['href'] .'">Next project</a>';     
          }
        }

        echo "</div>";
      }
    }

  }

?>

</main>

<footer class="block">
  <div class="footer-container">

    <!-- <ul class="footer-nav-1 padding list-type-none">
      <li class="back-to-top"><a href="#" class="button--coral">Back to top</a></li>
    </ul> -->

    <hr>

    <div class="container">
      <section class="footer-row">
        <nav class="footer-section">
          <ul class="footer-nav-2 list-type-none">
            <li><a href="<?php echo baseUrl(); ?>" class="large-p <?php thisPage( baseUrl() ) ?>">Home</a></li>
            <li><a href="<?php echo baseUrl() . 'resume.php' ?>" class="large-p <?php thisPage( 'resume.php' ) ?>">Résumé</a></li>
            <li><a href="<?php echo baseUrl() . 'about.php' ?>" class="large-p <?php thisPage( 'about.php' ) ?>">About</a></li>
            <li><a href="<?php echo baseUrl() . 'blog.php' ?>" class="large-p <?php thisPage( 'blog.php' ) ?>">Blog</a></li>
            <li><a href="<?php echo baseUrl() . 'contactme.php' ?>" class="large-p <?php thisPage( 'contactme.php' ) ?>">Contact</a></li>
          </ul>
        </nav>

        <div class="footer-section">
          <div class="footer-text-box">
            <h2 class="large-p margin-bottom-2">Projects:</h2>
            <ul class="footer-nav-2 list-type-none">
            <?php foreach($projects as $project) {
              if (!isset($project['published'])) { 
                if (!empty($project['href'])) {
                ?>
                <li>
                  <a href="<?php echo $project['href'] ?>" class="large-p <?php thisPage( $project['href'] ) ?>"><?php echo $project['title'] ?></a>
                </li>
            <?php }
                }
              } ?>
            </ul>
          </div>
        </div>

      </section>

      <section class="footer-col">
        <footer class="footer-section-2">
          <div class="footer-text-box">
            <p class="small-p">This site was designed and developed by Daniel Guy.</p>
          </div>
        </footer>
      </section>
    </div>

  </div>
</footer>
<?php $scripts = baseUrl() . "js/scripts.js"; ?>
<script src="<?php echo $scripts ?>"></script>

</body>
</html>
