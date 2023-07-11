<?php
//
//$numr = 1;
//
//$conn = new mysqli('localhost','SAIN_BISWAS','16409','h_booking');
//if($conn->connect_error){
//    die('Connection Filed : '.$conn->connect_error);
//}
//else {
//    $stmt = "select * from booking_info where numr = ".(string)$numr ;
//    $rw = $conn->query($stmt);
//    $row = $rw->fetch_row();
//
//    echo $row[1];
//}
//



//$title = $_POST['iname'];
//$fname = $_POST['fname'];
//$lname = $_POST['lname'];
//$cidate = $_POST['cidate'];
//$coudate = $_POST['coudate'];
//$email = $_POST['email'];
//$mob = $_POST['mob'];
//$perid = $_POST['perid'];
//$price = $_POST['price'];
//$hotid = $_POST['hotid'];

$conn = new mysqli('localhost','SAIN_BISWAS','16409','h_booking');
if($conn->connect_error){
    die('Connection Filed : '.$conn->connect_error);
}
else {
    $sql = "select * from booking_info";
    $resul = $conn->query($sql);
    $rw = $resul->fetch_all();
    $nnn = count($rw) - 1;
    $nnnn = $rw[$nnn][0] +1 ;
    echo $nnnn;



//    $stmt = $conn->prepare("insert into booking_info values (?,?,?,?,?,?,?,?,?,?,?)");
//    $stmt->bind_param("issssssissi",$nnnn,$title,$fname,$lname,$cidate,$coudate,$email,$mob,$perid,$hotid,$price);
//    $stmt->execute();
//    echo "Registration Successfully...\n";
//    echo " <br> Your Booking id is : ".$nnnn ;
//    $stmt->close();
//    $conn->close();
}
?>
