<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once 'public/modules/head.php' ?>
    <title>Página Principal</title>
</head>
<body>
    <div class="contenedor">
        <a href="#top" class="btn btn-icon btn-flotante btn-icon-self material-icons" id="btn-subir">expand_less
        </a>
        <?php require_once 'public/modules/menus/produccion.php'; ?>
        <div class="contenido hidde_menu" id="contenido">
            <?php require_once 'public/modules/header.php'; ?>
            <div class="informacion">
                <h1>Control de Producción</h1>
                <div class="d-grid g-3">
                    <div class="info_general hidden">
                        <div class="tarjeta info">
                            <h3>Información de la O.P.</h3>
                            <p>Código Del Dibujo:</p>
                            <label class="cod_dibujo"></label>
                            <p>Cliente:</p>
                            <label class="cliente"></label>
                            <p>Fecha:</p>
                            <label class="fecha"></label>
                            <p>Cantidad:</p>
                            <label class="cantidad"></label>
                            <p>Descripción:</p>
                            <label class="descripcion"></label>
                        </div>
                    </div>
                    <div class="info_control" style="grid-area: 1 / 2 / 2 / 4;">
                        <div class="tarjeta-transparente estados">
                            <div class="options d-flex align-content-center">
                                <input type="number" name="op_control" id="op_control" data-control="" placeholder="Orden de Producción">
                                <button class="btn btn-icon-self material-icons">print</button>
                            </div>
                            <div class="botones d-flex">
                                <button class="btn btn-transparent boton_estado" data-estado="v_forjado" data-titulo="FORJADO" data-id="1">FORJADO</button>
                                <button class="btn btn-transparent boton_estado" data-estado="v_ranurado" data-titulo="RANURADO" data-id="2">RANURADO</button>
                                <button class="btn btn-transparent boton_estado" data-estado="v_rolado" data-titulo="ROLADO" data-id="3">ROLADO</button>
                                <button class="btn btn-transparent boton_estado" data-estado="v_shank" data-titulo="SHANK" data-id="4">SHANK</button>
                                <button class="btn btn-transparent boton_estado" data-estado="v_cementado" data-titulo="CEMENTADO" data-id="5">CEMENTADO</button>
                                <button class="btn btn-transparent boton_estado" data-estado="v_acabado" data-titulo="ACABADO" data-id="6">ACABADO</button>
                            </div>
                        </div>
                        <div class="estado_tabla d-flex align-content-center tarjeta">
                            <div class="titulo d-flex align-content-center">
                                <button class="material-icons btn btn-icon-self" id="btn-form-control">add</button>
                                <h2 class="titulo_estado">No seleccionado</h2>
                            </div>
                            <div class="info_total d-flex align-content-center justify-right">
                                <p class="factor">Factor: 00.00</p>
                                <p class="total_acumuladas">Pzas. Acumuladas: 0000</p>
                                <p class="total_kg">Total Kg: 000.00</p>
                            </div>
                        </div>
                        <div class="tabla tarjeta">
                            <table class="table table-control estado_v_forjado">
                                <thead>
                                    <th></th>
                                    <th>Botes</th>
                                    <th>Fecha</th>
                                    <th>Pzas. Producidas</th>
                                    <th>Kg</th>
                                    <th>Máquina</th>
                                </thead>
                                <tbody class="body body_v_forjado"></tbody>
                            </table>
                            <table class="table table-control estado_v_ranurado">
                                <thead>
                                    <th></th>
                                    <th>Botes</th>
                                    <th>Fecha</th>
                                    <th>Pzas. Producidas</th>
                                    <th>Kg</th>
                                    <th>Máquina</th>
                                </thead>
                                <tbody class="body body_v_ranurado"></tbody>
                            </table>
                            <table class="table table-control estado_v_rolado">
                                <thead>
                                    <th></th>
                                    <th>Botes</th>
                                    <th>Fecha</th>
                                    <th>Pzas. Producidas</th>
                                    <th>Kg</th>
                                    <th>Máquina</th>
                                </thead>
                                <tbody class="body body_v_rolado"></tbody>
                            </table>
                            <table class="table table-control estado_v_shank">
                                <thead>
                                    <th></th>
                                    <th>Botes</th>
                                    <th>Fecha</th>
                                    <th>Pzas. Producidas</th>
                                    <th>Kg</th>
                                    <th>Máquina</th>
                                </thead>
                                <tbody class="body body_v_shank"></tbody>
                            </table>
                            <table class="table table-control estado_v_cementado">
                                <thead>
                                    <th></th>
                                    <th>Botes</th>
                                    <th>Fecha</th>
                                    <th>Pzas. Producidas</th>
                                    <th>Kg</th>
                                    <th>Máquina</th>
                                </thead>
                                <tbody class="body body_v_cementado"></tbody>
                            </table>
                            <table class="table table-control estado_v_acabado">
                                <thead>
                                    <th></th>
                                    <th>Botes</th>
                                    <th>Fecha</th>
                                    <th>Pzas. Producidas</th>
                                    <th>Kg</th>
                                    <th>Máquina</th>
                                </thead>
                                <tbody class="body body_v_acabado"></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../../public/js/fmtor_libreria.js"></script>
</body>
</html>