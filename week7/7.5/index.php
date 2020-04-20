<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Validator</title>
  </head>
  <body>
    <?php
      $keys = array('email', 'url', 'phone');
      foreach ($keys as $key) {
        $err_name = $key . 'Err';
        if (array_key_exists($key, $_POST)) {
          $$key = $_POST[$key];
          $$err_name = "";
        } else {
          $$err_name = "$key is required";
          $$key = NULL;
        }
      }

      if ($email) {
        $email = test_input($email);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "Invalid email format";
        }
      }

      if ($url) {
        $url = test_input($url);
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $url)) {
          $urlErr = "Invalid URL";
        }
      }

      if ($phone) {
        $phone = test_input($phone);
        if (!preg_match("/^[0-9]*$/", $phone)) {
          $phoneErr = "Only numbers are allowed";
        }
      }

      function test_input($txt) {
        $txt = trim($txt);
        $txt = stripslashes($txt);
        $txt = htmlspecialchars($txt);
        return $txt;
      }
    ?>

    <form action="index.php" method="post">
      Email: <input type="text" name="email" value="<?php echo $email ?>">
      <span class="error"><?php echo $emailErr;?></span>
      <br><br>

      URL: <input type="text" name="url" value="<?php echo $url ?>">
      <span class="error"><?php echo $urlErr;?></span>
      <br><br>

      Phone Number: <input type="text" name="phone" value="<?php echo $phone ?>">
      <span class="error"><?php echo $phoneErr;?></span>
      <br><br>

      <input type="submit" value="SUBMIT">
    </form>
  </body>
</html>
