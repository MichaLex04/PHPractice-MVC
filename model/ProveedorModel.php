<?php  
    require './config/DB.php';
    require 'Proveedor.php';

    class ProveedorModel{
        private $db;
        public function __construct(){
            $this->db=DB::conectar();
        }

        public function guardar(Proveedor $proveedor){
            $sql="insert into proveedor (nombre, ruc, telefono, direccion) values (:no,:ru,:te,:di)";
            $ps=$this->db->prepare($sql);
            $ps->bindParam(":no", $proveedor->getNombre());
            $ps->bindParam(":ru", $proveedor->getRuc());
            $ps->bindParam(":te", $proveedor->getTelefono());
            $ps->bindParam(":di", $proveedor->getDireccion());
            $ps->execute();
        }

        public function cargar(){
            $sql="select * from proveedor";
            $ps=$this->db->prepare($sql);
            $ps->execute();
            $filas=$ps->fetchall();
            $proveedor=array();
            foreach($filas as $f){
                $pro=new Proveedor();
                $pro->setIdproveedor($f[0]);
                $pro->setNombre($f[1]);
                $pro->setRuc($f[2]);
                $pro->setTelefono($f[3]);
                $pro->setDireccion($f[4]);
                array_push($proveedor, $pro);
            }
            return $proveedor;
        }
    }
?>


