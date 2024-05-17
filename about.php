<?php 
    session_start();

    ?>
<!DOCTYPE html>
<html>
<?php $title="Smart Blood Bank Management System | About page"; ?>
<?php require 'head.php'; ?>
<head>

  
<style>
    .try {
      background: linear-gradient(90deg, #FF512F, #DD2476); /* Change colors as needed */
    }
    .typed-text {
      color: white;
    }
    .jumbo{
      height:33vh;
   
      text-align:center;
      padding-top:10px;
      
    }

  </style>

	<title></title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <img src="image/new03.jpg" alt="" height="50px" style="border-radius:100%;" >
  <a class="navbar-brand" href="#" style="margin-left: 10px;"> Smart Blood Bank Management System </a>

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

<div class="wrapper">

<div class="jumbo" style= "padding-top : 50px">
  <h1>Smart Blood Bank Management System</h1>
  <p style="font-size:20px; padding-top:50px" >Empower humanity with your gift of life. Every blood donation is a beacon of hope, a lifeline for those in need. Stand tall, save lives, donate blood today...</p>
</div>


<div class="try">



<section class="my-5">
  <div class="py-5">
    <h2 class="text-center" style="font-size : 35px;color: white" >About Us</h2>
  </div>

  <section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-12">
        <img src="image/newimages/craft4.jpg" class="img-fluid aboutimg" style="height: 400px !important; width:auto; padding-left:120px; padding-bottom:50px">
      </div>
      <div class="col-lg-6 col-md-6 col-12">
        <h2 style="font-size : 35px;color: white" >BLOOD - "I'm here to save you!"</h2>
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


</div>

</div>

<?php require 'footer.php'; ?>
</body>
</html>