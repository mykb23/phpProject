<?php
require_once 'connection.php';
require_once 'key.php';
require_once 'key-staff.php';
require_once 'result-process.php';

$pageName = "Result Management"; 
$title = "Result Administration";
$addmsg = "";
$errmsg = "";
if(isset($_SESSION['create']) && $_SESSION['create']){
  unset($_SESSION['create']);
  $addmsg = "
    <div class='alert alert-success text-center row'>
      Student result successfully created!
    </div><br/>
  ";
}elseif(isset($_SESSION['err']) && $_SESSION['err']) {
  unset($_SESSION['err']);
  $errmsg = "
    <div class='alert alert-danger text-center row'>
      Student result already exist!
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
            <div class="col-md-10">
              <div class="statistic-block block">
                      <?php echo $errmsg; ?>
                      <?php echo $addmsg; ?>
                <div class="progress-details d-flex align-items-end justify-content-between">
                  <div class="container-fluid">
                    <h3 class="mb-3 text-white">Create New Student Result</h3>
                    <form action="result-process.php" class="p-1" method="POST">
                      <div class="form-group">
                        <div class="row">
                          <div class="col-sm-3">
                            <label for="labelId">Stud ID</label>
                            <input type="text" class="form-control col-sm-12" name="id" id="labelId">
                          </div>
                          <div class="col-sm-3">
                            <label for="labelSemester">Semester</label>
                            <input type="text" class="form-control col-sm-12" name="sem" id="labelSemester">
                          </div>
                        </div>
                      </div>
                      <div class="form-group" >
                        <div class="row">
                            <div class="col-sm-4">
                              <label for="labelSub">Subject</label>
                              <select name="sub" id="labelSub" class="col-sm-12" style="height:40px;">
                                <option value="Select">Select</option>
                                <?php echo $options; ?>                                          
                              </select>
                            </div>
                            <div class="col-sm-3">
                              <label for="labelCode">Code</label>
                              <select name="code" id="labelCode" class="col-sm-12" style="height:40px;">
                                <option value="Select">Select</option>
                                <?php echo $options1; ?> 
                              </select>
                            </div>
                            <div class="col-sm-3">
                              <label for="labelScore">Score</label>
                              <input type="text" class="form-control col-sm-12" name="score" id="labelScore">
                            </div>
                            <div class="col-sm-2">
                              <label for="labelUnit">Unit</label>
                              <select name="unit" id="labelUnit" class="col-sm-12" style="height:40px;">
                                <option value="Select">Select</option>
                                <?php echo $options2; ?>                                             
                              </select>
                            </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                            <div class="col-sm-4">
                              <label for="labelSub2">Subject</label>
                              <select name="sub2" id="labelSub2" class="col-sm-12" style="height:40px;">
                                <option value="Select">Select</option>
                                <?php echo $options; ?>                                          
                              </select>
                            </div>
                            <div class="col-sm-3">
                              <label for="labelCode2">Code</label>
                              <select name="code2" id="labelCode2" class="col-sm-12" style="height:40px;">
                                <option value="Select">Select</option>
                                <?php echo $options1; ?> 
                              </select>
                            </div>
                            <div class="col-sm-3">
                              <label for="labelScore2">Score</label>
                              <input type="text" class="form-control col-sm-12" name="score2" id="labelScore2">
                            </div>
                            <div class="col-sm-2">
                              <label for="labelUnit2">Unit</label>
                              <select name="unit2" id="labelUnit2" class="col-sm-12" style="height:40px;">
                                <option value="Select">Select</option>
                                <?php echo $options2; ?>                                             
                              </select>
                            </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                            <div class="col-sm-4">
                              <label for="labelSub3">Subject</label>
                              <select name="sub3" id="labelSub3" class="col-sm-12" style="height:40px;">
                                <option value="Select">Select</option>
                                <?php echo $options; ?>                                          
                              </select>
                            </div>
                            <div class="col-sm-3">
                              <label for="labelCode3">Code</label>
                              <select name="code3" id="labelCode3" class="col-sm-12" style="height:40px;">
                                <option value="Select">Select</option>
                                <?php echo $options1; ?> 
                              </select>
                            </div>
                            <div class="col-sm-3">
                              <label for="labelScore3">Score</label>
                              <input type="text" class="form-control col-sm-12" name="score3" id="labelScore3">
                            </div>
                            <div class="col-sm-2">
                              <label for="labelUnit3">Unit</label>
                              <select name="unit3" id="labelUnit3" class="col-sm-12" style="height:40px;">
                                <option value="Select">Select</option>
                                <?php echo $options2; ?>                                             
                              </select>
                            </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                            <div class="col-sm-4">
                              <label for="labelSub">Subject</label>
                              <select name="sub4" id="labelSub" class="col-sm-12" style="height:40px;">
                                <option value="Select">Select</option>
                                <?php echo $options; ?>                                          
                              </select>
                            </div>
                            <div class="col-sm-3">
                              <label for="labelCode">Code</label>
                              <select name="code4" id="labelCode" class="col-sm-12" style="height:40px;">
                                <option value="Select">Select</option>
                                <?php echo $options1; ?> 
                              </select>
                            </div>
                            <div class="col-sm-3">
                              <label for="labelScore">Score</label>
                              <input type="text" class="form-control col-sm-12" name="score4" id="labelScore">
                            </div>
                            <div class="col-sm-2">
                              <label for="labelUnit">Unit</label>
                              <select name="unit4" id="labelUnit" class="col-sm-12" style="height:40px;">
                                <option value="Select">Select</option>
                                <?php echo $options2; ?>                                             
                              </select>
                            </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                            <div class="col-sm-4">
                              <label for="labelSub">Subject</label>
                              <select name="sub5" id="labelSub" class="col-sm-12" style="height:40px;">
                                <option value="Select">Select</option>
                                <?php echo $options; ?>                                          
                              </select>
                            </div>
                            <div class="col-sm-3">
                              <label for="labelCode">Code</label>
                              <select name="code5" id="labelCode" class="col-sm-12" style="height:40px;">
                                <option value="Select">Select</option>
                                <?php echo $options1; ?> 
                              </select>
                            </div>
                            <div class="col-sm-3">
                              <label for="labelScore">Score</label>
                              <input type="text" class="form-control col-sm-12" name="score5" id="labelScore">
                            </div>
                            <div class="col-sm-2">
                              <label for="labelUnit">Unit</label>
                              <select name="unit5" id="labelUnit" class="col-sm-12" style="height:40px;">
                                <option value="Select">Select</option>
                                <?php echo $options2; ?>                                             
                              </select>
                            </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                            <div class="col-sm-4">
                              <label for="labelSub">Subject</label>
                              <select name="sub6" id="labelSub" class="col-sm-12" style="height:40px;">
                                <option value="Select">Select</option>
                                <?php echo $options; ?>                                          
                              </select>
                            </div>
                            <div class="col-sm-3">
                              <label for="labelCode">Code</label>
                              <select name="code6" id="labelCode" class="col-sm-12" style="height:40px;">
                                <option value="Select">Select</option>
                                <?php echo $options1; ?> 
                              </select>
                            </div>
                            <div class="col-sm-3">
                              <label for="labelScore">Score</label>
                              <input type="text" class="form-control col-sm-12" name="score6" id="labelScore">
                            </div>
                            <div class="col-sm-2">
                              <label for="labelUnit">Unit</label>
                              <select name="unit6" id="labelUnit" class="col-sm-12" style="height:40px;">
                                <option value="Select">Select</option>
                                <?php echo $options2; ?>                                             
                              </select>
                            </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                            <div class="col-sm-4">
                              <label for="labelSub">Subject</label>
                              <select name="sub7" id="labelSub" class="col-sm-12" style="height:40px;">
                                <option value="Select">Select</option>
                                <?php echo $options; ?>                                          
                              </select>
                            </div>
                            <div class="col-sm-3">
                              <label for="labelCode">Code</label>
                              <select name="code7" id="labelCode" class="col-sm-12" style="height:40px;">
                                <option value="Select">Select</option>
                                <?php echo $options1; ?> 
                              </select>
                            </div>
                            <div class="col-sm-3">
                              <label for="labelScore">Score</label>
                              <input type="text" class="form-control col-sm-12" name="score7" id="labelScore">
                            </div>
                            <div class="col-sm-2">
                              <label for="labelUnit">Unit</label>
                              <select name="unit7" id="labelUnit" class="col-sm-12" style="height:40px;">
                                <option value="Select">Select</option>
                                <?php echo $options2; ?>                                             
                              </select>
                            </div>
                        </div>
                      </div>
                      <div class="form-group">
                          <!-- <button type="submit" name="update" class="btn btn-info">Update</button> -->
                          <button type="submit" name="send" class="btn btn-primary">Create</button>
                      </div>
                    </form> 
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