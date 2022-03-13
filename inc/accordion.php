<?php
function create_accordion($accordion) {
  $html = '';
  if (isset($accordion)) {
    $html .= '<div class="accordion">';
    foreach($accordion as $item) {

    $html .=  '<div class="accordion-section">

        <div class="accordion-section-header">
          <h2 class="accordion-heading heading-3">';
          if (isset($item['title'])) {
            $html .= $item['title'];
          }
    $html .= '</h2>
        </div>
        <div class="accordion-section-body">
          <p>';
          if (isset($item['text'])) {
            $html .= $item['text']; 
          }
    $html .= '</p>
        </div>

      </div>';

    }
    $html .= '</div>';
  }
  return $html;
}
?>
