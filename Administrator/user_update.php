<?php

include("header.php");
include("connection.php");

$Id = $_GET["id"];
$sql = "select * from users where id= $Id";
$result = mysqli_query($conn, $sql);


?>


<!--**********************************
            Content body start
        ***********************************-->

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">User Add</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form method="post">

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>User Name</label>
                                <?php


                                while ($rows = mysqli_fetch_assoc($result)) {
                                ?>
                                    <input type="text" class="form-control" name="username" value="<?php echo $rows['username'] ?>" placeholder="Enter Your Username">

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
    $username = $_POST['username'];

    $sql = "update users set username = '$username' where id = $Id ";
    $result = mysqli_query($conn, $sql);

    echo "<script>
            
            alert('User Update Successfully!');
            window.location.href='user_show.php'
            </script>";
}
include("footer.php");

?>