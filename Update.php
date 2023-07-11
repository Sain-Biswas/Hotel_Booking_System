<?php
$numr = $_POST['cid'];
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

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer">
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

        .astric{
            color: red;
            display: inline;
        }

        .infobox{
            width: 80vw;
            background-color: rgba(0, 0, 0, 0.4);
            color: blanchedalmond;
            border-radius: 8px;
            position: relative;
            left: 10vw;
            top: 5vw;
            margin-bottom: 10vw;
        }
        .infobox-head {
            text-align: center;
            font-style: italic;
            font-size: 4vw;
            margin-bottom: 1vw;
        }
        .info-div {
            padding: 0vw 2vw;
            padding-bottom: 2.5vw;
            font-size: 2vw;
        }
        .input-box {
            padding: 0.5vw;
            border-radius: 8px;
            font-size: 2vw;
            height: 3vw;
        }
        .iname{
            margin-left: 1vw;
        }
        .fname{
            margin-left: 5vw;
        }
        .lname{
            margin-left: 19.5vw
        }
        .iiname{
            margin-right: 2vw;
            width: 8vw;
            height: 4vw;
        }
        .ifname{
            margin-right: 2vw;
            width: 30vw;
        }
        .ilname{
            width: 30vw;
        }
        .cidate {
            margin-left: 1vw;
        }
        .coudate {
            margin-left: 24vw;
        }
        .icidate {
            width: 25vw;
            margin-right: 5vw;
        }
        .icoudate {
            width: 25vw;
        }
        .email {
            margin-left: 1vw;
        }
        .mob {
            margin-left: 37.5vw;
        }
        .iemail {
            width: 40vw;
        }
        .imob {
            width: 20vw;
            margin-left: 5vw;
        }
        .form-submit {
            display: flex;
            justify-content: center;
        }
        .submitb {
            width: 20vw;
            height: 4vw;
            background-color: #c4dcd4;
            color: black;
        }
        .submitb:hover {
            background-color: blanchedalmond;
            color: black;
        }
        .kkkkk {
            font-size: 1.5vw;
            text-align: center;
            color: white;
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
    <p class="namehot-room">
        You Booked room for :
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

<div class="infobox">
    <p class="infobox-head">Customer Details</p>
    <form action="Update-con.php" method="post">
        <input type="number" name="Bid" id="Bid" style="display: none;" value="<?php echo $numr; ?>">
        <div class="name-box info-div">
            <label class="iname" for="iname" class="iname">Title : </label>
            <label class="fname" for="fname">First Name <p class="astric">*</p> : &nbsp; </label>
            <label class="lname" for="lname">Last Name <p class="astric">*</p> : &nbsp; </label> <br>
            <select class="input-box iiname" name="iname" id="iname" required value="<?php echo $title; ?>" >
                <option value="Mr.">Mr.</option>
                <option value="Mrs.">Mrs.</option>
                <option value="Ms.">Ms.</option>
            </select>
            <input class="input-box ifname" type="text" name="fname" id="fname" placeholder="First Name" required value="<?php echo $fname; ?>">
            <input class="input-box ilname" type="text" name="lname" id="lname" placeholder="Last Name" required value="<?php echo $lname; ?>">
        </div>

        <div class="date-box info-div" style="display: none;">
            <label class="cidate" for="cidate">From <p class="astric">*</p> : </label>
            <label class="coudate" for="coudate">To <p class="astric">*</p> : </label> <br>
            <input class="input-box icidate" type="date" name="cidate" id="cidate" required value="<?php echo $cidate; ?>">
            <input class="input-box icoudate" type="date" name="coudate" id="coudate" required value="<?php echo $coudate; ?>">
        </div>

        <div class="mob-email info-div">
            <label class="email" for="email">E-mail <p class="astric">*</p>  : </label>
            <label class="mob" for="mob">Mobile No. <p class="astric">*</p> :</label> <br>
            <input class="input-box iemail" type="email" name="email" id="email" placeholder="E-mail" required value="<?php echo $email; ?>">
            <input class="input-box imob" type="number" name="mob" id="mob" placeholder="Mobile" required value="<?php echo $mob; ?>">
            <p class="kkkkk">* Please enter E-mail and Mobile No. carefully for any future communication *</p>
        </div>

        <input style="display: none;" type="number" name="price" id="price" value="<?php echo $price; ?>">
        <input style="display: none;" type="text" name="hotid" id="hotid" value="<?php echo $hotid; ?>">

        <div class="id-four info-div">
            <label style="margin-left: 1vw;" for="perid">Last four letter of Identity : </label> <br>
            <input class="input-box" style="width: 35vw;" type="text" name="perid" id="perid" placeholder="Identity" value="<?php echo $perid; ?>">
        </div>
        <div class="form-submit info-div">
            <input class="input-box submitb" type="submit" value="Update">
        </div>
    </form>
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
