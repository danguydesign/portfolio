<?php
$page = "contact";
$title = "Contact Me";
$metaD = "";
include 'inc/header.php';

// define variables and set to empty values
$name = $subject = $email = $message = "";
$emailsend = "";
$errors = [];
// $errors['nameErr'] = [];
// $errors['emailErr'] = [];
$response = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get input values and sanitise them
   $name = filter_input( INPUT_POST, "name", FILTER_SANITIZE_STRING );
   $subject = filter_input( INPUT_POST, "subject", FILTER_SANITIZE_STRING );
   $email = filter_input( INPUT_POST, "email", FILTER_SANITIZE_STRING );
   $message = filter_input( INPUT_POST, "message", FILTER_SANITIZE_STRING );

   if (empty($name)) {
     $errors['nameErr'] = [
       "err" => "Name is required",
       "href" => "#name"
     ];
   } else {
     $name = test_input($_POST["name"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
       $errors['nameErr'] = [
         "err" => "Letters and spaces only",
         "href" => "#name"
       ];
     }
   }

   if (empty($email)) {
     $errors['emailErr'] = [
       "err" => "Email is required",
       "href" => "#email"
     ];
   } else {
     $email = test_input($_POST["email"]);
     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $errors['emailErr'] = [
         "err" => "Invalid email format",
         "href" => "#email"
       ];
     }
   }

   if (empty($message)) {
     $errors['messageErr'] = [
       "err" => "Message is required",
       "href" => "#message"
     ];
   } else {
     $message = test_input($_POST['message']);
   }

   if (empty($errors)) {
       $mailTo = "danguydesign@gmail.com";
       $headers = "From: ". $email;
       $txt = "You have recieved an email from ".$name.".\n\n".$message;
       $emailsend = mail($mailTo, $subject, $txt, $headers);
       //header("Location: contactme.php");
    } else {
      $response = '<span class="notification error"><strong><span class="visually-hidden">Error:</span> There was a problem!</strong>';
      $response .= '<ul class="list-type-none">';
      foreach ($errors as $error){
        $response .= '<li class="menu-item"><a class="underline" href="' . $error['href'] . '">' . $error['err'] . '</a></li>';
      }
      $response .= '</ul>';
      $response .= '</span>';
    }

    if($emailsend){
      $name = $subject = $email = $message = "";
      $response = '<span class="notification success"><strong><span class="visually-hidden">Success:</span> Your message was sent!</strong></span>';
    }

 }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

  <header class="header header-small">
    <?php if($emailsend) {
      echo $response;
    } else {
     echo $response;
    }?>
    <div>
      <h1 class="heading-1">Contact me</h1>
    </div>
  </header>

  <section class="col padding-responsive">
    <div class="sub-container">
      <section class="col-third">
        <div class="text-box-2">
          <p class="large-p weight400">Thanks for stopping by. If you'd like to get in touch, just ping me an email by filling out this form:</p>
        </div>
      </section>

      <section class="col-twothird">
        <form class="text-box padding max-width" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
          <div class="field<?php echo (!empty($errors)) ? ' field-error' : ''; ?>">
            <label id="name-label" for="name">Name</label>
            <?php echo (!empty($errors['nameErr']['err'])) ? $errors['nameErr']['err'] : ''; ?>
            <input id="name" name="name" type="text" value="<?php echo $name; ?>" autocomplete="name">
          </div>
          <div class="field<?php echo (!empty($errors)) ? ' field-error' : ''; ?>">
            <label id="email-label" for="email">Email address</label>
            <?php echo (!empty($errors['emailErr']['err'])) ? $errors['emailErr']['err'] : ''; ?>
            <input id="email" name="email" type="email" value="<?php echo $email; ?>" autocomplete="email">
          </div>
          <div class="field">
            <label for="subject">Subject</label>
            <input id="subject" name="subject" type="text" value="<?php echo $subject; ?>">
          </div>
          <div class="field<?php echo (!empty($errors)) ? ' field-error' : ''; ?>">
            <label id="message-label" for="message">Message</label>
            <?php echo (!empty($errors['messageErr']['err'])) ? $errors['messageErr']['err'] : ''; ?>
            <textarea id="message" name="message" type="text" rows="5"><?php echo $message; ?></textarea>
          </div>

          <button type="submit" name="submit" class="form-button">Send Email</button>
        </form>
      </section>
    </div>

  </section>

  <footer class="container">
    <section class="col-third align-bottom">
      <div class="text-box padding-1024">
        <h2 class="heading-4">Social links</h2>
        <p><a href="http://linkedin.com/in/daniel-guy-120621b5/">LinkedIn</a></p>
      </div>
    </section>
  </footer>

<?php
  include 'inc/footer.php';
?>
