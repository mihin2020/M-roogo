<!DOCTYPE html>
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

    <title>Ajout de bien</title>
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

    <header class="site-navbar js-sticky-header site-navbar-target shadow" role="banner">

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
                                        <a href="" role="button" type="button" class="nav-link font-weight-bolder"  data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"  class="modal-dialog modal-xl">
                                        <span class="blue">Ajouter</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                                         
                               
                            <!-- end modal -->

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

<section class="container">
<div class="offset-4"></div>
    <div class="col-md-4 col-xs-4 m-auto ">
        <h2 class="blue font-weight-bolder ml-2 my-5">Ajouter un bien</h2>
    </div>
<div class="offset-4"></div>
    <div class="card-body  shadow">
        
   
                                    <form method="post" action="ajout_bien">
                                    @csrf
                                        <div class="row">
                                        <div class="col-md-4 col-xs-4 form">
                                                    <label for="exampleFormControlSelect1"></label>
                                                    <select class="form-control rounded-pill"  name="type_biens" id="exampleFormControlSelect1">
                                               @foreach($parametre_biens as $parametre_bien)
                                                       <option  class='font-weight-bolder' value="{{$parametre_bien->type_bien}}">{{$parametre_bien->type_bien}}</option>
                                               @endforeach
                                                   </select>
                                            </div>

                                             <div class="col-md-4 col-xs-4">
                                                     <label for="validationDefault01" class="font-weight-bolder blue "> </label>
                                                     <input type="text" class="form-control rounded-pill" id="validationDefault01" value="" placeholder="localisation" name="localisation" >
                                            </div>

                                            <div class="col-md-4 col-xs-4">
                                            <label for="exampleFormControlSelect1"></label>
                                                    <select class="form-control rounded-pill"  name="nbre_piece" id="exampleFormControlSelect1">
                                                @foreach($parametre_biens as $parametre_bien)
                                                       <option  class='font-weight-bolder' value="{{$parametre_bien->nbre_piece}}">{{$parametre_bien->nbre_piece}}</option>
                                                @endforeach
                                                   </select>
                                            </div>

                                                  <!--   2 eme ligne       -->
                                                  <div class="col-md-3 col-xs-3 form">
                                                    <label for="exampleFormControlSelect1" ></label>
                                                    <select class="form-control rounded-pill"  name="courant" id="exampleFormControlSelect1">
                                                @foreach($parametre_ressources as $parametre_ressource)
                                                       <option  class='font-weight-bolder' value="{{$parametre_ressource->courant}}">{{$parametre_ressource->courant}}</option>
                                                @endforeach
                                                   </select>
                                            </div>

                                            <div class="col-md-3 col-xs-3">
                                                     <label for="validationDefault01" class="font-weight-bolder blue "> </label>
                                                     <select class="form-control rounded-pill"  name="assainissement" id="exampleFormControlSelect1">
                                                @foreach($parametre_ressources as $parametre_ressource)
                                                       <option  class='font-weight-bolder' value="{{$parametre_ressource->assainissement}}">{{$parametre_ressource->assainissement}}</option>
                                                @endforeach
                                                   </select>
                                            </div>

                                            <div class="col-md-3 col-xs-3">
                                                     <label for="exampleFormControlSelect1"></label>
                                                     <select class="form-control rounded-pill"  name="plafond" id="exampleFormControlSelect1">
                                                @foreach($parametre_ressources as $parametre_ressource)
                                                       <option  class='font-weight-bolder' value="{{$parametre_ressource->confort}}">{{$parametre_ressource->confort}}</option>
                                                @endforeach
                                                   </select>
                                            </div>

                                            <div class="col-md-3 col-xs-3">
                                            <label for="exampleFormControlSelect1"></label>
                                                  <select class="form-control rounded-pill"  name="carreaux" id="exampleFormControlSelect1">
                                                @foreach($parametre_ressources as $parametre_ressource)
                                                       <option  class='font-weight-bolder' value="{{$parametre_ressource->carreaux}}">{{$parametre_ressource->carreaux}}</option>
                                                @endforeach
                                                   </select>
                                            </div>

                                            <div class="col-md-3 col-xs-3">
                                            <label for="exampleFormControlSelect1"></label>
                                                  <select class="form-control rounded-pill"  name="meuble" id="exampleFormControlSelect1">
                                                @foreach($parametre_ressources as $parametre_ressource)
                                                       <option  class='font-weight-bolder' value="{{$parametre_ressource->meuble}}">{{$parametre_ressource->meuble}}</option>
                                                @endforeach
                                                   </select>
                                            </div>

                                            <div class="col-md-3 col-xs-3">
                                                     <label for="validationDefault01" class="font-weight-bolder blue "> </label>
                                                     <input type="number" class="form-control rounded-pill" id="validationDefault01" value="" placeholder="Prix" name="prix" >
                                            </div>

                                            <div class="col-md-4 col-xs-4">
                                                     <label for="validationDefault01" class="font-weight-bolder blue "> </label>
                                                     <input type="text" class="form-control rounded-pill" id="validationDefault01" value="" placeholder="Description" name="description" >
                                            </div>
                                            <div class="col-md-4 col-xs-4">
                                                     <label for="validationDefault01" class="font-weight-bolder blue "> </label>
                                                     <select class="form-control rounded-pill"  name="statut" id="exampleFormControlSelect1">
                                                @foreach($parametre_ressources as $parametre_ressource)
                                                       <option  class='font-weight-bolder' value="{{$parametre_ressource->statut}}">{{$parametre_ressource->statut}}</option>
                                                @endforeach
                                                   </select>
                                            </div>

                                            <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
                                            <!-- <div class="file-upload">
                                            <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add Image</button>

                                            <div class="image-upload-wrap">
                                                <input class="file-upload-input" type='file' name="picture" onchange="readURL(this);" accept="image/*" />
                                                <div class="drag-text">
                                                <h3>Ajouter une Photo</h3>
                                                </div>
                                            </div>
                                            <div class="file-upload-content">
                                                <img class="file-upload-image" src="#" alt="your image" />
                                                <div class="image-title-wrap">
                                                <button type="button" onclick="removeUpload()" class="remove-image">Retirer <span class="image-title">Uploaded Image</span></button>
                                                </div>
                                            </div>
                                            </div> -->
                                        </div>
                                        <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Send message</button>
                                    </form>
                                </div>
                                  
                                </div>
                                
                                </div>
                            </div>
                           
        
    </div>
</section>


<script>
    function readURL(input) {
  if (input.files && input.files[0]) {

    var reader = new FileReader();

    reader.onload = function(e) {
      $('.image-upload-wrap').hide();

      $('.file-upload-image').attr('src', e.target.result);
      $('.file-upload-content').show();

      $('.image-title').html(input.files[0].name);
    };

    reader.readAsDataURL(input.files[0]);

  } else {
    removeUpload();
  }
}

function removeUpload() {
  $('.file-upload-input').replaceWith($('.file-upload-input').clone());
  $('.file-upload-content').hide();
  $('.image-upload-wrap').show();
}
$('.image-upload-wrap').bind('dragover', function () {
    $('.image-upload-wrap').addClass('image-dropping');
  });
  $('.image-upload-wrap').bind('dragleave', function () {
    $('.image-upload-wrap').removeClass('image-dropping');
});
</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

</body>
</html>



