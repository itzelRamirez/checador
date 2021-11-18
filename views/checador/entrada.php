<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once 'public/modules/head.php'; 
            require_once 'public/modules/checador/reloj.php';
    ?>
    <title>Entrada</title>
      <!-- Favicon-->
      <link rel="icon" type="image/x-icon" href="../../public/img/checador/LOGO2.png" />
       <!-- Bootstrap icons-->
       <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
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
                <h2>Registro Entrada</h2>
                <main>
                    <nav class="d-grid g-2">
                        <!-- ABRE VIDEO PARA CAPTURAR QR-->
                        <video src="" id="preview" playsinline autoplay></video>
                   
                    <div class="col-md-6" style="text-align:center;padding:1em 0;">
                        <br> <br>
                        <div class="fs-5 mb-5"> 
                            <br> 
                        </div>
                            <div class="d-block">
                            <div class="informacion">
                                <div class="tarjeta d-flex">
                                    <?php                            
                                        echo  date("d") . " de " . $mes[date("m")] ." del " . date("Y") . "<br>";
                                    ?>
                                    <br><br><br>
                                    <?php echo $hora; ?>
                                    <br><br><br>
                                 <!--   <div class="btn btn-rojo"  type="submit" id="btn-Hora">Checar Hora</div>
                                </form> -->
                                </div>
                            </div>
                            <br> <br> 
                            <div style="text-align:center;padding:1em 0;"> <h5><a style="text-decoration:none;" href="https://www.zeitverschiebung.net/es/city/3530597"><br />Mexico City, México</a></h5>
                                        <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=es&size=small&timezone=America%2FMexico_City" width="100%" height="90" frameborder="0" seamless></iframe> </div>
                    </nav>
                </main>
            </div>
        </div>
    </div>
    <script src="../../public/js/fmtor_libreria.js"></script>
    <script type="text/javascript" src="../../public/js/checador/instascan.min.js"></script>
    <script src="../../public/js/checador/validaQR.js?1.1"></script>
    <script src="../../public/js/checador/validarhora.js?1.1"></script>
</body>
</html>