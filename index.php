<?php
session_start();
$host="lochnagar.abertay.ac.uk";
$user="sql1704807";
$password="7DnkHOYCiHMh";
$db="sql1704807";
 
mysql_connect($host,$user,$password);
@mysql_select_db($db)or die( "Unable to select database");





if (isset($_POST['username'])){


$username=$_POST['username'];
$password=$_POST['password'];


$query=mysql_query("select * from userLogin where password='$password' And username='$username'");



if(mysql_num_rows($query)>0){
	
	$_SESSION["loggedin"]=true;
 header('location: main.php');
 



}

else{
header('location: failtologin.php');

}



}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cyber Guardian</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  
</head>
<body>


<div class="container-fluid">
	<a class="navbar-brand" ><img src="CYberGuardianLogo.png"></a>
	
<div >
	<h3> Bringing you cyber security news, one month at a time.</h3>
	</div>
 </div>
<div class ="col-sm-12"><center>


 <form method ="POST" action="#">
 <div class="form-input">
 <input type="usernameS" name="username" placeholder="Username"/> 
 </div>
 <div class="form-input">
 <input type="password" name="password" placeholder="Password"/>
 </div>
 <input type="submit"  value="Sign In" class="btn-login"/>
 </form>


</div>

</body>
</html>