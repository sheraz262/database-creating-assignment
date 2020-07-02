
<?php
// connect different files with the include'filename'; funtion
 include "connection.php";
// create queries for creating table and do it in inverted commas

// mention column name in brackets or you can  leave some empty
// WE WILL INCLUDE 'IF NOT EXISTS' WHEN TABLE IS ALREADY CREATED IN DATABASE
$pages = "CREATE TABLE IF NOT EXISTS pages( 
p_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
p_title VARCHAR(30) NOT NULL,
p_description TEXT)";

// Check file connection that you included above either is that working or not

 if(mysqli_query($connect, $pages)){
 
     echo "<br> your file is included properly please step ahead!";
 } else {
    echo "Your file is not connected!";
 }
?>
