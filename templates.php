<?php	
	require_once 'connection.php';
	require_once 'key.php';
	//Page setting
	$pageName = "Home"; 
	$title = "Home";
	require_once 'templates/head.php'; 
?>
<body>
	<?php	require_once 'templates/header.php'; ?>    
	<?php	require_once 'templates/sidebar.php'; ?>    
	<div class="wrapper">
	    <div class="main-panel">
	        <?php require_once 'templates/masthead.php'; ?>
	        <div class="content">
	            <div class="container-fluid">
	                <div class="row">
						<h1 id='pageName'><?php if(isset($pageName)) echo $pageName; ?></h1>
	                </div>
	            </div>
	        </div>
	        <?php require_once 'templates/footer-slogan.php'; ?>
	    </div>
	</div>
</body>
	<?php require_once 'templates/footer.php'; ?>
</html>
