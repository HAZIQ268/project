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

		<!-- Title -->
		<title>Medical Admin Template - Hospital</title>


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

	<body>

	

		<!-- Header start -->
		<header class="header">
			<div class="container-fluid">

				<!-- Row start -->
				<div class="row gutters">
					<div class="col-sm-4 col-4">
						<a href="index.html" class="logo">Royal <span>Hospitals</span></a>
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
											<h5>Nélson Romyo</h5>
											<p>Admin</p>
										</div>
										<a href="hospital-add-doctor.html"><i class="icon-user1"></i> My Profile</a>
										<a href="account-settings.html"><i class="icon-settings1"></i> Account Settings</a>
										<a href="hospital-reviews.html"><i class="icon-activity"></i> Activity Logs</a>
										<a href="login.html"><i class="icon-log-out1"></i> Sign Out</a>
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
							<a class="nav-link active-page" href="index.php">
								<i class="icon-devices_other nav-icon"></i>
								Dashboard
							</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="doctoRs" role="button" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">
								<i class="icon-users nav-icon"></i>
								Doctors
							</a>
							<ul class="dropdown-menu" aria-labelledby="doctoRs">
								<li>
									<a class="dropdown-item" href="hospital-doctors-list.html">Doctors List</a>
								</li>
								<li>
									<a class="dropdown-item" href="hospital-locations.html">Hospital Locations</a>
								</li>
								<li>
									<a class="dropdown-item" href="hospital-reviews.html">Hospital Reviews</a>
								</li>
								<li>
									<a class="dropdown-item" href="blog.html">News and Events</a>
								</li>
								<li>
									<a class="dropdown-item" href="hospital-trainings.html">Staff Trainings</a>
								</li>
								<li>
									<a class="dropdown-item" href="hospital-doctors.html">Doctors</a>
								</li>
								<li>
									<a class="dropdown-item" href="patients_show.php">Show Patients</a>
								</li>
								<li>
									<a class="dropdown-item" href="doctor_add.php">Add Doctor</a>
								</li>
								<li>
									<a class="dropdown-item" href="patient_add.php">Add Patient</a>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">
								<i class="icon-users nav-icon "></i>
								Role
							</a>
							<ul class="dropdown-menu" aria-labelledby="pagesDropdown">
								<li>
									<a class="dropdown-item" href="role_add.php">Role Add</a>
								</li>
								<li>
									<a class="dropdown-item" href="role_show.php">Role Show</a>
								</li>
								
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="formsDropdown" role="button" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">
								<i class="icon-edit1 nav-icon"></i>
								Forms
							</a>
							<ul class="dropdown-menu" aria-labelledby="formsDropdown">
								<li>
									<a class="dropdown-item" href="datepickers.html">Datepickers</a>
								</li>
								<li>
									<a class="dropdown-item" href="wizard.html">Wizards</a>
								</li>
								<li>
									<a class="dropdown-item" href="bs-select.html">BS Select</a>
								</li>
								<li>
									<a class="dropdown-toggle sub-nav-link" href="#" id="customDropdown" role="button"
										data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Custom Forms
									</a>
									<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="customDropdown">
										<li>
											<a class="dropdown-item" href="contact.html">Contact Form</a>
										</li>
										<li>
											<a class="dropdown-item" href="contact2.html">Contact Form #2</a>
										</li>
										<li>
											<a class="dropdown-item" href="contact3.html">Contact Form #3</a>
										</li>
										<li>
											<a class="dropdown-item" href="contact4.html">Contact Form #4</a>
										</li>
									</ul>
								</li>
								<li>
									<a class="dropdown-item" href="form-inputs.html">Form Inputs</a>
								</li>
								<li>
									<a class="dropdown-item" href="input-groups.html">Input Groups</a>
								</li>
								<li>
									<a class="dropdown-item" href="check-radio.html">Check Boxes</a>
								</li>
								<li>
									<a class="dropdown-item" href="range-sliders.html">Range Sliders</a>
								</li>
								<li>
									<a class="dropdown-item" href="editor.html">Editor</a>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="uiElementsDropdown" role="button" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">
								<i class="icon-image nav-icon"></i>
								UI Elements
							</a>
							<ul class="dropdown-menu" aria-labelledby="uiElementsDropdown">
								<li>
									<a class="dropdown-toggle sub-nav-link" href="#" id="buttonsDropdown" role="button"
										data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Buttons
									</a>
									<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="buttonsDropdown">
										<li>
											<a class="dropdown-item" href="buttons.html">Buttons</a>
										</li>
										<li>
											<a class="dropdown-item" href="button-groups.html">Button Groups</a>
										</li>
										<li>
											<a class="dropdown-item" href="dropdowns.html">Dropdowns</a>
										</li>
									</ul>
								</li>
								<li>
									<a class="dropdown-toggle sub-nav-link" href="#" id="navsDropdown" role="button"
										data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Navbars
									</a>
									<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navsDropdown">
										<li>
											<a class="dropdown-item" href="nav.html">Nav</a>
										</li>
										<li>
											<a class="dropdown-item" href="navbars.html">Navbars</a>
										</li>
										<li>
											<a class="dropdown-item" href="tabs.html">Tabs</a>
										</li>
									</ul>
								</li>
								<li>
									<a class="dropdown-toggle sub-nav-link" href="#" id="componentsDropdown" role="button"
										data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Components
									</a>
									<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="componentsDropdown">
										<li>
											<a class="dropdown-item" href="breadcrumbs.html">Breadcrumbs</a>
										</li>
										<li>
											<a class="dropdown-item" href="jumbotron.html">Jumbotron</a>
										</li>
										<li>
											<a class="dropdown-item" href="labels-badges.html">Labels &amp; Badges</a>
										</li>
										<li>
											<a class="dropdown-item" href="list-items.html">List Items</a>
										</li>
										<li>
											<a class="dropdown-item" href="pagination.html">Paginations</a>
										</li>
										<li>
											<a class="dropdown-item" href="progress.html">Progress Bars</a>
										</li>
										<li>
											<a class="dropdown-item" href="pills.html">Pills</a>
										</li>
										<li>
											<a class="dropdown-item" href="spinners.html">Spinners</a>
										</li>
									</ul>
								</li>
								<li>
									<a class="dropdown-toggle sub-nav-link" href="#" id="gridDropdown" role="button"
										data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Grid
									</a>
									<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="gridDropdown">
										<li>
											<a class="dropdown-item" href="grid.html">Grid</a>
										</li>
										<li>
											<a class="dropdown-item" href="grid-doc.html">Grid Doc</a>
										</li>
									</ul>
								</li>
								<li>
									<a class="dropdown-toggle sub-nav-link" href="#" id="imagesDropdown" role="button"
										data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Images
									</a>
									<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="imagesDropdown">
										<li>
											<a class="dropdown-item" href="avatars.html">Avatars</a>
										</li>
										<li>
											<a class="dropdown-item" href="media-objects.html">Media Objects</a>
										</li>
										<li>
											<a class="dropdown-item" href="images.html">Thumbnails</a>
										</li>
										<li>
											<a class="dropdown-item" href="text-avatars.html">Text Avatars</a>
										</li>
									</ul>
								</li>
								<li>
									<a class="dropdown-toggle sub-nav-link" href="#" id="alertDropdown" role="button"
										data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Notifications
									</a>
									<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="alertDropdown">
										<li>
											<a class="dropdown-item" href="bootstrap-alerts.html">Default Alerts</a>
										</li>
										<li>
											<a class="dropdown-item" href="custom-alerts.html">Custom Alerts</a>
										</li>
										<li>
											<a class="dropdown-item" href="toasts.html">Toasts</a>
										</li>
									</ul>
								</li>
								<li>
									<a class="dropdown-toggle sub-nav-link" href="#" id="bsJquery" role="button" data-toggle="dropdown"
										aria-haspopup="true" aria-expanded="false">
										Bootstrap jQuery
									</a>
									<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="bsJquery">
										<li>
											<a class="dropdown-item" href="carousel.html">Carousels</a>
										</li>
										<li>
											<a class="dropdown-item" href="modals.html">Modals</a>
										</li>
										<li>
											<a class="dropdown-item" href="popovers-tooltips.html">Tooltips</a>
										</li>
										<li>
											<a class="dropdown-item" href="accordion.html">Accordions</a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="tablesDropdown" role="button" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">
								<i class="icon-border_all nav-icon"></i>
								Tables
							</a>
							<ul class="dropdown-menu" aria-labelledby="tablesDropdown">
								<li>
									<a class="dropdown-item" href="bs-tables.html">Bootstrap Tables</a>
								</li>
								<li>
									<a class="dropdown-item" href="data-tables.html">Data Tables</a>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="graphsDropdown" role="button" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">
								<i class="icon-pie-chart1 nav-icon"></i>
								Graphs
							</a>
							<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="graphsDropdown">
								<li class="open-left">
									<a class="dropdown-toggle sub-nav-link" href="#" id="apexDropdown" role="button"
										data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Apex Graphs
									</a>
									<ul class="dropdown-menu" aria-labelledby="apexDropdown">
										<li>
											<a class="dropdown-item" href="area-graphs.html">Area Charts</a>
										</li>
										<li>
											<a class="dropdown-item" href="bar-graphs.html">Bar Charts</a>
										</li>
										<li>
											<a class="dropdown-item" href="column-graphs.html">Column Charts</a>
										</li>
										<li>
											<a class="dropdown-item" href="donut-graphs.html">Donut Charts</a>
										</li>
										<li>
											<a class="dropdown-item" href="line-graphs.html">Line Charts</a>
										</li>
										<li>
											<a class="dropdown-item" href="mixed-graphs.html">Mixed Charts</a>
										</li>
										<li>
											<a class="dropdown-item" href="pie-graphs.html">Pie Charts</a>
										</li>
									</ul>
								</li>
								<li>
									<a class="dropdown-item" href="morris-graphs.html">Morris Graphs</a>
								</li>
								<li>
									<a class="dropdown-item" href="vector-maps.html">Vector Maps</a>
								</li>
								<li>
									<a class="dropdown-item" href="google-maps.html">Google Maps</a>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="loginDropdown" role="button" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">
								<i class="icon-alert-triangle nav-icon"></i>
								Login
							</a>
							<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="loginDropdown">
								<li>
									<a class="dropdown-item" href="login.html">Login</a>
								</li>
								<li>
									<a class="dropdown-item" href="signup.html">Signup</a>
								</li>
								<li>
									<a class="dropdown-item" href="forgot-pwd.html">Forgot Password</a>
								</li>
								<li>
									<a class="dropdown-item" href="newsletter.html">Newsletter</a>
								</li>
								<li>
									<a class="dropdown-item" href="error.html">404</a>
								</li>
								<li>
									<a class="dropdown-item" href="error2.html">505</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- Navigation end -->
