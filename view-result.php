<?php	
	require_once 'connection.php';
	require_once 'key.php';
	require_once 'key-student.php';
	require_once 'student-bio-process.php';

	//Page setting
	$pageName = "Result"; 
	$title = "Result";


	require_once 'templates/head.php'; 
	$_SESSION['login'];
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
						<!-- <h3>Welcome to Student Dashboard</h3> -->
          </div>
        </div>
			<section class="no-padding-top no-padding-bottom">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6 col-lg-12 col-sm-12">
							<div class="statistic-block block">
								<!-- <div class="icon"><i class="icon-user"></i></div> -->
								<strong>Your Result</strong>
								<div class="progress-details d-flex align-items-end justify-content-between">
									<div class="container-fluid">
										<div class="row">
											<div class="col-md-12">
											
											</div>
										</div>
										
									</div>
								</div>
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

