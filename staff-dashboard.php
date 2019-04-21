<?php	
	require_once 'connection.php';
	require_once 'key.php';
	require_once 'key-staff.php';

	//Page setting
	$pageName = "Home"; 
	$title = "Home";
	require_once 'templates/head.php'; 
?>
<body>
      <?php require_once "templates/header.php"; ?>
    <div class="d-flex align-items-stretch">
		<!-- Sidebar Navigation-->
      <?php require_once "templates/sidebar.php"; ?>
		<!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
						<h1 id='pageName'><?php if(isset($pageName)) echo $pageName; ?></h1>
						<h3>Welcome to Staff Dashboard</h3>
          </div>
        </div>
			<section class="no-padding-top no-padding-bottom">
				<div class="container-fluid">
				<div class="row">
				<div class="col-md-6 col-sm-12">
					<div class="statistic-block block">
					<div class="progress-details d-flex align-items-end justify-content-between">
						<div class="title">
						<div class="icon"><i class="icon-user"></i></div><strong>Create New Student</strong>
							<a href="student-admin.php"><button class="btn btn-info">Create</button></a>
						</div>
					</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12">
					<div class="statistic-block block">
					<div class="progress-details d-flex align-items-end justify-content-between">
						<div class="title">
						<div class=""><i class="icon-user"></i></div><strong>Delete A Student</strong>
							<!-- <a href="student-admin.php"><button class="btn btn-warning mr-2">Update</button></a> -->
							<a href="student-admin.php"><button class="btn btn-danger">Delete</button></a>
						</div>
					</div>
					</div>
				</div>
			</section>
			<section class="no-padding-top no-padding-bottom">
				<div class="container-fluid">
				<div class="row">
				<div class="col-md-6 col-sm-12">
					<div class="statistic-block block">
					<div class="progress-details d-flex align-items-end justify-content-between">
						<div class="title">
						<div class="icon"><i class="icon-padnote"></i></div><strong>Create New Subject</strong>
							<a href="subject-admin.php"><button class="btn btn-info">Create</button></a>
						</div>
					</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12">
					<div class="statistic-block block">
					<div class="progress-details d-flex align-items-end justify-content-between">
						<div class="title">
						<div class="icon"><i class="icon-padnote"></i></div><strong>Edit, Update or Delete Subject</strong>
							<a href="subject-admin.php"><button class="btn btn-primary mr-2">Edit</button></a>
							<a href="subject-admin.php"><button class="btn btn-warning mr-2">Update</button></a>
							<a href="subject-admin.php"><button class="btn btn-danger">Delete</button></a>
						</div>
					</div>
					</div>
				</div>
			</section>
			<section class="no-padding-top no-padding-bottom">
				<div class="container-fluid">
				<div class="row">
				<div class="col-md-6 col-sm-12">
					<div class="statistic-block block">
					<div class="progress-details d-flex align-items-end justify-content-between">
						<div class="title">
						<div class="icon"><i class="icon-form-1"></i></div><strong>Create New Student Result</strong>
							<a href="result-admin.php"><button class="btn btn-info">Create</button></a>
						</div>
					</div>
					</div>
				</div>
				<!-- <div class="col-md-6 col-sm-12">
					<div class="statistic-block block">
					<div class="progress-details d-flex align-items-end justify-content-between">
						<div class="title">
						<div class="icon"><i class="icon-new-file"></i></div><strong>Update or Delete Student Result</strong>
							<a href="staff-admin.php"><button class="btn btn-warning mr-2">Update</button></a>
							<a href="staff-admin.php"><button class="btn btn-danger">Delete</button></a>
						</div>
					</div>
					</div>
				</div> -->
			</section>
			<?php require_once 'templates/footer-slogan.php'; ?>
      </div>
    </div>
  </body>
    <?php require_once 'templates/footer.php'; ?>
</html>

