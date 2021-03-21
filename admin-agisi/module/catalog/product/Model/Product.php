<?php
    class Product extends DB { 

        public $table="catalog_product";

        function consultar($data) {
            $conexion=parent::conectar();
        }

        public function insertar($data) {
            print_r(parent::conectar());
            try {
                return $query="INSERT INTO {$this->table} SET active='on' ";
                #Prepare
                $insertar = $conexion->prepare($query)->execute($data);
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