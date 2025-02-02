<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      {{-- <meta name="viewport" content="width=device-width, initial-scale=1"> --}}
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <title>{{ config('app.name', 'Laravel') }}</title>

      <!-- Fonts -->
      <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,700;0,800;0,900;1,700;1,800;1,900&display=swap" rel="stylesheet">

      <!-- Scripts -->
      {{-- Bootstrap5 --}}
      @vite(['resources/js/app.js'])

      {{-- <link rel="icon" href="assets/images/fav.png" sizes="32x32" /> --}}
   </head>
   <body>
      <nav id="primary-navbar" class="primary-nav navbar navbar-expand-lg navbar-light bg-white fixed-top font-nunito">
         <div class="container px-4 px-sm-0">
            <a class="navbar-brand" href="{{ route('front.frontpage.index') }}">
               {{ config('app.name', 'jimezam') }}
            </a>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
               <ul class="navbar-nav ms-auto">
                  <li class="nav-itemx">
                     <a class="nav-link {{ (Route::currentRouteName() == "front.frontpage.index") ? "active" : "" }}" aria-current="page" href="{{ route('front.frontpage.index') }}">
                        Inicio
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link {{ (Route::currentRouteName() == 'front.frontpage.categories') ? "active" : "" }}" href="{{ route('front.frontpage.categories') }}">Categorías</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link {{ (Route::currentRouteName() == 'front.frontpage.about') ? "active" : "" }}" href="{{ route('front.frontpage.about') }}">Nosotros</a>
                  </li>
                  {{-- <li class="nav-item">
                     <a class="nav-link" href="#">Work</a>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                     Services
                     </a>
                     <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Branding</a></li>
                        <li><a class="dropdown-item" href="#">UI/UX</a></li>
                        <li><a class="dropdown-item" href="#">Hybrid Apps</a></li>
                        <li><a class="dropdown-item" href="#">Digital Marketing</a></li>
                        <li><a class="dropdown-item" href="#">Growth Hacking</a></li>
                     </ul>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">Contact</a>
                  </li> --}}
               </ul>
            </div>
            <button id="open-sidenav" class="open-sidenav bg-transparent border-0 ms-2">
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#2c333a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
                  <line x1="3" y1="12" x2="21" y2="12"></line>
                  <line x1="3" y1="6" x2="21" y2="6"></line>
                  <line x1="3" y1="18" x2="21" y2="18"></line>
               </svg>
            </button>
         </div>
      </nav>
      <!-- Off Canvas Menu Start-->
      <div id="sidenav-wrap">
         <span class="sidenav-backdrop"></span>
         <div id="sidenav" class="sidenav font-nunito bg-dark px-4">
            <a href="#" id="close-sidenav" class="close-sidenav text-decoration-none text-white">&times;</a>
            <div class="sidenav-logo mt-5 pt-5">
               <a class="" href="#"><img src="assets/images/logo-white.png"></a>
            </div>
            <div class="sidenav-menu mt-5">
               <ul class="nav flex-column">
                  <li class="nav-item">
                     <a class="nav-link px-0 active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link px-0" href="#">About</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link px-0" href="#">Work</a>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link px-0 dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Services</a>
                     <ul class="dropdown-menu border-0">
                        <li><a class="dropdown-item" href="#">Branding</a></li>
                        <li><a class="dropdown-item" href="#">UI/UX</a></li>
                        <li><a class="dropdown-item" href="#">Hybrid Apps</a></li>
                        <li><a class="dropdown-item" href="#">Digital Marketing</a></li>
                        <li><a class="dropdown-item" href="#">Growth Hacking</a></li>
                     </ul>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link px-0" href="#">Contact</a>
                  </li>
               </ul>
            </div>
            <div class="sidenav-social mt-5">
               <ul class="list-unstyled">
                  <li class="inline-block me-2"><a href="#" class="text-white"><img src="assets/images/twitter.svg"></a></li>
                  <li class="inline-block me-2"><a href="#" class="text-white"><img src="assets/images/instagram.svg"></a></li>
                  <li class="inline-block me-2"><a href="#" class="text-white"><img src="assets/images/linkedin.svg"></a></li>
                  <li class="inline-block me-2"><a href="#" class="text-white"><img src="assets/images/youtube.svg"></a></li>
                  <li class="inline-block me-2"><a href="#" class="text-white"><img src="assets/images/dribbble.svg"></a></li>
                  <li class="inline-block"><a href="#" class="text-white"><img src="assets/images/github.svg"></a></li>
               </ul>
            </div>
         </div>
      </div>
      <!-- Off Canvas Menu End-->
      
      <section class="hero bg-white" style="margin-bottom: 90px">
         <div id="contents" class="container">
            {{ $slot }}
         </div>
      </section>


      {{-- <!-- Hero Section Start-->
      <section class="hero bg-white">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-md-12 col-lg-6 order-2 order-lg-1  mt-4 mt-lg-0 pt-4 pt-lg-0 ">
                  <div class="hero-content pe-md-0 pe-lg-5">
                     <span class="pre-title text-dark small fw-bold inline-block position-relative text-uppercase">Hi, We're Pika</span>
                     <h1 class="hero-title text-dark mt-3">We Design <br class="d-none d-lg-block">User Interface that works.</h1>
                     <p class="hero-text mt-3 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consequat enim sem, id tempor ipsum tincidunt quis. Phasellus tellus ligula, mollis ut justo ut maximus.</p>
                     <a href="#" class="btn btn-warning shadow-sm mt-4 fw-bold">Get Started!</a>
                  </div>
               </div>
               <div class="col-md-12 col-lg-6 order-1 order-lg-2">
                  <div class="hero-image wings position-relative mx-3 mx-md-4 ms-lg-5">
                     <img class="rounded img-fluid w-100 position-relative" src="assets/images/hero.jpg">
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Hero Section End-->
      <!-- Portfolio Section Start-->
      <section class="portfolio bg-white">
         <div class="container-fluid">
            <div class="row">
               <div class="col">
                  <div class="section-head text-center mx-auto narrow">
                     <span class="pre-title small position-relative fw-bold text-dark text-uppercase">Work</span>
                     <h2 class="section-title text-dark mt-3">Browse our creative portfolio</h2>
                     <p class="section-subtitle mt-3 mb-0">Proin consectetur euismod blandit. Praesent blandit ut neque at tempus. Cras in dui vel diam tempor commodo. Aliquam vel diam vel nunc sollicitudin malesuada in a sem. </p>
                  </div>
               </div>
            </div>
            <div class="row mt-5">
               <!-- Portfolio Item Start-->
               <div class="col-12 col-sm-6 col-md-6 col-lg-3 px-0">
                  <div class="portfolio-item position-relative overflow-hidden">
                     <img class="portfolio-item-img img-fluid w-100" src="assets/images/portfolio-1.jpg">
                     <div class="portfolio-item-content position-absolute rounded text-center">
                        <div class="position-absolute top-50 start-50 translate-middle">
                           <h3 class="project-title text-white">News Portal</h3>
                           <span class="project-type text-uppercase text-white small">UI</span>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Portfolio Item End-->
               <!-- Portfolio Item Start-->
               <div class="col-12 col-sm-6 col-md-6 col-lg-3 px-0">
                  <div class="portfolio-item position-relative overflow-hidden">
                     <img class="portfolio-item-img img-fluid w-100" src="assets/images/portfolio-2.jpg">
                     <div class="portfolio-item-content position-absolute rounded text-center">
                        <div class="position-absolute top-50 start-50 translate-middle">
                           <h3 class="project-title text-white">Mockup Design</h3>
                           <span class="project-type text-uppercase text-white small">Branding</span>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Portfolio Item End-->
               <!-- Portfolio Item Start-->
               <div class="col-12 col-sm-6 col-md-6 col-lg-3 px-0">
                  <div class="portfolio-item position-relative overflow-hidden">
                     <img class="portfolio-item-img img-fluid w-100" src="assets/images/portfolio-3.jpg">
                     <div class="portfolio-item-content position-absolute rounded text-center">
                        <div class="position-absolute top-50 start-50 translate-middle">
                           <h3 class="project-title text-white">News Portal</h3>
                           <span class="project-type text-uppercase text-white small">App Design</span>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Portfolio Item End-->
               <!-- Portfolio Item Start-->
               <div class="col-12 col-sm-6 col-md-6 col-lg-3 px-0">
                  <div class="portfolio-item position-relative overflow-hidden">
                     <img class="portfolio-item-img img-fluid w-100" src="assets/images/portfolio-4.jpg">
                     <div class="portfolio-item-content position-absolute rounded text-center">
                        <div class="position-absolute top-50 start-50 translate-middle">
                           <h3 class="project-title text-white">News Portal</h3>
                           <span class="project-type text-uppercase text-white small">App Design</span>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Portfolio Item End-->
               <!-- Portfolio Item End-->
               <!-- Portfolio Item Start-->
               <div class="col-12 col-sm-6 col-md-6 col-lg-3 px-0">
                  <div class="portfolio-item position-relative overflow-hidden">
                     <img class="portfolio-item-img img-fluid w-100" src="assets/images/portfolio-5.jpg">
                     <div class="portfolio-item-content position-absolute rounded text-center">
                        <div class="position-absolute top-50 start-50 translate-middle">
                           <h3 class="project-title text-white">News Portal</h3>
                           <span class="project-type text-uppercase text-white small">App Design</span>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Portfolio Item End-->
               <!-- Portfolio Item Start-->
               <div class="col-12 col-sm-6 col-md-6 col-lg-3 px-0">
                  <div class="portfolio-item position-relative overflow-hidden">
                     <img class="portfolio-item-img img-fluid w-100" src="assets/images/portfolio-6.jpg">
                     <div class="portfolio-item-content position-absolute rounded text-center">
                        <div class="position-absolute top-50 start-50 translate-middle">
                           <h3 class="project-title text-white">News Portal</h3>
                           <span class="project-type text-uppercase text-white small">App Design</span>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Portfolio Item End-->
               <!-- Portfolio Item Start-->
               <div class="col-12 col-sm-6 col-md-6 col-lg-3 px-0">
                  <div class="portfolio-item position-relative overflow-hidden">
                     <img class="portfolio-item-img img-fluid w-100" src="assets/images/portfolio-7.jpg">
                     <div class="portfolio-item-content position-absolute rounded text-center">
                        <div class="position-absolute top-50 start-50 translate-middle">
                           <h3 class="project-title text-white">News Portal</h3>
                           <span class="project-type text-uppercase text-white small">App Design</span>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Portfolio Item Start-->
               <div class="col-12 col-sm-6 col-md-6 col-lg-3 px-0">
                  <div class="portfolio-item position-relative overflow-hidden">
                     <img class="portfolio-item-img img-fluid w-100" src="assets/images/portfolio-8.jpg">
                     <div class="portfolio-item-content position-absolute rounded text-center">
                        <div class="position-absolute top-50 start-50 translate-middle">
                           <h3 class="project-title text-white">News Portal</h3>
                           <span class="project-type text-uppercase text-white small">App Design</span>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Portfolio Item End-->
            </div>
         </div>
      </section>
      <!-- Portfolio Section End-->
      <!-- Services Start-->
      <section class="services section bg-white">
         <div class="container">
            <div class="row">
               <div class="col">
                  <div class="section-head text-center mx-auto narrow">
                     <span class="pre-title small position-relative fw-bold text-dark text-uppercase">Services</span>
                     <h2 class="section-title text-dark mt-3">What We Do</h2>
                     <p class="section-subtitle mt-3 mb-0">Proin consectetur euismod blandit. Praesent blandit ut neque at tempus. Cras in dui vel diam tempor commodo. Aliquam vel diam vel nunc sollicitudin malesuada in a sem. </p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-12 col-md-6 col-lg-3">
                  <div class="service-box text-center mt-5">
                     <img class="service-box-icon" src="assets/images/branding.svg">
                     <h3 class="service-box-title text-dark mt-4 text-uppercase">Design</h3>
                     <p class="service-box-text mt-3 mb-0">Duis vulputate neque sed justo varius, vel lobortis sed lacus.</p>
                  </div>
               </div>
               <div class="col-12 col-md-6 col-lg-3">
                  <div class="service-box text-center mt-5">
                     <img class="service-box-icon" src="assets/images/dev.svg">
                     <h3 class="service-box-title text-dark mt-4 text-uppercase">Development</h3>
                     <p class="service-box-text mt-3 mb-0">Duis vulputate neque sed justo varius, vel lobortis sed lacus.</p>
                  </div>
               </div>
               <div class="col-12 col-md-6 col-lg-3">
                  <div class="service-box text-center mt-5">
                     <img class="service-box-icon" src="assets/images/marketing.svg">
                     <h3 class="service-box-title text-dark mt-4 text-uppercase">Marketing</h3>
                     <p class="service-box-text mt-3 mb-0">Duis vulputate neque sed justo varius, vel lobortis sed lacus.</p>
                  </div>
               </div>
               <div class="col-12 col-md-6 col-lg-3">
                  <div class="service-box text-center mt-5">
                     <img class="service-box-icon" src="assets/images/scale.svg">
                     <h3 class="service-box-title text-dark  mt-4 text-uppercase">Scale</h3>
                     <p class="service-box-text mt-3 mb-0">Duis vulputate neque sed justo varius, vel lobortis sed lacus.</p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Services End-->
      <!-- content Section Start-->
      <section class="content-box section section-bg position-relative">
         <img class="down-arrow-img position-absolute top-0 d-none d-lg-block" src="assets/images/section-arrow.svg">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-12 col-lg-6">
                  <div class="content-box-text pe-0 pe-md-5">
                     <span class="pre-title text-dark small position-relative fw-bold text-uppercase">Process</span>
                     <h2 class="content-box-title text-dark section-title mt-3 mb-4">We build brands like nobody does</h2>
                     <p>Proin vehicula in arcu ac tincidunt. Nunc scelerisque finibus consectetur. Sed molestie malesuada ante. Ut sollicitudin congue porta. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                     <p>Vivamus rhoncus sagittis fringilla. Aliquam tellus purus, bibendum quis lacus id, ullamcorper condimentum sem.</p>
                     <a href="#" class="btn btn-warning mt-4 d-inline-block fw-bold shadow-sm">Discover More</a>
                  </div>
               </div>
               <div class="col-12 col-lg-6">
                  <div class="wings position-relative mt-5 mt-lg-0">
                     <div class="video-box ratio ratio-16x9 shadow-lg ps-0 ps-md-5 position-relative">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/FpAM4fYj-4g" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- content Section Start-->
      <!-- Skills Start-->
      <section class="skills section bg-white">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-12 col-lg-6">
                  <div class="skills-img me-0 me-lg-5">
                     <img src="assets/images/skills.jpg" class="img-fluid rounded shadow-sm">
                     <div class="mt-3 clearfix">
                        <div class="w-50 float-start pe-2">
                           <img src="assets/images/skills-2.jpg" class="img-fluid rounded shadow-sm">
                        </div>
                        <div class="w-50 float-end ps-2">
                           <img src="assets/images/skills-3.jpg" class="img-fluid rounded shadow-sm">
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-lg-6">
                  <div class="section-head mt-5 mt-lg-0">
                     <span class="pre-title small position-relative fw-bold text-dark text-uppercase">Skills</span>
                     <h2 class="section-title text-dark mt-3">Our Super powers</h2>
                     <p class="section-subtitle mt-3">Proin consectetur euismod blandit. Praesent blandit ut neque at tempus. Cras in dui vel diam tempor commodo. Aliquam vel diam vel nunc sollicitudin malesuada in a sem. </p>
                     <ul class="check-list list-unstyled mb-0">
                        <li>Praesent blandit ut neque at tempus.</li>
                        <li>Proin consectetur euismod blandit.</li>
                        <li>Aliquam vel diam vel nunc sollicitudin.</li>
                        <li>Cras in dui vel diam tempor commodo.</li>
                     </ul>
                  </div>
                  <div class="skills-content mt-2 me-0 me-md-5">
                     <div class="row">
                        <div class="col-12">
                           <div class="mt-4">
                              <div class="clearfix">
                                 <span class="d-block w-50 float-start fw-bold small">Design</span>
                                 <span class="d-block w-50 float-end fw-bold small text-end">95%</span>
                              </div>
                              <div class="progress mt-2">
                                 <div class="progress-bar bg-warning text-dark" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                           </div>
                           <div class="mt-4">
                              <div class="clearfix">
                                 <span class="d-block w-50 float-start fw-bold small">Development</span>
                                 <span class="d-block w-50 float-end fw-bold small text-end">90%</span>
                              </div>
                              <div class="progress mt-2">
                                 <div class="progress-bar bg-warning text-dark" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                           </div>
                           <div class="mt-4">
                              <div class="clearfix">
                                 <span class="d-block w-50 float-start fw-bold small">Marketing</span>
                                 <span class="d-block w-50 float-end fw-bold small text-end">93%</span>
                              </div>
                              <div class="progress mt-2">
                                 <div class="progress-bar bg-warning text-dark" role="progressbar" style="width: 93%" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Skills End-->
      <!-- Testimonials Start-->
      <section class="testimonials section bg-dark">
         <div class="container">
            <div class="row">
               <div class="col">
                  <div class="section-head text-center mx-auto narrow">
                     <span class="pre-title small position-relative fw-bold text-white text-uppercase">Testimonials</span>
                     <h2 class="section-title text-white mt-3">See what our clients are saying</h2>
                     <p class="section-subtitle mt-3 text-muted mb-0">Proin consectetur euismod blandit. Praesent blandit ut neque at tempus. Cras in dui vel diam tempor commodo. Aliquam vel diam vel nunc sollicitudin malesuada in a sem. </p>
                  </div>
               </div>
            </div>
         </div>
         <div class="container mt-3 mt-md-5">
            <div class="row">
               <div class="col px-0">
                  <!-- Slider Start-->
                  <div class="splide">
                     <div class="splide__track">
                        <div class="splide__list">
                           <div class="splide__slide">
                              <div class="testimonial text-center p-3 p-md-5 rounded shadow-sm">
                                 <img class="testimonial-img rounded-circle" src="assets/images/testimonial-1.jpg">
                                 <h4 class="testimonial-name text-white fs-5 fw-bold mt-3">Bhola Baker</h4>
                                 <p class="testimonial-text text-muted fs-6 fst-italic mt-2 mb-0">&ldquo; Proin consectetur euismod blandit. Praesent blandit ut neque at tempus. Cras in dui vel diam tempor commodo. Aliquam vel diam vel nunc sollicitudin malesuada in a sem.&rdquo;</p>
                              </div>
                           </div>
                           <div class="splide__slide">
                              <div class="testimonial text-center p-3 p-md-5 rounded shadow-sm">
                                 <img class="testimonial-img rounded-circle" src="assets/images/testimonial-2.jpg">
                                 <h4 class="testimonial-name text-white fs-5 fw-bold mt-3">Amro Abney</h4>
                                 <p class="testimonial-text text-muted fst-italic mt-2 mb-0">&ldquo; Proin consectetur euismod blandit. Praesent blandit ut neque at tempus. Cras in dui vel diam tempor commodo. Aliquam vel diam vel nunc sollicitudin malesuada in a sem.&rdquo;</p>
                              </div>
                           </div>
                           <div class="splide__slide">
                              <div class="testimonial text-center p-3 p-md-5 rounded shadow-sm">
                                 <img class="testimonial-img rounded-circle" src="assets/images/testimonial-3.jpg">
                                 <h4 class="testimonial-name text-white fs-5 fw-bold mt-3">Magh Mackin</h4>
                                 <p class="testimonial-text text-muted fst-italic mt-2 mb-0">&ldquo; Proin consectetur euismod blandit. Praesent blandit ut neque at tempus. Cras in dui vel diam tempor commodo. Aliquam vel diam vel nunc sollicitudin malesuada in a sem.&rdquo;</p>
                              </div>
                           </div>
                           <div class="splide__slide">
                              <div class="testimonial text-center p-3 p-md-5 rounded shadow-sm">
                                 <img class="testimonial-img rounded-circle" src="assets/images/testimonial-2.jpg">
                                 <h4 class="testimonial-name text-white fs-5 fw-bold mt-3">Amro Abney</h4>
                                 <p class="testimonial-text text-muted fst-italic mt-2 mb-0">&ldquo; Proin consectetur euismod blandit. Praesent blandit ut neque at tempus. Cras in dui vel diam tempor commodo. Aliquam vel diam vel nunc sollicitudin malesuada in a sem.&rdquo;</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!--Slider End-->
               </div>
            </div>
         </div>
      </section>
      <!-- Testimonials End-->
      <!-- Team Start-->
      <section class="team section section-bg">
         <div class="container">
            <div class="row">
               <div class="col">
                  <div class="section-head text-center mx-auto narrow">
                     <span class="pre-title small position-relative fw-bold text-dark text-uppercase">Team</span>
                     <h2 class="section-title text-dark mt-3">Meet Our Core Team Members</h2>
                     <p class="section-subtitle mt-3 mb-0">Proin consectetur euismod blandit. Praesent blandit ut neque at tempus. Cras in dui vel diam tempor commodo. Aliquam vel diam vel nunc sollicitudin malesuada in a sem. </p>
                  </div>
               </div>
            </div>
            <div class="row gx-3">
               <!-- Team Member-->
               <div class="col-6 col-md-6 col-lg-3">
                  <div class="team-member mt-3 mt-md-5">
                     <div class="card border-0 shadow-sm">
                        <img src="assets/images/team-1.jpg" class="card-img-top rounded">
                        <div class="card-body py-4 text-center">
                           <h5 class="card-title fs-6 fw-bold text-uppercase">Jagga Jones</h5>
                           <h6 class="card-subtitle mb-0 text-muted small">CEO</h6>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Team Member-->
               <!-- Team Member-->
               <div class="col-6 col-md-6 col-lg-3">
                  <div class="team-member mt-3 mt-md-5">
                     <div class="card border-0 shadow-sm">
                        <img src="assets/images/team-2.jpg" class="card-img-top rounded">
                        <div class="card-body py-4 text-center">
                           <h5 class="card-title fs-6 fw-bold text-uppercase">Preeto Powell</h5>
                           <h6 class="card-subtitle mb-0 text-muted small">CTO</h6>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Team Member-->
               <!-- Team Member-->
               <div class="col-6 col-md-6 col-lg-3">
                  <div class="team-member mt-3 mt-md-5">
                     <div class="card border-0 shadow-sm">
                        <img src="assets/images/team-3.jpg" class="card-img-top rounded">
                        <div class="card-body py-4 text-center">
                           <h5 class="card-title fs-6 fw-bold text-uppercase">Sohan Simpson</h5>
                           <h6 class="card-subtitle mb-0 text-muted small">COO</h6>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Team Member-->
               <!-- Team Member-->
               <div class="col-6 col-md-6 col-lg-3">
                  <div class="team-member mt-3 mt-md-5">
                     <div class="card border-0 shadow-sm">
                        <img src="assets/images/team-4.jpg" class="card-img-top rounded">
                        <div class="card-body py-4 text-center">
                           <h5 class="card-title fs-6 fw-bold text-uppercase">Geeta Griffin</h5>
                           <h6 class="card-subtitle mb-0 text-muted small">Creative Director</h6>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Team Member-->
            </div>
         </div>
      </section>
      <!-- Team End-->
      <!--STats Box-->
      <section class="stats section">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-12 col-lg-6">
                  <div class="stats-box-text">
                     <span class="pre-title small position-relative fw-bold text-dark text-uppercase">Stats</span>
                     <h2 class="stats-box-title section-title text-dark mt-3 mb-4">Amazing Numbers Speaks Our Truth</h2>
                     <p>Proin vehicula in arcu ac tincidunt. Nunc scelerisque finibus consectetur. Sed molestie malesuada ante. Ut sollicitudin congue porta. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                     <p>Vivamus rhoncus sagittis fringilla. Nam at vehicula augue. Ut fringilla laoreet molestie. Duis sodales tortor et diam gravida, sit amet interdum tortor dapibus. Nam facilisis sollicitudin leo volutpat aliquam.</p>
                  </div>
               </div>
               <div class="col-12 col-lg-6">
                  <div class="stats-wrap text-center ps-0 ps-lg-5">
                     <div class="row gx-3">
                        <div class="col-6 col-lg-6">
                           <div class="stats-box bg-white mt-3 px-4 py-4 py-md-5">
                              <img class="stats-icon" src="assets/images/years.svg">
                              <h4 class="stats-title mt-3">10 years</h4>
                              <p class="stats-text text-muted mb-0 small">in Business</p>
                           </div>
                        </div>
                        <div class="col-6 col-lg-6">
                           <div class="stats-box bg-white mt-3 px-4 py-4 py-md-5">
                              <img class="stats-icon" src="assets/images/clients.svg">
                              <h4 class="stats-title mt-3">200+</h4>
                              <p class="stats-text text-muted mb-0 small">Clients</p>
                           </div>
                        </div>
                        <div class="col-6 col-lg-6">
                           <div class="stats-box bg-white mt-3 px-4 py-4 py-md-5">
                              <img class="stats-icon" src="assets/images/projects.svg">
                              <h4 class="stats-title mt-3">300+</h4>
                              <p class="stats-text text-muted mb-0 small">Projects</p>
                           </div>
                        </div>
                        <div class="col-6 col-lg-6">
                           <div class="stats-box bg-white mt-3 px-4 py-4 py-md-5">
                              <img class="stats-icon" src="assets/images/revenue.svg">
                              <h4 class="stats-title mt-3">2M</h4>
                              <p class="stats-text mb-0 small">Revenue</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--STats Box-->
      <!-- Blog Start-->
      <section class="blog-posts section section-bg">
         <div class="container">
            <div class="row">
               <div class="col">
                  <div class="section-head text-center mx-auto narrow">
                     <span class="pre-title small position-relative fw-bold text-dark text-uppercase">Blog</span>
                     <h2 class="section-title text-dark mt-3">Read latest stories from our blog</h2>
                     <p class="section-subtitle mt-3 mb-0">Proin consectetur euismod blandit. Praesent blandit ut neque at tempus. Cras in dui vel diam tempor commodo. Aliquam vel diam vel nunc sollicitudin malesuada in a sem. </p>
                  </div>
               </div>
            </div>
            <div class="row">
               <!-- Blog Post Start-->
               <div class="col-12 col-md-6 col-lg-4">
                  <div class="blog-post bg-white rounded-3 shadow-sm overflow-hidden mt-4 mt-md-5">
                     <img src="assets/images/blog-1.jpg" class="blog-thumb img-fluid w-100">
                     <div class="blog-post-body p-4">
                        <div class="blog-post-meta clearfix">
                           <a href="#" class="blog-post-tag text-warning fw-bold text-decoration-none me-4 small">Business</a>
                        </div>
                        <h3 class="blog-post-title mt-2 mb-0"><a href="#" class="text-dark">How to find a brandable domain name for your business?</a></h3>
                        <span class="post-date text-muted d-inline-block mt-2 small">24 mins. ago</span>
                     </div>
                  </div>
               </div>
               <!-- Blog Post End-->
               <!-- Blog Post Start-->
               <div class="col-12 col-md-6 col-lg-4">
                  <div class="blog-post bg-white rounded-3 shadow-sm overflow-hidden mt-4 mt-md-5">
                     <img src="assets/images/blog-2.jpg" class="blog-thumb img-fluid w-100">
                     <div class="blog-post-body p-4">
                        <div class="blog-post-meta clearfix">
                           <a href="#" class="blog-post-tag text-warning fw-bold text-decoration-none me-4 small">Marketing</a>
                        </div>
                        <h3 class="blog-post-title mt-2 mb-0"><a href="#" class="text-dark">10 best PPC campaign planning tools for paid marketing experts</a></h3>
                        <span class="post-date text-muted d-inline-block mt-2 small">5 hrs. ago</span>
                     </div>
                  </div>
               </div>
               <!-- Blog Post End-->
               <!-- Blog Post Start-->
               <div class="col-12 col-md-6 col-lg-4">
                  <div class="blog-post bg-white rounded-3 shadow-sm overflow-hidden mt-4 mt-md-5">
                     <img src="assets/images/blog-3.jpg" class="blog-thumb img-fluid w-100">
                     <div class="blog-post-body p-4">
                        <div class="blog-post-meta clearfix">
                           <a href="#" class="blog-post-tag text-warning fw-bold text-decoration-none me-4 small">Productivity</a>
                        </div>
                        <h3 class="blog-post-title mt-2 mb-0"><a href="#" class="text-dark">Top 10 tips to increase focus and  productivity at work</a></h3>
                        <span class="post-date text-muted d-inline-block mt-2 small">1 day ago</span>
                     </div>
                  </div>
               </div>
               <!-- Blog Post End-->
            </div>
         </div>
      </section>
      <section class="cta section bg-dark position-relative pb-5">
         <svg class="cta-img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#ffc107" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
         </svg>
         <div class="container">
            <div class="row">
               <div class="col-12 col-md-7">
                  <div class="cta-content">
                     <h3 class="cta-title text-white">Get in Touch with Us</h3>
                     <p class="cta-text text-muted mt-3">Vnterdum et malesuada fames ac ante ipsum primis in faucibus. Duis blandit massa a metus sodales, non aliquam lacus pretium.</p>
                     <a href="#" class="btn btn-warning mt-4 fw-bold">Say hi!</a>
                  </div>
               </div>
            </div>
         </div>
      </section> --}}










      <!--Footer Start-->
      <footer class="footer fixed-bottom bg-dark text-muted pt-0 pt-lg-0">
         <div class="container">
            {{-- <div class="row">
               <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                  Hola
               </div>
            </div> --}}

            {{-- <div class="row">
               <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                  <div class="footer-col mt-5 pe-4">
                     <img src="assets/images/logo-white.png" class="footer-logo mb-4">
                     <p class="mb-0">Pellentesque sed elementum erat. Proin ut purus viverra, porttitor sem id, finibus ante. Vestibulum ullamcorper convallis magna. Integer bibendum ante felis, non laoreet enim molestie ac. </p>
                  </div>
               </div>
               <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                  <div class="footer-col mt-5">
                     <h3 class="footer-title text-white mb-4">Services</h3>
                     <ul class="list-unstyled mb-0">
                        <li class="mb-2"><a href="#">Design</a></li>
                        <li class="mb-2"><a href="#">Development</a></li>
                        <li class="mb-2"><a href="#">Marketing</a></li>
                        <li class="mb-0"><a href="#">Growth Hacking</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                  <div class="footer-col mt-5">
                     <h3 class="footer-title text-white mb-4">Company</h3>
                     <ul class="list-unstyled mb-0">
                        <li class="mb-2"><a href="#">About</a></li>
                        <li class="mb-2"><a href="#">Team</a></li>
                        <li class="mb-2"><a href="#">Career</a></li>
                        <li class="mb-0"><a href="#">Contact</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                  <div class="footer-col footer-contact mt-5">
                     <h3 class="footer-title text-white mb-4">Contact us</h3>
                     <div class="mb-3"><img class="me-2" src="assets/images/map-pin.svg"><span>2132  Berry Street, Pueblo,  Colorado</span></div>
                     <div class="mb-3"><img class="me-2" src="assets/images/mail.svg"><span>719-240-7593</span></div>
                     <div><img class="me-2" src="assets/images/phone.svg"><span> contact@example.com</span></div>
                  </div>
               </div>
            </div> --}}

            {{-- mt-5 --}}
            <div class="row footer-credits text-center  py-3">
               <div class="col-12 col-md-11">
                  <div class="footer-copy float-md-none float-lg-start">
                     <p class="mb-0 small">
                        Creado por el <a href="#" class="text-decoration-none">Semillero de Desarrollo Web y Móvil</a> 
                        del programa de <a href="https://www.autonoma.edu.co/oferta-academica/pregrado/ingenieria-de-sistemas" class="text-decoration-none">Ingeniería de Sistemas</a> 
                        de la <a href="https://www.autonoma.edu.co/" class="text-decoration-none">Universidad Autónoma de Manizales</a> &copy {{ date("Y") }}
                     </p>
                  </div>
               </div>
               <div class="col-12 col-md-1">
                  <div class="footer-social clearfix">
                     <ul class="list-unstyled mb-0 float-md-none float-lg-end">
                        <li class="d-inline-block me-2"><a href="https://github.com/creadores-software"><img src="{{ asset('storage/theme/images/github.svg') }}"></a></li>
                        <li class="d-inline-block"><a href="https://www.facebook.com/IngenieriaDeSistemasUAM"><img src="{{ asset('storage/theme/images/facebook.svg') }}"></a></li>
                     </ul>
                  </div>
               </div>
            </div>

            
         </div>
      </footer>
      <!--Footer End-->
   </body>
</html>