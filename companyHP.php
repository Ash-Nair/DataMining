<!DOCTYPE html>
<html> 
    <!--Title of Page-->
<title>CORE: Finding Home</title>
    <head>
    <!-----------------------------STYLESHEETS---------------------------------------------------->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC|Bangers|Bowlby+One+SC|Bungee|Chewy|Coiny|Electrolize|Fruktur|Jockey+One|Luckiest+Guy|Mouse+Memoirs|Orbitron|PT+Mono|Passion+One|Russo+One|Sigmar+One|Pacifico|Ropa+Sans|Ubuntu|Share+Tech+Mono|Teko|PT+Sans+Narrow|Rubik+One|Cuprum|Hammersmith+One|Squada+One|Amaranth|Viga|Concert+One|Lilita+One|Londrina+Solid|Oswald|Ubuntu+Condensed|Viga|Grand+Hotel|Jockey+One|Squada+One|Denk+One|Chau+Philomene+One|Boogaloo|Homenaje" rel="stylesheet">
<script language ="javasript" type="text/javascript" src="software.js"></script>
        </head>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
body, html {
    height: 100%;
    line-height: 1.8;
}
/* Full height image header */
.bgimg-1 {
    background-position: center;
    background-size: cover;
    background-image: url("http://cdn.home-designing.com/wp-content/uploads/2016/02/orange-and-black-interior-artwork-ideas.jpg");
    min-height: 100%;
}
.w3-navbar li a {
    padding: 16px;
    float: left;
}
</style>
<body>
<!-----------------------------------Navbar JS + CSS + HTML------------------------------------------------------------------------->
<!-- Navbar (sit on top) -->
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <ul class="w3-navbar" id="myNavbar">
    <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
      <a class="w3-hover-black" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
        <i class="fa fa-bars"></i>
      </a>
    </li>
    <li class="w3-left-align"><a href="#home" style="font-family: 'Jockey One', sans-serif; margin-top: 0px">CORE</a></li>
    <li class="w3-right w3-hide-small" style="font-family: 'Jockey One', sans-serif;">
      <a href="#about">ABOUT</a>
      <a href="#team"><i class="fa fa-chain"></i> SOFTWARE</a>
      <a href="#promo"><i class="fa fa-ticket"></i> PROMO</a>
      <a href="#contact"><i class="fa fa-envelope"></i> CONTACT</a>
    </li>
      </a>
    </li>
  </ul>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-hide w3-hide-large w3-hide-medium" style="height:90px">
    <ul class="w3-navbar w3-left-align w3-white">
      <li class="w3-right w3-hide-small">
      <a href="#about">ABOUT</a>
      <a href="#team"><i class="fa fa-user"></i> TEAM</a>
      <a href="#work"><i class="fa fa-th"></i> WORK</a>
      <a href="#contact"><i class="fa fa-envelope"></i> CONTACT</a>
    </li>
    </ul>
  </div>
</div>
    <script>   
    // Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-navbar" + " w3-card-2" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card-2 w3-animate-top w3-white", "");
    }
}
    </script>
<!-----------------------------------Navbar JS + CSS + HTML------------------------------------------------------------------------->


<!-- Sidenav on small screens when clicking the menu icon -->
<nav class="w3-sidenav w3-black w3-card-2 w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidenav">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-large w3-padding-16">Close ×</a>
  <a href="#about" onclick="w3_close()">ABOUT</a>
  <a href="#work" onclick="w3_close()">WORK</a>
  <a href="#contact" onclick="w3_close()">CONTACT</a>
</nav>

<!-------------------------------------Home Page Contents------------------------------------------------------>
<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min  w3-opacity-min" id="home">
  <div class="w3-display-middle w3-padding-xxlarge w3-text-white">
        <div style="margin-top: 200px">
          <span class="w3-center w3-padding-xlarge w3-black w3-xlarge w3-wide w3-animate-opacity" style="margin-left: 30px;"><span class="w3-hide-small" style="margin-top: 10px">HOME STARTS HERE</span></span>
            </div>
      <div style="margin-left:-350px; margin-top:180px">
    <p><a href="#about" class="w3-btn w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off" style = "margin-left: 0px; margin-top: 300px">Learn more and start today</a></p>
          </div>
  </div>
  <div class="w3-display-bottomleft w3-padding-xxlarge w3-text-grey w3-large">
    <a href="#" class="w3-hover-text-white"><i class="fa fa-facebook-official"></i></a>
    <a href="#" class="w3-hover-text-white"><i class="fa fa-flickr"></i></a>
    <a href="#" class="w3-hover-text-white"><i class="fa fa-instagram"></i></a>
    <a href="#" class="w3-hover-text-white"><i class="fa fa-twitter"></i></a>
    <a href="#" class="w3-hover-text-white"><i class="fa fa-linkedin"></i></a>
  </div>
</header>
<!-------------------------------------Home Page Contents------------------------------------------------------>


<!---------------------------------------------------------------- About Software Section ------------------------------------------------------->
<div class="w3-container w3-padding-128" id="about" style="background-color: #E9EEF6; height: 300px">
    <!--FOR BUYERS--->
  <div class="w3-content w3-container w3-padding-64" id="about" style="height: 300px;">
    <div class="w3-content w3-container w3-padding-64" id="about" style="height: 300px; margin-left: -300px; margin-top:-64px">
            <div style = "margin-left: 160px; margin-top: -50px; color: #E9EEF6">
        </div>
    </div>
    <div class="w3-content w3-container w3-padding-64" id="about" style="height: 300px; margin-left: 900px; margin-top:-300px; width: 500px">
    </div>
    <div style="margin-left: -180px; margin-top: -350px">
       <img src= "http://image.flaticon.com/icons/svg/141/141034.svg" alt="man" style="height: 50px; width: 70px; margin-left: 77px; margin-top: 30px">
         <img src= "http://image.flaticon.com/icons/svg/141/141027.svg" alt="man" style="height: 70px; width: 70px; margin-left: 0px; margin-top: 0px">
         <img src= "http://image.flaticon.com/icons/svg/148/148999.svg" alt="man" style="height: 50px; width: 70px; margin-left: -7px; margin-top: 20px">
    <img src= "http://www.freeiconspng.com/uploads/green-arrow-png-2.png" alt="arrow" style="height: 70px; width: 70px; margin-left: 40px; margin-top: 0px">
    <img src= "http://image.flaticon.com/icons/svg/214/214289.svg" alt="website" style="height: 70px; width: 100px; margin-left: 50px; margin-top: 0px">
    <img src= "http://www.freeiconspng.com/uploads/green-arrow-png-2.png" alt="arrow" style="height: 70px; width: 70px; margin-left: 70px; margin-top: 0px">
    <img src= "http://image.flaticon.com/icons/svg/252/252027.svg" alt="list" style="height: 70px; width: 70px; margin-left: 70px; margin-top: 0px">
    <img src= "http://www.freeiconspng.com/uploads/green-arrow-png-2.png" alt="arrow" style="height: 70px; width: 70px; margin-left: 70px; margin-top: 0px">
    </div>
    <div style= "margin-top: -25px">
    <img src= "http://image.flaticon.com/icons/svg/189/189083.svg" alt="home" style="height: 70px; width: 70px; margin-left: 860px; margin-top: -1200px">
        </div>
     <div style="margin-left: -200px">
    <form>
        <p style = "font-family: 'PT Sans Narrow', sans-serif; font-size: 15px; margin-left: 145px; margin-top: 40px; color: black"><b>Get on your device!</b></p>
        <p style = "font-family: 'PT Sans Narrow', sans-serif;font-size: 15px; margin-left: 470px; margin-top: -42px; color: black"><b>Visit our website!</b></p>
        <p style = "font-family: 'PT Sans Narrow', sans-serif; font-size: 15px; margin-left: 760px; margin-top: -42px; color: black"><b>Input your preferences!</b></p>
        <p style = "font-family: 'PT Sans Narrow', sans-serif; font-size: 15px; margin-left: 1027px; margin-top: -40px; color: black"><b>Find your dream home!</b></p>
    </form>
         </div>
        </div>  
    
    <!--FOR SELLERS-->
    
