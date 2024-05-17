<?php 
    session_start();

    ?>
<!DOCTYPE html>
<html>
<?php $title="Smart Blood Bank Management System | home page"; ?>
<?php require 'head.php'; ?>
<head>

<style>
    .try {
      background: linear-gradient(90deg, #FF512F, #DD2476); /* Change colors as needed */
    }
    .typed-text {
      color: white;
    }

    .carousel {
    position: relative; /* Ensure the parent container is relatively positioned */
}

.carousel-item {
    position: relative; /* Ensure the image container is relatively positioned */
}


    .moving {


    position: absolute;
    color:black;
    font-weight:bold;
    background-color: rgba(255, 255, 255, 0.5); /* Transparent white background */
    padding: 2px;
    font-size:27px;
    animation-name: moveLeftToRight;
    animation-duration: 15s; /* Adjust as needed */
    animation-timing-function: linear;
    animation-iteration-count: infinite;
    background-color:transparent;
    z-index: 2;
}

@keyframes moveLeftToRight {
    0% {
        transform: translateX(-100%);
    }
    100% {
        transform: translateX(100%);
    }
}

       
        

  </style>

  <title></title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/styles.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
</head>


<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <img src="image/new03.jpg" alt="" height="50px" style="border-radius:100%;" >
  <a class="navbar-brand" href="#"style="margin-left: 10px;" > Smart Blood Bank Management System </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      
      <li class="nav-item active">
        <a class="nav-link" href="main.php">Home <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="index.php">Login/Register<span class="sr-only">(current)</span></a>
      </li>
    </ul>


    
  
  </div>
</nav>

</div>





<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">

  <div class="moving">
  UPDATE!- New hospitals have been added to our network! Check out the updated list for more options near you.

</div>


    <div class="carousel-item active">
      <img class="crafty" src="image/mew04.png" alt="Los Angeles" style="width: 100%; height: 100vh;  ">
    </div>
    <div class="carousel-item">
      <img src="image/slide-1.jpg" alt="Chicago" style="width: 100%; height: 100vh ;">
    </div>
    <div class="carousel-item">
      <img src="image/new06.png" alt="New York" style="width: 100%; height: 100vh;">
    </div>
  </div>
  
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


<div  class="try" >



<section class="my-5">
  <div class="py-5">
    <h2 class="text-center" style="font-size : 35px; color: white" >About Us</h2>
  </div>

  <section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-12">
        <img src="image/newimages/craft4.jpg" class="img-fluid aboutimg" style="height: 400px !important; width:auto; box-shadow: 10px 0px 0px rgba(0, 0, 0, 0.5); padding-left:120px;">
      </div>
      <div class="col-lg-6 col-md-6 col-12">
        <h2 style="font-size : 35px; color: white" >BLOOD - "I'm here to save you!"</h2>
        <p class="py-3 typed-text" style="font-size : 20px;" > <!-- Empty paragraph to display typing effect --> </p>
        <a href="about.php"> </a> 
      </div>
    </div>
  </div>
</section>


<script>
      // Text to be typed
      var text = "Welcome to Smart Blood Bank Management System: Your Lifeline in Blood Donation and Distribution Step into Smart Blood Bank Management System, your comprehensive platform dedicated to facilitating the critical process of blood donation and distribution. Here, we unite donors, recipients, and healthcare professionals in a shared mission to save lives and ensure access to vital blood supplies. Explore our user-friendly interface, where donors can easily register, schedule appointments, and contribute to the life-saving cause. For healthcare providers, Smart Blood Bank Management System offers streamlined access to blood inventory, simplifying the process of sourcing and managing blood products. Join us in our commitment to making a difference—because together, we are the heartbeat of hope. Welcome to Smart Blood Bank Management System, where every donation matters and every life saved is celebrated."
      var i = 0; // Initialize index for the text

      // Function to simulate typing effect
      function typeWriter() {
        if (i < text.length) {
          document.querySelector('.typed-text').innerHTML += text.charAt(i);
          i++;
          setTimeout(typeWriter, 50); // Adjust typing speed as needed
        }
        else {
          // Reset index to 0 for infinite animation
          i = 0;
          // Clear text content before starting again
          document.querySelector('.typed-text').innerHTML = '';
          // Start typing animation again
          setTimeout(typeWriter, 50);
        }
      }

      // Call the function to start typing effect
      typeWriter();
    </script>



<section class="my-5">
  <div>
  <p class="text-center bg-dark text-white"> Contact Us <br>Krushna B Tarfe - +91-9022584829, krishnatarfe4256@gmail.com<br>Adarsh Sandukwar- +91-7378349969, adyoptional@gmail.com<br>Radhika Bandivaderkar - +91-7038037786, rbandivadekar_b21@et.vjti.ac.in <br>Shrishail Dolle - +91-7276217878, ssdolle_b20@et.vjti.ac.in<br>Hrutuja Khedekar - +91-9326356093, hskhedekar_b21@et.vjti.ac.in</p>
  <a href="contact.html"> </a>
  </div>
</section>




</div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <?php require 'footer.php'; ?>
</body>
</html>