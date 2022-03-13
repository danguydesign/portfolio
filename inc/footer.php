</main>

<footer class="block">
  <div class="footer-container">

    <ul class="footer-nav-1 padding list-type-none">
      <li class="back-to-top"><a href="#" class="button--coral">Back to top</a></li>
    </ul>

    <hr>

    <div class="container">
      <section class="footer-row">
        <nav class="footer-section">
          <ul class="footer-nav-2 list-type-none">
            <li><a href="<?php echo baseUrl(); ?>" class="large-p <?php thisPage( baseUrl() ) ?>">Portfolio</a></li>
            <li><a href="resume.php" class="large-p <?php thisPage( 'resume.php' ) ?>">Résumé</a></li>
            <li><a href="blog.php" class="large-p <?php thisPage( 'blog.php' ) ?>">Blog</a></li>
            <li><a href="about.php" class="large-p <?php thisPage( 'about.php' ) ?>">About</a></li>
            <li><a href="contactme.php" class="large-p <?php thisPage( 'contactme.php' ) ?>">Contact</a></li>
          </ul>
        </nav>

        <div class="footer-section">
          <div class="footer-text-box">
            <h2 class="large-p margin-bottom-2">Projects:</h2>
            <ul class="list-type-none">
            <?php foreach($projects as $project) { ?>
              <li>
                <a href="<?php echo $project['href'] ?>" class="<?php thisPage( $project['href'] ) ?>"><?php echo $project['title'] ?></a>
              </li>
            <?php } ?>
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

<script src="js/scripts.js"></script>

</body>
</html>
