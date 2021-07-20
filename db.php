 <?php
  $mysqli = new mysqli("127.0.0.1", "root", "", "nasa");

   /* check connection */
   if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
     exit();
   }

  if ($result = $mysqli->query("SELECT ID from admin")) {

    /* determine number of rows result set */
     $row_cnt = $result->num_rows;

    printf("Result set has %d rows.\n", $row_cnt);

   /* close result set */
    $result->close();
 }

 /* close connection */
 $mysqli->close();
?>