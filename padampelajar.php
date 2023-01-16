<?php
include "conn.php";
$id = $_GET['delete_id'];
$result = mysqli_query($con,"DELETE FROM info_pelajar WHERE ID='$id'");
 echo "<script>window.location='index.php'</script>";
?>
