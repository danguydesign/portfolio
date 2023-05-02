<?php
  include '../inc/header.php';
  require_once '../vendor/autoload.php';
?>

<header class="header header-small">
  <div class="">
    <h1 class="heading-1">Test blog</h1>
  </div>
</header>

<section class="col">
  <div class="col padding-double padding-bottom-4">

  <?php
  use RtfHtmlPhp\Document;

  $rtf = file_get_contents("test.rtf"); 
  $document = new Document($rtf); // or use a string directly

  use RtfHtmlPhp\Html\HtmlFormatter;
  $formatter = new HtmlFormatter();
  echo $formatter->Format($document);  
  ?>

  </div>
</section>

<?php
  include '../inc/footer.php';
?>
