
<?php
// Database name should be here
$db_name='phpclass';
$db_host='localhost';
$db_user='root';
$db_pass='';



// create connection

$connect = new mysqli( $db_host, $db_user, $db_pass, $db_name);

//check connection

if ($connect->connect_error) {
echo "connection error";
} else{
	echo "";
}

?>


