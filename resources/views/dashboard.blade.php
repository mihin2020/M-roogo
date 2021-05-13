<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="owl.carousel/assets/owl.theme.default.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/form.css">

    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/bootstrap/bootstrap-icons-1.4.1/fonts/bootstrap-icons.woff">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">

    <title>Bailleur</title>
</head>

 <body>
    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <a href="#" class="text-white font-weight-bolder"><span class="mr-2  icon-phone"></span> <span class="d-none d-md-inline-block">+226 61 77 15 56</span></a>
                    <span class="mx-md-2 d-inline-block"></span>
                    <a href="#" class="text-white font-weight-bolder"><span class="mr-2  icon-envelope-open-o"></span> <span class="d-none d-md-inline-block">M'roogo@gmail.com</span></a>
                    <div class="float-right mr-3">
                        <a href="#" class="text-white font-weight-bolder"><span class="mr-2  icon-facebook"></span> <span class="d-none d-md-inline-block">Facebook</span></a>
                        <span class="mx-md-2 d-inline-block"></span>
                        <a href="#" class="text-white font-weight-bolder"><span class="mr-2  icon-linkedin"></span> <span class="d-none d-md-inline-block">Linkedin</span></a>
                        <span class="mx-md-2 d-inline-block"></span>
                        <a href="https://api.whatsapp.com/send?phone=22675672644" class="text-white font-weight-bolder"><span class="mr-2  icon-whatsapp"></span> <span class="d-none d-md-inline-block">WhatsApp</span></a>
                    </div>

                </div>

            </div>

        </div>
    </div>

    <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

        <div class="container">
            <div class="row align-items-center position-relative">
                <div class="site-logo">
                    <a href="index.html" class="text-black"><img src="images/logo2.png" width="125px" height="75px" alt=""></a>
                </div>
                <div class="col-12">
                    <nav class="site-navigation text-right ml-auto " role="navigation">
                        <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                            <li><a href="#" class="nav-link font-weight-bolder mr-lg-2"><span class="blue">Accueil</span></a>
                            </li>

                            <li class="has-children ">
                                <a href="#" class="nav-link blue font-weight-bolder mr-lg-2"><span class="blue">Mes biens</span></a>
                                <ul class="dropdown arrow-top">
                                    <li>
                                        <a href="#" class="nav-link font-weight-bolder"><span class="blue">Ajouter</span></a>
                                    </li>
                                </ul>
                            </li>

                            <li class="">
                                <a href="#" class="nav-link blue font-weight-bolder mr-lg-2"><span class="blue">Mes locataires</span></a>
                            </li>

                            <li><a href="#" class="nav-link font-weight-bolder mr-lg-2"><span class="blue">Mes locations</span></a>
                            </li>
                            <li class="has-children ">
                                <a href="#" class="nav-link font-weight-bolder"><span class="mr-2 blue icon-account_circle "></span><span class="blue">{{ucfirst(Auth()->user()->first_name)}}</span></a>
                                <ul class="dropdown arrow-top">
                                    <li>
                                        <a href="{{ url('logout') }}" class="nav-link font-weight-bolder"><span class="blue">Deconnexion</span></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
            </div>
        </div>
    </header>

    <section>
      <div class='col-xs-12 image'>
        <!-- <img src="images/bail.png " width="100%" height="675px" alt=""> -->
          <div class='container-fluid'>
            <div class='col-md-7 col-xs-7'>
                <h1 class='text-white font-weight-bolder'> Avec M'Roogo publier et optimiser la gestion de vos bien en location</h1>
            </div>
            <div class='offset-5'>
                
            </div>
          </div>
      </div>
    </section>
</body>




