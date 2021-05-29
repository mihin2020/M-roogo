@extends('layouts.main')

@section('contenu')
      <div class="container">
         <div class="row">
            <div class="col-md-8 col-xs-12 mt-5">
            <h3 class='blue text-center font-weight-bolder'>Mes locations</h3>
            <div class="card shadow mt-4">   
                  <div class="card-body ">
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
                      <div class='d-flex justify-content-start'>
                           <h6 class='font-weight-bolder blue'> Creer une location</h6>
                      </div>
                      <form action="mes_locations" method="post">
                      @csrf
                      <div class="row">

                          <input type="hidden" class="form-control rounded-pill" id="validationDefault01" value="{{auth()->user()->id}}" name="user_id" >
                          
                           <div class="col-md-6 col-xs-6 mt-4">
                              <label for="validationDefault01" class="font-weight-bolder blue ">Type de bien</label>
                              <select class="form-control rounded-pill"  name="type_bien" id="exampleFormControlSelect1">
                      @foreach($products as $product)
                              <option  class='font-weight-bolder' value="{{$product->id}}"> {{$product->type_biens}} à {{$product->localisation}}</option>
                      @endforeach
                          </select>
                           </div>  

                           <div class="col-md-6 col-xs-6 mt-4">
                              <label for="validationDefault01" class="font-weight-bolder blue ">Le locataire</label>
                                 <select class="form-control rounded-pill"  name="locataire" id="exampleFormControlSelect1">
                      @foreach($locataires as $locataire)
                                    <option  class='font-weight-bolder' value="{{$locataire->id}}">{{$locataire->nom}} {{$locataire->prenom}}</option>
                      @endforeach
                                 </select>
                           </div> 

                           <div class="col-md-6 col-xs-6 mt-4">
                              <label for="validationDefault01" class="font-weight-bolder blue ">Type de bails</label>
                                 <select class="form-control rounded-pill"  name="type_bail" id="exampleFormControlSelect1">
                                    <option  class='font-weight-bolder' value="bail de location">bail de location</option>
                                    <option  class='font-weight-bolder' value="bail de vente">bail de vente</option>
                                 </select>
                           </div>

                           <div class="col-md-6 col-xs-6 mt-4">
                              <label for="validationDefault01" class="font-weight-bolder blue ">Loyer</label>
                              <input type="number" class="form-control rounded-pill" id="validationDefault01" value="" name="loyer" >
                              {!! $errors->first('loyer', '<small class="text-danger">:message</small>') !!}
                           </div>   

                           <div class="col-md-6 col-xs-6 mt-4">
                              <label for="validationDefault01" class="font-weight-bolder blue ">date de signature du bail</label>
                              <input type="date" class="form-control rounded-pill" id="validationDefault01" value="" name="date_bail" >
                              {!! $errors->first('date_bail', '<small class="text-danger">:message</small>') !!}
                           </div>

                           <div class="col-md-6 col-xs-6 mt-4">
                              <label for="validationDefault01" class="font-weight-bolder blue ">date d'entrée</label>
                              <input type="date" class="form-control rounded-pill" id="validationDefault01" value="" name="date_entre" >
                              {!! $errors->first('date_entre', '<small class="text-danger">:message</small>') !!}
                           </div>
                      </div> 
                      <div class='d-flex justify-content-end my-4'>
                              <button type="submit" class="btn btn-primary rounded-pill justify-content-center font-weight-bolder ">Valider</button>
                      </div>  
                      </form>          
                  </div>
            </div>
            </div>
            <div class="col-md-4 col-xs-12 mt-5 ">
            <h3 class='blue text-center font-weight-bolder'>.</h3>
           
               <div class='card-body shadow mt-4'>
                <div class="accordion" id="accordionExample">
                     <div class="card">
                     @foreach($locations as $location)
                        <div class="card-header" id="headingOne">
                           <h2 class="mb-0">
                              <button class="btn btn-link btn-block font-weight-bold text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-list-ul" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                 </svg>
                              </button>
                           </h2>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                              <div class="card-body">
                                    <p class='font-weight-bold text-secondary'>Location de votre {{$location->type_bien}}</p> 
                                    <p class='font-weight-bold text-secondary'>Loué à {{$location->locataire}}</p>
                                    <p class='font-weight-bold text-secondary'>Montant du loyer {{$location->loyer}} FCFA</p>
                                    <p class='font-weight-bold text-secondary'>Date du bail: {{$location->type_bail}}</p> 
                                    <div class='row'>
                                       <p class='font-weight-bold text-secondary col-md-10'>date d'entrée: {{date('d-m-Y', strtotime($location->date_entre))}}</p>
                                       <p> 
                                          <a href="delete/{{$location->id}}">
                                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                   <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                             </svg>
                                          </a>
                                       </p>
                                    </div>
                                   
                              </div>
                        </div>
                     @endforeach
                     </div>
                              </div>
               </div>
          
            </div>
         </div>      
      </div>
@endsection