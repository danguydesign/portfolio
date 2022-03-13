<?php
if (isset($accordion)) {
  echo '<div class="accordion">';
  foreach($accordion as $item) {
?>

    <div class="accordion-section">

      <div class="accordion-section-header">
        <h2 class="accordion-heading heading-3"><?php if (isset($item['title'])) { echo $item['title']; }?></h2>
      </div>
      <div class="accordion-section-body">
        <p><?php if (isset($item['text'])) { echo $item['text']; }?></p>
      </div>

    </div>

<?php
  }
  echo '</div>';
}
?>
