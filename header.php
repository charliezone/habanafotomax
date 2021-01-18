<?php $base_url = 'http://localhost/habanafotomax/' ?>
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="crossorigin=""/>

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" crossorigin=""></script>

    <link rel="stylesheet" href="<?php echo $base_url ?>assets/app.css">

    <title>Habana FotoMax - Bienvenido</title>
  </head>
  <body class="<?php echo $page ?>">
    <header class="header">
      <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
          <a class="navbar-brand logo-text" href="<?php echo $base_url ?>">Habana <span>FotoMax</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse ps-0 ps-md-5" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link <?php if($page == 'home') echo 'active'?>" aria-current="page" href="<?php echo $base_url ?>">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Servicios
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="<?php echo $base_url ?>servicios/quinces.php">Quinces</a></li>
                  <li><a class="dropdown-item" href="<?php echo $base_url ?>servicios/bodas.php">Bodas</a></li>
                  <li><a class="dropdown-item" href="<?php echo $base_url ?>servicios/ninos.php">Niños</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo $base_url ?>quienes-somos.php">Quienes somos</a>
              </li>
            </ul>
            <div class="socials-icons">
              <a target="_blank" class="me-2" href="https://www.facebook.com/HabanaFotoMax"><i class="fab fa-facebook-f"></i></a>
              <a target="_blank" class="me-2" href="https://www.youtube.com/channel/UCXjj5kLO_V3l1BptMRjVlVw"><i class="fab fa-youtube"></i></a>
              <a target="_blank" href="https://wa.link/y4vjh0"><i class="fab fa-whatsapp"></i></a>
            </div>
          </div>
        </div>
      </nav>
    </header>