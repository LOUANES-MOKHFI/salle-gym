<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        {{getSetting()->site_name}} |
        @yield('title')
    </title>

    <link href="designe/css/media_query.css" rel="stylesheet" type="text/css"/>
    <link href="designe/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="designe/css/animate.css" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link href="designe/css/owl.carousel.css" rel="stylesheet" type="text/css"/>
    <link href="designe/css/owl.theme.default.css" rel="stylesheet" type="text/css"/>
    <!-- Bootstrap CSS -->
    <link href="designe/css/style_1.css" rel="stylesheet" type="text/css"/>
    <!-- Modernizr JS -->
    <!-- Fonts -->
    <script src="designe/js/modernizr-3.5.0.min.js"></script>

    <!-- Styles -->
</head>
@yield('header')

<body>
<div id="app">
 <div class="container-fluid bg-faded fh5co_padd_mediya padding_786">
    <div class="container padding_786">

        <nav class="navbar navbar-toggleable-md navbar-light">
            <button class="navbar-toggler navbar-toggler-right mt-3 collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
            <a class="navbar-brand " href="{{url('/home')}}">
                <img src="{{url('/storage/'.getSetting()->logo)}}" alt="img" class="" style="max-width:100px; margin-top: -7px;"/><span>{{getSetting()->site_name}}</span></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/home')}}">Accueil <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{url('/about')}}">Qui Somme Nous <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton2" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">Service <span class="sr-only">(current)</span></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink_1">
                            <a class="dropdown-item" href="{{url('/planning')}}">Planning</a>
                            <a class="dropdown-item" href="{{url('/activities')}}">Nos Activités</a>
                        </div>
                    </li>
                   <li class="nav-item ">
                        <a class="nav-link" href="{{url('/gallerie')}}">Gallerie<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{url('/contact')}}">Contact Nous<span class="sr-only">(current)</span></a>
                    </li>
                    
                </ul>
            </div>
        </nav>
    </div>
</div>

@include('admin.layouts.flash_msg') 
            @yield('content')
 @if($_SERVER['REQUEST_URI'] =='/home' || $_SERVER['REQUEST_URI']=='/about' || $_SERVER['REQUEST_URI'] == '/activities')

<div class="container-fluid">
    <div class="container">
        <div class="row py-4">
            <div class="col-md-4 py-3">
                <div class="row fh5co_contact_us_no_icon_difh5co_hover">
                    <div class="col-9 align-self-center fh5co_contact_us_no_icon_difh5co_hover_2">

                        <h4><img class="imageinset" src="designe/icone/A.png"><strong>{{getSetting()->site_name}}</strong></h4>
                        <span class="d-block c_g fh5co_contact_us_no_text">{{getSetting()->A}}</span>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-4 py-3">
                <div class="row fh5co_contact_us_no_icon_difh5co_hover">
                    <div class="col-9 align-self-center fh5co_contact_us_no_icon_difh5co_hover_2">
                        <h4><img class="imageinset" src="designe/icone/B.png"><strong>Materiéls</strong></h4>
                        <span class="d-block c_g fh5co_contact_us_no_text">{{getSetting()->B}}</span>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-4 py-3">
                <div class="row fh5co_contact_us_no_icon_difh5co_hover">
                    <div class="col-9 align-self-center fh5co_contact_us_no_icon_difh5co_hover_2">
                        <h4><img class="imageinset" src="designe/icone/C.png"><strong>Activiés</strong></h4>
                        <span class="d-block c_g fh5co_contact_us_no_text">{{getSetting()->C}}</span>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
    </div>
@endif

 @if($_SERVER['REQUEST_URI'] =='/login' || $_SERVER['REQUEST_URI']=='/register' || $_SERVER['REQUEST_URI'] == '/password/reset')
@else
<div class="container-fluid fh5co_footer_bg pb-3">
    <div class="container animate-box">
        <div class="row">
            <div class="col-12 spdp_right py-5"></div>
            <div class="clearfix"></div>
            <div class="col-12 col-md-4 col-lg-3">
                <div class="footer_main_title py-3"> {{getSetting()->site_name}}</div>
                <div class="footer_sub_about pb-3"> {{getSetting()->slegon}}
                </div>
                
            </div>
            <div class="col-12 col-md-3 col-lg-4">
               <div class="footer3">
                    <h4>Contact</h4>
                    <div class="clear"></div>            
                    <p class="highlight"><span class="phone"> +213(0){{getSetting()->num_tlfn}}</span></p>
                    <p class="highlight"><span class="email bold"> <a href="{{getSetting()->email}}">{{getSetting()->email}}</a></span></p>
                    <p class="highlight"><span class="mail">{{ getSetting()->adress}}</span></p> 
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-5 ">
               <div class="">                
                    <h4>Contacte Nous</h4>
                    <div class="col-12 col-md-12">
              {!! Form::open(['url'=>'/contact', 'method'=>'POST', 'class="row"'])!!}
                    <div class="col-6 py-1">
                        <input type="text" class="form-control fh5co_contact_text_box" placeholder="Nom et Prenom" name="name" />
                    </div>
                     <div class="col-6 py-1">
                        <input type="text" class="form-control fh5co_contact_text_box" placeholder="Objet" name="subject" />
                    </div>
                    <div class="col-12 py-1">
                        <input type="text" class="form-control fh5co_contact_text_box" placeholder="E-mail" name="email" />
                    </div>
                    <div class="col-12 py-1">
                        <textarea class="form-control fh5co_contacts_message" placeholder="Message" name="message"></textarea>
                    </div>
                   <div class="col-12 py-3 text-center"><input type="submit" name="envoyer" class="btn btn-warning" value="Envoyer le Message"></div>
              {!! Form::close() !!}
            </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer>
    <div class="container-fluid fh5co_footer_right_reserved">
    <div class="container">
        <div class="row  ">
            <div class="col-12 col-md-6 py-4 Reserved"><strong>&copy; {{ date('Y')}} <a href="https://facebook.com/profile.php?id=100010541768871">{{getSetting()->page_fb}}</a> Tout les droit sont résérve.</strong>
            </div>
            <div class="col-12 col-md-6 spdp_right py-4">
                        <a class="footer_last_part_menu " href="{{url('/home')}}">Accueil <span class="sr-only">(current)</span></a>

                        <a class="footer_last_part_menu" href="{{url('/about')}}">Qui Somme Nous <span class="sr-only">(current)</span></a>
                        <a class="footer_last_part_menu" href="{{url('/contact')}}">Contact Nous<span class="sr-only">(current)</span></a>
                </div>
        </div>
    </div>
</div>
@endif
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="designe/js/owl.carousel.min.js"></script>
<!--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
<!-- Waypoints -->
<script src="designe/js/jquery.waypoints.min.js"></script>
<!-- Main -->
<script src="designe/js/main.js"></script>
  @yield('footer')
</html>
