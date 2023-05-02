<?php
$page = "Experiment";
$title = $page;
$metaD = "";
$h1 = $title;

include 'inc/header.php';
include 'inc/cards.php';
include 'inc/accordion.php';
include_once 'inc/dbh.php';

?>

<header class="header header-small">
  <div class="">
    <h1 class="heading-1"><?php echo $h1 ?></h1>
  </div>
</header>

<section class="section-padding">
  <div class="col padding-double">
    <?php include 'inc/slider.php'; ?>
  </div>
</section>

<section class="section-padding">
  <div class="col padding-double">

  <?php
  $accordion = [];
  $accordion[] = [
    "title" => "Accordion 1 heading",
    "text" => "<p>Accordion content to be expanded <a href='#'>Link</a></p>"
  ];
  $accordion[] = [
    "title" => "Accordion 2 heading",
    "text" => "<p>Accordion content to be expanded</p>"
  ];
  echo create_accordion($accordion);
  ?>
  </div>
</section>

<section class="section-padding">
  <div class="col padding-double">
    <?php
      $date = new DateTime();
      echo $date->format('Y-m-d H:i:s');
    ?>

    <form class="" action="inc/post.php" method="post">
      <input type="text" name="subject" placeholder="Subject">
      <br>
      <input type="text" name="content" placeholder="Content">
      <br>
      <button type="submit" name="submit">Submit</button>
    </form>
    <?php
      //Select from database
      // $sql = "SELECT * FROM posts;";
      //
      // $result = mysqli_query($conn, $sql);
      // $check = mysqli_num_rows($result);
      //
      // if ($check > 0) {
      //   while ($row = mysqli_fetch_assoc($result)) {
      //     echo $row['subject'] . "<br>";
      //   }
      // }

      $data = "test";
      // Create a template
      $sql = "SELECT * FROM posts WHERE subject=?;";
      // Create a prepared statement
      $stmt = mysqli_stmt_init($conn);
      // Prepare the statement
      if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "SQL statement failed";
      } else {
        // Bind parameters to the placeholder
        mysqli_stmt_bind_param($stmt, "s", $data);
        // Run parameters inside db
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        // iterate through $result and echo
        while ($row = mysqli_fetch_assoc($result)) {
          echo $row['subject'] . ' = ' . $row['content'] . ' (posted at ' . $row['date'] . ')' . "<br>";
        }
      }
    ?>
  </div>
</section>

<?php
  include 'inc/projects.php';
  include 'inc/footer.php';
?>
