<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>foodpedia - Numero Sada</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Free HTML Templates" name="keywords" />
    <meta content="Free HTML Templates" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap"
      rel="stylesheet"
    />

    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />

    <!-- Flaticon Font -->
    <link href="{{asset('/FrontEnd/lib/flaticon/font/flaticon.css')}}" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="{{asset('/FrontEnd/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{asset('/FrontEnd/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('/FrontEnd/css/style.css')}}" rel="stylesheet" />

  </head>

  <body>
    <!-- Navbar Start -->
    <div class="container-fluid bg-light position-relative shadow">
      <nav
        class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5"
      >
        <a
          href=""
          clasFs="navbar-brand font-weight-bold text-secondary"
          style="font-size: 45px"
        >
          <span class="text-primary">foodpedia
            <br><span style="color:black">Numero Sada</span>
        </a>
        <button
          type="button"
          class="navbar-toggler"
          data-toggle="collapse"
          data-target="#navbarCollapse"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-between"
          id="navbarCollapse"
        >
          <div class="navbar-nav font-weight-bold mx-auto py-0">
            <a href="{{ route('home') }}" class="nav-item nav-link ">Home</a>
            <a href="pesanan.html" class="nav-item nav-link">Daftar Pesanan</a>
            <a href="{{ route('reservasi') }}" class="nav-item nav-link">Reservasi</a>
             <div class="nav-item dropdown">
              <a
                href="#"
                class="nav-link dropdown-toggle"
                data-toggle="dropdown"
                >Menu</a
              >

              <div class="dropdown-menu rounded-0 m-0">
                @forelse ($kategori as $items)
                <a href="/makanan" class="dropdown-item">{{ $items->nama }}</a>
                @empty
                <a href="blog.html" class="dropdown-item">Not Found</a>
                @endforelse
              </div>
            </div>
            <a href="{{ route('about') }}" class="nav-item nav-link">About Us</a>
          </div>
          <a href="/dashboard" class="btn btn-primary px-6">Dashboard</a>
          <a href="/login" class="btn btn-primary px-3">Login</a>

        </div>
      </nav>
    </div>
    <!-- Navbar End -->

    <!-- Header Start -->
    <div class="container-fluid bg- px-0 px-md-5 mb-5">
      <div class="row align-items-center px-3">
        <div class="col-lg-6 text-center text-lg-left">
          <h1 class="display-3 font-weight-bold text-white">
            Kalo Mahal Jangan Balik Lagi
          </h1>
          <p class="text-white mb-4">
            ganteng/cantik sih, tapi sayang udah makan belum?
            <br> kalau belum mending singgah di Foodpedia.
          </p>
          <a href="" class="btn btn-secondary mt-1 py-3 px-5">Learn More</a>
        </div>
        <div class="col-lg-6 text-center text-lg-right">
          <img class="img-fluid mt-5" src="img/header.png" alt="" />
        </div>
      </div>
    </div>

