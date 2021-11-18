<!DOCTYPE html>
<html lang="es">
<head>
    <?php require_once 'public/modules/head.php' ?> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listas</title>
      <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="../../public/img/checador/LOGO2.png" />
    <link rel="stylesheet" href="../../public/css/default.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
</head>
<body>
    <div class="contenedor">
    <a href="#top" class="btn btn-icon-self btn-flotante material-icons" id="btn-subir">expand_less
        </a>
        <?php require_once 'public/modules/menus/checador.php'; ?>
        <div class="contenido hidde_menu" id="contenido">
            <?php require_once 'public/modules/header.php'; ?>
            <div class="informacion">
                <h1>Listas</h1>
                <div class="tarjeta-transparente d-flex justify-right">
                    <button class="btn btn-icon-self btn_filtrar_open material-icons" data-modal="modal-filtrar">filter_alt</button>
                    <button class="btn btn-icon-self material-icons">print</button>    
                </div>
                <div class="tarjeta">
                  <div class="main">
                      <div class="row-con">
                        <div class="tabla">
                            <table> 
                                <thead class="cabecera">
                                    <th>Nombre</th>
                                    <th>Horario</th>
                                    <th>Martes</th>
                                    <th>Miercoles</th>
                                    <th>Jueves</th>
                                    <th>Viernes</th>
                                    <th>Sabado</th>
                                    <th>Lunes</th>
                                    <th>Descuento</th>
                                    <th>Nota</th>
                                </thead>
                                <tbody class="body"></tbody>             
                            </table>
                        </div>
                    </div>
                  </div>
                </div>
                <?php require_once 'public/modules/checador/listas_modal.php'; ?>
            </div>
        </div>
    </div>
    <script src="../../public/js/fmtor_libreria.js"></script>
    <script src="../../public/js/checador/filtro.js"></script>
    <script src="../../public/js/checador/listas.js"></script>
</body>
</html>