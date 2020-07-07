<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- font awesome -->
        <script src="https://kit.fontawesome.com/d4bbca006e.js" crossorigin="anonymous"></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/styleWelcome.css') }}" rel="stylesheet">

    </head>

    <body>
        <header id="header">
            <div class="d-flex flex-column">

                <div class="profile">
                    <img src="{{ asset('img/senaIcon.png') }}" alt="" class="bg-light img-fluid rounded-circle">

                    <h1 class="text-light"><a href="/">SENA Antioquia </a></h1>
                    <div class="social-links mt-3 text-center">
                        <a href="#" class="twitter">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a href="#" class="facebook">
                            <i class="fa fa-facebook-official" aria-hidden="true"></i>
                        </a>
                        <a href="#" class="instagram">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                        <a href="#" class="linkedin">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>

                <nav class="nav-menu">
                    <ul>
                        <li class="active"><a href="/"><i class="text-light fa fa-home" aria-hidden="true">
                                </i><span>Inicio</span></a>
                        </li>
                        <li><a href="#about">
                                <i class="text-light fa fa-user" aria-hidden="true"></i>
                                <span>Nosotros</span></a>
                        </li>
                        <li><a href="#resume"><i class="text-light fa fa-database"
                                    aria-hidden="true"></i><span>Datos</span></a>
                        </li>
                        <!-- <li><a href="#portfolio"><i class="bx bx-book-content"></i> Portafolio </a></li>
                        <li><a href="#services"><i class="bx bx-server"></i> Servicios</a></li>
                        <li><a href="#contact"><i class="bx bx-envelope"></i> Contacto</a></li> -->
                        <button id="autorization" typide="button"
                            class="m-2 p-1 entraceButton btn btn-outline-dark btn-xl text-bold text-uppercase js-scroll-trigger"
                            data-toggle="modal" data-target="#check-autorization" data-whatever="@mdo"> Consultar
                            Autorizacion
                        </button>
                        <br>
                        <button onclick="getTimeAndHour()" id="entrace" typide="button"
                            class="m-2 p-1 entraceButton btn btn-outline-dark btn-xl text-bold text-uppercase js-scroll-trigger"
                            data-toggle="modal" data-target="#register-entrace" data-whatever="@mdo"> Registrar Entrada
                        </button>
                        <br>
                        <button onclick="getTimeAndHourExit()" id="exit" typide="button"
                            class="m-2 p-1  entraceButton btn btn-outline-dark  text-bold  js-scroll-trigger"
                            data-toggle="modal" data-target="#register-exit" data-whatever="@mdo"> Registrar Salida
                        </button>
                        <br>
                        <button id="uptadeData" typide="button"
                            class="m-2 p-1 entraceButton btn btn-outline-dark btn-xl text-bold text-uppercase js-scroll-trigger"
                            data-toggle="modal" data-target="#update-info" data-whatever="@mdo"> Actualizar Datos
                        </button>

                        <div class="d-flex">
                            @if (Route::has('login'))
                            <div class="m-2 p-1">
                                <div class="d-flex">
                                    <!-- <div class="d-flex container">

                                    </div> -->

                                    @auth
                                    <a href="{{ url('/home') }}">Home</a>
                                    @else
                                    <a class="m-1 btn btn-outline-dark p-2" href="{{ route('login') }}">Login</a>

                                    @if (Route::has('register'))
                                    <a class="m-1 btn btn-outline-dark p-2 mr-5"
                                        href="{{ route('register') }}">Register</a>
                                    @endif
                                    @endauth
                                    <button id="displayTogler" type="button" class="mobile-nav-toggle d-xl-none">

                                        <i class="text-dark icofont-navigation-menu fa fa-bars" aria-hidden="true"></i>
                                    </button>

                                </div>
                                @endif

                            </div>
                        </div>
                    </ul>
                </nav><!-- .nav-menu -->
                <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i>
                </button>

            </div>
            <!-- Login and Register -->

            <!--  -->
        </header><!-- End Header -->
        <div id="main">
            <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <h1 class="text-dark">Kratos</h1>
                <h2 class="text-dark">Complejo Sur <span class="typed"
                        data-typed-items="Usa tapabocas,Lava tus manos, Quedate en casa"></span></h2>
    
            </section><!-- End Hero -->
           
    
                <!-- ======= About Section ======= -->
                <section id="about" class="about">
                    <!-- <div class="container">
                    </div> -->
                </section><!-- End About Section -->
    
                <section id="facts" class="facts">
                    <div class="container">
            
                      <div class="section-title">
                        <h2>Algunos datos</h2>
                        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                          consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat
                          sit in iste officiis commodi quidem hic quas.</p>
                      </div>
            
                      <div class="row no-gutters">
            
                        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
                          <div class="count-box">
                            <i class="text-dark fa fa-users" aria-hidden="true"></i>
                            <span data-toggle="counter-up">232</span>
                            <p><strong>Aprendices</strong> </p>
                          </div>
                        </div>
            
                        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
                          <div class="count-box">
                            <i class="text-dark fas fa-user-shield"></i>
                            <span data-toggle="counter-up">521</span>
                            <p><strong>InstructoresS</strong> </p>
                          </div>
                        </div>
            
            
                        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="300">
                          <div class="count-box">
                            <i class="text-dark fas fa-user-tie"></i>
                            <span data-toggle="counter-up">115</span>
                            <p><strong>Colaboradores</strong> </p>
                          </div>
                        </div>
    
                        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">
                          <div class="count-box">
                            <i class="text-dark fas fa-temperature-low"></i>
                            <span data-toggle="counter-up">35.5</span>
                            <p><strong>Temperatura Promedio</strong> </p>
                          </div>
                        </div>
                      </div>
            
                    </div>
                  </section><!-- End Facts Section -->
                  <section id="skills" class="skills section-bg">
                    <div class="container">
            
                      <div class="section-title">
                        <h2>Estadisticas</h2>
                        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                          consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat
                          sit in iste officiis commodi quidem hic quas.</p>
                      </div>
            
                      <div class="row skills-content">
            
                        <div class="col-lg-6" data-aos="fade-up">
            
                          <div class="progress">
                            <span class="skill">HTML <i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                              <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                              </div>
                            </div>
                          </div>
            
                          <div class="progress">
                            <span class="skill">CSS <i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                              <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                              </div>
                            </div>
                          </div>
            
                          <div class="progress">
                            <span class="skill">JavaScript <i class="val">85%</i></span>
                            <div class="progress-bar-wrap">
                              <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                              </div>
                            </div>
                          </div>
            
                        </div>
            
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            
                          <div class="progress">
                            <span class="skill">PHP <i class="val">80%</i></span>
                            <div class="progress-bar-wrap">
                              <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                              </div>
                            </div>
                          </div>
            
                          <div class="progress">
                            <span class="skill">Node <i class="val">60%</i></span>
                            <div class="progress-bar-wrap">
                              <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                              </div>
                            </div>
                          </div>
            
                          <div class="progress">
                            <span class="skill">Bootstrap <i class="val">80%</i></span>
                            <div class="progress-bar-wrap">
                              <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                              </div>
                            </div>
                          </div>
            
                        </div>
            
                      </div>
            
                    </div>
                  </section><!-- End Skills Section --> 
                  <!-- @extends('layouts.form') -->
            </div>
            
    </body>

</html>
