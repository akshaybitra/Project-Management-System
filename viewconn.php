<center>
<th>Project Information</th><br>
</center>
<br>
<table border="3" align="center" id="table1" cellpadding="5" cellspacing="10">
<tr>
<td>Title</td>
<td>Team</td>
<td>Guide</td>
<td>Team Count</td>
<td>Name</td>
</tr>

<?php


  $conn = mysqli_connect("localhost","root","","demo");
$Title = $_POST['Title'];
   
$sql = "Select * from upload1 Where Title='$Title'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
$Title=$row["Title"];
$Type=$row["Type"];
$Team=$row["Team"];
$Guide=$row["Guide"];
$TeamCount=$row["TeamCount"];
$Name=$row["Name"];
}
?>
<tr>
<td><?php echo $Title?></td>
<td><?php echo $Team?></td>
<td><?php echo $Guide?></td>
<td><?php echo $TeamCount?></td>

<td><a href=Download.php"?filename=<?php echo $Title;?>"><?php echo $Name ;?></a>



</tr>
</table>

