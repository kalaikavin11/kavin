<?php

$username=$_POST['a'];
$password=$_POST['b'];

$conn=mysqli_connect("localhost","root","","login");
$sql="select * from osus where Username='$username';";
$query=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($query))
{
	if($row['Password']==$password)
	{
?> 
<h1> <a href="loginsuccess.html"> Welcome </a> </h1>

<?php
}
}
?>