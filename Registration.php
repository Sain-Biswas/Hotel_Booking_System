<?php
    $title = $_POST['iname'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $cidate = $_POST['cidate'];
    $coudate = $_POST['coudate'];
    $email = $_POST['email'];
    $mob = $_POST['mob'];
    $perid = $_POST['perid'];
    $price = $_POST['price'];
    $hotid = $_POST['hotid'];
    $k_size = $_POST['k_size'];
    $t_bed = $_POST['t_bed'];
    $white = $_POST['white'];
    $red = $_POST['red'];
    $blue = $_POST['blue'];
    $yellow = $_POST['yellow'];
    $black = $_POST['black'];
    $m_bar = $_POST['m_bar'];
    $w_desk = $_POST['w_desk'];
    $c_mat = $_POST['c_mat'];

    ($k_size == "true") ? ($k_size = 1) : ($k_size = 0) ;
    ($t_bed == "true") ? ($t_bed = 1) : ($t_bed = 0) ;
    ($white == "true") ? ($white = 1) : ($white = 0) ;
    ($red == "true") ? ($red = 1) : ($red = 0) ;
    ($blue == "true") ? ($blue = 1) : ($blue = 0) ;
    ($yellow == "true") ? ($yellow = 1) : ($yellow = 0) ;
    ($black == "true") ? ($black = 1) : ($black = 0) ;
    ($m_bar == "true") ? ($m_bar = 1) : ($m_bar = 0) ;
    ($w_desk == "true") ? ($w_desk = 1) : ($w_desk = 0) ;
    ($c_mat == "true") ? ($c_mat = 1) : ($c_mat = 0) ;


    $conn = new mysqli('localhost','SAIN_BISWAS','16409','h_booking');
    if($conn->connect_error){
        $sss = "Reservation Failed......!" ;
        $ppp = "Please Try again Later." ;
        $conpic = "/pictures/reg-fail.png";
        die('Connection Filed : '.$conn->connect_error);
    }
    else {
        $sql = "select * from booking_info";
        $resul = $conn->query($sql);
        $rw = $resul->fetch_all();
        if(count($rw) == 0){
            $nnnn = 1 ;
        }
        else {
            $nnn = count($rw) - 1;
            $nnnn = $rw[$nnn][0] +1 ;
        }



        $stmt = $conn->prepare("insert into booking_info values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("issssssissiiiiiiiiiii",$nnnn,$title,$fname,$lname,$cidate,$coudate,$email,$mob,$perid,$hotid,$price,$k_size,$t_bed,$white,$red,$blue,$yellow,$black,$m_bar,$w_desk,$c_mat);
        $stmt->execute();
        $sss = "Reservation Successfully...";
        $conpic = "/pictures/reg-conf.png";
        $ppp =  " <br> Your Booking id is : ".$nnnn ;
        $stmt->close();
        $conn->close();
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
            margin: 0;
            padding: 0;
            font-family: 'Roboto Slab', serif;
            background-color: #f8f8f8;
        }


        a {
            text-decoration: none;
        }
        nav {
            width: 98vw;
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
            height: 6vw;
        }
        .nav1 ul {
            list-style: none;
            display: flex;
            width: 53vw;
            padding-top: 2vw;
            font-size: 2vw;
            justify-content: space-between;
        }
        .nav1 ul li a{
            color: blanchedalmond;
        }
        .nav1 ul li a:hover {
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

        .Conbox{
            width: 70vw;
            position: relative;
            left: 15vw;
            background-color: #5d5b60;
            margin: 5vw 0;
            border-radius: 8px;
            padding: 3vw 0vw;

        }
        .conimg {
            width: 12vw;
            height: 12vw;
            position: relative;
            left: 29vw;
            margin: 2vw 0vw;
        }
        .contxt {
            font-size: 3vw;
            text-align: center;
            color: blanchedalmond;
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
            font-size: 2vw;
            display: inline-block;
            width: 29vw;
            color: blanchedalmond;
            /* text-align: center; */
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

        @import url('https://fonts.googleapis.com/css2?family=Livvic:ital,wght@1,600&family=Roboto+Slab:wght@500&display=swap');
        .futor {
            width: 98vw;
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
        <ul>
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
    <p class="namehot-room">
        You are Booking rooms for :
        <?php
        echo $hotid;
        ?>
    </p>
    <p class="namehot-price">
        Total price paid :
        <?php
        echo $price;
        ?>
    </p>
</div>

<div class="Conbox">
    <div class="conimg">
        <img src="<?php echo $conpic; ?>" alt="" width="100%">
    </div>
    <div class="contxt">
        <?php echo $sss; ?>
        <br>
        <?php echo $ppp; ?>
        <br>
        Thanks For Choosing Dreamstayz....
    </div>
    <p class="hecusdet">
        Your Booking Details
    </p>
    <p class="dcusdet">
        Customer Name : <br><?php echo $title." ".$fname." ".$lname; ?>
    </p>
    <p class="dcusdet">
        Customer ID (Last 4 value) : <br><?php echo $perid; ?>
    </p>
    <p class="dcusdet">
        Check-in Date : <br><?php echo $cidate; ?>
    </p>
    <p class="dcusdet">
        Check-out Date : <br><?php echo $coudate; ?>
    </p>
    <p class="dcusdet">
        E-mail : <br><?php echo $email; ?>
    </p>
    <p class="dcusdet">
        Mobile No. : <br><?php echo $mob; ?>
    </p>
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