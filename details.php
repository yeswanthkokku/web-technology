<?php
 session_start();
include "connect.php";
if(isset($_GET['id'])){

    $a=$_GET['id'];
    $sql = "SELECT * FROM buss1";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
           if($a==$row['phn']){
               $c=$row['image'];
               $a=$row['phn'];
               $b=$row['location'];
               $d=$row['service'];
               $e=$row['name'];
             echo "<br>";
         }
    }


}
}
?>
<head>
<link href="https://fonts.googleapis.com/css?family=Joti+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Indie+Flower|Kaushan+Script" rel="stylesheet"><style>
body {
        background-image: url("bg.jpg");
        background-repeat: no-repeat;
        background-size: cover;
}


#a{
  position: relative;
  left: 14%;
  top:-30%;
  font-family: 'Joti One', cursive;
  font-size: 20px;
  color: #F8F8FF;
  text-decoration: underline wavy blue;
}
h1{
font-family: 'Kaushan Script', cursive;
font-size: 25px;
}
img{
  margin-top: 6%;
}
#b{
text-align: center;
border-bottom: 3px solid snow;
color: #F8F8FF;
}
</style>
</head>
<body>
  <h1 id="b">Here I am for you</h1>

<img src="uploads/<?php echo $c?>" width="200 px" height="220px">
<div id="a">
  <h1>name:<?php echo $e?></h1>
  <p>phn:<?php echo $a?></p>
  <p>location:<?php echo $b?></p>
  <p>profession:<?php echo $d?></p>


</div>
</body>
