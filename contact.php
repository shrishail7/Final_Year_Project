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

    background-image: url('image/contactus.jpg'); /* Specify the path to your image */
    background-size:cover; /* Ensure the background image covers the entire container */
    


    }
    .kru{
    position:absolute;
    bottom:0px;
    top:575px;
    left:500px;
    }
    .kruh{
      font-weight: bold !important;
  
      color: black !important;
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
  <a class="navbar-brand" href="#"style="margin-left: 10px;"> Smart Blood Bank Management System </a>

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

<div class="try">





<section class="my-5"  style="height:100vh; " >

<div class="jumbo text-center">
  <h1>Connect with us</h1>
  <p>We are always here to help you!</p>
</div> 

  <div class="py-5">
    <h2 class="jumbo text-center"></h2>
  </div> 
   <div>
    <div class="kru">
    <p class="kruh">Krushna B Tarfe - +91-9022584829, krishnatarfe4256@gmail.com<br>Adarsh Sandukwar- +91-7378349969, adyoptional@gmail.com<br>Radhika Bandivaderkar - +91-7038037786, rbandivadekar_b21@et.vjti.ac.in <br>Shrishail Dolle - +91-7276217878, ssdolle_b20@et.vjti.ac.in<br>Hrutuja Khedekar - +91-9326356093, hskhedekar_b21@et.vjti.ac.in
  </p>
    </div>
  
  <a href="contact.php"> </a>
</div> 
</section>




<?php require 'footer.php'; ?>

</div>

</body>
</html>