<!DOCTYPE html>
<html>
<head></head>
<body>
<?php
$con=mysqli_connect("localhost","root","AayusH@2612","USER");
if(!$con)
    die("C1" . mysqli_connect_error());
$uname=$_POST['username'];
$pass=$_POST['password'];
$sql="select user_id from profile where user_name='".$uname."' and password='".$pass."'";
$q=mysqli_query($con, $sql);
if(!$q)
    die("C3" . mysqli_error($con));
    $var=mysqli_fetch_array($q,MYSQLI_ASSOC);
     $uid=$var["user_id"]; 
mysqli_free_result($q);
$sql="update profile set status=1 where user_id='".$uid."'";
$q=mysqli_query($con,$sql);
if(!$q)
    die("C3" . mysqli_error($con));
mysqli_close($con);
echo "<meta http-equiv=Refresh content=0;url=single-blog.php>";
?>
</body>
</html>
