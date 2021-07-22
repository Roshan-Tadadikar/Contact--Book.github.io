<?php
session_start();
require_once('C:\xampp\htdocs\public\db-config\config.php');
?>



<?php

$select = "DELETE FROM persons where id='".$_GET['del_id']."'";
$query = mysqli_query($con, $select) or die($select);
header("Location: add.php");


?>