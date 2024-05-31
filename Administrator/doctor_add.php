<?php
include("header.php");


?>
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Row start -->

    <div class="col-lg-9 col-sm-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Add Doctors</div>
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
                            <input type="text" name="doctor_name" class="form-control" id="fullName" placeholder="Enter Your Name">
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
                            <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- *************
************ Main container end *************
************* -->
<?php

if (isset($_POST['submit'])) {
    
    
    $doctor_name = $_POST['doctor_name'];
    $doctor_email = $_POST['doctor_email'];
    $phone_number = $_POST['phone_number'];
    $doctor_special = $_POST['doctor_special'];
    $doctor_address = $_POST['doctor_address'];
    $city_id = $_POST['city_id'];


    $sql="insert into doctors (name,address,phone_number,email,Cityid_FK,specialization) values ('$doctor_name', '$doctor_address', '$phone_number', '$doctor_email', '$city_id', '$doctor_special')";
    $result = mysqli_query($conn, $sql);

    echo "<script>
    alert('Your Record Has Been Added!');
    window.location.href='doctor_show.php';
    </script>";
}


include("footer.php");
?>