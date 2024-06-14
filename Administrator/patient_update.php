<?php

include("header.php");



$Id = $_GET["id"];
$sql = "select * from patients where id= $Id";
$result = mysqli_query($conn, $sql);
$rows = mysqli_fetch_assoc($result);


?>


<!-- Content wrapper start -->
<div class="content-wrapper">

<!-- Row start -->

    <div class="col-lg-9 col-sm-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Patient Update</div>
            </div>
            <div class="card-body">
                <div class="row gutters">
                    <div class="col-sm-4 col-12">
                        <div class="form-group">
                            <form action="" method="post">
                            <label for="fullName">Name</label>
                            <input type="text" name="patient_name" value="<?php echo $rows['patient_name'] ?>"  class="form-control" id="fullName" placeholder="Enter Your Name">
                        </div>
                    </div>
                    <div class="col-sm-4 col-12">
                        <div class="form-group">
                            <label for="phoNe">Phone Number</label>
                            <input type="number" name="patient_number"  value="<?php echo $rows['patient_number'] ?>" class="form-control" id="phoNe" placeholder="Phone">
                        </div>
                    </div>
                    <div class="col-sm-4 col-12">
                        <div class="form-group">
                            <label for="inputEmail">Email</label>
                            <input type="email" name="patient_email" value="<?php echo $rows['patient_email'] ?>" class="form-control" id="inputEmail" placeholder="example@gmail.com">
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-12">
                        <div class="form-group">
                            <label for="addreSs">Address</label>
                            <textarea class="form-control" name="patient_adress" value="<?php echo $rows['patient_adress'] ?>" id="addreSs" rows="3" placeholder="Current Address"></textarea>
                        </div>
                    </div>
                    
                   
                    <div class="col-sm-12">
                        <div class="text-right">
                            <button class="btn btn-primary" type="submit" name="update">Upadate Patient</button>
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
*********** Main container end *************
************* -->

<?php

if (isset($_POST['update'])) {
    $patient_name = $_POST['patient_name'];
    $patient_adress = $_POST['patient_adress'];
    $patient_number = $_POST['patient_number'];
    $patient_email = $_POST['patient_email'];


    $sql = "update patients set patient_name='$patient_name',patient_adress='$patient_adress',patient_number = '$patient_number', patient_email = '$patient_email' where id = $Id";
    $result = mysqli_query($conn, $sql);


    echo "<script>
            
            alert('Author Update Successfully!');
            window.location.href='patient_show.php'
            </script>";
}

include("footer.php");


?>