</div>     
<!---------------------------------------------------------------- About Software Section ------------------------------------------------------->

 <!-- Promo Section "signup" -->
<div class="w3-container w3-row w3-center w3-padding-64" style="background-color: #D84E13">
  <p style="margin-left: 730px; font-family: 'Squada One', cursive; font-size: 56px; color: #DEE0D5;margin-top: 0px">Signup Today!</p>
    <div style="margin-top: -40px">
    <p style="margin-left: 730px; font-family: 'Squada One', cursive; font-size: 26px; color: #DEE0D5;">We make sure you get the optimal options for the houses you desire by providing criteria that takes into account every minor detail.</p>
        <!--
        <a href="#work" class="w3-btn" style="background-color: #DBE8F9; color: #000; font-family: 'Chau Philomene One', sans-serif; margin-left:720px; margin-top: 50px"><i class="fa fa-arrow-right"></i> Create Your Account</a>-->
    </div>
    <div class="w3-col m6" style="margin-top:-320px">
      <img class="w3-image w3-round-large" src="https://s-media-cache-ak0.pinimg.com/736x/7a/dc/79/7adc7998a13607395e0c548278721460.jpg" alt="Buildings" width="700" height="394" style="border-radius: 25px">
    </div>
  </div>

<!-----------------------------------------------------------------------Software Section---------------------------------------------------------->
<div class="w3-container w3-padding-128" id="team" style="background-color: #E9EEF6; height:900px ">
    <div style="margin-top: -100px">
    <span class="w3-xxlarge w3-text-black w3-wide" style = "margin-left: 530px; margin-top: -2050px;">SOFTWARE</span>
        </div>
     <div class = "box2"; style = "background-color: #287AA9; height: 100px; width: 350px; margin-left: -10px; margin-top: 50px; padding: 20px; box-shadow: 10px 10px #AFBBD2;border: 2px solid black;">
         <p style="font-family: 'Squada One', cursive; font-size: 20px; color: snow; margin-left: 25px; margin-top: 10px">Give us a description of your home</p>
</div>
  
       <div class = "box"; style = "background-color: #739240; height: 530px; width: 350px; margin-left: -10px; margin-top: 0px; padding: 20px; border-radius: 0px; box-shadow: 10px 10px #AFBBD2;border: 2px solid black;"> 
           <form method = "get" id = "uInput">
               
            <p style="font-family: 'Squada One', cursive; font-size:14px; color: white">Enter Zip Code:</p>
            <input type="text" name="str" style="margin-top:-50px" placeholder="Zip Code">
            <p style="font-family: 'Squada One', cursive; font-size:14px; color: white">Single/Family: Enter 'S' for Single or 'F' for Family</p>
            <input type="text" name="type" style="margin-top:-50px" placeholder="'S' or 'F'"><br>
           <button type="button" class="btn btn-default" style="background-color: #CCCCCC; margin-top: 20px; width: 100px; height: 40px; font-family: 'Boogaloo', cursive; font-size: 20px; border: 2px solid black; margin-left: 0px" onclick = "retTorF()">Submit</button>
               </form>
           
           <p style="font-family: 'Squada One', cursive; font-size: 10px; color: #000;">Zip Codes Serviced:
           <span style="font-family: 'Squada One', cursive; font-size: 10px; color: #000;">30047- Lilburn</span>
           <span style="font-family: 'Squada One', cursive; font-size: 10px; color: #000;">30078- Snellville</span>
           <span style="font-family: 'Squada One', cursive; font-size: 10px; color: #000;">30005- Alpharetta</span>
           <span style="font-family: 'Squada One', cursive; font-size: 10px; color: #000;">30022- Alpharetta</span>
           <span style="font-family: 'Squada One', cursive; font-size: 10px; color: #000;">30097- Johns Creek</span>
           <span style="font-family: 'Squada One', cursive; font-size: 10px; color: #000;">30075- Roswell</span>
           <span style="font-family: 'Squada One', cursive; font-size: 10px; color: #000;">30076- Roswell</span>
           <span style="font-family: 'Squada One', cursive; font-size: 10px; color: #000;">30328- Atlanta </span>
           <span style="font-family: 'Squada One', cursive; font-size: 10px; color: #000;">30342- Atlanta</span>
           <span style="font-family: 'Squada One', cursive; font-size: 10px; color: #000;">30350- Sandy Springs</span>
           
            
           
           
            <p style="font-family: 'Squada One', cursive; font-size: 12px; color: #fff;" id = "x"></p>
            <p style="font-family: 'Squada One', cursive; font-size: 12px; color: #fff;" id = "y"></p>
            <p style="font-family: 'Squada One', cursive; font-size: 12px; color: #fff;" id = "z"></p>
            <p style="font-family: 'Squada One', cursive; font-size: 12px; color: #fff;" id = "a"></p>
            <p style="font-family: 'Squada One', cursive; font-size: 12px; color: #fff;" id = "b"></p>
            <p style="font-family: 'Squada One', cursive; font-size: 12px; color: #fff;" id = "d"></p>

               </div>
    <div style="margin-top:-18px; height: 630px">
<iframe src="https://www.google.com/maps/d/embed?mid=1lZZYQP8xnasuUkLFp2tlSKnPPOs" width="988" height="630" style=" border: 2px solid black;
        box-shadow: 10px 10px #AFBBD2; margin-left: 340px; margin-top:-1300px"></iframe>
        </div>


