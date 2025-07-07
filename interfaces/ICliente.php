<?php
    require_once __DIR__ . '/../class/Cliente.php';
    interface IClientes{
        public function guardar(Cliente $cliente);
        public function cargar();
    }
?>