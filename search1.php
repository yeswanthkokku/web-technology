<?php
 session_start();
include "connect.php";
if(isset($_POST['name'])){
$e=$_COOKIE['lat3'];
$f=$_COOKIE['lat4'];

echo "<br>";

    $a=$_POST['name'];
    $sql = "SELECT * FROM buss1 ";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
           if($a==$row['service']){
             $g=$row['latitude'];
             $h=$row['longitude'];

            $n=(haversineGreatCircleDistance($e,$f,$g,$h));
            if($n<10000){
               $phn = $row['name'];
               $some=$row['phn'];
               echo "<a href='details.php?id=$some'>$phn</a>";
             echo "<br>";
           }
         }
    }


}
}
?>
<?php    function haversineGreatCircleDistance(
$latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo, $earthRadius = 6371000)
{
// convert from degrees to radians
$latFrom = deg2rad($latitudeFrom);
$lonFrom = deg2rad($longitudeFrom);
$latTo = deg2rad($latitudeTo);
$lonTo = deg2rad($longitudeTo);

$latDelta = $latTo - $latFrom;
$lonDelta = $lonTo - $lonFrom;

$angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) +
cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)));
return $angle * $earthRadius;
} ?>
