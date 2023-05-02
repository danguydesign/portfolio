<?php
function create_cards($cards, $cols = 'cards-4') {
    $out = '';
    if (isset($cards)) {
      $out .= '<ul class="cards ' . $cols . '">';

      foreach($cards as $card) {

          $out .= '<li class="card">';

            if (isset($card['img'])) {
              $out .= '<div class="image-box"'; 
              if (isset($card['background'])) {
                $out .= 'style="background: ' . $card['background'] . '";'
;
              }
              $out .= '>';
              $out .= '<img src="' . $card['img'] . '" class="" alt="' . $card['alt'] . '">
                </div>';
            }

            if (isset($card['svg'])) {
              $out .= '
                <div class="image-box" style="background-color: ' . $card['background'] . ';">' 
                . file_get_contents( $card['svg'] ) . 
                '</div>';
            }

            $out .= '<div class="text-box padding-double">';

            if (isset($card['date'])) {
              $out .= '<time class="coral-text">' . $card['date'] .  '</time>';
            }

            if (isset($card['status'])) {
              $out .= '<strong class="tag">' . $card['status'] .  '</strong>';
            }

            if (isset($card['title'])) {
              $out .= '<h3 class="heading-3 margin-top-0">';

              if (isset($card['href'])) {
                $out .= '<a href="' . $card['href'] . '">';
              }
              $out .= $card['title'];
              if (isset($card['href'])) {
                $out .= '</a>';
              }

              $out .= '</h3>';
            }

            if (isset($card['text'])) {
              $out .= '<p class="margin-bottom-0">'; $out .= substr($card['text'], 0, 145); $out .= (strlen($card['text']) >= 145 ? '…' : ''); $out .= '</p>';
            }

            if (isset($card['bullets'])) {
              $out .= '<ul class="ul margin-bottom-0">';
              foreach($card['bullets'] as $bullet) {
                $out .= "<li>" . $bullet . "</li>";
              }
              $out .=  '</ul>';
            }
            $out .= '</div>';

            $out .= '</li>';

          }
      }

      $out .= '</ul>';

      return $out;
}
?>
