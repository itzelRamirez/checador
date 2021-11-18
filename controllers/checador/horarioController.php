<?php
    require_once "models/Model.php";
    require_once "routes/web.php";

    class horario{
        public $model;
        public $web;

        public function __construct(){
            $this->model= new Model();
            $this->web = new Web();
        }

        public function mostrar(){
            $this->web->View('listas','');
        }

        public function obtener_lista_diaria () {
            $lisd = $this->model->mostrar('v_lista_diaria');
            $json = json_encode($lisd);
            echo $json;
        }

        public function obtener_lista_semanal(){
            $lisem = $this->model->mostrar('v_lista_semanal');
            $json = json_encode($lisem);
            echo $json;
        }

        public function buscar_lista_diaria(){
            if (isset($_POST['check_lisd'])) {
                if (isset($_POST['f_lisd'])) {
                    $lisd = $this->model->buscar($_POST['tabla'],'lisd',$_POST['f_lisd']);
                    $json = json_encode($lisd);
                    echo $json;
                } else {
                    echo 2;
                }
            } else {
                echo 1;
            }
        }

        public function buscar_lista_semanal() { 
            if (isset($_POST['check_lisem'])) {
                if (isset($_POST['f_lisem'])) {
                    $lisem = $this->model->buscar($_POST['tabla'],'lisem',$_POST['f_lisem']);
                    $json = json_encode($lisem);
                    echo $json;
                } else {
                    echo 2;
                }
            } else {
                echo 1;
            }
        }

        public function buscar_rango_fecha(){
            if(isset($_POST['check_rango_fecha'])){
                if(isset($_POST['f_r_fecha_m'])&& isset($_POST['f_r_fecha_M'])){
                    $r_lis=$this->model->filtrar_rango($_POST['tabla'],'fecha',$_POST['f_r_fecha_m'],$_POST['f_r_fecha_M']);
                    $json=json_encode($r_lis);
                    echo $json;
                }
            }  
        }  

        public function buscar_fecha(){
            if(isset($_POST['check_fecha'])){
                if(isset($_POST['f_fecha'])){
                    $fecha=$this->model->buscar($_POST['tabla'],'fecha',$_POST['f_fecha']);
                    $json=json_encode($fecha);
                    echo $json;
                }
            }
        }

        public function buscar_mes(){
            if(isset($_POST['check_fecha_mes'])){
                if(isset($_POST['f_mes'])){
                    $value ='-'.$_POST['f_mes'].'-';
                    $mes = $this->model->filtrar($_POST['tabla'],'fecha',$value);
                    $json=json_encode($mes);
                    echo $json;
                }
            }
        }

        public function buscar_anio(){
            if(isset($_POST['check_fecha_anio'])){
                if(isset($_POST['f_anio'])){
                    $value=$_POST['f_anio'].'-';
                    $anio=$this->model->filtrar($_POST['tabla'],'fecha',$value);
                    $json=json_encode($anio);
                    echo $json;

                }
            }
        }

        public function buscar_empleado(){
            if(isset($_POST['check_empleado'])){
                if(isset($_POST['f_empleado'])){
                    $empleado=$this->model->buscar($_POST['tabla'],'usuario',$_POST['f_empleado']);
                    $json=json_encode($empleado);
                    echo $json;
                }
            }
        }

    }
?>