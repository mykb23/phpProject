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
                    <a href='home.php'>
                        <i class='fa fa-home'></i>
                        Home
                    </a>
                </li>
				<li class='active'>
                    <a href='staff-admin.php'>
                        <i class='icon-grid'></i>
                        Staff Mgt
                    </a>
                </li>
				";
			}
			if($row[0]['authority'] == "staff"){
                $additionalMenu .= "
                <li class='active'>
                    <a href='staff-dashboard.php'>
                        <i class='fa fa-home'></i>
                        Home
                    </a>
                </li>
				<li class='active'>
                    <a href='student-admin.php'>
                <i class='icon-user'></i>
                    Student Mgt
                </a>
                </li>
                <li class='active'>
                <a href='subject-admin.php'>
                    <i class='icon-padnote'></i>
                    Subject Mgt
                </a>
                </li>
                <li class='active'>
                <a href='result-admin.php'>
                    <i class='icon-new-file'></i>
                    Result Mgt
                </a>
                </li>
				";
			}
			if($row[0]['authority'] == "student"){
                $additionalMenu .= "
                <li class='active'>
                    <a href='student-dashboard.php'>
                        <i class='fa fa-home'></i>
                        Home
                    </a>
                </li>
				<li class='active'>
                    <a href='view-result.php'>
                        <i class='icon-padnote'></i>
                        View Result
                    </a>
                </li>
                <li class='active'>
                    <a href='https://paystack.com/pay/schfee' target='_blank'>
                        <i class='fa fa-credit-card'></i>
                        Payment
                    </a>
                </li>
				";
			}
		}
		else {
			errorMove("D3 ".mysqli_error($connection)." in file ".__FILE__." at line ".__LINE__);
		}
		$sideMenu = "
		<ul class='list-unstyled'>
        $additionalMenu
        <li class='active'>
            <a href='password-reset.php'>
                <i class='fa fa-key' aria-hidden='true'></i>
                  Change Password
            </a>
        </li>
        <li class='active'>
            <a href='logout.php'>
                <i class='fa fa-sign-out'></i>
                Logout
            </a>
        </li>
    </ul>
	";	
	}
	else {
		$sideMenu = "";
	}
?>
  <nav id="sidebar">
    <!-- Sidebar Navidation Menus-->
    <span class="heading">Main</span>
      <?php echo $sideMenu; ?>
      <!-- <ul class="list-unstyled">
        <li class="active"><a href="index.html"> <i class="icon-home"></i>Home </a></li>
        <li><a href="tables.html"> <i class="icon-grid"></i>Staff Mgt </a></li>
        <li><a href="charts.html"> <i class="fa fa-lock"></i>Change Password </a></li>
        <li><a href="forms.html"> <i class="icon-padnote"></i>Logout </a></li>
      </ul> -->
  </nav>
<!-- <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">
	<div class="sidebar-wrapper">
        <div class="logo">
            <a href="home.php" class="simple-text">
          
            </a>
        </div>
      </div>
    </div> -->
    
