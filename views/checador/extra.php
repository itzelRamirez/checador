<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once 'public/modules/head.php' ?>
    <title>Extra</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="../../public/img/checador/LOGO2.png" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../../public/css/estilomenuAsistencia.css" rel="stylesheet" />
       
       <?php 
           $Object = new DateTime();
           $Object -> setTimezone(new DateTimeZone('America/Mexico_City'));
           $fecha_salida = $Object -> format("y-m-d h:i:s a");
       ?>
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
                <h2>Salida de Emergencia</h2>
                <main>
                     <!-- Page Content-->
                     <section class="pt-3">
                            <div class="container px-lg-5 text-center">
                                <!-- Page Features-->
                                <div class="row gx-lg-5">
                                <div class="col-lg-4 col-sm-6 mb-4">
                                        <div class="card h-100">
                                            <div class="card-body">
                                                <!-- CAPTURA QR</div> -->
                                                <video id="preview" height="350" width="200"></video>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="col-lg-4 col-sm-6 mb-4">
                                        <div class="card h-100">
                                            <a href=""><img class="card-img-top" src="../../public/img/checador/herido.png" ></a>
                                                <div class="card-body">
                                                    <h4 class="card-title">
                                                    <form action="ingresarFechaAR.php" method="post" accept-charset="utf-8">
                                                        <input type="datetime"  name="fecha_salida" value="<?= $fecha_salida ?>">
                                                        <input type="submit"  name="ingresar" value="Accidente Laboral">
                                                    </form>
                                                    </h4>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6 mb-4">
                                        <div class="card h-100">
                                            <a href=""><img class="card-img-top" src="../../public/img/checador/fiebre.png" ></a>
                                                <div class="card-body">
                                                    <h4 class="card-title">
                                                    <form action="ingresarFechaAR.php" method="post" accept-charset="utf-8">
                                                        <input type="datetime"  name="fecha_salida" value="<?= $fecha_salida ?>">
                                                        <input type="submit"  name="ingresar" value="Malestar Salud">
                                                    </form>
                                                    </h4>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6 mb-4">
                                        <div class="card h-100">
                                            <a href=""><img class="card-img-top" src="../../public/img/checador/problemap.png" ></a>
                                                <div class="card-body">
                                                    <h4 class="card-title">
                                                    <form action="ingresarFechaAR.php" method="post" accept-charset="utf-8">
                                                        <input type="datetime"  name="fecha_salida" value="<?= $fecha_salida ?>">
                                                        <input type="submit"  name="ingresar" value="Problema Personal">
                                                    </form>
                                                    </h4>
                                                </div>
                                        </div>
                                    </div>                                        
                                    <div style="text-align:center;padding:1em 0;"> <h5><a style="text-decoration:none;" href="https://www.zeitverschiebung.net/es/city/3530597"><br />Mexico City, México</a></h5>
                                        <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=es&size=small&timezone=America%2FMexico_City" width="100%" height="90" frameborder="0" seamless></iframe> </div>
                                </div>
                            </div>
                        </section>      
                </main>
            </div>
        </div>
    </div>
    <script src="../../public/js/fmtor_libreria.js"></script>
    <script type="text/javascript" src="../../public/js/checador/instascan.min.js"></script>
    <script src="../../public/js/checador/validaQR.js?1.1"></script>
</body>
</html>