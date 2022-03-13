<section class="block section-padding">
  <div class="container">
    <div class="col-third col-padding-left">
      <div class="page-nav radius fixed shadow">
        <h2 class="heading-2 margin-top-0">Index</h2>
        <ul class="list-type-none list-spaced">
          <?php foreach($pageNav as $item) {?>
            <li>
              <a href="<?php echo $item['href'] ?>" class="large-p underline">
                <?php echo $item['item'] ?>
              </a>
            </li>
          <?php } ?>
        </ul>
      </div>
    </div>

    <div class="col-twothird col-padding-right">
      <div class="text-box max-width">
        <?php echo $content ?>
      </div>
  </div>
</section>
