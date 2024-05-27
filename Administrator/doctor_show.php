<?php

include("header.php");

    $sql="select doctors .*,cities.City_Name from doctors join cities on cities.id =doctors.Cityid_FK";
    $result =mysqli_query($conn,$sql);

?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<!--**********************************
            Content body start
        ***********************************-->
        <!-- <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, welcome back!</h4>
                            <p class="mb-0">Your business dashboard template</p>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Bootstrap</a></li>
                        </ol>
                    </div>
                </div> -->
                <!-- row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title text-center">Doctor's Record's</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-responsive-sm text-dark">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Doctor Names</th>
                                                <th>Email</th>
                                                <th>Phone Number</th>
                                                <th>Specialization</th>
                                                <th>Address</th>
                                                <th>City Names</th>
                                                <th>Edit</th>
                                                <th>Dalete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                              while($rows = mysqli_fetch_assoc($result)){
                                            ?>
                                                  <tr>

                                                    <td><?php echo $rows['id'] ?></td>
                                                    <td><?php echo $rows['doctor_name'] ?></td>
                                                    <td><?php echo $rows['doctor_email'] ?></td>
                                                    <td><?php echo $rows['phone_number'] ?></td>
                                                    <td><?php echo $rows['doctor_special'] ?></td>
                                                    <td><?php echo $rows['doctor_address'] ?></td>
                                                    <td><?php echo $rows['City_Name'] ?></td>
                                                    <td><a href="doctor_update.php?id=<?php echo $rows
                                                    ['id']?>"><i class="bi bi-pencil-square"></i>Edit</a></td>
                                                    <td><a href="doctor_delete.php?id=<?php echo $rows
                                                    ['id']?>"><i class="bi bi-trash3-fill"></i>Delete</a></td>


                                            </tr>
                                               <?php } ?>
                                               
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>
                    </div>





<?php

include("footer.php");

?>
