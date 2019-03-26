<?php
require_once 'connection.php';
require_once 'key.php';
$pageName = "Staff Management"; 
$title = "Staff Administration";
require_once 'templates/head.php'; 

?>
<body>
    <div class="wrapper">
        <?php require_once 'templates/sidebar.php'; ?>    
            <div class="main-panel">
                <?php require_once 'templates/masthead.php'; ?>
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <h1 id='pageName'><?php if(isset($pageName)) echo $pageName; ?></h1>
                        </div>
                        <div class="row">
                            <?php require_once 'addStaff.php' ?>
                                <!-- <h3 class="text-center p-2">Create A New Staff</h3>
                            <div class="col-md-6 offset-md-6 p-4">
                                <form action="addStaff_process.php" class="form col-6 offset-3 p-1" method="POST">
                                    <div class="form-group">
                                        <label for="labelEmail">Email</label>
                                        <input type="text" class="form-control" name="mail" id="labelEmail" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="labelPassword">Password</label>
                                        <input type="text" class="form-control" name="pass" id="labelPassword" placeholder="Password">
                                    </div>
                                    <button type="submit" name="send" class="btn btn-primary">Submit</button>
                                </form>
                            </div> --> 
                        </div>
                        <br>
                        <br>
                        <div class="row">
                            <div id="staffTable"class=" col-lg-6  offset-lg-6">
                                <?php require_once "staff-table.php"; ?>
                            </div>
                        </div>
 
                    </div>
                </div>
                <?php require_once 'templates/footer-slogan.php'; ?>
            </div>
    </div>
</body>
	<?php require_once 'templates/footer.php'; ?>
</html>

