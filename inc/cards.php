<?php
if (isset($cards)) {
  //echo '<ul class="cards">';
  foreach($cards as $card) {
?>
    <li class="card">

        <?php if (isset($card['img'])) {?>
        <div class="image-box">
          <img src="<?php echo $card['img'] ?>" class="" alt="<?php echo $card['alt'] ?>">
        </div>
        <?php } ?>

        <div class="text-box padding-double">

          <?php if (isset($card['date'])) {?>
          <time class="coral-text"><?php echo $card['date'] ?></time>
          <?php } ?>

          <?php if (isset($card['title'])) {?>
          <h3 class="heading-3 margin-top-0">
            <?php
              if (isset($card['href'])) {
                echo '<a href="' . $card['href'] . '">';
              }
              echo $card['title'];
              if (isset($card['href'])) {
                echo '</a>';
              }
            ?>
          </h3>
          <?php } ?>

          <?php if (isset($card['text'])) {?>
          <p class="margin-bottom-0"><?php echo substr($card['text'], 0, 145) . (strlen($card['text']) >= 145 ? '…' : ''); ?></p>
          <?php } ?>

          <?php if (isset($card['bullets'])) {?>
          <ul class="ul margin-bottom-0">
            <?php foreach($card['bullets'] as $bullet) {
            echo "<li>" . $bullet . "</li>";
             } ?>
          </ul>
          <?php } ?>
        </div>

    </li>
<?php
    }
    //echo '</ul>';
  }
?>
