<?php
include("../../../Administrator/header.php");
?>
<!-- Content wrapper start -->
<div class="content-wrapper">

<!-- Row start -->

    <div class="col-lg-9 col-sm-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Doctor Add</div>
            </div>
            <div class="card-body">
                <div class="row gutters">
                    <div class="col-sm-4 col-12">
                    <div class="form-group col-md-12">
                                <label>State</label>
                                <select id="inputState" name="c_id" class="form-control">
                                    <?php
                                    $sql = "select * from cities";
                                    $result = mysqli_query($conn, $sql);
                                    while ($rows = mysqli_fetch_assoc($result)) {
                                    ?>

                                        <option value="<?php echo $rows['id'] ?>"><?php echo $rows['City_Name'] ?></option>

                                    <?php  } ?>

                                </select>
                            </div>
                        <div class="form-group">
                            <form action="" method="post">
                            <label for="fullName">Name</label>
                            <input type="text" name="doctor_name" class="form-control" id="fullName" placeholder="Srinu">
                        </div>
                    </div>
                    <div class="col-sm-4 col-12">
                        <div class="form-group">
                            <label for="inputEmail">Email</label>
                            <input type="email" name="doctor_email" class="form-control" id="inputEmail" placeholder="medical@bm.com">
                        </div>
                    </div>
                    <div class="col-sm-4 col-12">
                        <div class="form-group">
                            <label for="phoNe">Phone Number</label>
                            <input type="number" name="doctor_number" class="form-control" id="phoNe" placeholder="Phone">
                        </div>
                    </div>
                    <div class="col-sm-4 col-lg-12">
                        <div class="form-group">
                            <label for="inputEmail">Specialization</label>
                            <input type="text" name="doctor_spec" class="form-control" id="inputEmail" placeholder="medical@bm.com">
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-12">
                        <div class="form-group">
                            <label for="addreSs">Address</label>
                            <textarea class="form-control" name="doctor_address" id="addreSs" rows="3" placeholder="Current Address"></textarea>
                        </div>
                    </div>
                    
                   
                    <div class="col-sm-12">
                        <div class="text-right">
                            <button class="btn btn-primary" type="submit" name="submit">Create Profile</button>
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
<!-- *************
************ Main container end *************
************* -->
<?php

if(isset($_POST['submit'])){
    $cityId = $_POST['c_id'];
    $doctor_name = $_POST['doctor_name'];
    $doctor_address = $_POST['doctor_address'];
    $doctor_number = $_POST['doctor_number'];
    $doctor_spec = $_POST['doctor_spec'];
    $doctor_email = $_POST['doctor_email'];

    $sql = "insert into doctors (doctor_name,doctor_address,doctor_number,doctor_email,cityId,doctor_spec) values
    ('$name','$address','$phone_number','$email','$Cityid_FK','$specialization')";
    $result = mysqli_query($conn, $sql);

    echo "<script>
    
    alert('Your Record Has Been Added!')
    window.location.href='doctor_show.php'
    </script>";
}


include("../../../Administrator/footer.php");
?>