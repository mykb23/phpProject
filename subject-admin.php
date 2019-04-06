<?php
require_once 'connection.php';
require_once 'key.php';
require_once 'key-staff.php';

$pageName = "Subject Management"; 
$title = "Subject Administration";
$addmsg = "";
$delmsg = "";
$errmsg = "";
$upmsg = "";

if(isset($_SESSION['create']) && $_SESSION['create']){
  unset($_SESSION['create']);
  $addmsg = "
    <div class='alert alert-success text-center row'>
        Subject successfully added!
    </div><br/>
  ";
}elseif(isset($_SESSION['err']) && $_SESSION['err']) {
  unset($_SESSION['err']);
  $errmsg = "
    <div class='alert alert-danger text-center row'>
        Subject already exist!
    </div><br/>
  ";
}

if(isset($_SESSION['del']) && $_SESSION['del']){
  unset($_SESSION['del']);
  $delmsg = "
    <div class='alert alert-success text-center row'>
        Subject successfully deleted!
    </div><br/>
  ";
}

if(isset($_SESSION['update']) && $_SESSION['update']){
  unset($_SESSION['update']);
  $upmsg = "
    <div class='alert alert-success text-center row'>
        Subject successfully Updated!
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
              <?php echo $errmsg; ?>
              <?php echo $addmsg; ?>
              <?php echo $upmsg; ?>
              <?php echo $delmsg; ?>                                    
          </div>
        </div>
			<section class="no-padding-top no-padding-bottom">
				<div class="container-fluid">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="statistic-block block">
                                <div class="progress-details d-flex align-items-end justify-content-between">
                                        <?php 
                                              require_once 'subject-process.php';
                                              ?>
                                        <div class="container-fluid">
                                         <?php
                                              if ($update == true):
                                                ?>
                                          <h3 class="mb-3 text-white">Update A Subject</h3>
                                              <?php else:?>
                                          <h3 class="mb-3 text-white">Create A New Subject</h3>
                                          <?php endif ?>
                                                <div class="row">
                                                  <div class="col-lg-12 mb-2">
                                                      <form action="subject-process.php" class="p-1" method="POST">
                                                          <div class="form-group">
                                                              <input type="hidden" class="form-control" name="id" id="labelCourse" 
                                                              value="<?php echo $id ?>">
                                                          </div>
                                                          <div class="form-group">
                                                              <label for="labelCourse">Course</label>
                                                              <input type="text" class="form-control" name="course" id="labelCourse" 
                                                              value="<?php echo $course ?>" placeholder="Course">
                                                          </div>
                                                          <div class="form-group">
                                                              <label for="labelCode" class="label-material">Course Code</label>
                                                              <input type="text" class="form-control " name="code" id="labelCode" 
                                                              value="<?php echo $code ?>" placeholder="Course Code">
                                                          </div>
                                                          <div class="form-group">
                                                          <?php
                                                              if ($update == true):
                                                          ?>
                                                            <button type="submit" name="update" class="btn btn-info">Update</button>
                                                              <?php else: ?>
                                                              <button type="submit" name="send" class="btn btn-primary">Create</button>
                                                            <?php endif ?>
                                                          </div>
                                                        </form>
                                                  </div>
                                          </div>
                                      </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="statistic-block block">
                                <div class="progress-details d-flex align-items-end justify-content-between">
                                        <?php echo $table; ?>
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