<?php
	if(isset($_SESSION['login'])){
		require_once 'connection.php';
		$additionalMenu = "";
		$user = $_SESSION['login'];
		$query = "SELECT * FROM login WHERE id = '{$user['id']}'";
		$result = mysqli_query($connection, $query);
		if($result){
			$row = mysqli_fetch_all($result, MYSQLI_ASSOC);
			if($row[0]['authority'] == "admin"){
				$additionalMenu .= "
					<li class='active'>
            <a href='staff-admin.php'>
                <i class='pe-7s-graph'></i>
                <p>Staff Mgt</p>
            </a>
        	</li>
				";
			}
			if($row[0]['authority'] == "staff"){
				$additionalMenu .= "
					<li class='active'>
            <a href='student-admin.php'>
                <i class='pe-7s-graph'></i>
                <p>Student Mgt</p>
            </a>
        	</li>
        	<li class='active'>
            <a href='subject-admin.php'>
                <i class='pe-7s-graph'></i>
                <p>Subject Mgt</p>
            </a>
        	</li>
        	<li class='active'>
            <a href='result-admin.php'>
                <i class='pe-7s-graph'></i>
                <p>Result Mgt</p>
            </a>
        	</li>
				";
			}
			if($row[0]['authority'] == "student"){
				$additionalMenu .= "
					<li class='active'>
            <a href='view-result.php'>
                <i class='pe-7s-graph'></i>
                <p>View Result</p>
            </a>
        	</li>
        	<li class='active'>
            <a href='https://paystack.com/pay/aet' target='_blank'>
                <i class='pe-7s-graph'></i>
                <p>Payment</p>
            </a>
        	</li>
				";
			}
		}
		else {
			errorMove("D3 ".mysqli_error($connection)." in file ".__FILE__." at line ".__LINE__);
		}
		
		$sideMenu = "
		<ul class='nav'>
        <li class='active'>
            <a href='home.php'>
                <i class='pe-7s-graph'></i>
                <p>Home</p>
            </a>
        </li>
        $additionalMenu
        <li class='active'>
            <a href='password-reset.php'>
                <i class='pe-7s-graph'></i>
                <p>Change Password</p>
            </a>
        </li>
        <li class='active'>
            <a href='logout.php'>
                <i class='pe-7s-graph'></i>
                <p>Logout</p>
            </a>
        </li>
    </ul>
	";	
	}
	else {
		$sideMenu = "";
	}
?>
<div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">
	<div class="sidebar-wrapper">
        <div class="logo">
            <a href="home.php" class="simple-text">
                School Portal
            </a>
        </div>
				<?php echo $sideMenu; ?>
	</div>
</div>