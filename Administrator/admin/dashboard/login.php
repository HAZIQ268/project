<?php

    include("../../../Administrator/connection.php");
?>

<!doctype html>
<html lang="en">

	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Meta -->
		<meta name="description" content="Responsive Bootstrap Dashboards">
		<meta name="author" content="Bootstrap Gallery">
		<link rel="shortcut icon" href="img/favicon.svg" />

		<!-- Title -->
		<title>Care - Login</title>

		<!-- *************
			************ Common Css Files *************
			************ -->
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />

		<!-- Master CSS -->
		<link rel="stylesheet" href="css/main.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	</head>

	<body class="authentication">

		<!-- Container start -->
		<div class="container">

			<form action="" method="post">
				<div class="row justify-content-md-center">
					<div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
						<div class="login-screen">
							<div class="login-box">
								<a href="#" class="login-logo">
									Royal Hospitals
								</a>
								<h5>Welcome back,<br />Please Login to your Account.</h5>
								<div class="form-group">
									<input type="text" name="email" class="form-control" placeholder="Email Address" />
								</div>
								<div class="form-group">
									<input type="password" name="password" class="form-control" placeholder="Password" />
								</div>
								<div class="actions">
									<button type="submit" name="submit" class="btn btn-info" href="login.php">Login</button>
								</div>
								<hr>
								<div class="m-0">
									<span class="additional-link">No account? <a href="user_register.php"
											class="btn btn-secondary">Signup</a></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>

		</div>
		<!-- Container end -->

	</body>

</html>


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