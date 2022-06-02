<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Checkout example · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/checkout/">



    <!-- Bootstrap core CSS -->
    <link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/features/">

    <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container">
        <main>
            <form method="post" class="signUp">
                <div class="py-5 text-center">

                    <h2>Formulario petición poliza</h2>

                </div>

                <div class="row g-5">
                    <div class="col-md-5 col-lg-4 order-md-last">



                    </div>
                    <div class="col-6">
                        <h4 class="mb-3">Datos Usuario</h4>
                        <form class="needs-validation" novalidate>
                            <div class="row g-3">
                                <div class="col-sm-6">

                                    <label for="nombre" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="dni" name="nombre" placeholder="nombre" required>
                                    <div class="invalid-feedback">
                                        Por favor, ingrese su Nombre
                                    </div>

                                </div>

                                <div class="col-sm-6">
                                    <label for="email" class="form-label">email</label>
                                    <input type="text" class="form-control" id="email" name="email" placeholder="email">
                                    <div class="invalid-feedback">
                                        Por favor, ingrese su email
                                    </div>

                                </div>

                                <div class="col-sm-6">
                                    <label for="dni" class="form-label">dni</label>
                                    <input type="numbre" class="form-control" id="dni" name="dni" placeholder="Número DNI" required>
                                    <div class="invalid-feedback">
                                        Por favor, ingrese su dni
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label for="codigo_postal" class="form-label">Correo postal</label>
                                    <input type="text" class="form-control" id="codigo_postal" name="codigo_postal" placeholder="Código postal" required>
                                    <div class="invalid-feedback">
                                        Por favor, ingrese Correo postal
                                    </div>
                                </div>
                            </div>
                            <h4 class="mb-3">Datos poliza</h4>


                            <div class="col-12">

                                <label for="tipo_vehiculo" class="form-label">¿Qué tipo de vehículo va a asegurar?</label>
                                <select class="form-select" name="tipo_vehiculo">
                                    <option disabled value="unset">--Select--</option>
                                    <option value="coche">coche</option>
                                    <option value="moto">moto</option>

                                </select>
                            </div>

                            <div class="col-12">

                                <label for="antiguedad_carnet" class="form-label">¿El carnet de conducir tiene más de 5 años?</label>
                                <select class="form-select" name="antiguedad_carnet">
                                    <option disabled value="unset">--Select--</option>
                                    <option value="si">si</option>
                                    <option value="no">no</option>

                                </select>
                            </div>

                            <div class="col-12">

                                <label for="multipropietario" class="form-label">¿Dispone de más vehículos?</label>
                                <select class="form-select" name="multipropietario">
                                    <option disabled value="unset">--Select--</option>
                                    <option value="si">si</option>
                                    <option value="no">no</option>

                                </select>
                            </div>

                            <div class="col-12">
                                <label for="valor_vehiculo" class="form-label">¿Cuál es el valor del vehículo a asegurar?</label>
                                <input type="number" class="form-control" id="valor" name="valor_vehiculo" placeholder="Valor vehículo" required>
                                <div class="invalid-feedback">
                                    Por favor, ingrese el valor del vehículo a asegurar
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="plazos_pago" class="form-label">¿En cuántos plazos desea pagar el seguro?</label>
                                <input type="number" class="form-control" id="plazos" name="plazos_pago" placeholder="plazos" required>
                                <div class="invalid-feedback">
                                    Por favor, ingrese el número de plazos
                                </div>
                            </div>




                            <input style="margin-top:2rem; width:25%;" class="btn btn-success ml-2" type="submit" name="register">
                    </div>




            </form>


            <script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>


<?php
include("register.php");

?>