<html>
<?php
$dhost="localhost";
$duser="root";
$dpass="";
$dname="shahid";
$conn=mysqli_connect("$dhost","$duser","$dpass","$dname"); 
if(!$conn)
{
die("connection failed".mysqli_connect_error());
}
$name=addslashes($_GET["nm"]);
$sql="insert into mytable(name)values('$name')";
$result=mysqli_query($conn,$sql);
if(!$result)
{
die("record insertion failled".mysqli_error());
}
echo"record is inserted successfully";
mysqli_close($conn);
?>
<body>
<form method="get" action="">
<input type="text" name="nm">
<input type="submit" value="insert">
</form>
</body>
</html>