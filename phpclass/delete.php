

<?php 

include 'connection.php';

$id = $_REQUEST['p_id'];

$delete=" DELETE FROM pages WHERE p_id=$id";

$result = mysqli_query($connect, $delete);
// default function
header("location: all-pages.php");

?>
