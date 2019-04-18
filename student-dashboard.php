<?php	
	require_once 'connection.php';
	require_once 'key.php';
	require_once 'key-student.php';
	require_once 'student-bio-process.php';

	//Page setting
	$pageName = "Home"; 
	$title = "Home";
	$addmsg = "";
	// $delmsg = "";
	$errmsg = "";
if(isset($_SESSION['update']) && $_SESSION['update']){
  unset($_SESSION['update']);
  $addmsg = "
    <div class='alert alert-success text-center row'>
        Record successfully updated!
    </div><br/>
  ";
}elseif(isset($_SESSION['uperr']) && $_SESSION['uperr']) {
  unset($_SESSION['uperr']);
  $errmsg = "
    <div class='alert alert-danger text-center row'>
        Record already exist!
    </div><br/>
  ";
}

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
						<h3>Welcome to Student Dashboard</h3>
          </div>
        </div>
			<section class="no-padding-top no-padding-bottom">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="statistic-block block">
											<?php echo $addmsg; ?>
											<?php echo $errmsg; ?>
								<div class="icon"><i class="icon-user"></i></div><strong>Update your Bio-data</strong>
								<div class="progress-details d-flex align-items-end justify-content-between">
									<div class="container-fluid">
										<div class="row">
											<div class="col-md-12">
												<form action="student-bio-process.php" class="p-1" method="POST">
														<div class="form-group">
																<input type="hidden" class="form-control" name="id" value="<?php echo $_SESSION['login']["id"] ?>">
																<input type="hidden" class="form-control" name="mail" value="<?php echo $_SESSION['login']['email'] ?>">
														</div>
														<div class="form-group">
																<label for="labelName">Full Name</label>
																<input type="text" class="form-control" name="fullname" id="labelname" placeholder="Full Name">
														</div>
														<div class="form-group">
																		<label>Gender :</label>
																		&nbsp;&nbsp;&nbsp;&nbsp;<label>
																			<input type="radio" name="gender" value="Male">&nbsp;
																			Male
																		</label>
																		&nbsp;&nbsp;<label>
																			<input type="radio" name="gender" value="Female">&nbsp;
																			Female
																		</label>
														</div>
														<div class="form-group">
																	<label for="labelLevel">Level</label>
																	<select id="labelLevel" class="form-control" name="level">
																		<option value="100 Level">100 Level</option>
																		<option value="200 Level">200 Level</option>
																		<option value="300 Level">300 Level</option>
																		<option value="400 Level">400 Level</option>
																	</select>
														</div>
														<div class="form-group">
																<label for="labelSemester" class="label-material">Semester</label>
																<select id="labelSemester" class="form-control" name="semester">
																		<option value="Semester 1">Semester 1</option>
																		<option value="Semester 2">Semester 2</option>
																	</select>
																<!-- <input type="text" class="form-control " name="semester" id="labelSemester" placeholder="Semester"> -->
														</div>
														<div class="form-group">
															<button type="submit" name="update" class="btn btn-info">Update</button>
														</div>
												</form>
											</div>
										</div>
										
									</div>
								</div>
							</div>
					</div>
					<div class="col-md-6 col-sm-12">
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<div class="statistic-block block">
									<div class="progress-details d-flex align-items-end justify-content-between">
										<div class="title">
										<div class="icon"><i class="icon-padnote"></i></div><strong>View Your Result</strong>
										<a href="view-result.php"><button class="btn btn-info">View</button></a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-sm-12">
								<div class="statistic-block block">
									<div class="progress-details d-flex align-items-end justify-content-between">
										<div class="title">
										
										<div class="icon"><i class='fa fa-credit-card'></i></div><strong>Make Payment</strong>
										<a href="#"><button class="btn btn-info">Payment</button></a>
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

