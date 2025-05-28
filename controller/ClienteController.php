<?php
    require './model/ClienteModel.php';
    class clienteController{
        public function cargar(){
            $model=new clienteModel();
            $cliente=$model->cargar();
            require './view/viewCargarcliente.php';
        }

        public function guardar(){
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $model=new ClienteModel();
                $cliente=new Cliente();
                $cliente->setNombres($_POST['txtNom']);
                $cliente->setApellidos($_POST['txtApe']);
                $cliente->setDni($_POST['txtDni']);
                $cliente->setCelular($_POST['txtCel']);
                $cliente->setDireccion($_POST['txtDir']);
                $model->guardar($cliente);
                header('Location: index.php');
            }
            else{
                require './view/viewGuardarcliente.php';
            }

        }
    }
?>