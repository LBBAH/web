<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metodo BCRYPT</title>    
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./bootstrap/css/signin.css">

</head>
<body>
    <?php
        include ('header.php');
    ?>
    <main class="form-signin w-100 m-auto text-center">
        
        <form method="Post" action = "./acciones/createpwd_hash.php">
            <img class="mb-4" src="./img/security-1.png" alt="" width="72" height="72">
            <h1 class="h3 mb-3 fw-normal">Registro usuario</h1>
            <div class="form-floating">
                <input type="text" name="nombre" class="form-control" id="floatingnombre" placeholder="Nombre">
                <label for="floatingText">Nombre</label>
            </div>
            <div class="form-floating">
                <input type="text" name="nameUser" class="form-control" id="floatingText" placeholder="Nombre usuario">
                <label for="floatingText">Nombre Usuario</label>
            </div>
            <div class="form-floating">
                <select name="sexo" id="loatingSexo" class="form-control" id="floatingfechanacimiento">
                    <option value="H">Hombre</option>
                    <option value="M">Mujer</option>
                </select>                
                <label for="floatingfechanacimiento">Sexo</label>
            </div>
            <div class="form-floating">
                <input type="number" name="numero" class="form-control" id="floatingnumero" placeholder="Numero Telefonico">
                <label for="floatingTelefonico">Telefono</label>
            </div>
            <div class="form-floating">
                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <div class="form-floating" hidden>
                <input type="number" name="id_type" class="form-control" id="floatingid_type" placeholder="id_type" value="5">
                <label for="floatingid_type">id_type</label>
            </div>

            <div class="checkbox mb-3">
                <label>
                    Cifrado BCRYPT
                </label>
                <br>
                <a href="./avisoprovasidad.php">Aviso de privacidad</a>
            </div>            
            <button class="w-100 btn btn-lg btn-primary" type="submit">Registrar</button>            
        </form>
    </main>
    <script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>