<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();

?>
<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">

	<title>DashBoard</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">


</head>

<body>
<?php include("includes/header.php");?>

	<div class="ts-main-content">
		<?php include("includes/sidebar.php");?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">Dashboard</h2>

						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-primary text-light">
												<div class="stat-panel text-center">
													<div class="stat-panel-number h1 ">View Hostels</div>
												</div>
											</div>
											<a href="view.php" class="block-anchor panel-footer">See Rooms <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-success text-light">
												<div class="stat-panel text-center">

												<div class="stat-panel-number h1 ">Book Hostel</div>

												</div>
											</div>
											<a href="book-hostel.php" class="block-anchor panel-footer text-center">Start Process &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
                                    <div class="col-md-3">
                                        <div class="panel panel-default">
                                            <div class="panel-body bk-blue text-light">
                                                <div class="stat-panel text-center">

                                                    <div class="stat-panel-number h1 ">Full Profile</div>

                                                </div>
                                            </div>
                                            <a href="full-profile.php" class="block-anchor panel-footer text-center">View All &nbsp; <i class="fa fa-arrow-right"></i></a>
                                        </div>
                                    </div>

								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div
</body>



<style> .foot{text-align: center; border: 1px solid black;}</style>
</html>
