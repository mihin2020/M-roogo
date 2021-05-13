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
</body>
</html>