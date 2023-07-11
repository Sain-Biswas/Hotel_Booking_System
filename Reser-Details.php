<?php

$numr = $_POST['Sid'];

$conn = new mysqli('localhost','SAIN_BISWAS','16409','h_booking');
if($conn->connect_error){
    die('Connection Filed : '.$conn->connect_error);
}
else {
    $stmt = "select * from booking_info where booking_id = ".(string)$numr ;
    $rw = $conn->query($stmt);
    $row = $rw->fetch_row();
    if($row != null){
        $name = $row[1]." ".$row[2]." ".$row[3] ;
        $frm = $row[4];
        $tto = $row[5];
        $email = $row[6];
        $mobile = $row[7];
        $iden = $row[8];
        $hotid = $row[9];
        $dis = "flex" ;
        $dis1 = "<p class=\"dcusdet\">
        Booking ID : <br>".$numr."
    </p>
    <p class=\"dcusdet\">
        Hotel Booked : <br>".$hotid."
    </p>
    <p class=\"dcusdet\">
        Customer Name : <br>".$name."
    </p>
    <p class=\"dcusdet\">
        Customer ID (Last 4 value) : <br>".$iden."
    </p>
    <p class=\"dcusdet\">
        Check-in Date : <br>".$frm."
    </p>
    <p class=\"dcusdet\">
        Check-out Date : <br>".$tto."
    </p>
    <p class=\"dcusdet\">
        E-mail : <br>".$email."
    </p>
    <p class=\"dcusdet\">
        Mobile No. : <br>".$mobile."
    </p>
    <p class=\"ncusdet\">
        Booking Status : <br>Conformed
    </p>";

    }
    else{
        $dis = "none" ;
        $dis1 = "<p class=\"hecusdet\">
        <br><br>
        Provided Booking ID Not Found :(
        <br><br><br>
    </p>";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Conformation</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Livvic:ital,wght@1,600&family=Roboto+Slab:wght@500&display=swap');
        * {
            margin: 0;
            padding: 0;
        }
        body{
            font-family: 'Roboto Slab', serif;
            background-color: #fffaf4;
        }

        a {
            text-decoration: none;
        }
        nav {
            width: 98.9vw;
            height: 6vw;
            display: flex;
            background-color: #373f47;
            justify-content: space-between;
        }
        .navlogo {
            width: 17vw;
            height: 11vw;
            margin-left: 4vw;
        }
        .nav1 {
            width: 56vw;
            padding-top: 2vw;
        }
        .nav1 .nav1ul {
            list-style: none;
            display: flex;
            width: 53vw;
            padding-top: 0vw;
            font-size: 2vw;
            justify-content: space-between;
        }
        .nav1 .nav1ul li a{
            color: blanchedalmond;
        }
        .nav1 .nav1ul li a:hover {
            color: #c3c9e9;
        }
        .namehot {
            height: 6vw;
            font-size: 2vw;
            font-style: italic;
            padding-right: 5vw;
            background-color: #373f47;
            color: blanchedalmond;
            display: flex;
            flex-direction: column;
            align-items: flex-end;
        }
        .navrese {
            color: blanchedalmond;
            cursor: pointer;
        }
        #dropdown {
            position: relative;
            list-style: none;
            display: none;
            width: 16vw;
            padding: 0;
            right: 0.5vw;
            flex-direction: column;
            background-color: #8b8982;
        }
        #dropdown li {
            width: 16vw;
            color: blanchedalmond;
        }

        .cusdet {
            width: 70vw;
            position: relative;
            left: 15vw;
            border-radius: 8px;
            background-color: #5d5b60;
            margin: 5vw 0vw;
        }
        .hecusdet{
            margin: 0.5vw 1.5vw;
            font-size: 4vw;
            width: 66vw;
            color: blanchedalmond;
            text-align: center;
        }
        .dcusdet {
            margin: 0.5vw 4vw;
            margin-right: 1vw;
            font-size: 1.5vw;
            display: inline-block;
            width: 29vw;
            color: blanchedalmond;
        }
        .ncusdet {
            margin: 2vw 1.5vw;
            margin-top: 4vw;
            font-size: 1.5vw;
            display: inline-block;
            width: 66vw;
            color: blanchedalmond;
            text-align: center;
        }

        .can-upd {
            width: 100%;
            display: flex;
            justify-content: space-around;
            height: 6vw;
        }
        .can-upd form {
            display: inline-block;
        }
        .cancel {
            width: 10vw;
            height: 3vw;
            font-size: 2vw;
            border-radius: 8px;
            background-color: #c4dcd4;
        }
        .cancel:hover {
            background-color: red;
        }
        .update {
            width: 10vw;
            height: 3vw;
            font-size: 2vw;
            background-color: #c4dcd4;
            border-radius: 8px;
        }
        .update:hover {
            background-color: aquamarine;
        }

        @import url('https://fonts.googleapis.com/css2?family=Livvic:ital,wght@1,600&family=Roboto+Slab:wght@500&display=swap');
        .futor {
            width: 98.9vw;
            height: 20vw;
            font-family: 'Roboto Slab', serif;
            display: grid;
            color: azure;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            column-gap: 1vw;
            grid-template-rows: 1fr;
            background-color: #373f47;
        }
        .futor1 {
            grid-area: 1/1/2/2;
            display: flex;
            justify-content: center;
            flex-direction: column;
            font-family: 'Rouge Script', serif;
            align-content: center;
            flex-wrap: wrap;
        }
        .futor1 img {
            width: 20vw;
            height: 14vw;
            width: 22vw;
            filter: grayscale();
        }
        .futor1 p{
            font-size: 2vw;
            text-align: center;
            margin: 0;
            width: 22vw;
            padding: 0;
        }
        .futor2{
            grid-area: 1/2/2/3;
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-content: center;
            flex-wrap: wrap;
        }
        .futor2 p {
            font-size: 2vw;
            margin: 0.3vw 0vw;
            width: 22vw;
            padding: 0;
        }
        .futor2 address {
            font-size: 1.5vw;
        }
        .futor3{
            grid-area: 1/3/2/4;
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-content: center;
            flex-wrap: wrap;
        }
        .futor3 a {
            text-decoration: none;
            margin: 0.5vw 0vw;
            color: azure;
            font-size: 2vw;
        }
        .futor3 a:hover {
            color: #f4decb;
        }
        .futor3 div {
            display: flex;
            justify-content: space-around;
        }
        .futor3 img {
            width: 2vw;
            height: 2vw;
            filter: grayscale();
        }
        .futor3 img:hover {
            filter: grayscale(0);
        }
        .futor4{
            grid-area: 1/4/2/5;
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-content: center;
            flex-wrap: wrap;
        }
        .futor4 p {
            width: 22vw;
            font-size: 1.5vw;
            padding: 0;
            margin: 0.5vw 0vw;
        }

    </style>
</head>
<body>
<nav>
    <div class="navlogo">
        <img src="Dreamstayz-logo.png" alt="Dreamstayz" height="100%" width="100%">
    </div>
    <div class="nav1">
        <ul class="nav1ul">
            <li> <a href="Hayat-Dreamstayz.html">Home</a> </li>
            <li> <a href="#">Branches</a> </li>
            <li> <a href="#">Events</a> </li>
            <li> <a href="#">Gallery</a> </li>
            <li id="navres" class="navrese" onmouseover="hovinres()" onmouseout="hovoutres()" > Reservations &#x25BC;
                <ul id="dropdown">
                    <li><a href="#">Book a Stay</a></li>
                    <li><a href="See-Reservation.html">See Reservation</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
<script type="text/javascript">
    function hovinres(){
        let w = document.getElementById('navres');
        w.style.color = '#c3c9e9';
        let v = document.getElementById('dropdown');
        v.style.display = 'flex';
    }
    function hovoutres(){
        let w = document.getElementById('navres');
        w.style.color = 'blanchedalmond';
        let v = document.getElementById('dropdown');
        v.style.display = 'none';
    }
</script>
<div class="namehot">

</div>

<div class="cusdet">
    <p class="hecusdet">
        Your Booking Details
    </p>
    <?php echo $dis1 ; ?>

    <div class="can-upd" style="display: <?php echo $dis; ?>">
        <form action="Cancel.php" method="post">
            <input type="number" name="Bid" id="Bid" style="display: none;" value="<?php echo $numr; ?>">
            <input style="display: none;" type="text" name="name" id="name" value="<?php echo $name; ?>">
            <input type="submit" value="Cancel" class="cancel">
        </form>
        <form action="Update.php" method="post">
            <input style="display: none;" type="number" name="cid" id="cid" value="<?php echo $row[0]; ?>">
            <select style="display: none;" name="iname" id="iname" value="<?php echo $row[1]; ?>">
                <option value="Mr.">Mr.</option>
                <option value="Mrs.">Mrs.</option>
                <option value="Ms.">Ms.</option>
            </select>
            <input style="display: none;" type="text" name="fname" id="fname" value="<?php echo $row[2]; ?>">
            <input style="display: none;" type="text" name="lname" id="lname" value="<?php echo $row[3]; ?>">

            <input style="display: none;" type="date" name="cidate" id="cidate" value="<?php echo $row[4]; ?>" >
            <input style="display: none;" type="date" name="coudate" id="coudate" value="<?php echo $row[5]; ?>" >

            <input style="display: none;" type="email" name="email" id="email" value="<?php echo $row[6]; ?>">
            <input style="display: none;" type="number" name="mob" id="mob" value="<?php echo $row[7]; ?>">

            <input style="display: none;" type="number" name="price" id="price" value="<?php echo $row[10]; ?>">
            <input style="display: none;" type="text" name="hotid" id="hotid" value="<?php echo $row[9]; ?>">

            <input style="display: none;" type="text" name="perid" id="perid" value="<?php echo $row[8]; ?>">


            <input class="update" type="submit" value="Update">
        </form>
    </div>
</div>

<div class="futor">
    <div class="futor1">
        <img src="Dreamstayz-logo.png" alt="Dreamstayz">
        <p>Dreamstayz Pvt. Ltd.</p>
        <p>Since 2000</p>
    </div>
    <div class="futor2">
        <p>Address : <Address>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus, quibusdam
        </Address></p>
        <p>E-mail : <address>contact@dreamstayz.in</address></p>
        <p>Phone : <address>+91 02587 41369</address> </p>
    </div>
    <div class="futor3">
        <a href="#">Home</a><a href="#">Book a Stay</a><a href="#">Check Reservation</a><a href="#">Branches</a><a href="#">Contact Us</a>
        <div>
            <a href="https://www.facebook.com" target="_blank"> <img src="/pictures/facebook.png" alt="F"> </a><a href="https://www.instagram.com" target="_blank"> <img src="/pictures/instagram.png" alt="I"> </a><a href="https://www.twitter.com" target="_blank"> <img src="/pictures/twitter.png" alt="T"> </a>
        </div>
    </div>
    <div class="futor4">
        <p>
            Contact Developers: <br>
        </p>
        <p>
            Head : sain.biswas2614@gmail.com <br>
        </p>
        <p>
            Design : <br> mayanksharmarrk30@gmail.com & saurya@gmail.com <br>
        </p>
        <p>
            Content & Testing : <br> ujjwalks677@gmail.com & gautamdas062004@gmail.com
        </p>
    </div>
</div>

</body>
</html>