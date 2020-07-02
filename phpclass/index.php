
  <!--dropdown menu-->
  <!-- Example single danger button -->
  <?php 
  include 'header.php';
  ?>
    <header class="text-center p-5 bg-light">
        <h1>WELCOME TO CREATING YOUR FIRST DATABASE</h1>
    </header>

        <div class="container pt-5">
        <!-- fetch user form data with action attribute 
        when it is submitted it will go to createpage.php-->
            <form  action="create_page.php" method="post">
                <div class="form-group">
                    <label for="ptitle">Enter Your Name</label>
                    <!-- we will fetch values by given name attribute with
                    the same name of your coloumns that you have created 
                    in create-table.php file. -->
                    <input type="text" class="form-control" id="ptitle"  name="ptitle" placeholder="Enter Your Name">
                </div>

                <div class="form-group">
                    <label for="pdes">Descriptions</label>
                    <textarea class="form-control" name="pdes" id="pdes"  placeholder="Message" rows="3"></textarea>
                </div>

                <button type="submit" class="btn btn-primary mb-2">Submit</button>
            </form>
        </div>

  </div>
    
  <?php include 'footer.php'?>