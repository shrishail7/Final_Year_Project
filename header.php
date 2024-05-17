<nav class="navbar navbar-expand-sm navbar-light bg-light sticky-top">
    <div class="container">
    <img src="image/new03.jpg" alt="" height="50px" style="border-radius:100%; " >
  <a class="navbar-brand" href="#" style="margin-left: 10px;"> Smart Blood Bank Management System </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"><i class="fas fa-align-left"></i></span>
          </button>

          <div class="collapse navbar-collapse" id="collapsibleNavbar">

        <?php if (isset($_SESSION['hid'])) { ?>

        <?php } elseif (isset($_SESSION['rid'])) { ?>

        <?php }  else { ?>
                    <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link btn btn-light" href="main.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-light" href="login.php">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-light" href="register.php">Register</a>
            </li>

        </ul>

        <?php } ?>
       </div>
    </div>
</nav>