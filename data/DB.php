<?php
    class DB{
        private $url='mysql:host=localhost;dbname=ventasweb1';
        private $user='root';
        private $password='';
        public function conectar(){
            $cn=new PDO($this->url,$this->user,$this->password);
            return $cn;
        }
    }
?>