</div>
<script>
//function retTorF is defined with no parameters and will use if statements which take into account the user input from above using the document.getElementById and create also create conditions for the check boxes. It will take the value of the string entered by the user and compare it to the different site name options. Using if-else statmements, the program will compare the user input with the site name required and also check the conditiond for the boxes checked in each case using the variables that save the checkbox conditions. Finally, the program will output a 'True' or 'False' based on the conditions.
function retTorF() {
  var input; 
  var site = "https://www.google.com/?#q=ender%27s%20game";
  var searchInput;
  var searchType;
  input = document.getElementById("uInput");
  searchInput = input.elements["str"].value;
  searchType = input.elements["type"].value;
if(searchInput == "30047" && searchType == "F"){
        document.getElementById("x").innerHTML = "Wingate Plan, Brookwood Enclave Lilburn, GA 30047 (Suburban)".link("http://www.zillow.com/community/brookwood-enclave/2103647797_zpid/");
        document.getElementById("y").innerHTML = "3780 Terrasol Trl SW, Lilburn, GA 30047 (Suburban)".link("http://www.zillow.com/homes/for_sale/Lilburn-GA/118495630_zpid/12386_rid/33.944356,-83.994599,33.784141,-84.229088_rect/11_zm/");
        document.getElementById("z").innerHTML = "3620 Rosetree Ct,Lilburn, GA 30047 (Suburban)".link("http://www.zillow.com/homes/for_sale/Lilburn-GA/55038430_zpid/12386_rid/34.03872,-83.785172,33.718342,-84.254151_rect/10_zm/");
        document.getElementById("a").innerHTML = "3991 Isaac Ct # 3991,Lilburn, GA 30047 (Townhouse)".link("http://www.zillow.com/homes/for_sale/Lilburn-GA/2096120679_zpid/12386_rid/34.03872,-83.785172,33.718342,-84.254151_rect/10_zm/");
        document.getElementById("b").innerHTML = "4981 Hodgkins Pl SW, Lilburn, GA 30047 (Suburban)".link("http://www.zillow.com/homes/for_sale/Lilburn-GA/14751394_zpid/12386_rid/34.03872,-83.785172,33.718342,-84.254151_rect/10_zm/");
        document.getElementById("d").innerHTML = "";
}
else if(searchInput == "30047" && searchType == "S"){
        document.getElementById("x").innerHTML = "50 Stoneview Trail NW, Lilburn, GA 30047 (Villa)".link("http://www.zillow.com/homes/for_rent/Lilburn-GA-30047/apartment_duplex_type/5Xhv2z_bldg/70832_rid/33.931397,-84.016743,33.798835,-84.204197_rect/11_zm/");
        document.getElementById("y").innerHTML = "5575 Rock Garden Ct NW,Lilburn, GA 30047 (Studio)".link("http://www.zillow.com/homes/for_sale/Lilburn-GA-30047/condo,apartment_duplex_type/14760092_zpid/70832_rid/pricea_sort/33.936666,-83.964215,33.793557,-84.256726_rect/11_zm/0_mmm/1_fr/");
        document.getElementById("z").innerHTML = "3400 Sweetwater Rd, Lawrenceville, GA 30044 (Apartment)".link("http://www.zillow.com/homes/for_rent/Lilburn-GA-30047/apartment_duplex_type/5XhtdM_bldg/70832_rid/featured_sort/33.936666,-83.964215,33.793557,-84.256726_rect/11_zm/");
        document.getElementById("a").innerHTML = "5575 Rock Garden Ct NW, Lilburn, GA 30047".link("http://www.zillow.com/homes/for_sale/Lilburn-GA-30047/apartment_duplex_type/14760092_zpid/70832_rid/pricea_sort/33.936666,-83.964215,33.793557,-84.256726_rect/11_zm/0_mmm/1_fr/");
        document.getElementById("b").innerHTML = "";
        document.getElementById("d").innerHTML = "";
}
     
else if(searchInput == "30078" && searchType == "F"){
        document.getElementById("x").innerHTML = "1201 Bridgewater Walk, Snellville, GA 30078 (Suburban) ".link("http://www.zillow.com/homes/for_sale/Snellville-GA-30078/14706117_zpid/70857_rid/globalrelevanceex_sort/33.903404,-83.949624,33.823296,-84.066868_rect/12_zm/");
        document.getElementById("y").innerHTML = "2000 Woodberry Run Dr, Snellville, GA 30078 (Suburban)".link("http://www.zillow.com/homes/for_sale/Snellville-GA-30078/58600805_zpid/70857_rid/globalrelevanceex_sort/33.903404,-83.949624,33.823296,-84.066868_rect/12_zm/2_p/");
        document.getElementById("z").innerHTML = "3503 W Elmwood Cir, Snellville, GA 30078 (Suburban)".link("http://www.zillow.com/homes/3503-W-Elmwood-Circle-Snellville-GA-30078_rb/");
        document.getElementById("a").innerHTML = "3391 Open Fields Dr, Snellville, GA 30078 (Condo)".html("http://www.zillow.com/homes/3391-Open-Fields-DR-Snellville-GA-30078_rb/");
        document.getElementById("b").innerHTML = "3375 Park Glenn Way # 33 Snellville, GA 30078 (Condo)".link("http://www.zillow.com/homes/for_sale/Snellville-GA-30078/condo,apartment_duplex,mobile,land,townhouse_type/2098256688_zpid/70857_rid/globalrelevanceex_sort/34.01368,-83.597718,33.693209,-84.066697_rect/10_zm/");
        document.getElementById("d").innerHTML = "";
}
    else if(searchInput == "30078" && searchType == "S"){
        document.getElementById("x").innerHTML = "3033 Parkside Ct, Snellville, GA 30078 (Apartment)".link("http://www.zillow.com/homes/for_sale/Snellville-GA-30078/apartment_duplex_type/2103888729_zpid/70857_rid/pricea_sort/33.934957,-83.861905,33.791845,-84.154416_rect/11_zm/0_mmm/1_fr/");
        document.getElementById("y").innerHTML = "3170 Murell Rd # 1, Snellville, GA 30078 (Apartment)".link("http://www.zillow.com/homes/for_sale/Snellville-GA-30078/apartment_duplex_type/2096139558_zpid/70857_rid/pricea_sort/33.934957,-83.861905,33.791845,-84.154416_rect/11_zm/0_mmm/1_fr/");
        document.getElementById("z").innerHTML = "3163 Dove Ct # B, Snellville, GA 30078 (Apartment)".link("http://www.zillow.com/homes/for_sale/Snellville-GA-30078/condo,apartment_duplex_type/2096234605_zpid/70857_rid/pricea_sort/33.934957,-83.861905,33.791845,-84.154416_rect/11_zm/0_mmm/1_fr/");
        document.getElementById("a").innerHTML = "";
        document.getElementById("b").innerHTML = "";
        document.getElementById("d").innerHTML = "";
}
 
else if(searchInput == "30005" && searchType == "F"){
        document.getElementById("x").innerHTML = "5117 Wellsley Bnd, Alpharetta, GA 30005 (Suburban)".link("http://www.zillow.com/homes/for_sale/Johns-Creek-GA-30005/apartment_duplex,mobile,townhouse_type/69373159_zpid/70792_rid/globalrelevanceex_sort/34.132055,-84.159737,34.052161,-84.276982_rect/12_zm/");
        document.getElementById("y").innerHTML = "5620 Ashewoode Downs Dr, Alpharetta, GA 30005 (Suburban)".link("http://www.zillow.com/homes/for_sale/Johns-Creek-GA-30005/house,condo,apartment_duplex,mobile,townhouse_type/14682218_zpid/70792_rid/globalrelevanceex_sort/34.132055,-84.159737,34.052161,-84.276982_rect/12_zm/");
        document.getElementById("z").innerHTML = "8005 Preservation Dr Alpharetta, GA 30005 (Suburban)".link("http://www.zillow.com/homes/for_sale/Johns-Creek-GA-30005/house,condo,apartment_duplex,mobile,townhouse_type/2100990573_zpid/70792_rid/globalrelevanceex_sort/34.132055,-84.159737,34.052161,-84.276982_rect/12_zm/");
        document.getElementById("a").innerHTML = "6310 Maid Marion Close, Alpharetta, GA 30005 (Suburban)".link("http://www.zillow.com/homes/for_sale/Johns-Creek-GA-30005/house,condo,apartment_duplex,mobile,townhouse_type/14652480_zpid/70792_rid/globalrelevanceex_sort/34.132055,-84.159737,34.052161,-84.276982_rect/12_zm/");
        document.getElementById("b").innerHTML = "1170 Rosewood Dr, Alpharetta, GA 30005 (Suburban)".link("http://www.zillow.com/homes/for_sale/Johns-Creek-GA-30005/house,condo,apartment_duplex,mobile,townhouse_type/14622196_zpid/70792_rid/globalrelevanceex_sort/34.132055,-84.159737,34.052161,-84.276982_rect/12_zm/");
        document.getElementById("d").innerHTML = "";

}
    else if(searchInput == "30005" && searchType == "S"){
        document.getElementById("x").innerHTML = "3080 Market Pl, Alpharetta, GA 30005 (Apartments)".link("http://www.zillow.com/homes/for_sale/Johns-Creek-GA-30005/condo,apartment_duplex_type/5XhtzH_bldg/70792_rid/pricea_sort/34.16338,-84.072018,34.020652,-84.364529_rect/11_zm/0_mmm/1_fr/");
        document.getElementById("y").innerHTML = "3500 N Point Pkwy, Alpharetta, GA 30005 (Apartments)".link("http://www.zillow.com/homes/for_sale/Johns-Creek-GA-30005/house,condo,apartment_duplex,mobile,townhouse_type/14682218_zpid/70792_rid/globalrelevanceex_sort/34.132055,-84.159737,34.052161,-84.276982_rect/12_zm/");
        document.getElementById("z").innerHTML = "1655 Oak Farm Dr, Alpharetta, GA 30005 (Apartments)".link("http://www.zillow.com/homes/for_sale/Johns-Creek-GA-30005/house,condo,apartment_duplex,mobile,townhouse_type/2100990573_zpid/70792_rid/globalrelevanceex_sort/34.132055,-84.159737,34.052161,-84.276982_rect/12_zm/");
        document.getElementById("a").innerHTML = "18000 Masters Way, Alpharetta, GA 30005 (Apartments)".link("http://www.zillow.com/homes/for_sale/Johns-Creek-GA-30005/condo,apartment_duplex_type/5XhtQT_bldg/70792_rid/pricea_sort/34.16338,-84.072018,34.020652,-84.364529_rect/11_zm/0_mmm/1_fr/");
        document.getElementById("b").innerHTML = "950 Executive Dr, Alpharetta, GA 30005 (Apartments)".link("http://www.zillow.com/homes/for_sale/Johns-Creek-GA-30005/condo,apartment_duplex_type/5Xhtqd_bldg/70792_rid/pricea_sort/34.16338,-84.072018,34.020652,-84.364529_rect/11_zm/0_mmm/1_fr/");
        document.getElementById("d").innerHTML = "2100 Addison Ln, Johns Creek, GA 30005 (Apartments)".link("http://www.zillow.com/homes/for_sale/Johns-Creek-GA-30005/condo,apartment_duplex_type/65WXv2_bldg/70792_rid/pricea_sort/34.16338,-84.072018,34.020652,-84.364529_rect/11_zm/0_mmm/1_fr/");

}
    
else if(searchInput == "30022" && searchType == "F"){
        document.getElementById("x").innerHTML = "3410 Waters Mill Dr, Alpharetta, GA 30022 (Suburban)".link("http://www.zillow.com/homes/for_sale/Johns-Creek-GA-30022/house,condo,apartment_duplex,mobile,townhouse_type/14678911_zpid/70808_rid/globalrelevanceex_sort/34.103134,-84.133645,33.943217,-84.368134_rect/11_zm/");
        document.getElementById("y").innerHTML = "840 Kings Arms Way, Alpharetta, GA 30022 (Suburban)".link("http://www.zillow.com/homes/for_sale/Johns-Creek-GA-30022/house,condo,apartment_duplex,mobile,townhouse_type/14679569_zpid/70808_rid/globalrelevanceex_sort/34.103134,-84.133645,33.943217,-84.368134_rect/11_zm/");
        document.getElementById("z").innerHTML = "31102 Harvest Ridge Ln # 31, Alpharetta, GA 30022 (Condo)".link("http://www.zillow.com/homes/for_sale/Johns-Creek-GA-30022/condo,mobile,townhouse_type/65457819_zpid/70808_rid/globalrelevanceex_sort/34.103134,-84.133645,33.943217,-84.368134_rect/11_zm/");
        document.getElementById("a").innerHTML = "9012 Tuckerbrook Ln # 3, Johns Creek, GA 30022 (Suburban)".link("http://www.zillow.com/homes/for_sale/Johns-Creek-GA-30022/condo,mobile,townhouse_type/2096418942_zpid/70808_rid/globalrelevanceex_sort/34.103134,-84.133645,33.943217,-84.368134_rect/11_zm/");
        document.getElementById("b").innerHTML = "45 Nesbit Pl, Johns Creek, GA 30022 (Suburban)".link("http://www.zillow.com/homes/for_sale/Johns-Creek-GA-30022/condo,mobile,townhouse_type/2121686686_zpid/70808_rid/globalrelevanceex_sort/34.103134,-84.133645,33.943217,-84.368134_rect/11_zm/");
        document.getElementById("d").innerHTML = "";

}
 
else if(searchInput == "30022" && searchType == "S"){
        document.getElementById("x").innerHTML = "8520 S Holcomb Bridge Way, Alpharetta, GA 30022 (Condo)".link("http://www.zillow.com/homes/for_sale/Johns-Creek-GA-30022/condo,apartment_duplex_type/5Xhthr_bldg/70808_rid/pricea_sort/34.094605,-84.104634,33.951761,-84.397145_rect/11_zm/0_mmm/1_fr/");
        document.getElementById("y").innerHTML = "100 Saratoga Dr, Alpharetta, GA 30022 (Condo)".link("http://www.zillow.com/homes/for_sale/Johns-Creek-GA-30022/condo,apartment_duplex_type/5XhtTw_bldg/70808_rid/pricea_sort/34.094605,-84.104634,33.951761,-84.397145_rect/11_zm/0_mmm/1_fr/");
        document.getElementById("z").innerHTML = "10900 Wittenridge Dr LOT C2, Alpharetta, GA 30022 (Condo)".link("http://www.zillow.com/homes/for_sale/Johns-Creek-GA-30022/condo,apartment_duplex_type/55015677_zpid/70808_rid/pricea_sort/34.094605,-84.104634,33.951761,-84.397145_rect/11_zm/");
        document.getElementById("a").innerHTML = "9155 Nesbit Ferry Rd UNIT 89,Alpharetta, GA 30022 (Condo)".link("http://www.zillow.com/homes/for_sale/Johns-Creek-GA-30022/condo,apartment_duplex_type/65459504_zpid/70808_rid/pricea_sort/34.094605,-84.104634,33.951761,-84.397145_rect/11_zm/");
        document.getElementById("b").innerHTML = "317 Hawkstone Way Alpharetta, GA 30022 (Apartment)".link("http://www.zillow.com/homes/for_sale/Johns-Creek-GA-30022/condo,apartment_duplex_type/33.989188,-84.267428_ll/70808_rid/pricea_sort/34.094605,-84.104634,33.951761,-84.397145_rect/11_zm/0_mmm/1_fr/");
        document.getElementById("d").innerHTML = "";

}

    
else if(searchInput == "30097" && searchType == "F"){
            document.getElementById("x").innerHTML = "12060 Carriage Park Ln, Johns Creek, GA 30097 (Condo)".link("http://www.zillow.com/homes/for_sale/Duluth-GA-30097/fsba,fsbo,fore,cmsn_lt/house,condo,apartment_duplex,land,townhouse_type/2129473952_zpid/70875_rid/globalrelevanceex_sort/34.101428,-84.000264,33.958596,-84.292775_rect/11_zm/0_mmm/");
            document.getElementById("y").innerHTML = "6240 Clapham Ln # 0, Duluth, GA 30097 (Condo)".link("http://www.zillow.com/homes/for_sale/Duluth-GA-30097/fsba,fsbo,fore,cmsn_lt/house,condo,apartment_duplex,land,townhouse_type/2096134147_zpid/70875_rid/globalrelevanceex_sort/34.101428,-84.000264,33.958596,-84.292775_rect/11_zm/0_mmm/");
            document.getElementById("z").innerHTML = "110 Glenside Ln, Johns Creek, GA 30097 (Suburban)".link("http://www.zillow.com/homes/for_sale/Duluth-GA-30097/fsba,fsbo,fore,cmsn_lt/house,condo,apartment_duplex,land,townhouse_type/2096165244_zpid/70875_rid/globalrelevanceex_sort/34.101428,-84.000264,33.958596,-84.292775_rect/11_zm/0_mmm/");
            document.getElementById("a").innerHTML = "2563 River Summit Ct, Duluth, GA 30097 (Suburban)".link("http://www.zillow.com/homes/for_sale/Duluth-GA-30097/fsba,fsbo,fore,cmsn_lt/house,condo,apartment_duplex,land,townhouse_type/14830724_zpid/70875_rid/globalrelevanceex_sort/34.101428,-84.000264,33.958596,-84.292775_rect/11_zm/0_mmm/");
            document.getElementById("b").innerHTML = "6080 Song Breeze Trce,Johns Creek, GA 30097 (Suburban)".link("http://www.zillow.com/homes/for_sale/Duluth-GA-30097/fsba,fsbo,fore,cmsn_lt/house,condo,apartment_duplex,land,townhouse_type/2096176013_zpid/70875_rid/globalrelevanceex_sort/34.101428,-84.000264,33.958596,-84.292775_rect/11_zm/0_mmm/");
            document.getElementById("d").innerHTML = "";

}
    else if(searchInput == "30097" && searchType == "S"){
            document.getElementById("x").innerHTML = "2200 Satellite Blvd, Duluth, GA 30097 (Apartment)".link("http://www.zillow.com/homes/for_sale/Duluth-GA-30097/apartment_duplex_type/5XhtVq_bldg/70875_rid/pricea_sort/34.101428,-84.000264,33.958596,-84.292775_rect/11_zm/0_mmm/1_fr/");
            document.getElementById("y").innerHTML = "2255 Satellite Blvd, Duluth, GA 30097 (Apartment)".link("http://www.zillow.com/homes/for_sale/Duluth-GA-30097/apartment_duplex_type/5XhtqK_bldg/70875_rid/pricea_sort/34.101428,-84.000264,33.958596,-84.292775_rect/11_zm/0_mmm/1_fr/");
            document.getElementById("z").innerHTML = "100 Woodiron Dr, Duluth, GA 30097 (Apartment)".link("http://www.zillow.com/homes/for_sale/Duluth-GA-30097/apartment_duplex_type/5XhtZG_bldg/70875_rid/pricea_sort/34.101428,-84.000264,33.958596,-84.292775_rect/11_zm/0_mmm/1_fr/");
            document.getElementById("a").innerHTML = "6115 Abbotts Bridge Rd, Duluth, GA 30097 (Apartment)".link("http://www.zillow.com/homes/for_sale/Duluth-GA-30097/apartment_duplex_type/5XhtTG_bldg/70875_rid/pricea_sort/34.101428,-84.000264,33.958596,-84.292775_rect/11_zm/0_mmm/1_fr/");
            document.getElementById("b").innerHTML = "2605 Meadow Church Rd, Duluth, GA 30097 (Apartment)".link("http://www.zillow.com/homes/for_sale/Duluth-GA-30097/apartment_duplex_type/70875_rid/pricea_sort/34.101428,-84.000264,33.958596,-84.292775_rect/11_zm/0_mmm/1_fr/");
            document.getElementById("d").innerHTML = "";

}
     
else if(searchInput == "30075" && searchType == "F"){
            document.getElementById("x").innerHTML = "11680 Wildwood Springs Dr, Roswell, GA 30075".link("http://www.zillow.com/homes/for_sale/Roswell-GA-30075/fsba,fsbo,fore,cmsn_lt/house,condo,apartment_duplex,land,townhouse_type/14661337_zpid/70854_rid/globalrelevanceex_sort/34.127579,-84.23338,33.98479,-84.525891_rect/11_zm/0_mmm/");
            document.getElementById("y").innerHTML = "4470 Woodford Pass NE, Roswell, GA 30075".link("http://www.zillow.com/homedetails/4470-Woodford-Pass-NE-Roswell-GA-30075/14236935_zpid/");
            document.getElementById("z").innerHTML = "280 Jade Cove Dr,Roswell, GA 30075".link("http://www.zillow.com/homes/for_sale/Roswell-GA-30075/fsba,fsbo,fore,cmsn_lt/house,condo,apartment_duplex,land,townhouse_type/55013194_zpid/70854_rid/globalrelevanceex_sort/34.127579,-84.23338,33.98479,-84.525891_rect/11_zm/0_mmm/");
            document.getElementById("a").innerHTML = "1020 Allenbrook Lane Home 4 Rent # 0, Roswell, GA 30075".link("http://www.zillow.com/homes/for_sale/Roswell-GA-30075/fsba,fsbo,fore,cmsn_lt/house,condo,apartment_duplex,land,townhouse_type/2096119647_zpid/70854_rid/globalrelevanceex_sort/34.127579,-84.23338,33.98479,-84.525891_rect/11_zm/0_mmm/");
            document.getElementById("b").innerHTML = "1578 Sandpoint Dr NE, Roswell, GA 30075".link("http://www.zillow.com/homes/for_sale/Roswell-GA-30075/fsba,fsbo,fore,cmsn_lt/house,condo,apartment_duplex,land,townhouse_type/14223579_zpid/70854_rid/globalrelevanceex_sort/34.127579,-84.23338,33.98479,-84.525891_rect/11_zm/0_mmm/");
            document.getElementById("d").innerHTML = "";
}
     
    else if(searchInput == "30075" && searchType == "S"){
            document.getElementById("x").innerHTML = "100 Chattahoochee Cir, Roswell, GA 30075 (Apartment)".link("http://www.zillow.com/homes/for_sale/Roswell-GA-30075/condo,apartment_duplex_type/5XhtXv_bldg/70854_rid/pricea_sort/34.127579,-84.23338,33.98479,-84.525891_rect/11_zm/0_mmm/1_fr/");
            document.getElementById("y").innerHTML = "1230 Canton St, Roswell, GA 30075 (Apartment)".link("http://www.zillow.com/homes/for_sale/Roswell-GA-30075/condo,apartment_duplex_type/88816290_zpid/70854_rid/pricea_sort/34.127579,-84.23338,33.98479,-84.525891_rect/11_zm/0_mmm/1_fr/");
            document.getElementById("z").innerHTML = "1014 River Mill Cir, Roswell, GA 30075 (Condo)".link("http://www.zillow.com/homes/for_sale/Roswell-GA-30075/condo,apartment_duplex_type/14668256_zpid/70854_rid/pricea_sort/34.127579,-84.23338,33.98479,-84.525891_rect/11_zm/0_mmm/1_fr/");
            document.getElementById("a").innerHTML = "607 River Mill Cir # 607,Roswell, GA 30075 (Condo)".link("http://www.zillow.com/homes/for_sale/Roswell-GA-30075/condo,apartment_duplex_type/2096226304_zpid/70854_rid/pricea_sort/34.127579,-84.23338,33.98479,-84.525891_rect/11_zm/0_mmm/1_fr/");
            document.getElementById("b").innerHTML = "1736 Liberty Ln # 1736, Roswell, GA 30075 (Condo)".link("http://www.zillow.com/homes/for_sale/Roswell-GA-30075/condo,apartment_duplex_type/2131367979_zpid/70854_rid/pricea_sort/34.127579,-84.23338,33.98479,-84.525891_rect/11_zm/0_mmm/1_fr/");
            document.getElementById("d").innerHTML = "";

}
     
else if(searchInput == "30076" && searchType == "F"){
            document.getElementById("x").innerHTML = "1180 Arbor Creek Dr, Roswell, GA 30076".link("http://www.zillow.com/homes/for_sale/Roswell-GA-30076/fsba,fsbo,fore,cmsn_lt/house,condo,apartment_duplex,land,townhouse_type/35820013_zpid/70855_rid/globalrelevanceex_sort/34.098017,-84.168835,33.955179,-84.461346_rect/11_zm/0_mmm/");
            document.getElementById("y").innerHTML = "2660 Hazy Hollow Run, Roswell, GA 30076".link("http://www.zillow.com/homes/2660-Hazy-Hollow-Run-Roswell-GA-30076_rb/");
            document.getElementById("z").innerHTML = "5900 Brookside Pl, Roswell, GA 30076".link("http://www.zillow.com/homes/for_sale/Roswell-GA-30076/fsba,fsbo,fore,cmsn_lt/house,condo,apartment_duplex,land,townhouse_type/2133758977_zpid/70855_rid/globalrelevanceex_sort/34.098017,-84.168835,33.955179,-84.461346_rect/11_zm/0_mmm/");
            document.getElementById("a").innerHTML = "205 Tenth Fairway, Roswell, GA 30076".link("http://www.zillow.com/homes/for_sale/Roswell-GA-30076/fsba,fsbo,fore,cmsn_lt/house,condo,apartment_duplex,land,townhouse_type/14675857_zpid/70855_rid/globalrelevanceex_sort/34.098017,-84.168835,33.955179,-84.461346_rect/11_zm/0_mmm/");
            document.getElementById("b").innerHTML = "2900 Laurel Green Ct,Roswell, GA 30076".link("http://www.zillow.com/homes/for_sale/Roswell-GA-30076/fsba,fsbo,fore,cmsn_lt/house,condo,apartment_duplex,land,townhouse_type/14676323_zpid/70855_rid/globalrelevanceex_sort/34.098017,-84.168835,33.955179,-84.461346_rect/11_zm/0_mmm/");
            document.getElementById("d").innerHTML = "";

}
     
else if(searchInput == "30076" && searchType == "S"){
            document.getElementById("x").innerHTML = "555 Eagles Crest Village Ln, Roswell, GA 30076 (Condo)".link("http://www.zillow.com/homes/for_sale/Roswell-GA-30076/condo,apartment_duplex_type/5XhtgL_bldg/70855_rid/pricea_sort/34.169488,-84.022408,33.883812,-84.60743_rect/10_zm/0_mmm/1_fr/");
            document.getElementById("y").innerHTML = "478 Teal Ct # 478,Roswell, GA 30076 (Condo)".link("http://www.zillow.com/homes/for_sale/Roswell-GA-30076/condo,apartment_duplex_type/2119525816_zpid/70855_rid/pricea_sort/34.169488,-84.022408,33.883812,-84.60743_rect/10_zm/0_mmm/1_fr/");
            document.getElementById("z").innerHTML = "500 Sun Valley Dr STE C2,Roswell, GA 30076 (Condo)".link("http://www.zillow.com/homes/for_sale/Roswell-GA-30076/condo,apartment_duplex_type/2098625335_zpid/70855_rid/pricea_sort/34.169488,-84.022408,33.883812,-84.60743_rect/10_zm/0_mmm/1_fr/");
            document.getElementById("a").innerHTML = "900 Walton Way, Roswell, GA 30076 (Apartment)".link("http://www.zillow.com/homes/for_sale/Roswell-GA-30076/condo,apartment_duplex_type/5Xhv3X_bldg/70855_rid/pricea_sort/34.169488,-84.022408,33.883812,-84.60743_rect/10_zm/0_mmm/1_fr/");
            document.getElementById("b").innerHTML = "E Hembree Xing Roswell, GA 30076 (Condo)".link("http://www.zillow.com/homes/for_sale/Roswell-GA-30076/condo,apartment_duplex_type/2097948249_zpid/70855_rid/pricea_sort/34.169488,-84.022408,33.883812,-84.60743_rect/10_zm/0_mmm/1_fr/");
            document.getElementById("d").innerHTML = "";

}
 
else if(searchInput == "30328" && searchType == "F"||searchInput == "30328" && searchType == "S"){
            document.getElementById("x").innerHTML = "6873 Peachtree Dunwoody Rd NE, Atlanta, GA 30328 (Apartment)".link("http://www.zillow.com/homes/for_rent/Sandy-Springs-GA-30328/house,condo,apartment_duplex,mobile_type/5ZW77L_bldg/71047_rid/paymenta_sort/33.968348,-84.323588,33.89685,-84.469843_rect/12_zm/");
            document.getElementById("y").innerHTML = "108 Granville Ct Atlanta, GA 30328 (Apartment)".link("http://www.zillow.com/homes/for_rent/Sandy-Springs-GA-30328/house,condo,apartment_duplex,mobile_type/33.931074,-84.360526_ll/71047_rid/paymenta_sort/33.968348,-84.323588,33.89685,-84.469843_rect/12_zm/");
            document.getElementById("z").innerHTML = "485 Mossyvale Way, Atlanta, GA 30328".link("http://www.zillow.com/homes/485-Mossyvale-Way-Atlanta-GA-30328_rb/?fromHomePage=true");
            document.getElementById("a").innerHTML = "6635 Williamson Dr, Atlanta, GA 30328 (Apartment)".link("http://www.zillow.com/homes/for_rent/Sandy-Springs-GA-30328/house,condo,apartment_duplex,mobile_type/35936850_zpid/71047_rid/paymenta_sort/33.968348,-84.323588,33.89685,-84.469843_rect/12_zm/");
            document.getElementById("b").innerHTML = "6851 Roswell Rd Atlanta, GA 30328 (Apartment)".link("http://www.zillow.com/homes/for_rent/Sandy-Springs-GA-30328/house,condo,apartment_duplex,mobile_type/33.94169,-84.371105_ll/71047_rid/paymenta_sort/33.968348,-84.323588,33.89685,-84.469843_rect/12_zm/");
            document.getElementById("d").innerHTML = "799 Hammond Dr,Atlanta, GA 30328 (Apartment)".link("http://www.zillow.com/homes/for_sale/Sandy-Springs-GA-30328/apartment_duplex,land_type/2104193574_zpid/71047_rid/globalrelevanceex_sort/33.968348,-84.323588,33.89685,-84.469843_rect/12_zm/0_mmm/");
}
     
else if(searchInput == "30342" && searchType == "F"||searchInput == "30342" && searchType == "S"){
            document.getElementById("x").innerHTML = "4757 Roswell Rd Sandy Springs, GA 30342 (Townhouse)".link("http://www.zillow.com/homes/for_sale/Atlanta-GA-30342/apartment_duplex_type/2096447083_zpid/71060_rid/pricea_sort/33.889183,-84.365419,33.880241,-84.383701_rect/15_zm/");
            document.getElementById("y").innerHTML = "5375 Roswell Rd APT A6, Atlanta, GA 30342 (Apartment)".link("http://www.zillow.com/homes/for_rent/Atlanta-GA-30342/condo,apartment_duplex_type/55018703_zpid/71060_rid/33.91993,-84.305907,33.848391,-84.452162_rect/12_zm/");
            document.getElementById("z").innerHTML = "Roswell Rd NE Atlanta, GA 30342 (Apartment)".link("http://www.zillow.com/homes/for_rent/Atlanta-GA-30342/condo,apartment_duplex_type/2096367527_zpid/71060_rid/33.917295,-84.322042,33.851029,-84.436026_rect/12_zm/");
            document.getElementById("a").innerHTML = "5550 Glenridge Dr, Atlanta, GA 30342 (Apartment)".link("http://www.zillow.com/homes/for_rent/Atlanta-GA-30342/condo,apartment_duplex_type/5XhtYb_bldg/71060_rid/33.919931,-84.305906,33.848392,-84.452162_rect/12_zm/");
            document.getElementById("b").innerHTML = "5527 Parkerton Ln, Atlanta, GA 30342 (Townhouse)".link("http://www.zillow.com/homes/for_rent/Atlanta-GA-30342/condo,apartment_duplex_type/123478464_zpid/71060_rid/33.919931,-84.305906,33.848392,-84.452162_rect/12_zm/");
            document.getElementById("d").innerHTML = "49 Putnam Cir NE, Atlanta, GA 30342 (Townhouse)".link("http://www.zillow.com/homes/for_rent/Atlanta-GA-30342/condo,apartment_duplex_type/35942369_zpid/71060_rid/33.919931,-84.305906,33.848392,-84.452162_rect/12_zm/");
}
     
else if(searchInput == "30350" && searchType == "F"){
                document.getElementById("x").innerHTML = "10 Spalding Ct Sandy Springs, GA 30350 (Suburban)".link("http://www.zillow.com/homes/for_sale/Sandy-Springs-GA-30350/house,apartment_duplex,townhouse_type/2098050822_zpid/71068_rid/globalrelevanceex_sort/34.063041,-84.208489,33.903048,-84.442978_rect/11_zm/");
                document.getElementById("y").innerHTML = "2135 Dunwoody Heritage Dr, Dunwoody, GA 30350 (Suburban)".link("http://www.zillow.com/homes/for_sale/Sandy-Springs-GA-30350/house,apartment_duplex,townhouse_type/2096361163_zpid/71068_rid/globalrelevanceex_sort/34.063041,-84.208489,33.903048,-84.442978_rect/11_zm/");
                document.getElementById("z").innerHTML = "8670 8670 The 5th Grn, Sandy Springs, GA 30350 (Suburban)".link("http://www.zillow.com/homes/for_sale/Sandy-Springs-GA-30350/house,condo,apartment_duplex,townhouse_type/2106213976_zpid/71068_rid/globalrelevanceex_sort/34.063041,-84.208489,33.903048,-84.442978_rect/11_zm/3_p/");
                document.getElementById("a").innerHTML = "1108 Woodcliff Dr, Atlanta, GA 30350 (Suburban)".link("http://www.zillow.com/homes/for_sale/Sandy-Springs-GA-30350/house,condo,apartment_duplex,townhouse_type/35923237_zpid/71068_rid/globalrelevanceex_sort/34.063041,-84.208489,33.903048,-84.442978_rect/11_zm/4_p/");
                document.getElementById("b").innerHTML = "";
                document.getElementById("d").innerHTML = "";

}
     
    else if(searchInput == "30350" && searchType == "S"){
                document.getElementById("x").innerHTML = "703 Woodcliff Dr,Sandy Springs, GA 30350 (Condo)".link("http://www.zillow.com/homes/for_sale/Sandy-Springs-GA-30350/condo,apartment_duplex_type/2096238083_zpid/71068_rid/pricea_sort/34.018874,-84.25252,33.947418,-84.398776_rect/12_zm/0_mmm/1_fr/");
                document.getElementById("y").innerHTML = "355 Winding River Dr UNIT B,Atlanta, GA 30350 (Apartment)".link("http://www.zillow.com/homes/for_sale/Sandy-Springs-GA-30350/condo,apartment_duplex_type/35950696_zpid/71068_rid/pricea_sort/34.018874,-84.25252,33.947418,-84.398776_rect/12_zm/0_mmm/1_fr/");
                document.getElementById("z").innerHTML = "8002 Wingate Way # 8002, Sandy Springs, GA 30350 (Condo)".link("http://www.zillow.com/homes/for_sale/Sandy-Springs-GA-30350/condo,apartment_duplex_type/2096299542_zpid/71068_rid/pricea_sort/34.018874,-84.25252,33.947418,-84.398776_rect/12_zm/0_mmm/1_fr/");
                document.getElementById("a").innerHTML = "1108 Woodcliff Dr, Atlanta, GA 30350 (Suburban)".link("http://www.zillow.com/homes/for_sale/Sandy-Springs-GA-30350/house,condo,apartment_duplex,townhouse_type/35923237_zpid/71068_rid/globalrelevanceex_sort/34.063041,-84.208489,33.903048,-84.442978_rect/11_zm/4_p/");
                document.getElementById("b").innerHTML = "";
                document.getElementById("d").innerHTML = "";
    }
     
else if(searchInput == "30291" && searchType == "F"){
            document.getElementById("x").innerHTML = "6354 Shannon Pkwy, Union City, GA 30291 (Condo)".link("http://www.zillow.com/homes/for_sale/Union-City-GA-30291/condo,mobile,townhouse_type/2107020593_zpid/71013_rid/globalrelevanceex_sort/33.61226,-84.484692,33.531879,-84.601937_rect/12_zm/");
            document.getElementById("y").innerHTML = "5761 Barrington Run # /110, Union City, GA 30291 (Apartment)".link("http://www.zillow.com/homes/for_sale/Union-City-GA-30291/condo,mobile,townhouse_type/2096437035_zpid/71013_rid/globalrelevanceex_sort/33.61226,-84.484692,33.531879,-84.601937_rect/12_zm/");
            document.getElementById("z").innerHTML = "7415 Toccoa Cir, Union City, GA 30291 (Suburban)".link("http://www.zillow.com/homes/for_sale/Union-City-GA-30291/house,apartment_duplex,townhouse_type/121351873_zpid/71013_rid/globalrelevanceex_sort/33.61226,-84.484692,33.531879,-84.601937_rect/12_zm/");
            document.getElementById("a").innerHTML = "5752 Barrington Run, Union City, GA 3029 (Suburban)1".link("http://www.zillow.com/homes/for_sale/Union-City-GA-30291/house,apartment_duplex,townhouse_type/2096307798_zpid/71013_rid/globalrelevanceex_sort/33.61226,-84.484692,33.531879,-84.601937_rect/12_zm/");
            document.getElementById("b").innerHTML = "5213 Village Ct, Union City, GA 30291".link("http://www.zillow.com/homedetails/5213-Village-Ct-Union-City-GA-30291/71746284_zpid/");
            document.getElementById("d").innerHTML = "";

}
     
    else if(searchInput == "30291" && searchType == "S"){
            document.getElementById("x").innerHTML = "5140 Highpoint Rd APT 12,Union City, GA 30291 (Apartment)".link("http://www.zillow.com/homes/for_sale/Union-City-GA-30291/condo,apartment_duplex_type/65446223_zpid/71013_rid/pricea_sort/33.64392,-84.397145,33.500321,-84.689656_rect/11_zm/0_mmm/1_fr/");
            document.getElementById("y").innerHTML = "4701 Flat Shoals Rd APT 34D,Union City, GA 30291 (Condo)".link("http://www.zillow.com/homes/for_sale/Union-City-GA-30291/condo,apartment_duplex_type/65446399_zpid/71013_rid/pricea_sort/33.64392,-84.397145,33.500321,-84.689656_rect/11_zm/0_mmm/1_fr/");
            document.getElementById("z").innerHTML = "4701 Flat Shoals Rd APT 51F,Union City, GA 30291 (Condo)".link("http://www.zillow.com/homes/for_sale/Union-City-GA-30291/condo,apartment_duplex_type/65446656_zpid/71013_rid/pricea_sort/33.64392,-84.397145,33.500321,-84.689656_rect/11_zm/0_mmm/1_fr/");
            document.getElementById("a").innerHTML = "6500 Raymond Dr, Union City, GA 30291 (Apartment)".link("http://www.zillow.com/homes/for_sale/Union-City-GA-30291/apartment_duplex_type/2100890205_zpid/71013_rid/pricea_sort/33.64392,-84.397145,33.500321,-84.689656_rect/11_zm/0_mmm/1_fr/");
            document.getElementById("b").innerHTML = "4050 Flat Shoals Rd APT 4,Union City, GA 30291 (Apartment)".link("http://www.zillow.com/homes/for_sale/Union-City-GA-30291/apartment_duplex_type/2096401582_zpid/71013_rid/pricea_sort/33.64392,-84.397145,33.500321,-84.689656_rect/11_zm/0_mmm/1_fr/");
            document.getElementById("d").innerHTML = "6355 Oakley Rd, Union City, GA 30291 (Apartment)".link("http://www.zillow.com/homes/for_sale/Union-City-GA-30291/apartment_duplex_type/5Xm5dL_bldg/71013_rid/pricea_sort/33.64392,-84.397145,33.500321,-84.689656_rect/11_zm/0_mmm/1_fr/");

}

else{
            document.getElementById("x").innerHTML = "------------------------------------";
            document.getElementById("y").innerHTML = "------------------------------------";
            document.getElementById("z").innerHTML = "This is not a zip code we currently service";
            document.getElementById("a").innerHTML = "Please enter a valid zip code from the list above";
            document.getElementById("b").innerHTML = "------------------------------------";
            document.getElementById("d").innerHTML = "------------------------------------";
}
}
</script>

