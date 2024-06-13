<?php

include("header.php");

$Id = $_GET["id"];
$sql = "select * from doctors where id= $Id";
$result = mysqli_query($conn, $sql);
$rows = mysqli_fetch_assoc($result);

?>


<!-- Content wrapper start -->
<div class="content-wrapper">

<!-- Row start -->

    <div class="col-lg-9 col-sm-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Update Doctor</div>
            </div>
            <div class="card-body">
                <div class="row gutters">
                <div class="col-sm-12 col-lg-12">
                        <form action="" method="post">
                        
                            <label>State</label>
                            <select id="inputState" name="city_id" class="form-control">
                                <?php
                                
                                $sql = "select * from cities";
                                $result = mysqli_query($conn, $sql);
                                while ($rows = mysqli_fetch_assoc($result)) {
                                ?>
                                    <option value="<?php echo $rows['id'] ?>"><?php echo $rows['City_Name'] ?></option>
                                <?php  } ?>
                            </select>
                    </div>
                    <div class="col-sm-4 col-12">
                        <div class="form-group">
                            <label for="fullName">Name</label>
                            <input type="text" name="doctor_name" value="<?php echo $rows['name'] ?>" class="form-control" id="fullName" placeholder="Enter Your Name">
                        </div>
                    </div>
                    <div class="col-sm-4 col-12">
                        <div class="form-group">
                            <label for="phoNe">Email</label>
                            <input type="email" name="doctor_email" class="form-control" id="phoNe" placeholder="example@gmail.com">
                        </div>
                    </div>
                    <div class="col-sm-4 col-12">
                        <div class="form-group">
                            <label for="inputEmail">Phone Number</label>
                            <input type="number" name="phone_number" class="form-control" id="inputEmail" placeholder="Phone">
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-12">
                        <div class="form-group">
                            <label for="addreSs">Specialization</label>
                            <input type="text" name="doctor_special" class="form-control" id="inputEmail" placeholder="specialization">
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-12">
                        <div class="form-group">
                            <label for="addreSs">Address</label>
                            <textarea class="form-control" name="doctor_address" id="addreSs" rows="3" placeholder="Current Address"></textarea>
                        </div>
                    </div>



                    <div class="col-sm-12">
                        <div class="text-right">
                            <button class="btn btn-primary" type="submit" name="update">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Row end -->

</div>
<!-- Content wrapper end -->

</div>
                  
            



<?php

if (isset($_POST['update'])) {
    $name = $_POST['doctor_name'];
    $email = $_POST['doctor_email'];
    $phone_number = $_POST['phone_number'];
    $specialization = $_POST['doctor_special'];
    $doctor_address = $_POST['doctor_address'];
    $city_id = $_POST['city_id'];

    $sql = "update doctors set name = '$doctor_name', address = '$doctor_address',phone_number = '$phone_number',email = '$doctor_email',Cityid_FK = '$city_id',specialization = '$doctor_special' where id =$Id";
    $result = mysqli_query($conn, $sql);

    echo "<script>
            
            alert('User Update Successfully!');
            window.location.href='doctor_show.php'
            </script>";
}
include("footer.php");

?>