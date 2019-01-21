<body background="ab.jpg">
<table border="3" align="center" id="table1" cellpadding="5" cellspacing="10">
<tr><td align="center">List Of Projects</td></tr>
<?php

$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database ="demo";
$prefix = ""; 
$sdb = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysqli_select_db($sdb, $mysql_database) or die("Could not select database");
$conn = mysqli_connect("localhost","root","","demo");
$select=mysqli_query($conn,"SELECT * FROM upload1");
while($row1=mysqli_fetch_array($select)){
$Name=$row1['Title'];
?>
<tr>
<td width="300">
<img src="e.png" width="14" height="14"> <a href="?filename=<?php echo $Title;?>"><?php echo $Name ;?></a>
</td>
</tr>
 
<?php }?>
