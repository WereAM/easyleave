<?php

$dbserver="localhost";
$user="root";
$dbpass="";
$dbname="easyleave";

$link=mysqli_connect($dbserver,$user,$dbpass,$dbname);

if(isset($_POST['application'])){
 	$current_date = $_POST['current_date'];
	$employee_name= $_POST['employee_name'];
	$email = $_POST['email'];
	$job_description = $_POST['job_description'];
    $reason_for_leave = $_POST['reason_for_leave'];
	$dates_requested_from = $_POST['dates_requested_from']; 
    $dates_requested_to = $_POST['dates_requested_to']; 

    $insert="Insert INTO leave application((Email, JobDescription, Reasonforleave, Request date, Start date, End date) VALUES ('$curent_date','$employee_name','$email','$job_description','$reasonforleave','$datesrequestedfrom','$datesrequestedto')";

    $result= mysqli_query($link,$insert);
    }
?>


<!DOCTYPE html>
<html>
 <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Leave Application </title>
	<link rel="stylesheet" type="text/css" href="../Css/styles.css">

 </head>
<body>
	<div class="container">
		<div class="heading">Leave Application Form</div>
		<form method="POST">
			<div class="details_container">
				<label for="date">Date</label>
				<input type="date" name="date">
			</div>

			<div class="details_container">
				<label for="employeename">Employee Name:</label>
				<input type="text" name="employeename" placeholder="Full Name" required="">
			</div>

            <div class="details_container">
                <label for="email">Email:</label>
                <input type="text" name="email">
            </div>

            <div class="details_container">
                <label for="department">Department:</label>
                <input type="text" name="department">
            </div>

			<div class="details_container">
				<label for="reasonforleave">Reason for Leave:</label>
				<select name="reasonforleave" id="Reason for leave">    
                    <option value="sickleave">Sick Leave</option>
                    <option value="maternity/paternity leave">Maternity/Paternity Leave</option>
                    <option value="bereavement">Bereavement</option>
                    <option value="casualleave">Casual Leave</option>
                    <option value="studyleave">Study Leave</option>
                    <option value="leaveofabsence">Leave of Absence</option>
                    <option value="other">Other</option>
                </select>	
			</div>

			<div class="details_container">
				<label for="datesrequestedfrom">Date Requested From:</label>
				<input type="date" name="datesrequestedfrom">
			</div>

			<div class="details_container">
				<label for="datesrequestedto">Date Requested To:</label>
				<input type="date" name="datesrequestedto">
			</div>
			
			<div class="details_container">
				<input type="submit" name="reason" value="Submit">
			</div>
	
        </form>
    </div>
</body>
</html>