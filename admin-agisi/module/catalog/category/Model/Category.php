<?php
    class Category extends DB{
        public $table='catalog_category';

        function consultar($campos=null,$where=null) {
            $conexion=parent::conectar();
            try {
                $query="";
                #['edad','paterno']
                #['edad < '=> 25]
                if (!empty($campos)) {
                    foreach($campos as $campo){
                        $cadena .= $campo .',';
                    }
                    $cadena = substr($cadena,0,-1);
                }else{
                    $cadena='*';
                }

                if ($where != null) {
                    # ['edad >'=> 25,'paterno LIKE' => '%D%'];
                    foreach($where as $llave => $valor){
                        if ($valor != '') {
                            $conditions[] = $llave.' '.$valor;
                        }
                    }

                    $query= "SELECT {$cadena} FROM {$this->table} WHERE ".implode('AND',$conditions);
                }else{
                    $query= "SELECT {$cadena} FROM {$this->table}";
                }

                //return $query;

                $querySend=$conexion->query($query)->fetchAll();
                return $querySend;
            } catch (Exception $e) {
                exit('Error : .$e->getMessage()');
            }
        }

        public function insertar($data) {
            $conexion=parent::conectar();
            try {
                $query="INSERT INTO {$this->table} (active,category,short_description,description,slug,meta_title,meta_keywords,meta_description,image) VALUES ('$data[active]','$data[category]','$data[short_description]','$data[description]','$data[slug]','$data[meta_title]','$data[meta_keywords]','$data[meta_description]','$data[image]')";
                #Prepare
                $insertar = $conexion->prepare($query)->execute();
                if($insertar==1){
                    $message='
                        <script> location.href="all" </script>
                    ';
                    return $message;
                }
            } catch (Exception $e) {
                exit('Error : .$e->getMessage()');
            }
        }

        function actualizar($data) {
            $conexion = parent::conectar();
            $query="UPDATE {$this->table} SET active='$data[active]',category='$data[category]',short_description='$data[short_description]',description='$data[description]',slug='$data[slug]',meta_title='$data[meta_title]',meta_keywords='$data[meta_keywords]',meta_description='$data[meta_description]'";
            if (isset($data['image'])) {
                $query.=",image='$data[image]'";
            }
            $query.=" WHERE id= $data[id]";

            //return $query;
            #Prepare
            $insertar = $conexion->prepare($query)->execute($data);
            if($insertar==1){
                $message='
                    <script> location.href="../all" </script>
                ';
                return $message;
            }

        }

        function eliminar($data) {
            $conexion = parent::conectar();
            try {
                $query="DELETE FROM {$this->table} WHERE " . $data['where']. " = ". $data['id'];
                $delete = $conexion->prepare($query)->execute($data);
                if($delete==1){
                    $message='
                        <script> location.href="all" </script>
                    ';
                    return $message;
                }
            } catch (Exception $e) {
                exit("Error:".$e->getMessage());
            }
        }

        function getCategory($lug)
        {
            $query = "SELECT 'category' FROM {$this->table} WHERE slug = '{$lug}';";
            $querySend = $conexion->query($query)->fetchAll();
            return $querySend;
        }
    }
?>