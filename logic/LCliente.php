<?php
    require_once __DIR__ . '/../data/DB.php';
    require_once __DIR__ . '/../interfaces/ICliente.php';
    class LCliente implements IClientes{
        public function guardar($cliente){
            $db=new DB();
            $cn=$db->conectar();
            $sql="insert into cliente (nombres, apellidos, dni) values (:nom, :ape, :dni)";
            $ps=$cn->prepare($sql);
            $ps->bindParam(":nom", $cliente->getNombres());
            $ps->bindParam(":ape", $cliente->getApellidos());
            $ps->bindParam(":dni", $cliente->getDni());
            $ps->execute();
        }
        public function cargar(){
            $db=new DB();
            $cn=$db->conectar();
            $sql="select * from cliente";
            $ps=$cn->prepare($sql);
            $ps->execute();
            $clientes=array();
            $filas=$ps->fetchall();
            foreach($filas as $f){
                $cli=new Cliente();
                $cli->setIdCliente($f[0]);
                $cli->setNombres($f[1]);
                $cli->setApellidos($f[2]);
                $cli->setDni($f[3]);
                array_push($clientes, $cli);
            }
            return $clientes;
        }
    }
?>