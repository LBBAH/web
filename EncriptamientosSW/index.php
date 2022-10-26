<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brayan Andrade Hernandez</title>    
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
</head>
<body>
    <?php
        include ('header.php');
    ?>
    

    <div class="container">
        <main>
            <div class="py-5 text-center">            
            <h2>Metodos de Encriptamientos</h2>
            <p class="lead">INGENIERÍA EN DESARROLLO Y GESTIÓN DE SOFTWARE</p>
            </div>

            <div class="row g-5">
                <div class="col-md-5 col-lg-4 order-md-last">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-primary">Metodos</span>
                    <span class="badge bg-primary rounded-pill">2</span>
                    </h4>
                    <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0"><a href="aes.php">Cifrado simétrico AES</a></h6>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0"><a href="rsa_dsa.php">Cifrado asimétrico RSA</a></h6>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0"><a href="hashv1.php">Hash –V1</a></h6>
                        </div>                       
                    </li>
                    <li class="list-group-item d-flex justify-content-between bg-light">
                        <div class="text-success">
                            <h6 class="my-0"><a href="hashv2.php">Hash - V2</a></h6>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between bg-light">
                        <div class="text-success">
                            <h6 class="my-0"><a href="password_hash.php">BCRYPT</a></h6>
                        </div>
                    </li>
                </div>
                
                <div class="col-md-7 col-lg-8">
                    <h4 class="mb-3">Datos</h4>
                    <form class="needs-validation" novalidate="">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="firstName" class="form-label">Brayan Andrade Hernandez</label>
                        </div>

                        <div class="col-sm-6">
                            <label for="lastName" class="form-label">20200697</label>
                        </div>

                        <div class="col-12">
                            <label for="username" class="form-label">DOCENTE: Ing. Ana María Felipe Redondo</label>
                        </div>

                        <div class="col-12">
                            <label for="email" class="form-label">CUATRIMESTRE: 7° <span class="text-muted"></span></label>
                        </div>

                        <div class="col-12">
                            <label for="email" class="form-label">GRUPO “A” <span class="text-muted"></span></label>
                        </div>

                        <div class="col-sm-6">
                            <label for="firstName" class="form-label">HUEJUTLA DE REYES, HIDALGO</label>
                        </div>

                        <div class="col-sm-6">
                            <label for="lastName" class="form-label">SEPTIEMBRE DEL 2022</label>
                        </div>
                    </div>
                </div>
            </div>
        </main>        
    </div>
    <footer class="py-3 my-4">
            
            <p class="text-center text-muted">© 2022</p>
            <p class="text-center text-muted"> <a href="./avisoprovasidad.php">Aviso de privacidad</a> </p>
        </footer>
    <script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>