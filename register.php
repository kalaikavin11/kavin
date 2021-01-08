<?php

$name=$_POST['a'];
$mobile=$_POST['b'];
$email=$_POST['c'];
$username=$_POST['d'];
$password=$_POST['e'];

$conn=mysqli_connect("localhost","root","","login");
$sql="insert into osus values('$name','$mobile','$email','$username','$password');";

if($conn->query($sql))
{
?> <button > <a href="login.html" > Login  </a> </button>
<?php
}
?>