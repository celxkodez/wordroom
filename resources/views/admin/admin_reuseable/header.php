<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>WordRoom | <?php echo $pageTitle ?></title>
  <link rel="icon" href="/resources/assets/icons/logo.png">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
  integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
  crossorigin="anonymous">
 

  <link rel="stylesheet" href="/resources/assets/styles/style.css">
</head>
<body>


  <!-- HEADER AND  NAVBAR SECTIONS -->

<header>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-sm navbar-dark  mainbg">

            <a class="navbar-brand" href="#">
              <img class="logo" src="/resources/assets/icons/logo.png" alt=""> 
              <span class="brand-name">WordRoom</span>
            </a>

           

            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar top-bar"></span>
                <span class="icon-bar middle-bar"></span>
                <span class="icon-bar bottom-bar"></span>
                <span class="sr-only">Toggle navigation</span>
              </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ml-auto">
                <!-- <li class="nav-item <?php //echo ($pageTitle == 'Home' ) ? 'active' : ' ' ?> ">
                  <a class="nav-link" href="/">Post
                      <span class="sr-only">(current)</span>
                    </a>
                </li> -->
                <!-- // echo () ? 'visible' : 'hidden'  " -->
                <?php

                  if($userStatus['status'] ){
                    echo ' <li class="nav-item >
                    <a href="" class="logout">
                     <form action="" method="POST">
                       <input type="submit" name="logout"class="btn log-out" value="Logout">
                     </form>
                    </a>
 
                 </li>';
                  }
               
                ?>
                <!-- <li class="nav-item <?php //echo ($pageTitle == 'Audio-Messages' ) ? 'active' : ' ' ?> ">
                  <a class="nav-link" href="/audio-message">Audio-Messages</a>
                </li>
                <li class="nav-item <?php //echo ($pageTitle == 'Contact' ) ? 'active' : ' ' ?>">
                  <a class="nav-link" href="/contact">Contact</a>
                </li>
                <li class="nav-item <?php //echo ($pageTitle == 'About' ) ? 'active' : ' ' ?>">
                    <a class="nav-link" href="about">About</a>
                  </li> -->
              </ul>
            </div>
        </nav>
      </header>