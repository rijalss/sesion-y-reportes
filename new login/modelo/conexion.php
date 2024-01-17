<?php

    require_once "config/config.php";

    class Conexion extends PDO{

        private $conex ;

        public function __construct(){

            $conexstring = "mysql:host=".HOST.";dbname=".DBNAME.";charset=utf8";

            try {

                $this->conex = new PDO($conexstring, _DB_USER_, _DB_PASS_);
               $this->conex->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
            }

            catch (PDOException $e) {
                
                die ("Conexión Fallida".$e->getMessage());

            }

        }

        protected function getConex(){
            return  $this->conex; 
        }

    }
 
    //$conexion = mysqli_connect("localhost", "root", "", "true");
          ?>