<div id= "canvas"></div>





        <!-- Promo Section "promo" -->
<!-- Promo Section - "Sign Up Today" -->
<div class="w3-container w3-padding-64" style="background-color: #D84E13" id = "promo">
  <div class="w3-row-padding">
    <div class="w3-col m6">
    <!--  <h3 style="font-family: 'Squada One', cursive; font-size: 60px; color: #DEE0D5"><b>Signup Today!</b></h3>-->
      <p style="font-family: 'Squada One', cursive; font-size: 56px; color: #DEE0D5; margin-top:-20px">DON'T STREAM ALONE, IT'S AS WIDE AS AN OCEAN OUT THERE!</p>
      <p style="font-family: 'Squada One', cursive; font-size: 26px; color: #DEE0D5; margin-top:-20px">Let us guide you in the right direction. Together, we'll weather the storm and find your dream home. </p>
    </div>
    <div class="w3-col m6">
      <img class="w3-image w3-round-large" src="https://s-media-cache-ak0.pinimg.com/originals/e2/9f/04/e29f045e30cc00cf58249dabaa515fa4.gif" alt="Buildings" width="700" height="394" style="border-radius: 25px">
    </div>
  </div>
</div>
<!----------------------------------------------------------------- Promo Section - "Sign Up Today" ---------------------------------------------->

