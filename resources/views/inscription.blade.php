<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/inscription.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap/bootstrap-icons-1.4.1/fonts/bootstrap-icons.woff')}}">
    <link rel="stylesheet" href="{{asset('css/form.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <title>Inscription</title>
</head>

<body>
    <header>
        <div class="container-fluid">
            <div class="row shadow reduction_header">
                <div class="col-md-3 mt-3 col-xs-3 blue">
                    <a href="{{asset('accueil')}}"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="40" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                        <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                      </svg></a>
                </div>
                <div class="col-md-3 d-flex justify-content-end mt-1 col-xs-3">
                    <a href="{{asset('accueil')}}" class="position_centre"><img src="{{asset('images/logo2.png')}}" width="110px" height="65px" alt=""></a>
                </div>
                <div class="col-md-6 col-xs-6 d-flex justify-content-start bordure ">
                    <h4 class="font-weight-bolder  blue align mt-4">Inscription</h4>
                </div>
            </div>
        </div>
    </header>
    <div class="container">

        <div class="row top">
            <div class="col-md-6 col-xs-12 mt-4 img">
                <img src="{{asset('images/img_ins.png')}}"  height="550px" alt="">
            </div>
            <div class="col-md-6  col-xs-12 ">
                <div>
                    <h3 class="text-uppercase text-center font-weight-bolder blue">Bonjour !</h3>
                    <p class="font-weight-bolder blue  text-center mt-4">Veuillez vous inscrire pour profiter de toutes les fonctionnalit??s</p>
                </div>

                       @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close ml-1" data-dismiss="alert">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                </svg>
                                </button>
                                <div class="text-center">
                                    <a href="{{route('connexion')}}">Connectez vous d??s ?? pr??sent</a>
                                </div>
                                    <strong>{{ $message }}</strong>
                            </div>
                        @endif


                        @if ($message = Session::get('error'))
                            <div class="alert alert-danger alert-block">
                            <button type="button" class="close ml-2" data-dismiss="alert">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                </svg>
                            </button>	   
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif

                <form method="post" action="{{ url('user-store') }}">
                @csrf
                    <div class="row ml-5 ">
                        <div class="offset-3 "></div>
                                <div class="form-group  m-auto col-md-5 col-xs-5">
                                    <label for="exampleFormControlSelect1"> </label>
                                        <select class="form-control rounded-pill"  name="role" id="exampleFormControlSelect1">
                                        @foreach($parametres as $parametre)
                                            <option  class='font-weight-bolder' value="{{$parametre->id}}">{{$parametre->role}}</option>
                                        @endforeach
                                      </select>
                                </div>
                        <div class="offset-4 "></div>
                    </div>

                    <div class="form-row mt-4">
                        <div class="col-md-6 ">
                            <label for="validationDefault01" class="font-weight-bolder blue ">Nom</label>
                            <input type="text" class="form-control rounded-pill" id="validationDefault01" value="" placeholder="Entrer votre nom" name="first_name" >
                            {!! $errors->first('first_name', '<small class="text-danger">:message</small>') !!}
                        </div>
                        <div class="col-md-6 ">
                            <label for="validationDefault01" class="font-weight-bolder blue">Pr??nom</label>
                            <input type="text" class="form-control rounded-pill" id="validationDefault01" value="" placeholder="Entrer votre prenom" name="last_name">
                            {!! $errors->first('last_name', '<small class="text-danger">:message</small>') !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" class="font-weight-bolder blue">Email</label>
                        <input type="Email" class="form-control rounded-pill" name="email" placeholder="Entrer votre email" id="inputEmail">
                        {!! $errors->first('email_name', '<small class="text-danger">:message</small>') !!}
                    </div>
                    <div class="form-group">
                        <label for="inputNumber" class="font-weight-bolder blue">Num??ro de T??l??phone</label>
                        <input type="number" name="phone" placeholder="Entrer votre numero" class="form-control rounded-pill">
                        {!! $errors->first('phone_name', '<small class="text-danger">:message</small>') !!}
                    </div>
                    <div class="form-group ">
                        <label for="inputPassword4" class="font-weight-bolder blue">Mot de passe</label>
                        <input type="password"  class="form-control rounded-pill" name="password" id="inputPassword4">
                            @if($errors->has('password'))
                                   <p class="font-weight-bold text-danger">{{$errors->first('password') }}</p> 
                            @endif
                    </div>
                    <div class="form-group ">
                        <label for="inputPassword4" class="font-weight-bolder blue "> Confirm?? Mot de passe</label>
                        <input type="password" class="form-control rounded-pill" name="confirm_password" id="inputPassword4 ">
                            @if($errors->has('password'))
                                 <p class="font-weight-bold text-danger">{{$errors->first('password') }}</p> 
                            @endif
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary rounded-pill justify-content-center font-weight-bolder ">S'inscrire</button>
                            <div class='mt-2'>
                                <h6 class='font-weight-bolder'>Avez vous un compte? <a href="{{asset('connexion')}}">Connectez-vous</a></h6> 
                            </div>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
 </div>
    </div>

    <footer class='foot_ins'>
        
    </footer>
</body>

</html>