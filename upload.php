<?php
$target_dir = "photos\\";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
} else {
    if (!move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
           echo "Sorry, there was an error uploading your file.";    
	} else {
        $con=mysqli_connect("localhost","root","AayusH@2612","USER");
    if(!$con)
        die("C1" . mysqli_connect_error());
	$sql="select user_id from profile where status=1";
    }
	$q=mysqli_query($con, $sql);
if(!$q)
    die("C3" . mysqli_error($con));
    $var=mysqli_fetch_array($q,MYSQLI_ASSOC);
	$uid=$var["user_id"];
	mysqli_free_result($q);
	$sql="insert into blog(src,user) values('".$target_file."','".$uid."')";
	$q=mysqli_query($con, $sql);
if(!$q)
    die("C3" . mysqli_error($con));
mysqli_close($con);
}
?>