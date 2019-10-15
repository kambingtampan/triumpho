<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>triumpho</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo base_url('lib/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo base_url('lib/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url('lib/animate/animate.min.css') ?>" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo base_url('css/style.css') ?>" type="text/css" rel="stylesheet" media="screen">
<!--   <link href="<?php echo base_url('css/triumpho.css') ?>" type="text/css" rel="stylesheet" media="screen"> -->
</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#hero"><img src="<?php echo base_url('img/logo.png') ?>" alt="" title="" /></img></a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="#hero">Regna</a></h1>-->
      </div>

<!--       <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Home</a></li>
          <li><a href="#login">Login</a></li>
        </ul>
      </nav> --><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Hero Section
  ============================-->
  <section id="hero" style="background: url(<?php echo base_url('img/material.jpg') ?>) top center;">
    <div class="hero-container">
      <h1>Welcome to</h1>
      <h2>Network Infrastructure Product and Solution Performance Dashboard</h2>
      <a href="#login" class="btn-get-started">Get Started</a>
    </div>
  </section><!-- #hero -->

  <main id="main">
    <!--==========================
      About Us Section
    ============================-->
    <section id="login">
      <div class="container">
        <div class="row about-container">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login <b>Triumpho</b></h1>
                  </div>
                    <div class="form-group">
                        <?php
                          if($this->session->flashdata('Login Info')) {
                            echo '<label class="text small" style="font-color:red">'.$this->session->flashdata('Login Info').'</label>';
                          }

                          // if($this->session->flashdata('Logout Info')) {
                          //   echo '<label class="text small" style="font-color:red">'.$this->session->flashdata('Logout Info').'</label>';
                          // }
                        ?>
                    </div>
                  <?php echo form_open('Login') ?>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="username" placeholder="Username" value="<?php echo set_value('username'); ?>" autocomplete='false'>
                      <p> <?php echo form_error('username'); ?> </p>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="password" placeholder="Password" value="<?php echo set_value('password'); ?>" autocomplete='false'>
                      <p> <?php echo form_error('password'); ?> </p>
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    <!-- <input type="submit" name="btn btn-primary btn-user btn-block" value="Login" /> -->
                    <input type="submit" name="btnSubmit" value="Login" class="btn btn-primary btn-user btn-block" />
                  <?php echo form_close(); ?>
                    <hr>
                    <a href="index.html" class="btn btn-google btn-user btn-block">
                      <i class="fab fa-google fa-fw"></i> Login with Google
                    </a>
                    <a href="index.html" class="btn btn-facebook btn-user btn-block">
                      <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                    </a>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="<?php echo base_url('index.php/register'); ?>">Don't have account? Create now!</a>
                  </div>
                </div>
              </div>
          <div class="col-lg-6 background order-lg-2 order-1 wow fadeInRight"></div>
        </div>

      </div>
    </section><!-- #about -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>triumpho</strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="<?php echo base_url('lib/jquery/jquery.min.js') ?>"></script>
  <script src="<?php echo base_url('lib/jquery/jquery-migrate.min.js') ?>"></script>
  <script src="<?php echo base_url('lib/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?php echo base_url('lib/easing/easing.min.js') ?>"></script>
  <script src="<?php echo base_url('lib/wow/wow.min.js') ?>"></script>
  <script src="<?php echo base_url('lib/waypoints/waypoints.min.js') ?>"></script>
  <script src="<?php echo base_url('lib/counterup/counterup.min.js') ?>"></script>
  <script src="<?php echo base_url('lib/superfish/hoverIntent.js') ?>"></script>
  <script src="<?php echo base_url('lib/superfish/superfish.min.js') ?>"></script>

  <!-- Template Main Javascript File -->
  <script src="<?php echo base_url('js/main.js') ?>"></script>

</body>
</html>
