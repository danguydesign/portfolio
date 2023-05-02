<?php
include '../inc/cards.php';
include '../inc/accordion.php';

$page = "design-system";
$title = "Inclusive Patterns";
$metaD = "";
$h1 = $title;
$backLink = true;

$pageNav = [];
$pageNav[] = [
  "href" => "#accordion",
  "item" => "Accordion"
];
$pageNav[] = [
  "href" => "#cards",
  "item" => "Cards"
];
$pageNav[] = [
  "href" => "#error-summary",
  "item" => "Error summary"
];


ob_start();?>

<h2 id="accordion" class="heading-2">Accordion</h2>

<?php
$accordion = [];
$accordion[] = [
  "title" => "Accordion heading 1",
  "text" => "<p>Accordion content to be expanded</p>"
];
$accordion[] = [
  "title" => "Accordion heading 2",
  "text" => "<p>Accordion content to be expanded</p>"
];
$component = '<div class="padding padding-top-0">' . create_accordion($accordion) . '</div>';

$html = '
<pre tabindex="0"><code>
&lt;div class="accordion"&gt;

  &lt;div class="accordion-section"&gt;
    &lt;div class="accordion-section-header"&gt;
      &lt;h3 class="accordion-heading heading-3"&gt;Accordion title 1&lt;/h3&gt;
    &lt;/div&gt;
    &lt;div class="accordion-section-body"&gt;
      &lt;p&gt;Accordion content to be expanded&lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;div class="accordion-section"&gt;
    &lt;div class="accordion-section-header"&gt;
      &lt;h3 class="accordion-heading heading-3"&gt;Accordion title 2&lt;/h3&gt;
    &lt;/div&gt;
    &lt;div class="accordion-section-body"&gt;
      &lt;p&gt;Accordion content to be expanded&lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;

&lt;/div&gt;

</code></pre>
';

include '../inc/example.php';
?>


<h2 id="cards" class="heading-2">Cards</h2>

<?php
$cards = [];
$cards[] = [
  "date" => "27 September 2021",
  "title" => "Cards heading 1",
  "text" => "Cards content to be expanded"
];
$cards[] = [
  "date" => "27 September 2021",
  "title" => "Cards heading 2",
  "text" => "Cards content to be expanded"
];
$component = create_cards($cards, 'cards-2');

$html = '
<pre tabindex="0"><code>
&lt;ul class="cards cards-2"&gt;

  &lt;li class="card"&gt;
    &lt;div class="text-box padding-double"&gt;
      &lt;time class="coral-text"&gt;27 September 2021&lt;/time&gt;
      &lt;h3 class="heading-3 margin-top-0"&gt;Card 1 title&lt;/h3&gt;
      &lt;p class="margin-bottom-0"&gt;Card 1 paragraph text goes here.&lt;/p&gt;
    &lt;/div&gt;
  &lt;/li&gt;

  &lt;li class="card"&gt;
    &lt;div class="text-box padding-double"&gt;
      &lt;time class="coral-text"&gt;27 September 2021&lt;/time&gt;
      &lt;h3 class="heading-3 margin-top-0"&gt;Card 2 title&lt;/h3&gt;
      &lt;p class="margin-bottom-0"&gt;Card 2 paragraph text goes here.&lt;/p&gt;
    &lt;/div&gt;
  &lt;/li&gt;

&lt;/ul&gt;

</code></pre>
';

include '../inc/example.php';
?>


<h2 id="error-summary" class="heading-2">Error summary</h2>

<?php
$component = '
<div class="padding padding-top-0 padding-bottom-0">
  <span class="notification error">
    <h3 class="margin-bottom-2"><span class="visually-hidden">Error:</span> There was a problem!</h3>
    <ul class="list-type-none">
      <li class="menu-item">
        <a class="underline" href="">Name is required</a>
      </li>
      <li class="menu-item">
        <a class="underline" href="">Email is required</a>
      </li>
    </ul>
  </span>
</div>
';
$html = '
<pre tabindex="0"><code>
&lt;div class="padding padding-top-0 padding-bottom-0"&gt;
  &lt;span class="notification error"&gt;

    &lt;h3 class="margin-bottom-2"&gt;&lt;span class="visually-hidden"&gt;Error:&lt;/span&gt; There was a problem!&lt;/h3&gt;

    &lt;ul class="list-type-none"&gt;
      &lt;li class="menu-item"&gt;
        &lt;a class="underline" href=""&gt;Name is required&lt;/a&gt;
      &lt;/li&gt;
      &lt;li class="menu-item"&gt;
        &lt;a class="underline" href=""&gt;Email is required&lt;/a&gt;
      &lt;/li&gt;
    &lt;/ul&gt;

  &lt;/span&gt;
&lt;/div&gt;

</code></pre>
';

include '../inc/example.php';
?>

<?php
$content = ob_get_clean();
include '../layout-project.php';
?>
