<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   require('actions.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Brunches Cafe</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="shortcut icon" type="image/jpg" href="img/0001.jpg"/>

</head>
<body>
 
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card " >
    <a href="#home" class="w3-bar-item w3-button"><b>Brunches</b> Cafe</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="#projects" class="w3-bar-item w3-button">Menu</a>
      <a href="#about" class="w3-bar-item w3-button">About</a>
      <a href="#contact" class="w3-bar-item w3-button">Contact</a>
    </div>
  </div>
</div>

<style>
    .n{
  width: 400px;
  max-width: 100% ;
  height: 500px ;
  padding-top: 80px;
  border-radius: 30px;
  border-top-left-radius: 2em;
border-top-right-radius: 10em;
}
body{
    background-color: black;
    color: white;
}
@import url('https://fonts.googleapis.com/css2?family=Red+Hat+Mono:wght@300&display=swap');
:root{
    --font-serious: 'Red Hat Mono', 'monospace';
    --color-border: rgb(248, 247, 247);
    
}
.font-serious{
    font: normal 500 20px var(--font-serious);
}

</style>
<!-- Header -->
<header class="w3-display-container  w3-content w3-wide" style="max-width:100%;" id="home">
 <center><img class="w3-image  n" src="img/ketchup.jpg" alt="Architecture" ></center>

  <div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>Brunches</b></span> <span class="w3-hide-small w3-text-light-grey">Cafe</span></h1>
  </div>
</header>

<!-- Page content -->
<div class="w3-content w3-padding font-serious" style="max-width:1564px">

  <!-- Project Section -->
  <div class="w3-container w3-padding-32" id="projects">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16" >Menu</h3>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding" >&#8358 2500</div>
        <img src="img/egg.JPG" alt="House" style="width: 100%; height: 300px; border-radius: 30px" >
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">&#8358 2500</div>
        <img src="img/hm.jpg" alt="House" style="width:100%; height: 300px; border-radius: 30px">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">&#8358 2500</div>
        <img src="img/sharwama.jpg" alt="House"style="width:280px; height: 300px; border-radius: 30px">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">&#8358 2500</div>
        <img src="img/sharwama.jpg" alt="House"style="width:280px; height: 300px; border-radius: 30px">
      </div>
    </div>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">&#8358 2500</div>
        <img src="img/rice.jpg" alt="House"style="width:259px; height: 300px; border-radius: 30px">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">&#8358 2500</div>
        <img src="img/bread.jpg" style="width: 259px; height: 300px; border-radius: 30px">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">&#8358 2500</div>
        <img src="img/bread.jpg" alt="House" style="width:259px; height: 300px; border-radius: 30px">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">&#8358 2500</div>
        <img src="img/bread.jpg" alt="House" style="width:259px; height: 300px; border-radius: 30px">
      </div>
    </div>
  </div>

  <!-- About Section
  <div class="w3-container w3-padding-32" id="about">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">About</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint
      occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
      laboris nisi ut aliquip ex ea commodo consequat.
    </p>
  </div>

  <div class="w3-row-padding w3-grayscale">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="/w3images/team2.jpg" alt="John" style="width:100%">
      <h3>John Doe</h3>
      <p class="w3-opacity">CEO & Founder</p>
      <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
      <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="/w3images/team1.jpg" alt="Jane" style="width:100%">
      <h3>Jane Doe</h3>
      <p class="w3-opacity">Architect</p>
      <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
      <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="/w3images/team3.jpg" alt="Mike" style="width:100%">
      <h3>Mike Ross</h3>
      <p class="w3-opacity">Architect</p>
      <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
      <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="/w3images/team4.jpg" alt="Dan" style="width:100%">
      <h3>Dan Star</h3>
      <p class="w3-opacity">Architect</p>
      <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
      <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>
  </div> -->

  <!-- Contact Section -->
  <div class="w3-container w3-padding-32" id="contact">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Contact</h3>
    <p>Lets get in touch </p>
    <form method="post"  target="_blank" >
      <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name" style="border-radius: 30px">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Email" required name="Email" style="border-radius: 30px">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Subject" required name="Subject" style="border-radius: 30px">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Comment" required name="Comment" style="border-radius: 30px">
     <center><button class="w3-button w3-orange w3-section" style="border-radius: 30px" type="submit" name="send">
        <i class="fa fa-paper-plane"></i> SEND MESSAGE
      </button></center>
    </form>
  </div>
  
<!-- Image of location/map -->
<!-- <div class="w3-container">
  <img src="img/0001.jpg" class="w3-image n" style="width:100%">
</div>

<!-- End page content -->
</div>


<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16">
  <p>Powered by <a  title="W3.CSS" target="_blank" class="w3-hover-text-green">Mikini</a></p>
</footer>

</body>
</html>