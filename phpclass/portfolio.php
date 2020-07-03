
<?php
include 'header.php';
include 'connection.php';

$get_id_from_loop = 5;

// check if your click edit btn is working
//echo $get_id_from_loop;

//fetch data from database
$edit = " SELECT * FROM pages WHERE p_id = $get_id_from_loop";
$result = mysqli_query($connect, $edit);

$row = mysqli_fetch_assoc($result);


?>
<div class="container">

<h2><?php echo $row['p_title'];?></h2>
<p><?php echo $row['p_description'];?></p>

</div>





<?php include 'footer.php';
?>