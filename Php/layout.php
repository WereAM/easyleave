<?php

session_start();

$dbserver="localhost";
$user="root";
$dbpass="";
$dbname="easyleave";
 	
$link=mysqli_connect($dbserver,$user,$dbpass,$dbname);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>
	<link rel="stylesheet" href="../css/normalize.css">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/themify-icons.css">
    <link rel="stylesheet" href="../css/pe-icon-7-filled.css">
    <link rel="stylesheet" href="../css/flag-icon.min.css">
    <link rel="stylesheet" href="../css/cs-skin-elastic.css">
    <link rel="stylesheet" href="../css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

	<aside id="left-panel" class="left-panel">
		<nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
               <ul class="nav navbar-nav">
                	<li class="menu-title">Menu</li>

                	<li class="menu-item-has-children dropdown">
                    	<a href="index.php" > Departments</a>
                  	</li>
                  	<li class="menu-item-has-children dropdown">
                    	<a href="leave_type.php" > Leave Types</a>
                  	</li>
				  	<li class="menu-item-has-children dropdown">
                     	<a href="employee.php" > Employees</a>
                  	</li>
				  
				    <li class="menu-item-has-children dropdown">
                  	   <a href="add_employee.php" > Profile</a>
                  	</li>
				  
				   	<li class="menu-item-has-children dropdown">
                     	<a href="leave.php" > Leave</a>
                  	</li>
               </ul>
            </div>
         </nav>
      </aside>
      <div id="right-panel" class="right-panel">
         <header id="header" class="header">
            <div class="top-left">
               <div class="navbar-header">
                  <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="Logo"></a>
                  <a class="navbar-brand hidden" href="index.php"><img src="images/logo2.png" alt="Logo"></a>
                  <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
               </div>
            </div>
            <div class="top-right">
               <div class="header-menu">
                  <div class="user-area dropdown float-right">
                     <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Welcome <?php echo $_SESSION['USER_NAME']?></a>
                     <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="logout.php"><i class="fa fa-power-off"></i>Logout</a>
                     </div>
                  </div>
               </div>
            </div>
         </header>

</body>
</html>