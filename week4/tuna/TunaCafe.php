<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tuna Cafe</title>
  </head>
  <body>
    <h1>Welcome to the Tuna Cafe Survey!</h1>
    <form action="TunaResults.php" method="get">
      <?php
        $menu = array(
          'Tuna Casserole',
          'Tuna Sandwich',
          'Tuna Pie',
          'Grilled Tuna',
          'Tuna Surprise'
        );
        $bestseller = 2;
        print 'Please indicate all your favourite dishes.<br>';
        for ($i = 0; $i < count($menu); $i++) {
          print "<input type=\"checkbox\" name=\"prefer[]\" value=$i>$menu[$i]";
          if ($i == $bestseller) {
            print '<font color=red>&nbspOur Best Seller!!!!</font>';
          }
          print '<br>';
        }
      ?>
      <input type="submit" name="" value="Submit">
      <input type="reset" name="" value="Reset">
    </form>
  </body>
</html>
