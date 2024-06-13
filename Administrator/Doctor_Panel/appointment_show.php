<?php
include("../../Administrator/connection.php");

include("header.php");

    $sql = "select * from appointments";
    $result=mysqli_query($conn,$sql);
    
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

 

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
                                                 <th>Id</th>             
                                                <th>Name</th>           
                                                <th>Email</th>
                                                <th>Appointment Date</th>
                                                <th>Appointment Time</th>
                                                <th>Patient Id</th>
                                                <th>Doctor Id</th>
                                            </tr>
                                        </thead>
                                        <tbody>
 
                                                  <tr>
                                                  <?php   
                                                while($rows = mysqli_fetch_assoc($result)){
                                          ?>
                                                  <td><?php echo $rows['id'] ?></td>
                                                    <td><?php echo $rows['name'] ?></td>
                                                    <td><?php echo $rows['email'] ?></td>
                                                    <td><?php echo $rows['appointment_date'] ?></td>
                                                    <td><?php echo $rows['appointment_time'] ?></td>
                                                    <td><?php echo $rows['Patientid_FK'] ?></td>
                                                    <td><?php echo $rows['Doctorid_FK'] ?></td>

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






