<?php
$conn = mysqli_connect("localhost","root","","demo");
$Title = $_POST['Title'];


$sql = "DELETE FROM upload1 Where Title='$Title'";
$result=mysqli_query($conn,$sql);
if($Title){
echo "<script>alert('Deleted');</script>";
}
else
echo "<script>alert('No file found to delete');</script>";
