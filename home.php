<?php	
	require_once 'connection.php';
	require_once 'key.php';
	require_once 'key-admin.php';

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
						<h3>Welcome to Administrator Dashboard</h3>
          </div>
        </div>
			<section class="no-padding-top no-padding-bottom">
				<div class="container-fluid">
				<div class="row">
				<div class="col-md-6 col-sm-12">
					<div class="statistic-block block">
					<div class="progress-details d-flex align-items-end justify-content-between">
						<div class="title">
						<div class="icon"><i class="icon-user-1"></i></div><strong>Create New Staff</strong>
							<a href="staff-admin.php"><button class="btn btn-info">Create</button></a>
						</div>
					</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12">
					<div class="statistic-block block">
					<div class="progress-details d-flex align-items-end justify-content-between">
						<div class="title">
						<div class="icon"><i class="icon-user-1"></i></div><strong>Delete A Staff</strong>
							<a href="staff-admin.php"><button class="btn btn-danger">Delete</button></a>
						</div>
					</div>
					</div>
				</div>
			</section>
			<?php require_once 'templates/footer-slogan.php'; ?>
      </div>
    </div>
  </body>
    <?php require_once 'templates/footer.php'; ?>
</html>

