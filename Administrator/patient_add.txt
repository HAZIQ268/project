<?php
include("header.php");
?>
<!-- Content wrapper start -->
<div class="content-wrapper">

<!-- Row start -->

    <div class="col-lg-9 col-sm-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Add Patient</div>
            </div>
            <div class="card-body">
                <div class="row gutters">
                    <div class="col-sm-4 col-12">
                        <div class="form-group">
                            <form action="" method="post">
                            <label for="fullName">Name</label>
                            <input type="text" name="patient_name" class="form-control" id="fullName" placeholder="Srinu">
                        </div>
                    </div>
                    <div class="col-sm-4 col-12">
                        <div class="form-group">
                            <label for="phoNe">Phone Number</label>
                            <input type="number" name="patient_number" class="form-control" id="phoNe" placeholder="Phone">
                        </div>
                    </div>
                    <div class="col-sm-4 col-12">
                        <div class="form-group">
                            <label for="inputEmail">Email</label>
                            <input type="email" name="patient_email" class="form-control" id="inputEmail" placeholder="medical@bm.com">
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-12">
                        <div class="form-group">
                            <label for="addreSs">Address</label>
                            <textarea class="form-control" name="patient_address" id="addreSs" rows="3" placeholder="Current Address"></textarea>
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

    $patient_name = $_POST['patient_name'];
    $patient_address = $_POST['patient_address'];
    $patient_number = $_POST['patient_number'];
    $patient_email = $_POST['patient_email'];

    $sql = "insert into patients (patient_name,patient_adress,patient_number,patient_email) values
    ('$patient_name','$patient_address','$patient_number','$patient_email')";
    $result = mysqli_query($conn, $sql);

    echo "<script>
    
    alert('Your Record Has Been Added!')
    window.location.href='patient_show.php'
    </script>";
}


include("footer.php");
?>