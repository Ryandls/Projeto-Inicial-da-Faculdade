<?php
include "connect.php";

$sql = mysqli_query($link,"select nome from aut_usuarios where id = '". $_SESSION['id']."'"; 
      echo "<script>alert('$sql')</script>"
?>