<!DOCTYPE html>
<html>
<head></head>
<body>
<?php
$con=mysqli_connect("localhost","root","AayusH@2612","USER");
if(!$con)
    die("C1" . mysqli_connect_error());
$name=$_POST['Name'];
$mob=(int)$_POST['Mob'];
$gender=$_POST['Gender'];
$uname=$_POST['username'];
$pass=$_POST['password'];
$sq="select user_id from profile where user_name='".$uname."'";
$qr=mysqli_query($con, $sq); 
if(!$qr)
    die("C3" . mysqli_error($con));
if (mysqli_num_rows($qr) != 0)
{
    echo "User already present";
    echo "<meta http-equiv=Refresh content=1;url=sign_up.php>";
}
mysqli_free_result($qr);
$sql="insert into profile(Name,Gender,mob_no,user_name,password) values('".$name."','".$gender."','".$mob."','".$uname."','".$pass."')";
$q=mysqli_query($con, $sql);
if(!$q)
    die("C3" . mysqli_error($con));
mysqli_close($con);
?>
    <?php
    echo "<meta http-equiv=Refresh content=1;url=sign_up.php>";
    ?>
</body>
</html>
