@extends('layouts.main')

@section('contenu')
      <div class="container ">
            <div class="row">
               <div class="col-md-8 col-xs-4">
                     <h3 class='blue text-center font-weight-bolder mt-5'>Mes locataires</h3>

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
                              
                                    <h6 class='font-weight-bolder blue'> Ajouter un locataire</h6>
                              </div>
                              <form action="mes_locataires" method="post">
                              @csrf
                              <div class="row">
                              <input type="hidden" class="form-control rounded-pill" id="validationDefault01" value="" name="user_id" >
                                    <div class="col-md-6 col-xs-6 mt-4">
                                       <label for="validationDefault01" class="font-weight-bolder blue ">Nom</label>
                                       <input type="text" class="form-control rounded-pill" id="validationDefault01" value="" placeholder="Saisir votre Nom" name="nom" >
                                       {!! $errors->first('nom', '<small class="text-danger">:message</small>') !!}
                                    </div>  

                                    <div class="col-md-6 col-xs-6 mt-4">
                                       <label for="validationDefault01" class="font-weight-bolder blue ">Prénom</label>
                                       <input type="text" class="form-control rounded-pill" id="validationDefault01" value=""  placeholder="Saisir votre Prénom" name="prenom" >
                                       {!! $errors->first('prenom', '<small class="text-danger">:message</small>') !!}
                                    </div> 

                                    <div class="col-md-4 col-xs-4 mt-4">
                                       <label for="validationDefault01" class="font-weight-bolder blue ">Email</label>
                                       <input type="email" class="form-control rounded-pill" id="validationDefault01" value=""  placeholder="Saisir votre Email" name="email" >
                                       {!! $errors->first('email', '<small class="text-danger">:message</small>') !!}
                                    </div>

                                    <div class="col-md-4 col-xs-4 mt-4">
                                       <label for="validationDefault01" class="font-weight-bolder blue ">Numero de téléphone</label>
                                       <input type="number" class="form-control rounded-pill" id="validationDefault01" value=""  placeholder="Numéro de téléphone" name="numero" >
                                       {!! $errors->first('number', '<small class="text-danger">:message</small>') !!}
                                    </div>   

                                    <div class="col-md-4 col-xs-3 mt-4">
                                       <label for="validationDefault01" class="font-weight-bolder blue ">Date de naissance</label>
                                       <input type="date" class="form-control rounded-pill" id="validationDefault01" value=""  placeholder="Date de naissance" name="date" >
                                       {!! $errors->first('date', '<small class="text-danger">:message</small>') !!}
                                    </div>

                                    <div class="col-md-4 col-xs-3 mt-4">
                                       <label for="validationDefault01" class="font-weight-bolder blue ">Lieu de naissance</label>
                                       <input type="text" class="form-control rounded-pill" id="validationDefault01" value="" placeholder="Lieu de naissance" name="lieu" >
                                       {!! $errors->first('lieu', '<small class="text-danger">:message</small>') !!}
                                    </div>

                                    <div class="col-md-4 col-xs-3 mt-4">
                                       <label for="validationDefault01" class="font-weight-bolder blue ">nationalité</label>
                                       <input type="text" class="form-control rounded-pill" id="validationDefault01" value=""  placeholder="Nationalité" name="nationalite" >
                                       {!! $errors->first('nationalite', '<small class="text-danger">:message</small>') !!}
                                    </div>

                                    <div class="col-md-4 col-xs-4 mt-4">
                                       <label for="validationDefault01" class="font-weight-bolder blue ">Numero CNIB</label>
                                       <input type="text" class="form-control rounded-pill" id="validationDefault01" value=""  placeholder="CNIB" name="numero_cnib" >
                                       {!! $errors->first('numero_cnib', '<small class="text-danger">:message</small>') !!}
                                    </div> 
                              </div> 
                              <div class='d-flex justify-content-end my-4'>
                                       <button type="submit" class="btn btn-primary rounded-pill justify-content-center font-weight-bolder ">Valider</button>
                              </div>
                              </form>          
                           </div>
                     </div>       
               </div>

               <div class="col-md-4 col-xs-4">
                     <div class="card-body">
                     <h3 class='blue text-center font-weight-bolder mt-4'>Liste</h3>
                           <div class="card shadow mt-4">   
                              <div class="accordion" id="accordionExample">
                                 <div class="card">
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
                                       @forelse($locataires as $locataire)
                                             <ul class='font-weight-bold text-secondary row'>                                  
                                                <li class='col-md-10 col-xs-10'>{{$locataire->nom}} {{$locataire->prenom}}</li>
                                                <div class='col-md-2 col-xs-2'>
                                                   <a href="delete/{{$locataire->id}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                      <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                                      </svg>
                                                   </a>
                                                </div>
                                             </ul>
                                             @empty
                                             <div class="alert alert-warning" role="alert">
                                             <p class='font-weight-bolder text-center '>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-circle-fill " viewBox="0 0 16 16">
                                                   <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                                </svg>
                                             Aucun locataire enregistré
                                             </p>
                                              </div>
                                             @endforelse
                                       </div>
                                     </div>
                                 </div>
                           
                              </div>                         
                          </div>
                      </div>      
                 </div>
                 </div>
                 </div>
@endsection