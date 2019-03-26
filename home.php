<?php	
	require_once 'connection.php';
	require_once 'key.php';
	//Page setting
	$pageName = "Home"; 
	$title = "Home";
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
	                </div>

					<div class="row mt-5">
						<div class="col-md-6">
							<h2>Welcome to your dashboard</h2>
							
							<?php 
								// require_once 'Staff-admin.php';
							?>
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
