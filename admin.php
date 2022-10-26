<!--<?php 


<!DOCTYPE html>
<html>
<head>
   <title>Approve Requests</title>
  </head>
  <body>
---- search bar------------>
<div class="container">
  <h2 style="float: left;">Search one employee at a time to approve requests.</h2>
 	<div style="float: right;" class="srch">
 		<form class="navbar-form" method="post" name= "form1">

 			<input class="form-control" type="text" name="search"
 			placeholder="employee_name.." required="">
 			<button style= "background-color:#6db6b9e6;" type="submit" name="submit" class="btn btn-default">
 			<span class="glyphicon glyphicon-search"></span>
 			</button>
 			</form>
 			</div>

<br><br><br><br>
  

<h2> New Requests</h2>
<?php
if(isset($_POST['submit']))
{
  $q=mysqli_query($db,"SELECT 
    employee_id, employee_name, application_id,job_description,approval status,start_date, end_date FROM 'leave_applications'
      where employee_name like '%$_POST[search]%' and status='' ");

  if(mysqli_num_rows($q)==0)
  {
     echo "Sorry!Employee doesn't exist.Try searching again." ;

  }
  
else
{
 
   echo "<table class='table table-bordered table-hover' >";
   echo "<tr style='background-color: #6db6b9e6;'> ";

    echo "<th>"; echo "employee_id"; echo  "</th>";
    echo "<th>"; echo "employee_name"; echo "</th>";
    echo "<th>"; echo "application_id"; echo "</th>";
    echo "<th>"; echo "job_description"; echo "</th>";
    echo "<th>"; echo "approval status"; echo "</th>";
    echo "<th>"; echo "start_date"; echo "</th>";
    echo "<th>"; echo "end_date"; echo "</th>";
    echo "</tr>";

while($row=mysqli_fetch_assoc($q))
  {    echo "<tr>";
    echo "<td>"; echo $row['employee_id']; echo "</td>";
    echo "<td>"; echo $row['employee_name']; echo "</td>";
    echo "<td>"; echo $row['application_id']; echo "</td>";
    echo "<td>"; echo $row['job_description']; echo "</td>";
    echo "<td>"; echo $row['approval status']; echo "</td>";
    echo "<td>"; echo $row['start_date']; echo "</td>";
    echo "<td>"; echo $row['end_date']; echo "</td>";
    echo "</tr>";
   }

 echo "</table>";
  ?>

  <?php
   }
}
 else
 {
   $res=mysqli_query($db,"SELECT
   employee_id, employee_name, application_id,job_description,approval status,start_date, end_date FROM 'leave_applications' where approval status='' ; ");

echo "<table class='table table-bordered table-hover' >";
echo "<tr style='background-color: #6db6b9e6;'> ";
 }
 <div style= "float:right;" class=""srch">
  <form class= "navbar-form" method="post" name="form1">

  <input class="form-control" type="text" name="search"
placeholder="employee name..." required="">
<button style="background-color: #6db6b9e6;" type="submit" name="submit" class="btn btn-default">
<span class="glyphicon glyphicon-search"></span>
</button>
</form>
</div>

<br><br><br><br><h2>New Requests</h2>
<?php

if(isset($_POST['submit']))
{
$q= msqli_query($db,"SELECT employee_id, employee_name, application_id, job_description, approval_status, start_date, end_date FROM 'leave_applications' where employee_name like '%$_POST[search]%' and status=''");

if(mysqli_num_rows($q)==0)
{
echo "Sorry! No new employee found with that username. Try searching again.";
}

else
{
echo "<table class='table table-bordered table-hover' >";
echo "<tr style='background-color: #6db6b9e6;'>";

echo "<th>";echo "app_id"; echo "</th>";
echo "<th>";echo "employee_id"; echo "</th>";
echo "<th>";echo "Name"; echo "</th>";
echo "<th>";echo "job"; echo "</th>";

echo "</tr>";
?>
<form action="post">
<button  type="submit" name="submit1" style="background-color: #101010ed; color:red; font-weight:700; font-size:18px;"class="btn btn-default">
<span style="color: red" class="glyphicon glyphicon-remove-sign"></span>&nbsp Remove</button>
<button type="submit" name="submit2" style="background-color: #101010ed; color:green; font-weight:700; font-size:18px;" class="btn btn-default">
<span style="color:green;" class="glyphicon glyphicon-ok-sign"></span>&nbsp Approve</button>
</form>

<?php
}

}

else
{
$res=mysqli_query($db, "SELECT employee_id, employee_name, application_id, job_description, approval_status, start_date, end_date FROM 'leave_applications' where employee_name like '%$_POST[search]%' and status='';");
echo "<table class='table table-bordered table-hover'>";
echo "<tr style='background-color: #6db6b9e6'>";

echo "<th>";echo "app_id"; echo "</th>";
echo "<th>";echo "employee_id"; echo "</th>";
echo "<th>";echo "Name"; echo "</th>";
echo "<th>";echo "job"; echo "</th>";

echo "</tr>";

while($row=mysqli_fetch_assoc($q))
{
echo "<tr>";
echo"<td>"; echo $row['application_id']; echo "</td>";
echo"<td>"; echo $row['employee_id']; echo "</td>";
echo"<td>"; echo $row['employee_name']; echo "</td>";
echo"<td>"; echo $row['job_description']; echo "</td>";
echo "</tr>";
}
echo "</table>";
}

if(isset($_POST['submit1']))
{

}
if (isset($_POST['submit2']))
{
mysqli_query($db, "UPDATE leave_applications set approval_ status='yes' where employee_id='$row[employee_name]';");
}
?>