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
	<div class="login-page">
        <div class="container d-flex align-items-center">
          	<div class="form-holder has-shadow">
	        	<div class="row">
					<div class="col-lg-6">
						<div class="info d-flex align-items-center">
						<div class="content">
							<div class="logo">
							<h1 id='pageName'><?php if(isset($pageName)) echo $pageName; ?></h1>
							<!-- <h1>School Portal</h1> -->
							</div>
							<p>Login into your account.</p>
						</div>
						</div>
					</div>
					<!-- Form Panel    -->
					<div class="col-lg-6">
						<div class="form d-flex align-items-center">
								<?php echo $loginFailed; ?>
						<div class="content">
							<form method="POST" action="login.php" class="mb-4">
								<!-- form-validate -->
							<div class="form-group">
								<input id="login-username" type="text" name="studentNo" required data-msg="Please enter your ID" class="input-material">
								<label for="login-username" class="label-material">ID</label>
							</div>
							<div class="form-group">
								<input id="login-password" type="password" name="password" required data-msg="Please enter your password" class="input-material">
								<label for="login-password" class="label-material">Password</label>
							</div>
							<button type="submit" name="login" class="btn btn-primary">Login</button>
							</form><a href="#" class="forgot-pass">Forgot Password?</a><br>
						</div>
						</div>
					</div>
					</div>
				</div>
				</div>
			</div>
	            </div>
	        </div>
	    </div>
	</div>
</body>
	<?php require_once 'templates/footer.php'; ?>
</html>
