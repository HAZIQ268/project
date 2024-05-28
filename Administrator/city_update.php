<?php

include("header.php");


$Id = $_GET["id"];
$sql = "select * from cities where id= $Id";
$result = mysqli_query($conn , $sql);


?>


<!--**********************************
            Content body start
        ***********************************-->

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">City Add</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form method="post">

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>City Name</label>
                                <?php
                                
                                
                                while ($rows = mysqli_fetch_assoc($result)){
                                ?>

                                <input type="text" class="form-control" name="City_Name" value="<?php echo $rows['City_Name'] ?>" placeholder="Enter Your City">
                           <?php } ?>
                            </div>
                        </div>



                        <button type="submit" name="update" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>


    </div>
</div>


    <?php
        
        if(isset($_POST['update'])){
            $City_Name = $_POST['City_Name'];

            $sql = "update cities set City_Name = '$City_Name' where id = $Id ";
            $result = mysqli_query($conn , $sql);

            echo "<script>
            
            alert('Role Update Successfully!');
            window.location.href='city_show.php'
            </script>";
        }
        include("footer.php");

    ?>