<html>
  <head>
    <title>Homepage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/css/bootstrap.min.css">
    <script src="<?= BASEURL; ?>/js/bootstrap.min.js"></script>
    <style>
      * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
      }
      .hero {
        margin-top: 55px;
      }
    </style>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-top">
      <div class="container">
        <h1 class="navbar-brand p-0">A-Coffee</h1>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navResponsive">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navResponsive">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?= BASEURL; ?>/Home/index">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= BASEURL; ?>/Home/menu">Menu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- end navbar -->