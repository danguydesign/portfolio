<?php
function create_accordion($accordion, $heading_level = 'h2') {
  $html = '';
  if (isset($accordion)) {
    $html .= '<div class="accordion">';
    foreach($accordion as $item) {

    $html .=  '<div class="accordion-section">

        <div class="accordion-section-header">
          <'.$heading_level.' class="accordion-heading heading-3">';
          if (isset($item['title'])) {
            $html .= $item['title'];
          }
    $html .= '</'.$heading_level.'>
        </div>
        <div class="accordion-section-body">';
          if (isset($item['text'])) {
            $html .= $item['text'];
          }
    $html .= '</div>

      </div>';

    }
    $html .= '</div>';
  }
  return $html;
}
?>
