<?php
include 'connection.php';


// <!-- select query used to go database and get table that you have created -->
$allpages = "SELECT * FROM pages";
$result = mysqli_query($connect, $allpages);

// use loop
?>
<div class="container">
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">page id</th>
      <th scope="col">page title</th>
      <th scope="col">page description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
<?php
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
?>
    <tr>
      <th scope="row"><?php echo$row["p_id"];?></th>
      <td><?php echo $row["p_title"];?></td>
      <td><?php echo $row["p_description"];?></td>
      <td><button class="btn btn-primary">Edit</button> <button class="btn btn-dager">Delete</button>
    </tr>



    <!-- // echo 'ID : ' .$row["p_id"].' P-title: '.$row["p_title"]. 'p-description : '.$row["p_description"].'<br>'; -->
<?php
  } 
?>

<?php
 } else {
        echo "error";
}

?>
</tbody>
</table>
</div>
