<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?= base_url('assets/public/favicon.ico') ?>">

	<!-- Favicon -->
	<link rel="icon" type="image/x-icon" href="<?= base_url('assets/public/myIcon.ico') ?>">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/c95be4caff.js"></script>

    <!-- Overide CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/style/frontstyle.css') ?>">
    <title><?= $title ?></title>

</head>

<body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="<?= site_url('') ?>">
                <img src="<?= base_url('assets/public/erg-logo-white.png') ?>" height="50"
                    class="d-inline-block align-top" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link text-uppercase font-weight-bold" href="<?= site_url('news') ?>">Berita</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>