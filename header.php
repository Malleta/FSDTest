<!doctype <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <?php wp_head(); ?>
</head>
<body>
    
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#"><b style="font-size: 23px">FSD</b> <label style="font-size: 15px">TEST</label></a>
        <ul class="navbar-nav justify-content-end">
          <li class="nav-item">
            <button class="btn btn-sm btn-home">HOME</button>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">ABOUT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">SERVICES</a>
          </li>
          <li class="nav-item">
          <div class="dropdown">
            <button class="btn btn-sm btn-dropdown" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <!-- Pokazivac napraviti -->
            <i class="fas fa-angle-down"></i>    
                PORTFOLIO
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#"><i class="fas fa-angle-right"></i>Action</a>
                <a class="dropdown-item" href="#"><i class="fas fa-angle-right"></i>Another action</a>
                <a class="dropdown-item" href="#"><i class="fas fa-angle-right"></i>Something else here</a>
            </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">BLOG</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">FEATURES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">CONTANTS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-search"></i></a>
          </li>
        </ul>
        </div>
    </nav>

