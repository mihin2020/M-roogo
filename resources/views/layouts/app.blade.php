<!doctype html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">


    <link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('owl.carousel/assets/owl.theme.default.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    

    <!-- Style -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/inscription.css')}}">
    <!-- <link rel="stylesheet" href="css/zoom.css"> -->
  
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/bootstrap/bootstrap-icons-1.4.1/fonts/bootstrap-icons.woff')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">

    <title>Accueil</title>
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
                    <a href="{{asset('accueil')}}" class="text-black"><img src="{{asset('images/logo2.png')}}" width="125px" height="75px" alt=""></a>
                     @if(!Auth::user()) 
                    <div class="d-inline-block ml-lg-4">
                        <a href="{{route('connexion')}}">
                        <button type="button" class="btn btn-outline-primary font-weight-bolder rounded-pill"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="25" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                          </svg><span class="ml-2">Publier une annonce</span> </button>
                        </a>
                    </div>
                    @endif
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
                            @if(Auth::user())
                            <li class="has-children ">
                                <a href="#" class="nav-link font-weight-bolder"><span class="mr-2 blue icon-account_circle "></span><span class="blue">{{(Auth()->user()->first_name)}}</span></a>
                                <ul class="dropdown arrow-top">
                                    <li>
                                            <li>
                                                <a href="{{asset('modifier')}}"  class="nav-link font-weight-bolder">
                                                <span class="blue">Modifier Compte</span>
                                                </a>
                                            </li>
                                            
                                            <a href="{{ url('logout') }}" class="nav-link font-weight-bolder"><span class="blue">Deconnexion</span></a>
                                    </li>
                                </ul>
                            </li>
                             @else
                            <li>
                                <a href="{{route('connexion')}}" class="nav-link font-weight-bolder"><span class="mr-2 blue icon-account_circle "></span><span class="blue">Se connecter</span></a>
                            </li>
                            @endif
                        </ul>
                    </nav>
                </div>
                <div class="toggle-button d-inline-block d-lg-none"><a href="" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
            </div>
        </div>
    </header>

    <section>
    
    @yield('contenu')
    
    </section>

    <footer>
            <div class="container-fluid">
                <div class="row mt-3 d-flex foot justify-content-between">
                    <div class="col-md-4 mt-3 col-xs-4">
                        <h4 class="text-center text-white font-weight-bold">A propos</h4>
                    </div>
                    <div class="col-md-4 mt-3 col-xs-4">
                        <h4 class="text-center text-white font-weight-bold ">Plan du site</h4>
                    </div>
                    <div class="col-md-4 mt-3 col-xs-4">
                        <h4 class="text-center text-white font-weight-bold">Nous Contacter</h4>
                    </div>
                </div>
            </div>
         </footer>
      
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/main.js"></script>
        <script>
       // On récupère toutes les étoiles
var toutesLesEtoiles = $('.stars .star');
// console.log(toutesLesEtoiles);

// On rajoute l'écouteur au clic;
// toutesLesEtoiles.click(onStarClick)
toutesLesEtoiles.click(onStarClick);


// On gère ce qui se passe lors du clic d'une étoile
function onStarClick(event) {

	// On récupère l'objet cliqué, AU FORMAT JQUERY
	var etoileCliquée = $(this);
	// console.log(etoileCliquée);

	// On récupère son index ("Quelle étoile a été cliquée ?") depuis sont attribut data-index
	var indexCliqué = etoileCliquée.data("index");
	// console.log(indexCliqué);

	// On récupère son parent (afin de rendre ça réutilisable pour d'autres groupes)
	var parent = $(this).parent();

	// Style : "Vider" toutes les étoiles.. de ce groupe
	parent.find('.star').addClass('stargrey');
	parent.find('.star').removeClass('yellow');

	//// Style : "Remplir" le bon nombre d'étoiles
	// Pour ce groupe, pour chaque étoile de 0 jusqu'à celle cliquée..
	for (var i = 0; i <= indexCliqué; i++) {

		var etoile = parent.find('.star[data-index=' + i + ']');
		// console.log( etoile );

		// Je remplie
		etoile.addClass('yellow');
		etoile.removeClass('stargrey');
	}
}
        </script>
</body>

</html>