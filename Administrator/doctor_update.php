<?php

include("header.php");

$Id = $_GET["id"];
$sql = "select * from doctors where id= $Id";
$result = mysqli_query($conn, $sql);


?>


<!--**********************************
            Content body start
        ***********************************-->

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Doctor Add</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form method="post">

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Doctor Name</label>
                                <?php


                                while ($rows = mysqli_fetch_assoc($result)) {
                                ?>
                                    <input type="text" class="form-control" name="doctor_name" value="<?php echo $rows['doctor_name'] ?>" placeholder="Enter Your Name">
                                    <input type="email" class="form-control" name="doctor_email" value="<?php echo $rows['doctor_email'] ?>" placeholder="Enter Your Name">
                                    <input type="number" class="form-control" name="phone_number" value="<?php echo $rows['phone_number'] ?>" placeholder="Enter Your Name">
                                    <input type="text" class="form-control" name="doctor_special" value="<?php echo $rows['doctor_special'] ?>" placeholder="Enter Your Name">
                                    <textarea class="form-control" value="<?php echo $rows['doctor_address'] ?>" name="doctor_address" id="addreSs" rows="3" placeholder="Current Address"></textarea>

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

if (isset($_POST['update'])) {
    $doctor_name = $_POST['doctor_name'];
    $doctor_email = $_POST['doctor_email'];
    $phone_number = $_POST['phone_number'];
    $doctor_special = $_POST['doctor_special'];
    $doctor_address = $_POST['doctor_address'];
    $city_id = $_POST['city_id'];

    $sql = "update doctors set doctor_name = '$doctor_name', doctor_email = '$doctor_email',phone_number = '$phone_number',doctor_special = '$doctor_special',doctor_address = '$doctor_address',city_id = '$Cityid_FK' where id = $Id ";
    $result = mysqli_query($conn, $sql);

    echo "<script>
            
            alert('User Update Successfully!');
            window.location.href='doctor_show.php'
            </script>";
}
include("footer.php");

?>