<!--------------------------------------------------------------------------OUTPUT---------------------------------------------------------------->








<!------------------------------------------------------------------------END OUTPUT---------------------------------------------------------------->


<div class="w3-container w3-padding-128" id="partners" style="background-color: #E9EEF6 ">
<div style = "margin-left: -150px; margin-top: -63px;">
         <span class="w3-xxlarge w3-text-black w3-wide" style = "margin-left: 700px; margin-top: -900px;">PARTNERS</span>
    </div>
    <div class="w3-content w3-container w3-padding-64" id="about" style="height: 300px;margin-left: -50px; margin-top:-65px">
        <img src="https://tctechcrunch2011.files.wordpress.com/2013/03/trulia-png.png" alt="trulia" style = "height:150px; width: 250px; margin-left: 150px;margin-top:20px">
    </div>
    <div class="w3-content w3-container w3-padding-64" id="about" style="height: 200px; margin-left: 1100px; margin-top:-270px; width: 500px">
         <img src="http://logonoid.com/images/google-maps-logo.png" alt="gmaps" style = "height:150px; width:200px; margin-left: -550px; margin-top:0px"> 
    </div>
    <div class="w3-content w3-container w3-padding-64" id="about" style="height: 300px; margin-left: 1100px; margin-top:-230px; width: 500px">
        <img src="http://logonoid.com/images/zillow-logo.png" alt="zillow" style = "height:150px; width:250px; margin-left: -170px; margin-top:30px">
    </div>
