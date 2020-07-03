
<?php
include 'header.php';
?>


<div class="container pt-5">
        <!-- fetch user form data with action attribute 
        when it is submitted it will go to createpage.php-->
            <form  action="create-page.php" method="post">
                <div class="form-group">
                    <label for="p_title">Enter Your Name</label>
                    <!-- we will fetch values by given name attribute with
                    the same name of your coloumns that you have created 
                    in create-table.php file. -->
                    <input type="text" class="form-control" id="p_title"  name="p_title" placeholder="Enter Your Name">
                </div>

                <div class="form-group">
                    <label for="p_description">Descriptions</label>
                    <textarea class="form-control" name="p_description" id="p_description"  placeholder="Message" rows="3"></textarea>
                </div>

                <button type="submit" class="btn btn-primary mb-2"name="update">Submit</button>
            </form>
        

<?php
include 'footer.php';
?>