<?php

$name=$_POST['a'];
$mobile=$_POST['b'];
$email=$_POST['c'];

$conn=mysqli_connect("localhost","root","","mari");
$sql="insert into store values('$name','$mobile','$email');";

if($conn->query($sql))
{
?> <button > <a href="display.php" > Display  </a> </button>
<?php
}
?>