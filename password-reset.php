<?php
    require_once 'connection.php';
	require_once 'key.php';
    $pageName = "Change Password"; 
    $title = "Password Reset";
    $emptyMsg = "";
    $errMsg = "";

    if(isset($_SESSION['changeEmpty']) && $_SESSION['changeEmpty']){
        unset($_SESSION['changeEmpty']);
        $emptyMsg = "
          <div class='alert alert-success text-center row'>
                Password cannot be empty!
          </div><br/>
        ";
      }
      if(isset($_SESSION['changeError']) && $_SESSION['changeError']) {
        unset($_SESSION['changeError']);
        $errMsg = "
          <div class='alert alert-danger text-center row'>
              Password do not match!
          </div><br/>
        ";
      }

    require_once 'templates/head.php';
	// $_SESSION['login'];
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
          		</div>
        	</div>
            <section class="no-padding-top no-padding-bottom">
				<div class="container-fluid">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="statistic-block block">
											<?php echo $emptyMsg; ?>
											<?php echo $errMsg; ?>
                                <form action="password-reset-process.php" class="p-1 is-valid" method="POST">
                                <!-- <input type="text" value="<?php echo $_SESSION['login']['id']; ?>">
                                    <div class="form-group">
                                        <label for="labelCurrentPassword">Current Password</label>
                                        <input type="password" class="form-control" name="old" id="labelCurrentPassword" placeholder="Current Password" require>
                                    </div> -->
                                    <div class="form-group">
                                        <label for="labelNewPassword" class="label-material">New Password</label>
                                        <input type="password" class="form-control " name="new" id="labelNewPassword" placeholder="New Password" require>
                                    </div>
                                    <div class="form-group">
                                        <label for="labelConfirmPassword" class="label-material">Confirm New Password</label>
                                        <input type="password" class="form-control " name="confirm" id="labelConfirmPassword" placeholder="Confirm New Password" require>
                                    </div>
                                    <button type="submit" name="change" class="btn btn-info">Change</button>
                                </form>
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
