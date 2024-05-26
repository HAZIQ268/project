<?php

    include("../../Administrator/connection.php");
?>



<?php 
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "select * from user_register where email = '$email' and password = '$password'";
        $result =mysqli_query($conn , $sql);
        echo "<pre>";
        print_r($result);
        echo "</pre>";
        if($result->num_rows>0){
            while($rows =mysqli_fetch_assoc($result)){
                echo "<script>
                swal('Good job!', 'You clicked the button!', 'success')
                setTimeout(function(){
                    window.location.href='index.php';
                },3000)
                </script>";
            }
        }
        else{
            echo "<script>
            swal({
                title: 'Auto close alert!',
                text: 'I will close in 2 seconds.',
                timer: 2000
              });

              setTimeout(function(){
                window.location.href='login.php';
              },3000)
        </script>";
        }

    }
    
?> 