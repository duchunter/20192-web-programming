<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Search results</title>
  </head>
  <body>
    <?php
      $Search = $_POST['Search'];
      $host= '127.0.0.1';
      $user = 'test';
      $passwd = 'test';
      $database = 'test';
      $connect = mysqli_connect($host, $user, $passwd);
      $table_name = 'Products';
      print '<font size="5" color="blue">';
      print "$table_name Data</font><br>";
      $query = "SELECT * FROM $table_name WHERE (Product_desc = '$Search')";
      print "The query is <i>$query</i> <br>";
      mysqli_select_db($connect, $database);
      $results_id = mysqli_query($connect, $query);
      if ($results_id) {
        print '<br><table border=1>';
        print '<th>Num<th>Product<th>Cost<th>Weight <th>Count';
        while ($row = mysqli_fetch_row($results_id)) {
          print '<tr>';
          foreach ($row as $field) {
            print "<td>$field</td> ";
          }
          print '</tr>';
        }
      } else {
        die ("query=$Query Failed");
      }
      mysqli_close($connect);
    ?>
  </body>
</html>