@extends('layouts.main')

@section('contenu')

    <section>
      <div class='col-xs-12 image'>
         <div class='container  p-0'>
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
                @forelse($products as $product)
                    
                <div class="col-md-6 col-xs-12 mt-4">
                <div class="card shadow ">
                        <div class="card-header d-flex justify-content-between ">
                                <h5 class="font-weight-bold blue">{{$product->type_biens}} à {{$product->localisation}} </h5>
                                <a href="" class="btn btn-primary" data-toggle="modal" data-target="#view_{{$product->id}}" data-whatever="@getbootstrap">Voir details</a>
                        </div>
                        <div class="col-12">
                        <span class="badge badge-primary">{{$product->available}}</span>
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
                                    <!-- <div class="col-md-4 col-xs-4"> 
                                        <h6 > <span class='font-weight-bolder'>Taille </span> :</h6>
                                    </div> -->

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
                                    <div class="col-md-12 col-xs-12 mt-5 d-flex justify-content-center">
                                    
                                         <img src="{{asset('storage').'/'.$product->picture}}" alt="" width="175px" height="175px">
                                   
                                    </div>
                                </div>
                                
                                <div class="modal-footer row">
                                
                                     <a href="available/{{$product->id}}"><button type="button" class="btn btn-xs btn-secondary">Statut de Disponibilité</button></a>
                                
                                   <a href="{{ route('ajout_bien.edit',$product->id) }}"><button type="button" class="btn btn-success" >modifier</button></a> 
                                   <form action="{{ route('ajout_bien.destroy', $product->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button  class="btn btn-danger">Retirer </button>
                                    </form>   
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- fin -->
                            <div class="card-body  blue row ">
                                <p class="card-text col-md-10">{{$product->description}}</p>
                                    <p class="offset-2"></p>
                                    <p class="col-md-6  font-weight-bold">Loyer mensuel : {{$product->prix}} Fcfa</p>
                                <div class="col-md-6 d-flex justify-content-end">
                                    <a href="{{asset('mes_locations')}}"><button type="button" class="btn   btn-outline-primary">Creer une location</button></a> 
                                </div>
                            </div>
                     </div>
                 </div>
                 @empty
                     <div class="alert alert-warning col-md-12 col-xs-12" role="alert">
                         <p class='font-weight-bolder text-center '>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-circle-fill" viewBox="0 0 16 16">
                               <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                            </svg>
                         Aucun bien disponible
                         </p>
                     </div>
                 @endforelse
            </div>
            <div class="row mt-3">
                <div class="col">
                    {{$products->links()}}
                </div>
            </div> 
        </div>
@endsection




