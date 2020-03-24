<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tuna Cafe</title>
  </head>
  <body>
    <h1>Tuna Cafe Results Received</h1>
    <?php
      $menu = array(
        'Tuna Casserole',
        'Tuna Sandwich',
        'Tuna Pie',
        'Grilled Tuna',
        'Tuna Surprise'
      );
      $prefer = $_GET['prefer'];
      if (count($prefer) == 0) {
        print 'Oh no! Please pick something as your favourite!';
      } else {
        print '<br>Your selections were<ul>';
        foreach ($prefer as $item) {
          print "<li>$menu[$item]</li>";
        }
        print '</ul>';
      }
    ?>
  </body>
</html>
