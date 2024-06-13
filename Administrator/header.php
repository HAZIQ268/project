<?php
include("connection.php");
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
		
		<!-- fontawesome icon link  -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<title>Care Admin</title>

		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
		<!-- *************
			************ Common Css Files *************
			************ -->
		<!-- Bootstrap css -->
		<link rel="stylesheet" href="css/bootstrap.min.css">

		<!-- Icomoon Font Icons css -->
		<link rel="stylesheet" href="fonts/style.css">
	
		<!-- Main css -->
		<link rel="stylesheet" href="css/main.min.css">
        <!-- bootstrap ico -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
		<!-- *************
			************ Vendor Css Files *************
		************ -->

	</head>
<style>
	@import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css");
</style>
	<body>

	

		<!-- Header start -->
		<header class="header">
			<div class="container-fluid">

				<!-- Row start -->
				<div class="row gutters">
					<div class="col-sm-4 col-4">
						<a href="index.html" class="logo">Care<span>Hospitals</span></a>
					</div>
					<div class="col-sm-8 col-8">

						<!-- Header actions start -->
						<ul class="header-actions">
							<li class="dropdown d-none d-sm-block">
								<a href="#" class="contact">
									<i class="icon-phone"></i> 012 345 6789
								</a>
							</li>
							<li class="dropdown d-none d-sm-block">
								<a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
									<i class="icon-bell"></i>
									<span class="count-label"></span>
								</a>
								<div class="dropdown-menu lrg" aria-labelledby="notifications">
									<div class="dropdown-menu-header">
										<h5>Notifications</h5>
										<p class="m-0 sub-title">You have 5 unread notifications</p>
									</div>
									<ul class="header-notifications">
										<li>
											<a href="#" class="clearfix">
												<div class="avatar">
													<img src="img/user24.png" alt="Medical Admin Dashboards" />
													<span class="notify-iocn icon-drafts text-danger"></span>
												</div>
												<div class="details">
													<h6>Dr. Clive</h6>
													<p>Appointed as a new President 2021-2024</p>
												</div>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<div class="avatar">
													<img src="img/user21.png" alt="Medical Admin Dashboards" />
													<span class="notify-iocn icon-layers text-info"></span>
												</div>
												<div class="details">
													<h6>Dr. G. Levsmia</h6>
													<p>Will be on leave on October 2nd week.</p>
												</div>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<div class="avatar">
													<img src="img/user19.png" alt="Medical Admin Dashboards" />
													<span class="notify-iocn icon-person_add text-success"></span>
												</div>
												<div class="details">
													<h6>Dr. George S</h6>
													<p>Sent new applointments list</p>
												</div>
											</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="dropdown">
								<a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
									<span class="user-name">Nélson Romyo</span>
									<span class="avatar">NR<span class="status busy"></span></span>
								</a>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userSettings">
									<div class="header-profile-actions">
										<div class="header-user-profile">
											<div class="header-user">
												<img src="img/user11.png" alt="Medical Dashboards" />
											</div>
											<h5></h5>
											<p>Admin</p>
										</div>
										<a href="login.php"><i class="icon-log-out1"></i> Sign Out</a>
									</div>
								</div>
							</li>
						</ul>
						<!-- Header actions end -->

					</div>
				</div>
				<!-- Row end -->

			</div>
		</header>
		<!-- Header end -->

		<!-- *************
			************ Header section end *************
		************* -->


		<div class="container-fluid">


			<!-- Navigation start -->
			<nav class="navbar navbar-expand-lg custom-navbar">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#royalHospitalsNavbar"
					aria-controls="royalHospitalsNavbar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i></i>
						<i></i>
						<i></i>
					</span>
				</button>
				<div class="collapse navbar-collapse" id="royalHospitalsNavbar">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="index.php">
								<i class="icon-devices_other nav-icon"></i>
								Dashboard
							</a>
						</li>
						
							
					
							
						
						
						<li class="nav-item dropdown">
							<a class="nav-link " href="patient_show.php" id="pagesDropdown" role="button" 
								aria-haspopup="true" aria-expanded="false">
								<i class="bi fa-xs fa-sm fa-lg bi-person-badge"  ></i>
								<br>
								Patient Book
							</a>
							
						</li>
						<div class="collapse navbar-collapse" id="royalHospitalsNavbar">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link " href="doctor_add.php">
							<i class="bi fa-xs fa-sm fa-lg bi-person-fill-add"></i>
							<br>
								Add Doctors
							</a>
						</li>
					</ul>
						</div>
						<div class="collapse navbar-collapse" id="royalHospitalsNavbar">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link " href="doctor_show.php">
							<i class="fa fa-xs fa-sm fa-lg fa-user-md" aria-hidden="true"></i>
							<br>
							 Doctor's Records
							</a>
						</li>
					</ul>
						</div>
						<div class="collapse navbar-collapse" id="royalHospitalsNavbar">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link " href="city_add.php">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
							<br>
							 City Add
							</a>
						</li>
					</ul>
						</div>
						<div class="collapse navbar-collapse" id="royalHospitalsNavbar">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link " href="city_show.php">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
							
							<br>
							 City Show
							</a>
						</li>
					</ul>
						</div>
					
						</li>
					
						
					
					</ul>
				</div>
			</nav>
			<!-- Navigation end -->
