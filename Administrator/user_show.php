<?php
    include("header.php");
    include("connection.php");

    $sql="select users .*,role.Role_Name from users join role on role.id =users.Roleid_FK";
    $result =mysqli_query($conn,$sql);

?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


  <!--**********************************
            Content body start
        ***********************************-->
    
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Basic</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-responsive-sm table-bordered text-dark">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>User Name</th>
                                                <th>Role Name</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($rows=mysqli_fetch_assoc($result)) {
                                                
                                            ?>
                                            <tr>
                                          <th><?php echo $rows['id']  ?></th>
                                          <th><?php echo $rows['username']  ?></th>
                                          <th><?php echo $rows['Role_Name']  ?></th>
                                          <td><a href="user_update.php?id=<?php echo $rows
                                                    ['id']?>"><i class="bi bi-pencil-square"></i>Edit</a></td>
                                                    <td><a href="user_delete.php?id=<?php echo $rows
                                                    ['id']?>"><i class="bi bi-trash3-fill"></i>Delete</a></td>

                                          </tr>
                                    <?php   } ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    




<?php
    include("footer.php");
?>