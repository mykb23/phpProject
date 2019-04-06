<?php
require_once 'connection.php';
require_once 'key.php';
require_once 'key-staff.php';
// require_once 'result-process.php';

$pageName = "Result Management"; 
$title = "Result Administration";
$addmsg = "";
$delmsg = "";
$errmsg = "";
if(isset($_SESSION['create']) && $_SESSION['create']){
  unset($_SESSION['create']);
  $addmsg = "
    <div class='alert alert-success text-center row'>
      Student record has successfully been created!
    </div><br/>
  ";
}elseif(isset($_SESSION['err']) && $_SESSION['err']) {
  unset($_SESSION['err']);
  $errmsg = "
    <div class='alert alert-danger text-center row'>
      Student record already exist!
    </div><br/>
  ";
}

if(isset($_SESSION['del']) && $_SESSION['del']){
  unset($_SESSION['del']);
  $delmsg = "
    <div class='alert alert-success text-center row'>
      Student record has successfully been deleted!
    </div><br/>
  ";
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
			<h1 id='pageName'><?php if(isset($pageName)) echo $pageName; ?></h1>
          </div>
        </div>
			<section class="no-padding-top no-padding-bottom">
				<div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="statistic-block block">
                                    <?php echo $errmsg; ?>
                                    <?php echo $addmsg; ?>
                                <div class="progress-details d-flex align-items-end justify-content-between">
                                  <!-- <div class="container-fluid">
                                    <h3 class="mb-3 text-white">Create A New Student</h3>
                                    <div class="row">
                                      <div class="col-md-12 col-lg-12 mb-2">
                                        <form action="student-process.php" class="p-1" method="POST">
                                          <div class="form-group">
                                              <label for="labelEmail">Email</label>
                                              <input type="email" class="form-control" name="mail" id="labelEmail" placeholder="Email">
                                          </div>
                                          <div class="form-group">
                                              <label for="labelPassword" class="label-material">Password</label>
                                              <input type="password" class="form-control " name="pass" id="labelPassword" placeholder="Password">
                                          </div>
                                          <button type="submit" name="send" class="btn btn-info">Create</button>
                                        </form>
                                      </div>
                                    </div> -->
                                    
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="statistic-block block">

                                        <?php echo $delmsg; ?>
                                <div class="progress-details d-flex align-items-end justify-content-between">
                                        <!-- <?php echo $table; ?> -->
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