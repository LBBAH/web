<?php
    include_once "./acciones/connection.php";
    $sentencia = $base_de_datos->query("SELECT * FROM users WHERE id_type = 5;");
    $usuarios = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BCRYPT registros</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
</head>
<body>
    <?php
        include ('header.php');
    ?>

    <main style="margin:5%">
    
        <h1>Registros con encriptamiento BCRYPT</h1>   
        <a href="password_hash.php">Registrar Usuario</a>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Usario</th>
                <th scope="col">Sexo</th>
                <th scope="col">Correo</th>
                <th scope="col">Contraseña Encriptada con BCRYPT</th>
                <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($usuarios as $usuario){ ?>
                <tr>
                    <td><?php echo $usuario->id ?></td>
                    <td><?php echo $usuario->nameUser ?></td>
                    <td><?php echo $usuario->sexo ?></td>
                    <td><?php echo $usuario->email ?></td>
                    <td><?php echo $usuario->pwd ?></td>
                    <td>                        
                        <a href="<?php echo "./acciones/deletePasHash.php?id=".$usuario->id?>" type="button" class="btn btn-outline-danger">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"></path>
                            </svg>                                                    
                        </a>   
                        <a href="<?php echo "updatePasHash.php?id=".$usuario->id?>" type="button" class="btn btn-outline-warning">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                              <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"></path>
                            </svg>                
                        </a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>   
    
    
    
    <div class="col-lg-6 mx-auto text-center" >
      <p class="lead mb-4"></p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        
      </div>
    </div>
   
    <script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>