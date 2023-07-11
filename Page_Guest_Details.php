<?php
$fcidate = $_POST['fcidate'];
$fcoudate = $_POST['fcoudate'];
$fhotid = $_POST['fhotid'];
$d1 = date_create($fcidate);
$d2 = date_create($fcoudate);
$dd = date_diff($d1,$d2,true) ;
$fftt = (int)($dd->days);
$fprice = ((int)$_POST['fprice'])*$fftt ;

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

        @import url("https://fonts.googleapis.com/css2?family=Poppins&display=swap");

        .df-c {
            display: flex;
            align-items: center;
            margin-bottom: 1vw;
            align-content: center;
            flex-direction: row;
        }

        .checkbox__container {
            justify-content: start;
            flex-wrap: wrap;
            margin: 0 2vw;
        }

        .checkbox__wrapper {
            display: flex;
            border: 1px solid black;
            position: relative;
            margin: 1vw;
            width: 14vw;
            border-radius: 5px;
            text-align: center;
            margin-left: 0;
        }

        .checkbox__label {
            color: blanchedalmond;
            margin: 0 2vw;
            font-size: 2vw;
        }

        .checkbox__wrapper input[type="checkbox"] {
            position: absolute;
            width: 100%;
            height: 100%;
            appearance: none;
            z-index: 999999;
            cursor: pointer;
        }

        .inner__wrapper {
            width: 100%;
            height: 100%;
            position: relative;
            padding: 8px 45px;
        }

        .inner__wrapper p {
            transform: translateX(8px);
            transition: all 0.4s;
            font-size: 1.5vw;
        }

        .inner__wrapper::before,
        .inner__wrapper::after {
            content: "";
            position: absolute;
            top: 0;
            bottom: 0;
            height: 100%;
            z-index: -1;
            transition: all 0.4s;
        }

        .inner__wrapper::before {
            content: "\f00c";
            left: 0;
            width: 42px;
            background: white;
            color: rgb(225, 225, 225);
            border-radius: 5px 0 0 5px;
            font-family: "Font Awesome 5 Free";
            font-weight: 700;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 20px;
            transform-origin: left;
        }

        .inner__wrapper::after {
            right: 0;
            width: calc(100% - 42px);
            background: white;
            border-radius: 0 5px 5px 0;
            z-index: -1;
            transform-origin: right;
        }

        .checkbox__wrapper input[type="checkbox"]:checked ~ .inner__wrapper::before {
            color: white;
            width: 40px;
            background: #576cbc;
            font-size: 0px;
        }

        .checkbox__wrapper input[type="checkbox"]:checked ~ .inner__wrapper::after {
            width: calc(100% - 45px);
        }

        .checkbox__wrapper input[type="checkbox"]:checked ~ .inner__wrapper p {
            transform: translateX(15px);
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
        You are Booking rooms for :
        <?php
        echo $fhotid;
        ?>
    </p>
    <p class="namehot-price">
        Total price to be paid :
        <?php
        echo $fprice;
        ?>
    </p>
</div>

<div class="infobox">
    <p class="infobox-head">Customer Details</p>
    <form action="Registration.php" method="post">
        <div class="name-box info-div">
            <label class="iname" for="iname" class="iname">Title : </label>
            <label class="fname" for="fname">First Name <p class="astric">*</p> : &nbsp; </label>
            <label class="lname" for="lname">Last Name <p class="astric">*</p> : &nbsp; </label> <br>
            <select class="input-box iiname" name="iname" id="iname" required>
                <option value="Mr.">Mr.</option>
                <option value="Mrs.">Mrs.</option>
                <option value="Ms.">Ms.</option>
            </select>
            <input class="input-box ifname" type="text" name="fname" id="fname" placeholder="First Name" required>
            <input class="input-box ilname" type="text" name="lname" id="lname" placeholder="Last Name" required>
        </div>

        <div class="date-box info-div">
            <label class="cidate" for="cidate">From <p class="astric">*</p> : </label>
            <label class="coudate" for="coudate">To <p class="astric">*</p> : </label> <br>
            <input class="input-box icidate" type="date" name="cidate" id="cidate" value="<?php echo $fcidate; ?>" required>
            <input class="input-box icoudate" type="date" name="coudate" id="coudate" value="<?php echo $fcoudate; ?>" required>
        </div>

        <div class="mob-email info-div">
            <label class="email" for="email">E-mail <p class="astric">*</p>  : </label>
            <label class="mob" for="mob">Mobile No. <p class="astric">*</p> :</label> <br>
            <input class="input-box iemail" type="email" name="email" id="email" placeholder="E-mail" required>
            <input class="input-box imob" type="number" name="mob" id="mob" placeholder="Mobile" required>
            <p class="kkkkk">* Please enter E-mail and Mobile No. carefully for any future communication *</p>
        </div>

        <div class="df-c">
            <div>
                <p class="checkbox__label">
                    Bed Type:
                </p>
                <div class="checkbox__container df-c">
                    <div class="checkbox__wrapper">
                        <input type="checkbox" name="k_size" id="k_size" class="ckbed ks" onclick="return cckbed()" value="true">
                        <div class="inner__wrapper">
                            <p>King Size</p>
                        </div>
                    </div>
                    <div class="checkbox__wrapper">
                        <input type="checkbox" name="t_bed" id="t_bed" class="ckbed tb" onclick="return cckbed()" value="true">
                        <div class="inner__wrapper">
                            <p>Twin Bed</p>
                        </div>
                    </div>
                </div>
                <input type="checkbox" style="display: none;" name="k_size" id="k_size" class="ksf" value="false" checked>
                <input type="checkbox" style="display: none;" name="t_bed" id="t_bed" class="tbf" value="false" checked>
            </div>
        </div>

        <div class="df-c">
            <div>
                <p class="checkbox__label">
                    Bedsheet and Curtains Colours:
                </p>
                <div class="checkbox__container df-c">
                    <div class="checkbox__wrapper">
                        <input type="checkbox" name="white" id="white" class="ckshe wh" onclick="return cckshe()" value="true">
                        <div class="inner__wrapper">
                            <p>White</p>
                        </div>
                    </div>
                    <div class="checkbox__wrapper">
                        <input type="checkbox" name="red" id="red" class="ckshe re" onclick="return cckshe()" value="true">
                        <div class="inner__wrapper">
                            <p>Red</p>
                        </div>
                    </div>
                    <div class="checkbox__wrapper">
                        <input type="checkbox" name="blue" id="blue" class="ckshe bl" onclick="return cckshe()" value="true">
                        <div class="inner__wrapper">
                            <p>Blue</p>
                        </div>
                    </div>
                    <div class="checkbox__wrapper">
                        <input type="checkbox" name="yellow" id="yellow" class="ckshe yl" onclick="return cckshe()" value="true">
                        <div class="inner__wrapper">
                            <p>Yellow</p>
                        </div>
                    </div>
                    <div class="checkbox__wrapper">
                        <input type="checkbox" name="black" id="black" class="ckshe bk" onclick="return cckshe()" value="true">
                        <div class="inner__wrapper">
                            <p>Black</p>
                        </div>
                    </div>
                </div>
                <input type="checkbox" style="display: none;" name="white" id="white" class="whf" onclick="return cckshe()" value="false" checked>
                <input type="checkbox" style="display: none;" name="red" id="red" class="ref" onclick="return cckshe()" value="false" checked>
                <input type="checkbox" style="display: none;" name="blue" id="blue" class="blf" onclick="return cckshe()" value="false" checked>
                <input type="checkbox" style="display: none;" name="yellow" id="yellow" class="ylf" onclick="return cckshe()" value="false" checked>
                <input type="checkbox" style="display: none;" name="black" id="black" class="bkf" onclick="return cckshe()" value="false" checked>
            </div>
        </div>

        <div class="df-c">
            <div>
                <p class="checkbox__label">
                    Extras :
                </p>
                <div class="checkbox__container df-c">
                    <div class="checkbox__wrapper">
                        <input type="checkbox" name="m_bar" id="m_bar" class="ckshe ba" value="true" onclick="return extras()" >
                        <div class="inner__wrapper">
                            <p>Mini Bar</p>
                        </div>
                    </div>
                    <div class="checkbox__wrapper">
                        <input type="checkbox" name="w_desk" id="w_desk" class="ckshe de" value="true" onclick="return extras()" >
                        <div class="inner__wrapper">
                            <p>Work Desk</p>
                        </div>
                    </div>
                    <div class="checkbox__wrapper" style="width: 19vw;">
                        <input type="checkbox" name="c_mat" id="c_mat" class="ckshe ma" value="true" onclick="return extras()" >
                        <div class="inner__wrapper">
                            <p>Cooking Material</p>
                        </div>
                    </div>
                </div>
                <input type="checkbox" style="display: none;" name="m_bar" id="m_bar" class="baf" value="false" checked >
                <input type="checkbox" style="display: none;" name="w_desk" id="w_desk" class="def" value="false" checked >
                <input type="checkbox" style="display: none;" name="c_mat" id="c_mat" class="maf" value="false" checked >
            </div>
        </div>

        <input style="display: none;" type="number" name="price" id="price" value="<?php echo $fprice; ?>">
        <input style="display: none;" type="text" name="hotid" id="hotid" value="<?php echo $fhotid; ?>">

        <div class="id-four info-div">
            <label style="margin-left: 1vw;" for="perid">Last four letter of Identity : </label> <br>
            <input class="input-box" style="width: 35vw;" type="text" name="perid" id="perid" placeholder="Identity">
        </div>
        <div class="form-submit info-div">
            <input class="input-box submitb" type="submit" value="Book Now">
        </div>
    </form>
</div>
<script type="text/javascript">

    function cckbed(){
        var a = document.getElementsByClassName('ckbed');
        var newvar = 0;
        var count;
        for(count=0;count<a.length;count++){
            if(a[count].checked==true){
                newvar = newvar + 1;
            }
        }
        if(newvar>=2){
            alert("You can choose only one option...");
            return false;
        }

        let ks = document.querySelector('.ks');
        let ksf = document.querySelector('.ksf');
        if(ks.checked){
            ksf.checked = false;
        }
        else if(!ks.checked){
            ksf.checked = true;
        }

        let tb = document.querySelector('.tb');
        let tbf = document.querySelector('.tbf');
        if(tb.checked){
            tbf.checked = false;
        }
        else if(!tb.checked){
            tbf.checked = true;
        }
    }

    function cckshe(){
        var aw = document.getElementsByClassName('ckshe');
        var newvarw = 0;
        var countw;
        for(countw=0;countw<aw.length;countw++){
            if(aw[countw].checked==true){
                newvarw = newvarw + 1;
            }
        }
        if(newvarw>=2){
            alert("You can choose only one option..");
            return false;
        }

        let wh = document.querySelector('.wh');
        let whf = document.querySelector('.whf');
        if(wh.checked){
            whf.checked = false;
        }
        else if(!wh.checked){
            whf.checked = true;
        }

        let re = document.querySelector('.re');
        let ref = document.querySelector('.ref');
        if(re.checked){
            ref.checked = false;
        }
        else if(!re.checked){
            ref.checked = true;
        }

        let bl = document.querySelector('.bl');
        let blf = document.querySelector('.blf');
        if(bl.checked){
            blf.checked = false;
        }
        else if(!bl.checked){
            blf.checked = true;
        }

        let yl = document.querySelector('.yl');
        let ylf = document.querySelector('.ylf');
        if(yl.checked){
            ylf.checked = false;
        }
        else if(!yl.checked){
            ylf.checked = true;
        }

        let bk = document.querySelector('.bk');
        let bkf = document.querySelector('.bkf');
        if(bk.checked){
            bkf.checked = false;
        }
        else if(!bk.checked){
            bkf.checked = true;
        }
    }

    function extras(){
        let ba = document.querySelector('.ba');
        let baf = document.querySelector('.baf');
        if(ba.checked){
            baf.checked = false;
        }
        else if(!ba.checked){
            baf.checked = true;
        }

        let de = document.querySelector('.de');
        let def = document.querySelector('.def');
        if(de.checked){
            def.checked = false;
        }
        else if(!de.checked){
            def.checked = true;
        }

        let ma = document.querySelector('.ma');
        let maf = document.querySelector('.maf');
        if(ma.checked){
            maf.checked = false;
        }
        else if(!ma.checked){
            maf.checked = true;
        }

    }

</script>

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