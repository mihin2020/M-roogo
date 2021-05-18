<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Dashboard</title>
</head>
<body>
<div class="container">
    <div class="row mt-5">
        <div class="offset-4"></div>
            <div class="col-md-4 col-xs-12">
            <p class="text-center font-weight-bold">Parametrage</p>
                <form method="post" action="/dash">
                    @csrf
                    <div class="row">
                        <div class="col">
                        <input type="text" class="form-control" name="role" placeholder="type utilisateur">
                        <button type="submit" class="btn btn-primary mt-2">valider</button>
                        </div>
                 </form> 
            </div>
        <div class="offset-4"></div>    
    </div>
</div>
<div class="container">
    <div class="row mt-5">
        <div class="offset-4"></div>
            <div class="col-md-4 col-xs-12">
            <p class="text-center font-weight-bold">parametrage bien</p>
                <form method="post" action="/dash_bien">
                    @csrf
                    <div class="row">
                        <div class="col">
                        <div class="form-group">
                            <label for="exampleInputText">Type de bien</label>
                            <input type="text" class="form-control" id=""  name="type_bien" placeholder="bien">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputText">Nombre de pièce</label>
                            <input type="text" class="form-control" id=""  name="nbre_piece" placeholder="piece">
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">valider</button>
                        </div>
                 </form> 
            </div>
        <div class="offset-4"></div>    
    </div>
</div>
<div class="container">
    <div class="row mt-5">
        <div class="offset-4"></div>
            <div class="col-md-4 col-xs-12">
            <p class="text-center font-weight-bold">ressources</p>
                <form method="post" action="ressource">
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
                        <button type="submit" class="btn btn-primary mt-2">valider</button>
                        </div>
                 </form> 
            </div>
        <div class="offset-4"></div>    
    </div>
</div>
</body>
</html>