@extends('layouts.dash')

@section('contenu')

<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1 font-weight-bolder">STATISTIQUES</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-3 col-lg-3">
                                <div class="overview-item shadow bg-secondary">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon d-flex justify-content-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-person-fill text-white" viewBox="0 0 16 16">
                                                 <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                            </svg>
                                            </div>
                                            <div class="text d-flex justify-content-center">
                                                <h2 class="">{{$users}} <span> Bailleur (s)</span></h2>  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-lg-3">
                                <div class="overview-item  shadow bg-secondary">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon d-flex justify-content-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-house-fill text-white" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                                                <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                                            </svg>
                                            </div>
                                            <div class="text d-flex justify-content-center ">
                                                <h2>{{$locataires}} <span>Locataires</span></h2>  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-lg-3">
                                <div class="overview-item  shadow bg-secondary">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon d-flex justify-content-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-house text-white" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                                                <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                                            </svg>
                                            </div>
                                            <div class="text  d-flex justify-content-center">
                                                <h2>{{$locations}} <span>Locations</span></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-lg-3">
                                <div class="overview-item  shadow  bg-secondary">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon d-flex justify-content-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-shop text-white" viewBox="0 0 16 16">
                                               <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z"/>
                                            </svg>
                                            </div>
                                            <div class="text  d-flex justify-content-center">
                                                <h2>{{$biens}} <span>Biens publiés</span></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1 font-weight-bolder">PARAMETRAGE</h2>
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
                                
                            </div>
                            <div class="col-md-12 ">
                                <div class="card  shadow  mt-4">
                                    <div class="card-header">
                                        <i class="mr-2 fa fa-align-justify"></i>
                                    </div>
                                    <div class=" ">
                                        <div class="card-body row d-flex justify-content-lg-around ">
                                            <button type="button" class="btn btn-secondary mb-1 col-md-3" data-toggle="modal" data-target="#largeModal">
                                                Parametres biens
                                            </button>
                                            <button type="button" class="btn btn-secondary mb-1 col-md-3" data-toggle="modal" data-target="#largeModal1">
                                                Parametres ressources
                                            </button>
                                            <button type="button" class="btn btn-secondary mb-1 col-md-3" data-toggle="modal" data-target="#largeModal2">
                                                Parametres données
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="largeModalLabel">Parametre biens</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <form method="post" action="{{route('setting_bien.store')}}">
                    @csrf
                        <div class="col">
                        <input type="text" class="form-control" name="role" placeholder="type utilisateur">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Retour</button>
                    <button type="submit" class="btn btn-primary">Valider</button>
                </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal large -->
    <div class="modal fade" id="largeModal1" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="largeModalLabel">Type de bien</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <p>
                    <form method="post" action="{{ route('setting_type.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col">
                        <div class="form-group">
                            <input type="text" class="form-control" id=""  name="type_bien" placeholder="bien">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputText">Nombre de pièce</label>
                            <input type="text" class="form-control" id=""  name="nbre_piece" placeholder="piece">
                        </div>
                        </div>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Retour</button>
                    <button type="submit" class="btn btn-primary">Valider</button>
                    </form> 
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="modal fade" id="largeModal2" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="largeModalLabel">Données</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <form method="post" action="{{ route('setting_ressource.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col">
                        <div class="form-group">
                            <label for="exampleInputText">courant</label>
                            <select class="form-control " name="courant">
                                <option value="Electrifié">Electrifié</option>
                                <option value="Non Electrifié">Non Electrifié</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputText">Assainissement</label>
                            <select class="form-control " name="assainissement">
                                <option value="Eau">Eau</option>
                                <option value="Non disponible">Non disponible</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputText">confort</label>
                            <select class="form-control " name="confort">
                                <option value="Plafonné">Plafonné</option>
                                <option value="Non Plafonné">Non Plafonné</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputText">carreaux</label>
                            <select class="form-control " name="carreaux">
                                <option value="carrelé">carrelé</option>
                                <option value="Non carrelé">Non carrelé</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputText">Meuble</label>
                            <select class="form-control " name="meuble">
                                <option value="meublé">Meublé</option>
                                <option value="Non meublé">Non meublé</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputText">Garage</label>
                            <select class="form-control " name="garage">
                                <option value="garage">garage</option>
                                <option value="Non disponible">Non disponible</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputText">statut</label>
                            <select class="form-control " name="statut">
                                <option value="A louer">A louer</option>
                                <option value="A vendre">A vendre</option>
                            </select>
                        </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Retour</button>
                    <button type="submit" class="btn btn-primary">Valider</button>
                    </form> 
                </div>
            </div>
        </div>
    </div>

@endsection