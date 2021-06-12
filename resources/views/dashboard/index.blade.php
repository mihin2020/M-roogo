@extends('layouts.dash')

@section('contenu')

<!-- MAIN CONTENT-->
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">STATISTIQUE</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-3 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon d-flex justify-content-center">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text d-flex justify-content-center">
                                                <h2 class="">{{$users}} <span> Bailleur (s)</span></h2>  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon d-flex justify-content-center">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text d-flex justify-content-center ">
                                                <h2>{{$locataires}} <span>Locataires</span></h2>  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon d-flex justify-content-center">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text  d-flex justify-content-center">
                                                <h2>{{$locations}} <span>Locations</span></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon d-flex justify-content-center">
                                                <i class="zmdi zmdi-account-o"></i>
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
                                    <h2 class="title-1">PARAMETRAGE</h2>
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
                                <div class="card mt-4">
                                    <div class="card-header">
                                        <i class="mr-2 fa fa-align-justify"></i>
                                        <strong class="card-title" v-if="headerText">Modals</strong>
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
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
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