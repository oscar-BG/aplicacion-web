<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/cotizacionesEstilos.css">
    <link href="https://cdn.datatables.net/r/bs-3.3.5/jq-2.1.4,dt-1.10.8/datatables.min.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <title>Document</title>
</head>
<body>
    <!-- Incluye el menu responsivo -->
    <?php include "modulos/menu.php"?>
    <div class="container">
            <div class="jumbotron">
            
                <?php
                    if(isset($_GET["menu"])){
                        $menu = $_GET["menu"];
                        switch($menu){
                            case 'agregarProveedor':
                                include 'Vistas/modulos/agregarProveedor.php';
                                break;
                            case 'agregarSucursal':
                                echo '<h1>Agregar sucursal </h1>';
                                break;
                        }
                    } 
                ?>
            </div>
        </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>