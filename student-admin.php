<?php
require_once 'connection.php';
require_once 'key.php';
$pageName = "Student Management"; 
$title = "Student Administration";
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

if(isset($_SESSION['message']) && $_SESSION['message']){
  unset($_SESSION['message']);
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
                        <div class="col-md-7">
                            <div class="statistic-block block">
                                    <?php echo $errmsg; ?>
                                    <?php echo $addmsg; ?>
                                <div class="progress-details d-flex align-items-end justify-content-between">
                                        <?php require_once 'add-student.php' ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
      <section class="no-padding-top no-padding-bottom align-items-center" id="no-align">
				<div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="statistic-block block" id="block">
                                        <?php echo $delmsg; ?>
                                <div class="progress-details d-flex align-items-end justify-content-between">
                                        <?php require_once 'student-table.php' ?>
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