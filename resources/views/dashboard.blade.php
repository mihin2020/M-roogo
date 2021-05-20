@extends('layouts.main')

@section('contenu')

    <section>
      <div class='col-xs-12 image'>
         <!-- <img src="images/bail.png " width="100%" height="675px" alt="">  -->
         <div class='container p-0'>
            <div class='col-md-7 col-xs-7 '>
                <h1 class='text-white small_text font-weight-bolder display-4 text-wrap'> Avec M'Roogo publier et optimiser la gestion de vos biens en location</h1>
            </div>
            <div class='offset-5'>
            </div>
          </div>
      </div>
    </section>
        <div class="container">
                   @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p class='font-weight-bold'>{{ $message }}</p>
                        </div>
                    @endif
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

                                    <div class="col-md-5 col-xs-5 mt-5 ">
                                        <h6 > <span class='font-weight-bolder'>Nombre de pièce</span> : {{$product->nbre_piece}}</h6>
                                    </div>
                                    <div class="col-md-4 col-xs-4 mt-5">
                                        <h6 > <span class='font-weight-bolder'>Assainissement</span>: {{$product->assainissement}}</h6>
                                    </div>
                                    <div class="col-md-3 col-xs-3 mt-5">
                                        <h6 ><span class ='font-weight-bolder'>Ressource</span>: {{$product->courant}}</h6>
                                    </div>

                                    <div class="col-md-5 col-xs-5 mt-5">
                                        <h6> <span class='font-weight-bolder'>Loyer mensuel</span>: {{$product->prix}} FCFA</h6>
                                    </div>
                                    <div class="col-md-3 col-xs-3 mt-5">
                                        <h6>  <span class='font-weight-bolder'>Caution</span>: {{$product->caution}} Mois</h6>
                                    </div>
                                    <div class="col-md-4 col-xs-4 mt-5">
                                        <h6> <span class='font-weight-bolder'>Avance</span> : {{$product->avance}} Mois</h6>
                                    </div>
                                    <div class="col-md-3 col-xs-3 mt-5">
                                        <h6> <span  class='font-weight-bolder'>Prestation :</span> {{$product->prestation}} Mois</h6>
                                    </div>
                                    <div class="col-md-9 col-xs-9 mt-5">
                                        <h6> <span  class='font-weight-bolder'> Caracteristiques </span> :{{$product->toilette}} toilette, {{$product->plafond}}, {{$product->carreaux}}</h6>
                                    </div>
                                </div>
                                <div class="modal-footer row">
                                     
                                   <a href="edit/{{$product->id}}"><button type="button" class="btn btn-success" >modifier</button></a> 
                                   <a href="delete/{{$product->id}}"><button type="button" class="btn btn-danger">Retirer</button></a> 
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
@endsection




