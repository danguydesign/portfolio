<?php
include_once 'dbh.php';

$date = new DateTime();
$name = filter_input( INPUT_POST, "name", FILTER_SANITIZE_STRING );

$subject = filter_input( INPUT_POST, "subject", FILTER_SANITIZE_STRING );
$content = filter_input( INPUT_POST, "content", FILTER_SANITIZE_STRING );
$time = $date->format('Y-m-d H:i:s');

// Post to database
$sql = "INSERT INTO posts (subject, content, date) VALUES (?, ?, ?);";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
  echo "SQL error";
} else {
  mysqli_stmt_bind_param($stmt, "sss", $subject, $content, $time);
  mysqli_stmt_execute($stmt);
}

header("Location: ../experiment.php?post=success");

?>
