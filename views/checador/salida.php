<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once 'public/modules/head.php' ?>
    <title>Salida</title>
      <!-- Favicon-->
      <link rel="icon" type="image/x-icon" href="../../public/img/checador/LOGO2.png" />
       <!-- Bootstrap icons-->
       <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
       
       <?php 
           $Object = new DateTime();
           $Object -> setTimezone(new DateTimeZone('America/Mexico_City'));
           $fecha_entrada = $Object -> format("y-m-d h:i:s a");
           $hora_entrada = $Object -> format("h:i:s a");
           $dia_entrada = $Object -> format("y-m-d ");
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
                <h2>Salida</h2>
                <main>
                        <!-- CAPTURA QR</div> -->
                        <video id="preview" ></video>

                        <!-- CAPTURA FECHA</div> -->
                            <div class="col-lg-4 col-sm-6 mb-4">
                                    <form action="ingresarFechaE.php" method="post" accept-charset="utf-8">
                                      
                                        <input type="datetime" name="fecha_entrada" value="<?= $fecha_entrada ?>">
                                        <!--disabled="true" -->
                                        <!-- <?php $_SESSION['username']?> -->
                                        <input type="submit"  name="ingresar" value="Checar Hora">
                                    </form>
                            </div>
                                
                            </div>
                            <br> <br> 
                            <div style="text-align:center;padding:1em 0;"> <h5><a style="text-decoration:none;" href="https://www.zeitverschiebung.net/es/city/3530597"><br />Mexico City, México</a></h5>
                                        <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=es&size=small&timezone=America%2FMexico_City" width="100%" height="90" frameborder="0" seamless></iframe> </div>
                </main>
            </div>
        </div>
    </div>
    <script src="../../public/js/fmtor_libreria.js"></script>
    <script type="text/javascript" src="../../public/js/checador/instascan.min.js"></script>
    <script src="../../public/js/checador/validaQR.js?1.1"></script>
</body>
</html>