<?php  
    require './config/DB.php';
    require 'Cliente.php';

    class ClienteModel{
        private $db;
        public function __construct(){
            $this->db=DB::conectar();
        }

        public function guardar(Cliente $cliente){
            $sql="insert into cliente (nombres, apellidos, DNI, celular, direccion) values (:no, :ap, :dn, :ce, :di)";
            $ps=$this->db->prepare($sql);
            $ps->bindParam(":no", $cliente->getNombres());
            $ps->bindParam(":ap", $cliente->getApellidos());
            $ps->bindParam(":dn", $cliente->getDireccion());
            $ps->bindParam(":ce", $cliente->getCelular());
            $ps->bindParam(":di", $cliente->getDireccion());
            $ps->execute();
        }

        public function cargar(){
            $sql="select * from cliente";
            $ps=$this->db->prepare($sql);
            $ps->execute();
            $filas=$ps->fetchall();
            $cliente=array();
            foreach($filas as $f){
                $cli=new Cliente();
                $cli->setIdcliente($f[0]);
                $cli->setNombres($f[1]);
                $cli->setApellidos($f[2]);
                $cli->setDni($f[3]);
                $cli->setCelular($f[4]);
                $cli->setDireccion($f[5]);
                array_push($cliente, $cli);
            }
            return $cliente;
        }
    }
?>


