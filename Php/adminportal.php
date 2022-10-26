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
	<title>ADMIN PANEL</title>
	<link rel="stylesheet" type="text/css" href="css/adminpanel.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" charset="utf-8"></script>
</head>
<body>

	<div class="wrapper">
		<div class="header">
			<div class="header-menu">
				<div class="logo">
					<img src="https://news.blr.com/app/uploads/sites/3/2016/11/Out-Office-Leave-Sign-1.jpg" alt=""/>
				</div>
				<div class="sidebar-btn">
					<i class="fas fa-bars"></i>
				</div>
				<ul>
					<li><a href=""><i class="fas fa-search"></i></a></li>
					<li><a href=""><i class="fas fa-power-off"></i><span></span></a></li>
				</ul>
			</div>
		</div>

		<div class="sidebar">
			<div class="sidebar-menu">
				<center class="profile">
					<img src="https://thumbs.dreamstime.com/b/default-avatar-profile-icon-vector-social-media-user-image-182145777.jpg" class="profile" alt=""/>
					<p>Admin</p>
				</center>
				<li class="item">
					<a href="" class="menu-btn">
						<i class="fas fa-desktop"></i><span> HOME</span></a>
					</a>
				</li>

				<li class="item" id="categories">
					<a href="#categories" class="menu-btn">
						<i class="fas fa-layer-group"></i><span> CATEGORIES <i class="fas fa-chevron-down drop-down"></i></span>
					</a>
					<div class="sub-menu">
						<a href="<?php echo site_url('admin/addcategory');?>"><i class="fas fa-add"></i><span> ADD </span></a>
						<a href="<?php echo site_url('admin/editcategory');?>"><i class="fas fa-edit"></i><span> EDIT </span></a>
					</div>
				</li>

				<li class="item" id="subcategories">
					<a href="#subcategories" class="menu-btn">
						<i class="fas fa-object-group"></i><span> SUBCATEGORIES <i class="fas fa-chevron-down drop-down"></i></span>
					</a>
					<div class="sub-menu">
						<a href="<?php echo site_url('admin/addsubcategory');?>"><i class="fas fa-add"></i><span> ADD </span></a>
						<a href="<?php echo site_url('admin/editsubcategory');?>"><i class="fas fa-edit"></i><span> EDIT </span></a>
					</div>
				</li>

				<li class="item" id="clothing">
					<a href="#clothing" class="menu-btn">
						<i class="fas fa-tshirt"></i><span> CLOTHING <i class="fas fa-chevron-down drop-down"></i></span>
					</a>
					<div class="sub-menu">
						<a href=""><i class="fas fa-add"></i><span> ADD </span></a>
						<a href=""><i class="fas fa-edit"></i><span> EDIT </span></a>
					</div>
				</li>

				<li class="item" id="users">
					<a href="#users" class="menu-btn">
						<i class="fas fa-user-edit"></i><span> USERS <i class="fas fa-chevron-down drop-down"></i></span>
					</a>
					<div class="sub-menu">
						<a href=""><i class="fas fa-add"></i><span> ADD </span></a>
						<a href=""><i class="fas fa-edit"></i><span> EDIT </span></a>
					</div>
				</li>

				<li class="item">
					<a href="" class="menu-btn">
						<i class="fas fa-chart-line"></i><span> VIEW PURCHASES </span></a>
					</a>
				</li>
			</div>
		</div>

		<div class="main-container"></div>
	</div>

	<script type="text/javascript">
		$(document).ready(function(){
			$(".sidebar-btn").click(function(){
				$(".wrapper").toggleClass("collapse");
			});
		});
	</script>

</body>
</html>