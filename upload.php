<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database ="demo";
$prefix = ""; 
$sdb = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysqli_select_db($sdb, $mysql_database) or die("Could not select database");
$conn = mysqli_connect("localhost","root","","demo");

if(isset($_POST['submit'])!=""){

$Title=$_POST['Title'];
$Type=$_POST['Type'];
$Description=$_POST['Description'];
$TeamCount=$_POST['TeamCount'];
$Team=$_POST['Team'];
$Guide=$_POST['Guide'];
$name=$_FILES['photo']['name'];
$size=$_FILES['photo']['size'];
$type=$_FILES['photo']['type'];
$temp=$_FILES['photo']['tmp_name'];
move_uploaded_file($temp,"files/".$name);
$insert= mysqli_query($conn,"insert into upload1(name,Title,Type,Description,TeamCount,Team,Guide)values('$name','$Title','$Type','$Description','$TeamCount','$Team','$Guide')");

if($insert){
echo "<script>alert('Uploaded');</script>";

}
else{
die(mysqli_error());
}
}
?>
<html>
<head>
<title>Upload and Download</title>
</head>
<style>
body{ font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;}
a{color:#666;}
#table{margin:0 auto;background:#333;box-shadow: 5px 5px 5px #888888;border-radius:10px;color:#CCC;padding:10px;}
#table1{margin:0 auto;}
</style>
<body background="c.jpg">
<button  id="myButton"  name="back"><a href="homepage.php" >BACK</a></button>
<h3><p align="center">File Upload</p></h3> 
<form enctype="multipart/form-data" action="" name="form" method="post">
<table border="0" cellspacing="0" cellpadding="5" id="table">
<tr>
<td colspan=2>
<center><font size=4><b>ENTER PROJECT DETAILS</b></font></center>
</td>
</tr>




<tr>
<td>NAME OF THE PROJECT</td>
 <td><p><input  type="text" placeholder="Project Title" required name="Title"></p></td>

</tr>
<tr>
<td>TYPE OF THE PROJECT</td>
<td><input type="checkbox"  name="Type" value="Mini"> Mini
  <input type="checkbox" name="Type" value="Major"> Major </td>

</tr>
<tr>       
<td>DESCRIPTION</td>
<td> <p> <textarea id="msg" placeholder="DESCRIPTION" name="Description"></textarea></p></td>
 
</tr>
<tr>   
<td>TEAM COUNT</td>
 <td><p><input  type="number" placeholder="Team Count" required name="TeamCount"></p></td>

</tr>
<tr>
<td>TEAM MEMBERS</td>
<td>      <p><input  type="text" placeholder="Team Members" required name="Team"></p></td>

<tr>
<tr>
<td>PROJECT GUIDE</td>
<td> <p><input  type="text" placeholder="Guide Name" required name="Guide"></p>
</td><tr>
<tr>
<th >Choose Files</th>
<td ><label for="photo"></label><input type="file" name="photo" id="photo" /></td>
</tr>
<tr>
<th colspan="2" scope="row"><input type="submit" name="submit" id="submit" value="Submit" /></th>
</tr>
</table>
</form>
<br />
<br />

</body>
</html>