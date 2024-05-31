<?php
include("header.php");


$sql = "select * from role";
$result = mysqli_query($conn , $sql);
?>




                            <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">User Form</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form method="POST">
                                    <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>Role</label>
                                                <select id="inputState" name="u_r_id" class="form-control">
                                                    <?php

                                                    while ($rows =mysqli_fetch_assoc($result)) {
                                                    
                                                        ?>
                                                    <option value="<?php echo $rows['id']?>"><?php echo $rows['Role_Name'] ?></option>
                                                    <?php } ?>
                                    
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>User Name</label>
                                                <input type="text" class="form-control" name="username" placeholder="Enter Your Name">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Password</label>
                                                <input type="password" name="password" class="form-control" placeholder="Enter Your Password">
                                            </div>
                        
                                        </div>
                                        
                                    
                                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        </div>
                        </div>
                        

<?php
            if (isset($_POST['submit'])) {
            $roleId =$_POST['u_r_id'];
            $username =$_POST['username'];
            $password =$_POST['password'];

            $sql="insert into users (username,password,Roleid_FK) values ('$username','$password','$roleId')";
            $result=mysqli_query($conn,$sql);

            echo 
                "<script>
                alert('Your Record has been Inserted');
                </script>";
     }
        include("footer.php");
?>