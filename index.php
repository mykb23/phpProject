<?php	
	require_once 'config.php'; 
	//Page setting
	$pageName = "School Portal"; 
	$title = "Home";
	$_SESSION['token'] = TOKEN;
	$loginFailed = "";
	if(isset($_SESSION['loginFailed']) && $_SESSION['loginFailed']){
		unset($_SESSION['loginFailed']);
		$loginFailed = "
			<div class='alert alert-danger text-center row'>
				Login Failed
			</div><br/>
		";
	}
	require_once 'templates/head.php'; 
?>
<body id="homePage">
	<div class="wrapper">    
	    <div class="">
	        <div class="content">
	            <div class="container-fluid">
	                <div class="row">
										<h1 id='pageName'><?php if(isset($pageName)) echo $pageName; ?></h1>
										<div id="loginBox" class="col-md-4 col-md-offset-4">
											<form method="post" action="login.php">
												<?php echo $loginFailed; ?>
												<div class="row">
													<label class="col-md-4">
														Student No
													</label>
													<div class="col-md-8">
														<input class="form-control" type="text" name="studentNo">
													</div>
												</div><br/>
												<div class="row">
													<label class="col-md-4">
														Password
													</label>
													<div class="col-md-8">
														<input class="form-control" type="password" name="password">
													</div>
												</div><br />
												<div class="row">												
													<div class="col-md-8 col-md-offset-4">
														<button class="btn btn-primary btn-sm" type="submit" name="token" value="<?php echo $_SESSION['token'] ?>">Login</button>
													</div>
												</div><br/>
											</form>
												<div class="row">												
													<div class="col-md-8">
														<a href="forgot-password-supply-email.php">forgot password</a>
													</div>
												</div>
											</form>
										</div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
</body>
	<?php require_once 'templates/footer.php'; ?>
</html>
