<?php
include 'header.php';
include 'connection.php';
$p_id= $_REQUEST['p_id'];
$edit ="SELECT * FROM pages WHERE p_id=$p_id";

$result = mysqli_query($connect, $edit);

$row = mysqli_fetch_assoc($result);
?>
<div class="container">
<h2><?php echo $row['p_title'] ; ?></h2>	
<p><?php echo $row['p_description'] ; ?></p>
</div>





<?php
 include 'footer.php';
?>