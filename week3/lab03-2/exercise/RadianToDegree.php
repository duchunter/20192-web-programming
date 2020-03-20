<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Converter</title>
  </head>
  <body>
    <?php
      function rad_to_dec($val) {
        return $val * 3.14;
      }
      function dec_to_rad($val) {
        return $val / 3.14;
      }
      if (array_key_exists('mode', $_POST)) {
        $mode = $_POST['mode'];
      } else {
        $mode = 0;
      }
      if (array_key_exists('val', $_POST)) {
        $val = $_POST['val'];
      } else {
        $val = 0;
      }
      if (is_numeric($val)) {
        if ($mode == 0) {
          $result = rad_to_dec($val);
        } else {
          $result = dec_to_rad($val);
        }
      } else {
        $result = '';
      }
    ?>
    <h1>Converter</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
      <table>
        <tr>
          <td>Convert mode:</td>
          <td>
            <input type="radio" name="mode" value="0"> Rad to Deg
            <input type="radio" name="mode" value="1"> Deg to Rad
          </td>
        </tr>
        <tr>
          <td>Enter value:</td>
          <td>
            <input type="text" name="val" value="<?php echo $val ?>">
          </td>
        </tr>
        <tr>
          <td>Result:</td>
          <td><?php echo $result ?></td>
        </tr>
        <tr>
          <td align="right">
            <input type="submit" value="Submit">
          </td>
          <td align="left">
            <input type="reset" value="Reset">
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>
