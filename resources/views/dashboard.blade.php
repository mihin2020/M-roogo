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
    <link rel="stylesheet" href="css/inscription.css">

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
                                        <a href="ajout_bien"  class="nav-link font-weight-bolder">
                                        <span class="blue">Ajouter</span>
                                        </a>
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
         <!-- <img src="images/bail.png " width="100%" height="675px" alt="">  -->
         <div class='container-fluid'>
            <div class='col-md-7 col-xs-7'>
                <h1 class='text-white font-weight-bolder'> Avec M'Roogo publier et optimiser la gestion de vos bien en location</h1>
            </div>
            <div class='offset-5'>
            </div>
          </div>
      </div>
    </section>
        <div class="container">
            <div class="row">
               
                <div class="col-md-12 col-xs-12">
                    <h1 class="font-weight-bolder blue text-center mb-2">Mes biens</h1>
                </div>
                @foreach($products as $product)
                <div class="col-md-6 col-xs-12 mt-4">
                <div class="card ">
                        <div class="card-header d-flex justify-content-between">
                                <h5 class="font-weight-bold blue">{{$product->type_biens}} à {{$product->localisation}} </h5>
                                <a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#view_{{$product->id}}" data-whatever="@getbootstrap">Voir details</a>
                        </div>

<!-- modal -->
                            <div class="modal fade" id="view_{{$product->id}}" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body row">
                                    <div class="col-md-4 col-xs-4 ">
                                        <h6 ><span class='font-weight-bolder'>Type </span> :{{$product->type_biens}}</h6>
                                    </div>
                                    <div class="col-md-4 col-xs-4">
                                        <h6> <span class=' font-weight-bolder'>localisation </span> : {{$product->localisation}}</h6>
                                    </div>
                                    <div class="col-md-4 col-xs-4"> 
                                        <h6 > <span class='font-weight-bolder'>Taille </span> :</h6>
                                    </div>

                                    <div class="col-md-5 col-xs-5 mt-4 ">
                                        <h6 > <span class='font-weight-bolder'>Nombre de pièce</span> : {{$product->nbre_piece}}</h6>
                                    </div>
                                    <div class="col-md-4 col-xs-4 mt-4">
                                        <h6 > <span class='font-weight-bolder'>Assainissement</span>: {{$product->assainissement}}</h6>
                                    </div>
                                    <div class="col-md-3 col-xs-3 mt-4">
                                        <h6 ><span class ='font-weight-bolder'>Ressource</span>: {{$product->courant}}</h6>
                                    </div>

                                    <div class="col-md-5 col-xs-5 mt-4">
                                        <h6> <span class='font-weight-bolder'>Loyer mensuel</span>: {{$product->prix}} FCFA</h6>
                                    </div>
                                    <div class="col-md-3 col-xs-3 mt-4">
                                        <h6>  <span class='font-weight-bolder'>Caution</span>: {{$product->caution}} Mois</h6>
                                    </div>
                                    <div class="col-md-4 col-xs-4 mt-4">
                                        <h6> <span class='font-weight-bolder'>Avance</span> : {{$product->avance}} Mois</h6>
                                    </div>
                                    <div class="col-md-3 col-xs-3 mt-4">
                                        <h6> <span  class='font-weight-bolder'>Prestation :</span> {{$product->prestation}} Mois</h6>
                                    </div>
                                    <div class="col-md-9 col-xs-9 mt-4">
                                        <h6> <span  class='font-weight-bolder'> Caracteristiques </span> :{{$product->toilette}} toilette, {{$product->plafond}}, {{$product->carreaux}}</h6>
                                    </div>
                                </div>
                                <div class="modal-footer row">
                                    <button type="button" class="btn btn-secondary" >modifier</button>
                                    <button type="button" class="btn btn-primary">Supprimer</button>
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- fin -->
                            <div class="card-body  blue row ">
                                <p class="card-text col-md-10">{{$product->description}}</p>
                                    <p class="offset-2"></p>
                                    <p class="col-md-6  font-weight-bold">Loyer mensuel : {{$product->prix}} Fcfa</p>
                                <p class="offset-6"></p>
                            </div>
                     </div>
                 </div>
                 @endforeach
            </div>
        </div>
      
<!-- 
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Open modal for @getbootstrap</button> -->


<script>
    $('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})
</script>


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




