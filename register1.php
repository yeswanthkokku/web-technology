<?php
include "connect.php";
if(isset($_POST['sub'])) {
    $phn=$_POST['phn'];
    $spec=$_POST['spec'];
    $loc=$_POST['loc'];
    $name=$_POST['name'];
    $lat=$_POST['lat'];
    $log=$_POST['log'];

    $uploadOk = 0;
    if(isset($_FILES['photo'])){

        $errors= array();
        $file_name = $_FILES['photo']['name'];
        $file_size = $_FILES['photo']['size'];
        $file_tmp = $_FILES['photo']['tmp_name'];
        $file_type = $_FILES['photo']['type'];
        $tmp = explode('.', $file_name);
        $file_ext=strtolower(end($tmp));

        $expensions= array("jpeg","jpg","png", "gif");
        if(in_array($file_ext,$expensions)=== false){
           array_push($errors, "extension not allowed, please choose a JPEG or PNG file.");
        }

        if($file_size > 200000) {
            array_push($errors, "File size must be excately 50 KB.");
        }

        if(empty($errors)==true) {
           move_uploaded_file($file_tmp,"uploads/".$file_name) or die("error moving file");
           $uploadOk = 1;
        }else{
           print_r($errors);
        }
         if ($uploadOk == 1) {
        $sql = "INSERT INTO buss1 (phn,service,location,image,name,latitude,longitude)
        VALUES ($phn,'$spec','$loc','$file_name','$name',$lat,$log)";
        $qry=mysqli_query($conn,$sql) or die("Connection failed: " . mysqli_error($db));
    }
    }
}
?>
