<?php

include 'header.php';
include 'connection.php';
// $_REQUEST[] GET ID FROM URL

$get_id_from_loop = $_REQUEST['p_id'];

// check if your click edit btn is working
//echo $get_id_from_loop;

//fetch data from database
$edit = " SELECT * FROM pages WHERE p_id = $get_id_from_loop";
$result = mysqli_query($connect, $edit);

$row = mysqli_fetch_assoc($result);


?>

<!-- get form -->
<div class="container pt-5">
        <!-- fetch user form data with action attribute 
        when it is submitted it will go to createpage.php-->
            <form  action="create-page.php" method="post">
                <div class="form-group">
                    <label for="p_title">Enter Your Name</label>
                    <!-- we will fetch values by given name attribute with
                    the same name of your coloumns that you have created 
                    in create-table.php file. -->
                    <input type="text" class="form-control" id="p_title"  name="p_title" value="<?php echo $row['p_title'];?>">
                </div>

                <div class="form-group">
                    <label for="p_description">Descriptions</label>
                    <textarea class="form-control" name="p_description" id="p_description"><?php echo $row['p_description'];?></textarea>
                </div>

                <button type="submit" class="btn btn-primary mb-2">Submit</button>
            </form>
        </div>



<?php
// fetch footer
include 'footer.php';
?>
