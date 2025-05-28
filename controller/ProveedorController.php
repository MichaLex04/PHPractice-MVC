<?php
    require './model/ProveedorModel.php';
    class ProveedorController{
        public function cargar(){
            $model=new ProveedorModel();
            $Proveedor=$model->cargar();
            require './view/viewCargarProveedor.php';
        }

        public function guardar(){
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $model=new ProveedorModel();
                $proveedor=new Proveedor();
                $proveedor->setNombre($_POST['txtNom']);
                $proveedor->setRuc($_POST['txtRuc']);
                $proveedor->setTelefono($_POST['txtTel']);
                $proveedor->setDireccion($_POST['txtDir']);
                $model->guardar($proveedor);
                header('Location: index.php');
            }
            else{
                require './view/viewGuardarProveedor.php';
            }

        }
    }
?>