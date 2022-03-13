<?php
if (isset($intro)) {
  foreach($intro as $item) { ?>
    <section class="col align-center">
      <div class="container padding-responsive">
        <div class="col-quarter padding padding-bottom-0">
          <h2 class="heading-2 margin-top-0 margin-bottom-0"><?php echo $item["title"] ?></h2>
        </div>
        <div class="col-threequarter padding">
          <p class="massive-p"><?php echo $item["text"] ?></p>
        </div>
      </div>
    </section>
<?php } } ?>
