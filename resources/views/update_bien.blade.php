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
    
    <form method="post" action="" enctype="multipart/form-data">
       
        @csrf
        @method('PUT')
               <div class="row">
               <input type="hidden"  id="validationDefault01" value="" placeholder="localisation" name="user_id" >
               <div class="col-md-2 col-xs-2 form">
                             <label for="exampleFormControlSelect1"></label>       
                              <input type="text" class='font-weight-bolder' class="form-control rounded-pill"  name="type_biens" value=""> 
                   </div>

                    <div class="col-md-2 col-xs-2">
                            <label for="validationDefault01" class="font-weight-bolder blue "> </label>
                            @foreach($products as $product)
                            <input type="text" value="{{$product->localisation}}" class="form-control rounded-pill" id="validationDefault01" value="" placeholder="localisation" name="localisation" >
                            {!! $errors->first('localisation', '<small class="text-danger">:message</small>') !!}
                            @endforeach
                   </div>

                   <div class="col-md-3 col-xs-3">
                              <label for="exampleFormControlSelect1"></label>
                              @foreach($products as $product)       
                              <input type="text" class='font-weight-bolder' class="form-control rounded-pill"  name="nbre_piece" value="{{$product->nbre_piece}}"> 
                              @endforeach
                   </div>

                    <div class="modal-footer">
                <button type="submit" class="btn btn-primary rounded-pill">Enregistrer</button>
            
    </form>
    </div>
</section>

@endsection