</div>
<div class="w3-container w3-padding-128" id="team" style="background-color: #D84E13 " id = "contact">
      <div style= "margin-top: -270px; margin-left: 210px ">
      <iframe width="600" height="350"frameborder="0" style="border:0; margin-left: -200px; margin-top: 250px"src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAhDosa2v_6wUB92qK2p91lV9ZE5FZ5ucM
    &q=Georgia+State+University,Atlanta+GA" allowfullscreen>
</iframe>
        </div>
    <div style = "margin-top: -300px; margin-left: 0px">
    <p style="margin-left: 900px;font-family: 'Viga', sans-serif; font-size: 18px;  color: black">CORE</p>
    <p style="margin-left: 900px;font-family: 'Viga', sans-serif; font-size: 18px; color: black">33 Gilmer Street SE Atlanta, GA</p>
    <p style="margin-left: 900px;font-family: 'Viga', sans-serif; font-size: 18px; color: black">Phone: (123) 456-7890</p>
    <p style="margin-left: 900px; font-family: 'Viga', sans-serif; font-size: 18px; color: black">Email: support@core.com</p>
</div>
</div>
<!------------------------------------------------------------From W3Schools---------------------------------------------------------------------->
    <footer class="w3-center w3-black w3-padding-64 w3-hover-opacity-off" style="width: 1373px; margin-left: -20px">
  <a href="#home" class="w3-btn w3-padding w3-light-grey w3-hover-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <p>Powered by Trulia</p>
 <p> ©CORE 2016</p>
        
</footer>
</body>
</html>