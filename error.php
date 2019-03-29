<?php
	require_once 'config.php';
	$errorCode = "N0";
	if(isset($_SESSION['error'])){
		$error = $_SESSION['error'].PHP_EOL;
		$errorCode = substr($error, 0, 2);
		unset($_SESSION['error']);
		
		//mail error to developer
	
		//log error
		$file = fopen('error-log.txt', 'a+');
		if($file){
			fputs($file, $error);
			fclose($file);	
		}
	}
	$content = "We are sorry an error $errorCode has occurred, our engineer are presently working on it";
	$pageName = "System Error"; 
	$title = "Error";
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
					<?php echo $content; ?>
          		</div>
        	</div>
			<?php require_once 'templates/footer-slogan.php'; ?>
      	</div>
    </div>
  </body>
    <?php require_once 'templates/footer.php'; ?>
</html>
