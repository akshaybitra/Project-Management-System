<!DOCTYPE html>
<html><html>
<style>
button {
    background-color: #E5E7E9  ; 
    border: none;
    color: black;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}


input[type=text] {
height:30px;
    width: 250px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}


input[type=text]:focus {
    width: 100%;
}
</style>
<head>
<script type="text/javascript" src="validate.js"></script>
</head>
<body background="4.jpeg"  >
<button  id="myButton"  name="back"><a href="homeadmin.php" >BACK</a></button> 
<center><img src="del.png" height="100" width="100" /></center>
<br>   
<center><h1>THE PROJECT HUB</h1></center>
<center><h2>DELETE PROJECT</h2></center>
<form action="deleteconn1.php" method="POST">

<tr>
<center>
<td>NAME OF THE PROJECT</td>
 <td><p><input  type="text" placeholder="Project Title" name="Title"></p></td>

</center>

<center><button type="submit" " id="myButton"  align="left" name="back">DELETE</button></form></center><br> <br> 
<form enctype="multipart/form-data" action="viewdelete.php" name="form" method="post">

<center><button type="submit" name="submit" id="submit" value="Submit" />CLICK HERE FOR PROJECTS</center>
<br> <br> <br> <br> 
<img src="e.jpg" height="250" width="250" />
</body>
</html>
