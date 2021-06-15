@extends('layouts.app')

@section('contenu')

<div class="container-fluid demenagement">
   
</div>
<div class="row gris m-0">
        <div class="col-md-12 col-xs-12 mt-4 d-flex justify-content-center">
            <h2 class="font-weight-bold blue">DÉMÉNAGEZ L'ESPRIT TRANQUILLE</h2>
        </div>
        <div class="container tail ">
            <p class="couleur_text">A l’Agence du Déménagement, nous organisons des déménagements pour particuliers et professionnels, à Paris, en Ile de France, et dans toute la France.</p>
            <p class="couleur_text">Avec nos déménageurs qualifiés, organisez votre déménagement en toute confiance. Nous mettons notre expérience et notre savoir faire à votre disposition pour un déménagement en toute tranquillité, au meilleur tarif. De l’estimation à la livraison, nous nous occupons de tout ! Laissez vous guider !</p>
        </div>
        <div class="col-md-12 col-xs-12 mt-4 d-flex justify-content-center">
            <h2 class="font-weight-bold blue">QUI SOMMES NOUS?</h2>
        </div>
        <div  class="container tail ">
            <p class="couleur_text">Société de déménagement à taille humaine, notre mission est de vous accompagner, avec toute l’attention et le suivi nécessaire à votre projet aussi bien pour vos déménagements particuliers et déménagements d’entreprises.</p>
            <p class="couleur_text">Notre priorité : maintenir une qualité de prestation à votre service, du petit au grand déménagement. Nous vous proposons une solution économique : un devis sur mesure, en fonction de vos besoins et de nos disponibilités</p>
        </div>
        <div class="col-md-4 d-flex justify-content-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-patch-check-fill blue" viewBox="0 0 16 16">
                <path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z"/>
            </svg>
            <!--  -->
        </div>
        <div class=" col-md-4 d-flex justify-content-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-emoji-smile-fill blue" viewBox="0 0 16 16">
                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zM4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM10 8c-.552 0-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5S10.552 8 10 8z"/>
            </svg>
        </div>
        <div class=" col-md-4 d-flex justify-content-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-people-fill blue" viewBox="0 0 16 16">
                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
            </svg>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 ">
                    <h4 class="font-weight-bold blue">Entreprise certifie</h4>
                </div>
                <div class="col-md-4 d-flex justify-content-center">
                    <h4 class="font-weight-bold blue">Clients satisfaits</h4>
                </div>
                <div class="col-md-4 d-flex justify-content-end">
                    <h4 class="font-weight-bold blue">Professionalisme</h4>
                </div>
            </div>
        </div>
</div>
<div class=" row bleue m-0">
    <div class="col-md-12 col-xs-12 mt-4 d-flex justify-content-center">
            <h2 class="font-weight-bold text-white my-3">NOS FORMULES DE DEMENAGEMENT</h2>
    </div>
    <div class="container col-md-3">
        <div class="card " style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title blue font-weight-bold text-center mb-3">Formule "Économique"</h5>
                <p class="card-text">
                    <ul>
                        <li class="font-weight-bolder">Protection du mobilier</li>
                        <li class="my-3 font-weight-bolder">Chargement déchargement</li>
                        <li class="font-weight-bolder">Démontage remontage des meubles</li>
                    </ul>
                </p>
                <a href="" class="btn btn-primary d-flex justify-content-center">Demande de devis</a>
            </div>
        </div>
    </div>
    <div class="container col-md-3">
        <div class="card " style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title blue font-weight-bold text-center mb-3">Formule "Économique +"</h5>
                <p class="card-text">
                    <ul>
                        <li class="font-weight-bolder">Protection du mobilier</li>
                        <li class="my-3 font-weight-bolder">Chargement déchargement</li>
                        <li class="font-weight-bolder mb-2">Emballage des objets fragiles (vaisselle, verrerie</li>
                    </ul>
                </p>
                <a href="" class="btn btn-primary d-flex justify-content-center">Demande de devis</a>
            </div>
        </div>
    </div>
    <div class="container col-md-3">
        <div class="card " style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title blue font-weight-bold text-center mb-3">Formule "Économique"</h5>
                <p class="card-text">
                    <ul>
                        <li class="font-weight-bolder">Protection du mobilier</li>
                        <li class="my-3 font-weight-bolder">Chargement déchargement</li>
                        <li  class="my-3 font-weight-bolder">Emballage des objets fragiles (vaisselle, verrerie</li>
                        <li class="font-weight-bolder">Emballage des objets non fragiles (vêtements, livres…)</li>
                    </ul>
                </p>
                <a href="" class="btn btn-primary d-flex justify-content-center">Demande de devis</a>
            </div>
        </div>
    </div>
        
</div>

@endsection