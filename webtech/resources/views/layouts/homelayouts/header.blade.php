<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="images/icon" href="" />
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Web-Tech | Home</title>

    <!-- Custom fonts for this theme -->
    <link href="{{ url('assets/home/css/fontawesome/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="{{ url('assets/home/vendor/css/slick.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ url('assets/home/vendor/css/slick-theme.css')}}" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{ url('assets/home/vendor/css/animate.min.css')}}"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="{{ url('assets/home/css/style.css')}}" rel="stylesheet">
    <link href="{{ url('assets/home/css/responsive.css')}}" rel="stylesheet">
  </head>

  <style type="text/css">
    
    nav.navbar{
      position: absolute;
      width: -webkit-fill-available;
      z-index: 100;
      top: 0px;
      background: none;
      border: none;
    }

    .main-header{
      position: absolute;
      top: 150px;
      right: 0;
      left: 0;

    }
     #contact-info{
        padding-left: 15px;
        margin-top: 30px;
        margin-bottom: 30px;
      }

    p{
      font-family: 'Open Sans', sans-serif;
    }

  </style>
  <body class="inpage iosnpage">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark text-uppercase home-nav" id="navbar">
        <div class="container">
          <a class="navbar-brand p-0" href="{{url('/')}}"><img src="{{ url('assets/home/images/white-logo.png')}}" class="imglogo"></a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-expanded="false">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item mx-0 mx-lg-1 active">
                <a class="px-0 px-l-16" href="{{url('about-us')}}">About
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="px-0 px-l-16 pxl-16" href="{{url('services')}}">Services</a>
              </li>
              <li class="nav-item">
                <a class="px-0 px-l-16 pxl-16" href="{{url('itsourcing')}}">IT Outsourcing</a>
              </li>
              <li class="nav-item">
                <a class="px-0 px-l-16 pxl-16" href="{{url('portfolio')}}">Portfolio</a>
              </li>
              <li class="nav-item">
                <a class="px-0 px-l-16 pxl-16" href="{{url('blog')}}">Blog</a>
              </li>
              <li class="nav-item">
                <a class="px-0 px-l-16 pxl-16 mr-lg-3" href="{{url('contact-us')}}">Contact</a>
              </li>
              <li class="nav-item">
                <a class="px-0 px-lg-3" href="#">Get a Qoute</a>
              </li> 
            </ul>
          </div>
        </div>
      </nav>
