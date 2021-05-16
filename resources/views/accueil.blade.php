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

    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/bootstrap/bootstrap-icons-1.4.1/fonts/bootstrap-icons.woff">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">

    <title>Website Menu #4</title>
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
                    <div class="d-inline-block ml-lg-4">
                        <a href="{{route('connexion')}}">
                        <button type="button" class="btn btn-outline-primary font-weight-bolder rounded-pill"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="25" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                          </svg><span class="ml-2">Publier une annonce</span> </button>
                        </a>
                    </div>
                </div>
                <div class="col-12">
                    <nav class="site-navigation text-right ml-auto " role="navigation">
                        <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                            <li class="has-children ">
                                <a href="#" class="nav-link blue font-weight-bolder mr-lg-5"><span class="blue">Services</span></a>
                                <ul class="dropdown arrow-top">
                                    <li>
                                        <a href="#" class="nav-link font-weight-bolder"><span class="blue">Demenagement</span></a>
                                    </li>
                                    <li><a href="#" class="nav-link font-weight-bolder"><span class="blue">Amenagement</span></a></li>
                                    <li><a href="#" class="nav-link font-weight-bolder"><span class="blue">Co-location</span></a></li>
                                </ul>
                            </li>
                            <li><a href="{{route('inscription')}}" class="nav-link font-weight-bolder mr-lg-5"><span class="blue">Créer un compte</span></a></li>
                            <li>
                                <a href="{{route('connexion')}}" class="nav-link font-weight-bolder"><span class="mr-2 blue icon-account_circle "></span><span class="blue">Se connecter</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="toggle-button d-inline-block d-lg-none"><a href="" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
            </div>
        </div>
    </header>
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="filter">
                    <img src="images/slide1.jpg" class="d-block w-100 " height="500px" alt="..."></div>
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="display-3 font-weight-bold mb-5">Rechercher ou louer votre maison vous même?</h2>
                    <div>
                        <button type="button" class="btn btn-primary rounded-pill mb-3"> <a href="{{route('inscription')}}"><span class="text-white">C'est parti</span></a> </button>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="filter">
                    <img src="images/slide 2.png" class="d-block w-100" height="500px" alt="...">
                </div>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <div>
                        <button type="button" class="btn btn-primary rounded-pill mb-3"> <a href="{{route('inscription')}}"><span class="text-white">C'est parti</span></a> </button>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="filter">
                    <img src="images/slide 3.png" class="d-block w-100" height="500px" alt="...">
                </div>
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="display-3 font-weight-bold mb-5 ">M'roogo , vous rendre la vie plus facile</h2>
                    <div>
                        <button type="button" class="btn btn-primary rounded-pill mb-3"> <a href="{{route('inscription')}}"><span class="text-white">C'est parti</span></a> </button>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>



    <section class="search-section spad">
        <div class="container">
            <div class="search-form-content mt-5 ">
                <div class="card shadow">
                    <div class="card-body">
                        <form action="#" class="filter-form">
                            <div class="row">
                                <div class="col-md-4 d-inline-block">
                                    <input type="text" class="form-control mt-4  rounded-pill" id="validationDefault01" value="" placeholder="Nombre de pièce" required>
                                </div>
                                <div class="col-md-4 d-inline-block">
                                    <input type="text" class="form-control mt-4  rounded-pill " id="validationDefault01" value="" placeholder="Prix min" required>
                                </div>
                                <div class="col-md-4 d-inline-block">
                                    <input type="text" class="form-control mt-4  rounded-pill" id="validationDefault01" value="" placeholder="Prix max" required>
                                </div>

                                <div class="col-md-4 d-inline-block">
                                    <input type="text" class="form-control mt-4  rounded-pill" id="validationDefault01" value="" placeholder="Type" required>
                                </div>
                                <div class="col-md-4 d-inline-block">
                                    <input type="text" class="form-control mt-4  rounded-pill" id="validationDefault01" value="" placeholder="Superficie" required>
                                </div>
                                <div class="col-md-4 d-inline-block">
                                    <input type="text" class="form-control mt-4  rounded-pill" id="validationDefault01" value="" placeholder="Localisation" required>
                                </div>
                            </div>
                            <div class='row'>
                                <div class="offset-4"> </div>
                                <div class="col-md-4 col-xs-4 text-center mt-3">
                                    <button type="button" class="btn btn-outline-primary rounded-pill">Lancer une recherche</button>
                                </div>
                                <div class="offset-4"> </div>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
        <div class="row">
            <div class="offset-2"></div>
            <div class="col-md-8 col-xs-8 text-center">
                <h3 class="my-4 text-uppercase font-weight-bold color_blue">Les dernières offres à louer</h3>
            </div>
            <div class="offset-2"></div>
        </div>

        <div class="container ">
            <div class="row">
                <div class="col-md-4 col-xs-12">
                    <div class="card shadow-lg" style="width: 21rem;">
                        <img class="card-img-top" src="images/téléchargement (9).jpg" height="275px" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">
                    <div class="card shadow-lg" style="width: 21rem;">
                        <img class="card-img-top" src="images/téléchargement (9).jpg" height="275px" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">
                    <div class="card shadow-lg" style="width: 21rem;">
                        <img class="card-img-top" src="images/téléchargement (9).jpg" height="275px" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/main.js"></script>
</body>

</html>