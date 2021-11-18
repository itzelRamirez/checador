<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once 'public/modules/head.php' ?>
    <title>Menu Checador</title>
      <!-- Favicon-->
      <link rel="icon" type="image/x-icon" href="../../public/img/checador/LOGO2.png" />
</head>
<body>
    <div class="contenedor principal">
        <a href="#top" class="btn btn-icon btn-flotante" id="btn-subir">
            <i class="material-icons">expand_less</i> 
            Subir
        </a>
        <div class="contenido hidde_menu" id="contenido">
            <?php require_once 'public/modules/depto.php'; ?>
            <div class="informacion">
                <h2>Registro de Asistencias</h2>
                <main>
                    <nav class="d-grid g-2">
                        <a href="http://localhost/sistema_fmtor/checador/main/entrada"
                            class="tarjeta d-flex align-content-center">
                            <img src="../../public/img/checador/inicio.png" width="50" height="60">
                           <!-- <i class="material-icons icon">insert_emoticon</i> --> <i></i>
                            ENTRADA
                        </a>
                        <a href="http://localhost/sistema_fmtor/checador/main/almuerzo"
                        class="tarjeta d-flex align-content-center">
                        <img src="../../public/img/checador/break.png" width="50" height="60">
                           <!-- <i class="material-icons icon">insert_emoticon</i> --> <i></i>
                            ALIMENTOS
                        </a>
                        <a href="http://localhost/sistema_fmtor/checador/main/salida"
                        class="tarjeta d-flex align-content-center">
                        <img src="../../public/img/checador/salida2.png" width="50" height="60">
                           <!-- <i class="material-icons icon">insert_emoticon</i> --> <i></i>
                            SALIDA
                        </a>
                        <a href="http://localhost/sistema_fmtor/checador/main/extra"
                        class="tarjeta d-flex align-content-center">
                        <img src="../../public/img/checador/incidente.png" width="50" height="60">
                           <!-- <i class="material-icons icon">insert_emoticon</i> --> <i></i>
                            EXTRA
                        </a>
                    </nav>
                </main>
            </div>
        </div>
    </div>
    <script src="../../public/js/fmtor_libreria.js"></script>
</body>
</html>