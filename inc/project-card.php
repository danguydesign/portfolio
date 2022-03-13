<?php
if (isset($projects)) {
  foreach($projects as $item) {?>
    <article class="block padding">
      <div class="light-black radius shadow">
        <a href="<?php echo $item['href'] ?>" class="sub-container align-center">
          <div class="img-box">
            <img src="<?php echo $item['img'] ?>">
          </div>
          <div class="text-box padding-1024 align-center">
            <h3 class="heading-3 margin-top-0"><?php echo $item['title'] ?></h3>
            <p class="normal-p margin-bottom-0"><?php echo $item['text'] ?></p>
          </div>
        </a>
      </div>
    </article>
<?php } } ?>
