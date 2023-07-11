<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Livvic:ital,wght@1,600&family=Roboto+Slab:wght@500&display=swap');
        *{
            padding: 0;
            margin: 0;
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
            text-align: right;
            height: 6vw;
            font-size: 3.5vw;
            font-style: italic;
            background-color: #373f47;
            color: blanchedalmond;
            margin-bottom: 3vw;
            padding-right: 5vw;
            padding-bottom: 0.5vw;
            padding-top: 0.5vw;
        }
        .namehot p {
            font-size: 2vw;
            margin-bottom: 1vw;
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

        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        .tpcont {
            display: grid;
            width: 98vw;
            margin-bottom: 5vw;
            grid-template-rows: 39vw;
            grid-template-columns: 3vw 60vw 3vw 31vw 1vw;
        }

        .ratings4 {
            grid-area: 1/2/2/3;
            width: 60vw;
            height: 39vw;
            overflow: hidden;
            font-family: 'Poppins', sans-serif;
            display: grid;
            grid-template-rows: 34vw 5vw;
            grid-template-columns: 100%;
        }
        .ratings4 .ratings1 {
            grid-area: 1/1/2/2;
            z-index: 1;
            position: absolute;
            width: 60vw;
            clip-path: circle(0% at 0 50%);
        }
        .ratings4 .ratings1.active {
            clip-path: circle(150% at 0 50%);
            transition: 2s;
            transition-property: clip-path;
        }
        .ratings4 .ratings1 img {
            z-index: 1;
            width: 60vw;
            height: 34vw;
            border-radius: 5px;
        }
        .ratings4 .rat-nav {
            z-index: 2;
            grid-area: 2/1/3/2;
            position: relative;
            display: flex;
            width: 60vw;
            flex-direction: row;
            align-content: center;
            justify-content: center;
            flex-wrap: wrap;
        }
        .ratings4 .rat-nav .rat-btn{
            background: rgba(0, 0, 0, 0.5);
            width: 9vw;
            height: 4vw;
            margin: 0.5vw;
            cursor: pointer;
        }
        .ratings4 .rat-nav .rat-btn.active {
            filter: brightness(0.6);
            box-shadow: 0 0 1px rgba(255, 255, 255, 1);
        }

        .rinfo4 {
            grid-area: 1/4/2/5;
            border-radius: 2px;
            background-color: #5d5b60;
            font-size: 2vw;
            padding: 1vw;
        }
        .rinfo4 p {
            margin: 2vw 0vw;
            color: blanchedalmond;
        }

        .midcont {
            display: grid;
            width: 98vw;
            margin-bottom: 5vw;
            grid-template-rows: 45vw;
            grid-template-columns: 3vw 40vw 3vw 51vw 1vw;
        }

        .ratrat {
            grid-area:1/2/2/3 ;
            background-color: #5d5b60;
            display: flex;
            padding: 2vw;
            color: blanchedalmond;
            flex-direction: column;
            font-size: 2.5vw;
            border-radius: 5px;
            justify-content: center;
        }
        .ratrat img {
            width: 36vw;
            height: 10vw;
            margin-bottom: 2vw;
            border-radius: 5px;
        }
        .inboxut {
            padding: 0.5vw;
            width: 34vw;
            font-size: 2vw;
            margin: 1vw 0vw;
            border-radius: 4px;
        }
        .submit {
            width: 35vw;
            background-color: #c4dcd4;
            color: black;
            margin: 3vw 1vw 0vw 0vw;
            padding: 0.5vw;
            font-size: 2.5vw;
            border-radius: 3px;
        }
        .submit:hover {
            background-color: blanchedalmond;
        }

        .facf {
            grid-area: 1/4/2/5;
            border-radius: 5px;
            background-color: #5d5b60;
            color: blanchedalmond;
            padding: 2vw;
        }
        .facf h2 {
            font-size: 2.7vw;
            margin-bottom: 2vw;
        }
        .facf li {
            font-size: 2.5vw;
            margin-left: 3vw;
            padding-left: 2vw;
            line-height: 3vw;
        }

        .cure {
            color: blanchedalmond;
            padding: 2vw 3vw;
            font-size: 4vw;
            margin-bottom: 5vw;
            background-color: #5d5b60;
        }
        .curepo {
            display: flex;
            justify-content: space-between;
            margin-top: 2vw;
        }
        .curepo img {
            width: 22vw;
            height: 15vw;
            border-radius: 6px;
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
    Hayat Residency
    <p>Deluxe Room</p>
</div>


<div class="tpcont">

    <div class="ratings4">
        <div class="ratings1 active">
            <img src="\pictures\hyt-del-1.jpg" alt="!" width="100%" height="100%">
        </div>
        <div class="ratings1">
            <img src="\pictures\hyt-del-2.jpg" alt="!" width="100%" height="100%">
        </div>
        <div class="ratings1">
            <img src="\pictures\hyt-del-3.jpg" alt="!" width="100%" height="100%">
        </div>
        <div class="ratings1">
            <img src="\pictures\hyt-del-4.jpg" alt="!" width="100%" height="100%">
        </div>
        <div class="ratings1">
            <img src="\pictures\hyt-del-5.jpg" alt="!" width="100%" height="100%">
        </div>
        <div class="rat-nav">
            <div class="rat-btn active"> <img src="\pictures\hyt-del-1.jpg" alt="" width="100%" height="100%"> </div>
            <div class="rat-btn"> <img src="\pictures\hyt-del-2.jpg" alt="" width="100%" height="100%"> </div>
            <div class="rat-btn"> <img src="\pictures\hyt-del-3.jpg" alt="" width="100%" height="100%"> </div>
            <div class="rat-btn"> <img src="\pictures\hyt-del-4.jpg" alt="" width="100%" height="100%"> </div>
            <div class="rat-btn"> <img src="\pictures\hyt-del-5.jpg" alt="" width="100%" height="100%"> </div>
        </div>
    </div>
    <script type="text/javascript">
        var slides1 = document.querySelectorAll('.ratings1');
        var btns1 = document.querySelectorAll('.rat-btn');
        let currentSlide1 = 1;

        var manualNav1 = function(manual1){
            slides1.forEach((slide1) => {
                slide1.classList.remove('active');
                btns1.forEach((btn1) => {
                    btn1.classList.remove('active');
                });
            });

            slides1[manual1].classList.add('active');
            btns1[manual1].classList.add('active');
        }

        btns1.forEach((btn,i)=>{
            btn.addEventListener("click", () => {
                manualNav1(i);
                currentSlide1 = i;
            });
        });
    </script>

    <div class="rinfo4" >
        <p style="text-align: justify; font-size: 2.5vw;">With an elegant business like decor, this standard deluxe 432 square feet room is the most spacious in the city with the option of a king size or a twin bed.
        </p>
        <p> ROOM OVERVIEW :-
            <br>
            * Size- 432 ft2 / 40 m2 <br>
            * View- City/Pool view<br>
            * Occupancy- 2 Adults, 2 Children<br>
            * Bed Type- King/Twin bed<br>
            * Extra Bed- Not Allowed
        </p>
    </div>
</div>

<div class="midcont" >
    <div class="ratrat">
        <img src="/pictures/ban-del-hyt.jpg">
        <form action="Page_Guest_Details.php" method="post">
            <label for="fcidate">Check in Date : </label> <br>
            <input class="fcidate inboxut" type="date" name="fcidate" id="fcidate"> <br>
            <label for="fcoudate">Check Out Date : </label> <br>
            <input class="fcoudate inboxut" type="date" name="fcoudate" id="fcoudate">

            <p style="font-size: 3vw; text-align: center">@ Rs.7499/- per night</p>
            <input style="display: none;" type="number" name="fprice" id="fprice" value="7499">
            <input style="display: none;" type="text" name="fhotid" id="fhotid" value="Deluxe-Hayat Residency">

            <input class="submit" type="submit" value="Proceed to Book">
        </form>
    </div>

    <div class="facf" >
        <h2>IN-ROOM AMENITIES & SERVICES</h2>
        <p>
            <ul>
                <li>Complimentary Wi-Fi</li>
                <li>In-Room Dinning Option</li>
                <li>Housekeeping Service 2x day</li>
                <li>Work Desk</li>
                <li>Mini bar</li>
                <li>Walk-In Closet</li>
                <li>40-inch LED Television</li>
                <li>Geyser</li>
                <li>Coffee Maker and Accessories in Room</li>
                <li>Air Conditioner</li>
                <li>Mini Kitchen</li>
                <li>24x7 Power Backup</li>

            </ul>
        </p>
    </div>

</div>

<div class="cure">
    <p>CUSTOMER REVIEWS :-</p>
    <div class="curepo">
        <img src="/pictures/rev-del-1.jpg" alt="Review">
        <img src="/pictures/rev-del-2.jpg" alt="Review">
        <img src="/pictures/rev-del-3.jpg" alt="Review">
        <img src="/pictures/rev-del-4.jpg" alt="Review">
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