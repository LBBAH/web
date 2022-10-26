<?php

include_once "./acciones/connection.php";

if(!isset($_GET["id"])) exit();
$id = $_GET["id"];

$sentencia = $base_de_datos->prepare("SELECT * FROM users WHERE id = ?;");
$sentencia->execute([$id]);
$usuario = $sentencia->fetch(PDO::FETCH_OBJ);

if($usuario === FALSE){
	#No existe
	echo "¡No existe alguna persona con ese ID!";
	exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Hashv2</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./bootstrap/css/signin.css">
</head>
<body>
    <?php
        include ('header.php');
    ?>

    <main class="form-signin w-100 m-auto text-center">
        
        <form method="Post" action = "./acciones/upHashv1.php">
            <img class="mb-4" src="./img/security-1.png" alt="" width="72" height="72">
            <h1 class="h3 mb-3 fw-normal">Actualizar Usuario</h1>
            <input type="text" name="id_USER" value="<?php echo $usuario->id ?>" hidden>
            <div class="form-floating">
                <input type="text" name="nombre" class="form-control" id="floatingnombre" placeholder="Nombre" value="<?php echo $usuario->nombre ?>">
                <label for="floatingText">Nombre</label>
            </div>
            <div class="form-floating">
                <input type="text" name="nameUser" class="form-control" id="floatingText" value="<?php echo $usuario->nameUser ?>" placeholder="Nombre usuario">
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
                <input type="number" name="numero" class="form-control" id="floatingnumero" placeholder="Numero Telefonico" value="<?php echo $usuario->Telefono ?>">
                <label for="floatingTelefonico">Telefono</label>
            </div>
            <div class="form-floating">
                <input type="email" name="email" class="form-control" id="floatingInput" value="<?php echo $usuario->email ?>" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="text" name="password" class="form-control" id="floatingPassword" value="<?php echo $pswd ?>" placeholder="contraseña">
                <label for="floatingPassword">Nueva contraseña</label>
            </div>
            <div class="form-floating" hidden>
                <input type="number" name="id_type" class="form-control" id="floatingid_type" placeholder="id_type" value="3">
                <label for="floatingid_type">id_type</label>
            </div>

            <div class="checkbox mb-3">
                <label>
                    
                </label>
            </div>            
            <button class="w-100 btn btn-lg btn-primary" type="submit">Actualizar</button>            
        </form>
    </main>

    <script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>