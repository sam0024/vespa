<?php global $dev; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Vespa</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="<?php echo get_template_directory_uri()?>/assets/img/favicon.png" rel="icon">
  <link href="<?php echo get_template_directory_uri()?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- CSS Files -->
  <?php wp_head();?>
</head>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <a href="index.html">
          <img src="<?php echo $dev['logo_img']['url']; ?>" alt="" class="img-fluid">
        </a>
      </div>
      <!-- .nav-menu -->
      <?php
        wp_nav_menu( 
          array( 
            'theme_location' =>'main_menu', 
            'container_class'=>'nav-menu d-none d-lg-block' 
          ));
      ?>
    </div>
  </header>
  <!-- End Header -->