<?php

include("header.php");


$Id = $_GET["id"];
$sql = "select * from doctors where id= $Id";
$result = mysqli_query($conn , $sql);


?>


<!--**********************************
            Content body start
        ***********************************-->
     

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Appointment Update</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form method="post">

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Name</label>
                                <?php
                                    while ($rows = mysqli_fetch_assoc($result)){
                                ?>

                                <input type="text" class="form-control" name="name" value="<?php echo $rows['name'] ?>" >
                                <input type="text" class="form-control" name="address" value="<?php echo $rows['address'] ?>" >
                                <input type="number" class="form-control" name="phone_number" value="<?php echo $rows['phone_number'] ?>">
                                <input type="email" class="form-control" name="email" value="<?php echo $rows['email'] ?>" >
                                <input type="text" class="form-control" name="specialization" value="<?php echo $rows['specialization'] ?>" >

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
            $name = $_POST['name'];
            $address = $_POST['address'];
            $phone_number = $_POST['phone_number'];
            $email = $_POST['email'];
            $specialization= $_POST['specialization'];

            $sql = "update doctors set name='$name',address='$address',phone_number='$phone_number',email='$email',specialization='$specialization' where id = $Id ";
            $result = mysqli_query($conn , $sql);

            echo "<script>
            
            alert('Profile Update Successfully!');
            window.location.href='doctor_profile.php'
            </script>";
        }
        include("footer.php");

    ?>