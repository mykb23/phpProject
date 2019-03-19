<?php	
	require_once 'connection.php';
	//Page setting
	$pageName = "Forgot Password"; 
	$title = "Forget Password:: Supply Email";
	$_SESSION['token'] = TOKEN;	
	$noEmail = "";
	if(isset($_SESSION['noEmail']) && $_SESSION['noEmail']){
		$noEmail = "
			<div class='alert alert-danger text-center row'>
				{$_SESSION['noEmail']}
			</div><br/>
		";
		unset($_SESSION['noEmail']);
	}
	$tokenSent = "";
	if(isset($_SESSION['tokenSent']) && ($_SESSION['tokenSent'])){
		$tokenSent = "
			<div class='alert alert-danger text-center row'>
				{$_SESSION['tokenSent']}
			</div><br/>
		";
		unset($_SESSION['tokenSent']);
	}
	require_once 'templates/head.php'; 
?>
<body>
	<div class="wrapper">
		<?php	require_once 'templates/sidebar.php'; ?>    
	    <div class="main-panel">
	        <?php require_once 'templates/masthead.php'; ?>
	        <div class="content">
	            <div class="container-fluid">
	                <div class="row">
										<h1 id='pageName'><?php if(isset($pageName)) echo $pageName; ?><small> supply email associated with your account</small></h1>
										<form method="post" action="forgot-password-supply-email-process.php">
												<?php echo $noEmail; ?>
												<?php echo $tokenSent; ?>
												<div class="row">
													<label class="col-md-4">
														Email
													</label>
													<div class="col-md-8">
														<input class="form-control" type="email" name="email">
													</div>
												</div><br/>
												<div class="row">												
													<div class="col-md-8 col-md-offset-4">
														<button class="btn btn-primary btn-sm" type="submit" name="token" value="<?php echo $_SESSION['token'] ?>">Submit</button>
													</div>
												</div><br/>
											</form>
										
	                </div>
	            </div>
	        </div>
	        <?php require_once 'templates/footer-slogan.php'; ?>
	    </div>
	</div>
</body>
	<?php require_once 'templates/footer.php'; ?>
</html>
