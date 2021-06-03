<!doctype html>
<html lang="en">

<head>
    
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
    <!-- <link rel="stylesheet" href="css/zoom.css"> -->
    <link rel="stylesheet" href="css/inscription.css">

    <link rel="stylesheet" href="css/bootstrap/bootstrap-icons-1.4.1/fonts/bootstrap-icons.woff">
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
               
                    <img src="images/slide1.jpg" class="d-block w-100 " height="350px" alt="..."></div>
                   
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="display-3 font-weight-bold mb-5">Rechercher ou louer votre maison vous même?</h2>
                    <div>
                        <button type="button" class="btn btn-primary rounded-pill mb-3"> <a href="{{route('inscription')}}"><span class="text-white">C'est parti</span></a> </button>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="filter">
                    <img src="{{asset('images/slide 2.png')}}" class="d-block w-100" height="350px" alt="...">
                </div>
                <div class="carousel-caption d-none d-md-block">
                    <h5  class="display-3 font-weight-bold mb-5">Votre satisfaction, notre Priorité</h5>
                    <div>
                        <button type="button" class="btn btn-primary rounded-pill mb-3"> <a href="{{route('inscription')}}"><span class="text-white">C'est parti</span></a> </button>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="filter">
                    <img src="{{asset('images/slide 3.png')}}" class="d-block w-100" height="350px" alt="...">
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
            @foreach($products as $product)
                <div class="col-md-4 my-3 col-xs-12">
                    <div class="card shadow-lg" style="width: 18rem;">
                    <!--  -->   <img class="card-img-top" src="{{asset('storage').'/'.$product->picture}}"  height="250px" alt="Card image cap">
                        <!-- The Modal -->
                            <!-- <div id="modal1" class="modal">
                            <img class="modal-content" id="img01">
                            <div id="caption"></div>
                            </div> -->
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold blue">{{$product->type_biens}}  {{$product->statut}}  </h5>
                                    <p>Prix :{{$product->prix}}/mois</p>
                                    <p>Quartier:{{$product->localisation}}</p>

                                @if ( strlen($product) >= 100)

                                    <p>{{ substr($product->description, 0, 100)."..." }} </p>

                                @else
                                    {{ $uneRes->commDep }}
                                @endif
                                <div class="row">
                                    <div class="col-md-6 col-xs-6 ">
                                    <a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#view_{{$product->id}} " data-whatever="@getbootstrap">Contactez</a>
                                    </div>
                                    <div class="col-md-6 col-xs-6 mt-2 ">
                                         <p class="d-flex justify-content-end date">publié le {{date('d-m-Y', strtotime($product->created_at))}}</p>
                                    </div>
                                    @foreach($products as $product)
                                    <div class="modal fade" id="view_{{$product->id}}" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-12 col-xs-12 d-flex justify-content-start font-weight-bold blue my-2">
                                                        Description
                                                    </div>
                                                    <div class="col-md-12 col-xs-12 d-flex justify-content-start">
                                                        {{$product->description}}
                                                    </div>
                                                    <div class="col-md-12 col-xs-12 d-flex justify-content-start font-weight-bold blue my-2">
                                                        Details
                                                    </div>
                                                    <div class="col-md-6 col-xs-4">
                                                       <span class="text-secondary font-weight-bolder">Type:</span> {{$product->type_biens}}
                                                    </div>
                                                    <div class="col-md-6 col-xs-4">
                                                       <span class="text-secondary font-weight-bolder">Quartier:</span> {{$product->localisation}}
                                                    </div>
                                                    <div class="col-md-6 col-xs-4">
                                                      <span class="text-secondary font-weight-bolder">Nombre de pièces:</span>  {{$product->nbre_piece}}
                                                    </div>
                                                    <div class="col-md-6 col-xs-4 ">
                                                       <span class="text-secondary font-weight-bolder">Mensualité:</span> {{$product->prix}} FCFA
                                                    </div>
                                                    <div class="col-md-6 col-xs-4 ">
                                                      <span class="text-secondary font-weight-bolder">Caution:</span> {{$product->caution}} mois
                                                    </div>
                                                    <div class="col-md-6 col-xs-4 ">
                                                      <span class="text-secondary font-weight-bolder">Statut:</span> {{$product->statut}}
                                                    </div>
                                                    <div class="col-md-12 col-xs-12 d-flex justify-content-start font-weight-bold blue my-2">
                                                        Commodités
                                                    </div>
                                                    <div class="col-md-4 col-xs-4 ">
                                                        {{$product->carreaux}}
                                                    </div>
                                                    <div class="col-md-4 col-xs-4 ">
                                                      {{$product->courant}}
                                                    </div>
                                                    <div class="col-md-4 col-xs-4 ">
                                                      {{$product->plafond}}
                                                    </div>
                                                    <div class="col-md-12 col-xs-12 d-flex justify-content-start font-weight-bold blue my-2">
                                                       Contacts 
                                                    </div>
                                                    <div class="col-md-12 col-xs-4 ">
                                                        <span class="text-secondary font-weight-bolder">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-telephone-fill blue" viewBox="0 0 16 16">
                                                               <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                                            </svg>
                                                        </span>                                                      
                                                           {{$product->user->phone}} 
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <span class="text-secondary font-weight-bolder">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-envelope-open-fill blue" viewBox="0 0 16 16">
                                                                <path d="M8.941.435a2 2 0 0 0-1.882 0l-6 3.2A2 2 0 0 0 0 5.4v.313l6.709 3.933L8 8.928l1.291.717L16 5.715V5.4a2 2 0 0 0-1.059-1.765l-6-3.2zM16 6.873l-5.693 3.337L16 13.372v-6.5zm-.059 7.611L8 10.072.059 14.484A2 2 0 0 0 2 16h12a2 2 0 0 0 1.941-1.516zM0 13.373l5.693-3.163L0 6.873v6.5z"/>
                                                            </svg>
                                                        </span> 
                                                           {{$product->user->email}} 
                                                    </div>
                                                    <div class="col-md-6">
                                                    <button type="button" class="btn btn-primary ">Demande de reservation</button>
                                                    </div>
                                                    <div class="col-md-12 col-xs-12 d-flex justify-content-start font-weight-bold blue mt-3">
                                                          Renseignez-vous sur ce bien
                                                    </div>
                                                    @if ($message = Session::get('success'))
                                                        <div class="alert alert-success alert-block">
                                                            <button type="button" class="close ml-1" data-dismiss="alert">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                                            </svg>
                                                            </button>
                                                            <strong>{{ $message }}</strong>
                                                        </div>
                                                    @endif
                                                    <form action="/accueil" method="post">
                                                    @csrf
                                                       <div class="row container">
                                                       <div class="col-md-4 mt-3">
                                                            <input type="text" class="form-control rounded-pill"  value="" placeholder=" Votre Nom" name="name">
                                                        </div>
                                                        <div class="col-md-4 mt-3">
                                                            <input type="number" class="form-control rounded-pill"  value="" placeholder=" Votre Numero" name="numero">
                                                        </div>
                                                        <div class="col-md-4 mt-3 ">
                                                            <input type="email" class="form-control rounded-pill"  value="" placeholder=" Votre Adresse" name="email">
                                                        </div>
                                                        <div class="col-md-12 mt-3 form-group ">
                                                            <textarea name="message" class="form-control "id="exampleFormControlTextarea" placeholder="Votre Message"  cols="3" rows="5"> </textarea>
                                                        </div>
                                                        </div>
                                                         <button type="submit" class="btn btn-primary ">Envoyer</button>
                                                       </div>
                                                    </form>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                        </div>
                    </div>
                </div>  
            @endforeach          
        </div>

        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/main.js"></script>
</body>

</html>