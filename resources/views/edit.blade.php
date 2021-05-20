@extends('layouts.main')

@section('contenu')


<section class="container">
<div class="offset-4"></div>
    <div class="col-md-4 col-xs-4 m-auto ">
        <h2 class="blue font-weight-bolder ml-2 my-5">Ajouter un bien</h2>
    </div>
<div class="offset-4"></div>

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
    <div class="card-body  shadow">
        
    <form method="post" action="{{ route('ajout_bien.update',$product->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
               <div class="row">
               <input type="hidden"  id="validationDefault01" value="{{auth()->user()->id}}" placeholder="localisation" name="user_id" >
               <div class="col-md-2 col-xs-2 form">
                             <label for="exampleFormControlSelect1"></label>       
                              <input type="text" class='font-weight-bolder' class="form-control rounded-pill"  name="type_biens" value="{{$parametre_bien->type_bien}}"> 
                   </div>

                    <div class="col-md-2 col-xs-2">
                            <label for="validationDefault01" class="font-weight-bolder blue "> </label>
                            <input type="text" value="{{$parametre_bien->localisation}}" class="form-control rounded-pill" id="validationDefault01" value="" placeholder="localisation" name="localisation" >
                            {!! $errors->first('localisation', '<small class="text-danger">:message</small>') !!}
                   </div>

                   <div class="col-md-3 col-xs-3">
                              <label for="exampleFormControlSelect1"></label>       
                              <input type="text" class='font-weight-bolder' class="form-control rounded-pill"  name="nbre_piece" value="{{$parametre_bien->nbre_piece}}"> 
                   </div>

                   <div class="col-md-2 col-xs-2">
                             <label for="validationDefault01" class="font-weight-bolder blue "> </label>
                             <input type="number" class="form-control rounded-pill" id="validationDefault01"value="{{$parametre_bien->toilette}}" placeholder="toilette" name="toilette" >
                             {!! $errors->first('toilette', '<small class="text-danger">:message</small>') !!}
                    </div>

                    <div class="col-md-3 col-xs-3">
                              <label for="exampleFormControlSelect1"></label>       
                              <input type="text" class='font-weight-bolder' class="form-control rounded-pill"  name="garage" value="{{$parametre_bien->garage}}"> 
                   </div>

                         <!--   2 eme ligne       -->
                         <div class="col-md-3 col-xs-3 form mt-3">
                              <label for="exampleFormControlSelect1"></label>       
                              <input type="text" class='font-weight-bolder' class="form-control rounded-pill"  name="courant" value="{{$parametre_bien->courant}}"> 
                   </div>

                    <div class="col-md-3 col-xs-3 mt-3">
                              <label for="exampleFormControlSelect1"></label>       
                              <input type="text" class='font-weight-bolder' class="form-control rounded-pill"  name="assainissement" value="{{$parametre_bien->assainissement}}"> 
                    </div>

                    <div class="col-md-3 col-xs-3 mt-3">
                              <label for="exampleFormControlSelect1"></label>       
                              <input type="text" class='font-weight-bolder' class="form-control rounded-pill"  name="plafond" value="{{$parametre_plafond}}"> 
                    </div>

                    <div class="col-md-3 col-xs-3 mt-3">
                              <label for="exampleFormControlSelect1"></label>       
                              <input type="text" class='font-weight-bolder' class="form-control rounded-pill"  name="carreaux" value="{{$parametre_bien->carreaux}}"> 
                    </div>

                    <div class="col-md-3 col-xs-3 mt-3">
                              <label for="exampleFormControlSelect1"></label>       
                              <input type="text" class='font-weight-bolder' class="form-control rounded-pill"  name="meuble" value="{{$parametre_bien->meuble}}"> 
                    </div>

                    <div class="col-md-3 col-xs-3 mt-3">
                             <label for="validationDefault01" class="font-weight-bolder blue "> </label>
                             <input type="number" class="form-control rounded-pill" id="validationDefault01" value="{{$parametre_bien->prix}}" placeholder="Prix" name="prix" >
                             {!! $errors->first('prix', '<small class="text-danger">:message</small>') !!}
                    </div>

                    <div class="col-md-4 col-xs-4 mt-3">
                             <label for="validationDefault01" class="font-weight-bolder blue "> </label>
                             <input type="text" class="form-control rounded-pill" id="validationDefault01" value="{{$parametre_bien->description}}" placeholder="Description" name="description" >
                             {!! $errors->first('description', '<small class="text-danger">:message</small>') !!}
                    </div>
                    <div class="col-md-2 col-xs-2 mt-3">
                              <label for="exampleFormControlSelect1"></label>       
                              <input type="text" class='font-weight-bolder' class="form-control rounded-pill"  name="statut" value="{{$parametre_bien->statut}}"> 
                    </div>

                    <div class="col-md-4 col-xs-4 mt-3">
                            <label for="validationDefault01" class="font-weight-bolder blue "> </label>
                            <input type="number" class="form-control rounded-pill" id="validationDefault01" value="{{$parametre_bien->caution}}" placeholder="nombre de mois de caution" name="caution" >
                            {!! $errors->first('caution', '<small class="text-danger">:message</small>') !!}
                   </div>

                   <div class="col-md-4 col-xs-4 mt-3">
                            <label for="validationDefault01" class="font-weight-bolder blue "> </label>
                            <input type="number" class="form-control rounded-pill" id="validationDefault01" value="{{$parametre_bien->avance}}" placeholder="nombre de mois d'avance" name="avance" >
                            {!! $errors->first('avance', '<small class="text-danger">:message</small>') !!}
                   </div>

                   <div class="col-md-4 col-xs-4 mt-3">
                            <label for="validationDefault01" class="font-weight-bolder blue "> </label>
                            <input type="number" class="form-control rounded-pill" id="validationDefault01" value="{{$parametre_bien->prestation}}" placeholder="nombre de mois de prestation" name="prestation" >
                            {!! $errors->first('prestation', '<small class="text-danger">:message</small>') !!}
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
                <button type="submit" class="btn btn-primary rounded-pill">Enregistrer</button>
    </form>
    </div>
</section>

@endsection




