<?php
    class Product extends DB { 

        public $table="catalog_product";

        function consultar($data) {
            $conexion=parent::conectar();
        }

        public function insertar($data) {
            $conexion=parent::conectar();
            try {
                $query="INSERT INTO {$this->table} (active) VALUES ('on') ";
                #Prepare
                return $insertar = $conexion->prepare($query)->execute($data);
            } catch (Exception $e) {
                exit("Error : ".$e->getMessage());
            }
        }

        function actualizar($data) {
            $conexion = parent::conectar();
        }

        function eliminar($data) {
            $conexion = parent::conectar();
        }

    }
    
?>