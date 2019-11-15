<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/c95be4caff.js"></script>
    
    <!-- Overide CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/style/frontstyle.css') ?>">
    <title><?= $title ?></title>

  </head>
  <body>
    <!-- Navbar -->
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light color-light">
            <nav class="navbar navbar-light ">
                <a class="navbar-brand" href="#">
                    <img src="<?php echo base_url('assets/public/erg-logo.png') ?>" height="70" alt="erg-logo.png" class="image-fluid">
                </a>
            </nav>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
             <ul class="navbar-nav mr-auto">
               <!-- <li class="nav-item">
                    <a class="nav-link" href="<?php// echo base_url('/') ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php// echo base_url('news') ?>">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php //echo base_url('products') ?>">Products</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Download
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="<?php //echo base_url('assets/download/daftar.doc') ?>"  download="Form-Daftar-ERG">Registration Form</a>
                    </div>
                </li>-->
            </ul> 
            <span class="navbar-text nav-item">
                    <a class="nav-link" href="<?php echo base_url('assets/download/daftar.doc') ?>" download="Form-Daftar-ERG-2019">
                    Download Form Registrasi
                    </a>
            </span>
        </div>
        </nav>
    </div>
