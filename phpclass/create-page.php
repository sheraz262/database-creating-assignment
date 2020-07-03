
<?php 
include 'header.php';
// fetch all data from connection.php file
include 'connection.php';




// now we will add insert query when user inputs data and submit ,
// insert query will fetch all user data in this create_page
// for this purpose there should be a 'name attribute' class in the 
// input field

// FETCH DATA FROM THE FIELDS post data should be equal to field name attribute
$p_title        = $_POST["p_title"];
$p_description  = $_POST["p_description"];



 

// now use insert query

$insert = "INSERT INTO pages(p_title, p_description)
           VALUES('$p_title', '$p_description')";

if(mysqli_query($connect, $insert)){
    echo 'in create.php data is inserted';
} else {
    echo 'there is an error';
}
?>

