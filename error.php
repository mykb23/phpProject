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
	<div class="wrapper">
		<?php	require_once 'templates/sidebar.php'; ?>    
	    <div class="main-panel">
	        <?php require_once 'templates/masthead.php'; ?>
	        <div class="content">
	            <div class="container-fluid">
	                <div class="row">
										<h1 id='pageName'><?php if(isset($pageName)) echo $pageName; ?></h1>
										<?php echo $content; ?>
	                </div>
	            </div>
	        </div>
	        <?php require_once 'templates/footer-slogan.php'; ?>
	    </div>
	</div>
</body>
	<?php require_once 'templates/footer.php'; ?>
</html>