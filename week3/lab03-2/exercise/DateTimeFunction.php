<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Date time</title>
  </head>
  <body>
    <?php
      $keys = array('name1', 'name2', 'date1', 'date2');
      foreach ($keys as $key) {
        if (array_key_exists($key, $_POST)) {
          $$key = $_POST[$key];
        } else {
          $$key = '';
        }
      }

      function get_date($date_string) {
        try {
          if ($date_string == '') {
            return NULL;
          }
          return date_create($date_string);
        } catch (Exception $e) {
          return NULL;
        }
      }

      function get_diff_in_days($date1, $date2) {
        $diff = date_diff($date1, $date2);
        return $diff->format("%R%a days");
      }

      function get_diff_in_years($date1, $date2) {
        $diff = date_diff($date1, $date2);
        return $diff->format("%R%y years");
      }

      function get_age($date) {
        $diff = date_diff(date_create(), $date);
        return $diff->format("%y");
      }

      function display_info($name, $date) {
        $date_string = date_format($date, "l, F j, Y");
        $age = get_age($date);
        echo "<br>$name: $date_string - $age years old";
      }

      $bd1 = get_date($date1);
      $bd2 = get_date($date2);
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
      <table>
        <tr>
          <td>Name 1:</td>
          <td>
            <input type="text" name="name1" value="<?php echo $name1; ?>">
          </td>
        </tr>
        <tr>
          <td>Date 1:</td>
          <td>
            <input type="text" name="date1" value="<?php echo $date1; ?>">
          </td>
        </tr>
        <tr>
          <td>Name 2:</td>
          <td>
            <input type="text" name="name2" value="<?php echo $name2; ?>">
          </td>
        </tr>
        <tr>
          <td>Date 2:</td>
          <td>
            <input type="text" name="date2" value="<?php echo $date2; ?>">
          </td>
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
    <br>
    <?php
      if ($name1 && $bd1 && $name2 && $bd2) {
        display_info($name1, $bd1);
        display_info($name2, $bd2);
        $day_diff = get_diff_in_days($bd1, $bd2);
        $year_diff = get_diff_in_years($bd1, $bd2);
        echo "<br>Different in days: $day_diff";
        echo "<br>Different in years: $year_diff";
      } else {
        echo "Invalid date";
      }
    ?>
  </body>
</html>
