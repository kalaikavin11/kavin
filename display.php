<?php


$conn=mysqli_connect("localhost","root","","mari");
$sql="select * from store;";
$query=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($query))
{
?> <h1> Name : <?php echo $row['Name'] ?> </h1> 
<h1> Mobile : <?php echo $row['Mobile'] ?> </h1> 
<h1> Email : <?php echo $row['Email'] ?> </h1> 
<?php
}
?>