<?php
    require_once __DIR__ . '/../class/Proveedor.php';
    interface IProveedor{
        public function guardar(Proveedor $proveedor);
        public function cargar();
    }
?>