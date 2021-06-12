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
                 
                              <form action="{{route('mes_locataires.update',$locataires->id)}}" method="post">
                             
                              @method('PATCH')
                              @csrf
                              <div class="row">
                              <input type="hidden" class="form-control rounded-pill" id="validationDefault01" value="{{Auth()->user()->id}}" name="user_id" >
                                    <div class="col-md-6 col-xs-6 mt-4">
                                       <label for="validationDefault01" class="font-weight-bolder blue ">Nom</label>
                                       <input type="text" class="form-control rounded-pill" id="validationDefault01" value="{{$locataires->nom}}" placeholder="Saisir votre Nom" name="nom" >
                                       {!! $errors->first('nom', '<small class="text-danger">:message</small>') !!}
                                    </div>  

                                    <div class="col-md-6 col-xs-6 mt-4">
                                       <label for="validationDefault01" class="font-weight-bolder blue ">Prénom</label>
                                       <input type="text" class="form-control rounded-pill" id="validationDefault01" value="{{$locataires->prenom}}"  placeholder="Saisir votre Prénom" name="prenom" >
                                       {!! $errors->first('prenom', '<small class="text-danger">:message</small>') !!}
                                    </div> 

                                    <div class="col-md-4 col-xs-4 mt-4">
                                       <label for="validationDefault01" class="font-weight-bolder blue ">Email</label>
                                       <input type="email" class="form-control rounded-pill" id="validationDefault01" value="{{$locataires->email}}"  placeholder="Saisir votre Email" name="email" >
                                       {!! $errors->first('email', '<small class="text-danger">:message</small>') !!}
                                    </div>

                                    <div class="col-md-4 col-xs-4 mt-4">
                                       <label for="validationDefault01" class="font-weight-bolder blue ">Numero de téléphone</label>
                                       <input type="number" class="form-control rounded-pill" id="validationDefault01" value="{{$locataires->numero}}"  placeholder="Numéro de téléphone" name="numero" >
                                       {!! $errors->first('number', '<small class="text-danger">:message</small>') !!}
                                    </div>   

                                    <div class="col-md-4 col-xs-3 mt-4">
                                       <label for="validationDefault01" class="font-weight-bolder blue ">Date de naissance</label>
                                       <input type="date" class="form-control rounded-pill" id="validationDefault01" value="{{$locataires->date}}"  placeholder="Date de naissance" name="date" >
                                       {!! $errors->first('date', '<small class="text-danger">:message</small>') !!}
                                    </div>

                                    <div class="col-md-4 col-xs-3 mt-4">
                                       <label for="validationDefault01" class="font-weight-bolder blue ">Lieu de naissance</label>
                                       <input type="text" class="form-control rounded-pill" id="validationDefault01" value="{{$locataires->lieu}}" placeholder="Lieu de naissance" name="lieu" >
                                       {!! $errors->first('lieu', '<small class="text-danger">:message</small>') !!}
                                    </div>

                                    <div class="col-md-4 col-xs-3 mt-4">
                                       <label for="validationDefault01" class="font-weight-bolder blue ">nationalité</label>
                                       <input type="text" class="form-control rounded-pill" id="validationDefault01" value="{{$locataires->nationalite}}"  placeholder="Nationalité" name="nationalite" >
                                       {!! $errors->first('nationalite', '<small class="text-danger">:message</small>') !!}
                                    </div>

                                    <div class="col-md-4 col-xs-4 mt-4">
                                       <label for="validationDefault01" class="font-weight-bolder blue ">Numero CNIB</label>
                                       <input type="text" class="form-control rounded-pill" id="validationDefault01" value="{{$locataires->numero_cnib}}"  placeholder="CNIB" name="numero_cnib" >
                                       {!! $errors->first('numero_cnib', '<small class="text-danger">:message</small>') !!}
                                    </div> 
                              </div> 
                              <div class='d-flex justify-content-end my-4'>
                                       <button type="submit" class="btn btn-primary rounded-pill justify-content-center font-weight-bolder ">Modifier</button>
                              </div>
                              </form>  
                                    
                           </div>
                     </div>       
               </div>
                 </div>
                 </div>
@endsection