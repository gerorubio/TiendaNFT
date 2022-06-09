<?php
    $hostname = "localhost";
    $user = "root";
    $password = "";

    $mysqlConnection = mysqli_connect("$hostname", "$user", "$password");
    if ($mysqlConnection === false) {
      die("Not connected to database");
    } else {
      mysqli_select_db($mysqlConnection, "nfts");
    }
?>