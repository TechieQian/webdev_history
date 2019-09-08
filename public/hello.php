<html>
 <head>
  <title>PHP Test</title>
 </head>
 <?php
    $db_connection = pg_connect("host=localhost dbname=checklist user=postgres password=l0veJessica");
    $query = pg_query($db_connection, "SELECT text FROM items;");
    $num_rows = pg_num_rows($query);

?>
 <body>
   <form action="/action_page.php" method="get">
    <?php
        for ($i = 0 ; $i < $num_rows ; $i++ ) {
            $val = pg_fetch_result($query, $i, 0);
            echo "<input type='checkbox' /> $val <br />";
        }
    ?>
      <input type="submit" value="Submit" />
    </form>
 <?php echo '<p>Hello World</p>'; ?> 
 </body>
</html>