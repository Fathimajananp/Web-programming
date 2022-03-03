<html>
<body>
<h2>Registration</h2>

<?php
if(isset($_POST["submit"]))
{
$con=mysqli_connect("localhost","root","","Book");
$bno=$_POST["bno"];
$title=$_POST["title"];
$author=$_POST["author"];
$price=$_POST["price"];


$sql="INSERT INTO book1(bno, title, author, price) VALUES ($bno, '$title', '$author', $price)";
$result=mysqli_query($con,$sql);

if($result)
{
echo"<script>alert('successfully registered.....')</script>";
}
}
?>
<form method="post" action="#">
book number:<input type="text" name="bno"><br>
title:<input type="text" name="title"><br>
author:<input type="text" name="author"><br>
price:<input type="text" name="price"><br>
<input type="submit" name="submit"><br>
</form>
</body>
</html>
