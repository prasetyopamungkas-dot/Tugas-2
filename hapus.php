<?php

include "config/database.php";

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM sneakers_0011 WHERE id='$id'");

header("location:index.php");

?>