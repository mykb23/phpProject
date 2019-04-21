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
      <?php require_once "templates/header.php"; ?>
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <?php require_once "templates/sidebar.php"; ?>
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h1 id='pageName'><?php if(isset($pageName)) echo $pageName; ?><small> supply email associated with your account</small></h1>
                          <?php echo $noEmail; ?>
                          <?php echo $tokenSent; ?>
          </div>
        </div>
        <section class="no-padding-top no-padding-bottom">
          <div class="container">
            <div class="col-md-12">
              <form method="post" action="forgot-password-supply-email-process.php">
                <div class="col-sm-6 col-md-8">
                  <div class="row">
                    <div class="col-2">
                          <label>Email</label>
                    </div>
                    <div class="col-10">
                          <input class="form-control" type="email" name="email">
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-12 mt-2">
                    <button class="btn btn-primary btn-sm" type="submit" name="token" value="<?php echo $_SESSION['token'] ?>">Submit</button>
                  </div>
              </form>
            </div>
          </div>
        </section>
      </div>
        <?php require_once 'templates/footer-slogan.php'; ?>
    </div>
  </body>
    <?php require_once 'templates/footer.php'; ?>
</html>