<?php	
	require_once 'connection.php';
	//Page setting
	$pageName = "Forgot Password"; 
	$title = "Forget Password:: Supply Email";
	$_SESSION['token'] = TOKEN;
	
	if(isset($_GET['token'])){
		$token = urldecode($_GET['token']);
	}
	else {
		$token = "";
	}
	if(isset($_GET['email'])){
		$email = urldecode($_GET['email']);
	}
	else {
		$email = "";
	}
	
	$query = "SELECT * FROM login WHERE email = '$email' AND token = '$token'";
	$result = mysqli_query($connection, $query);
	if($result){
		if(mysqli_num_rows($result)){
			$changePassword = true;
		}
		else {
			$changePassword = false;
		}
	}
	else {
		errorMove("D3 ".mysqli_error($connection)." in file ".__FILE__." at line ".__LINE__);
	}
	
	$form = "";
	if($changePassword){
		$form = "
			<form method='post' action='forgot-password-token-process.php'>
				<input type='hidden' name='email' value='$email'>
				<div class='row'>
					<label class='col-md-4'>
						New Password
					</label>
					<div class='col-md-8'>
						<input class='form-control' type='password' name='password'>
					</div>
				</div><br/>
				<div class='row'>												
					<div class='col-md-8 col-md-offset-4'>
						<button class='btn btn-primary btn-sm' type='submit' name='token' value='{$_SESSION['token']}'>Change</button>
					</div>
				</div><br/>
			</form>
		";
	}
	else {
		$form = "You supplied an invalid token we are sorry you cannot change your password";
		if(isset($_SESSION['passwordChange'])){
			$form = $_SESSION['passwordChange'];
			unset($_SESSION['passwordChange']);
		} 
	}
		
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
										<?php echo $form; ?>
										
	                </div>
	            </div>
	        </div>
	        <?php require_once 'templates/footer-slogan.php'; ?>
	    </div>
	</div>
</body>
	<?php require_once 'templates/footer.php'; ?>
</html>
