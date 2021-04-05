<?php
    class Chat extends DB { 

        public $table="catalog_leads";

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
                            $conditions[] = $llave.' '.$valor.' ';
                        }
                    }

                    $query= "SELECT {$cadena} FROM {$this->table} WHERE ".implode(' AND ',$conditions);
                }else{
                    $query= "SELECT {$cadena} FROM {$this->table}";
                }

                //return $query;

                $querySend=$conexion->query($query)->fetchAll();

                return $querySend;
            } catch (Exception $e) {
                exit('Error : '.$e->getMessage());
            }
        }

        public function insertar($data) {
            $conexion=parent::conectar();
            
            try {
                $query_="INSERT INTO {$this->table} (name,lastname,phono,email,message,url ";
                $queryf=" VALUES ('$data[name]','$data[lastname]','$data[phono]','$data[email]','$data[message]','$data[url]'";
                if ($data['id_Article']) {
                    $query_.=", id_Article)";
                    $queryf.=",$data[id_Article])";
                }else{
                    $query_.=")";
                    $queryf.=")";
                }
                $query=$query_.$queryf;
                //return $query;
                #Prepare
                $insertar = $conexion->prepare($query)->execute($data);
                if($insertar==1){
                    $message='
                        insertado Correctamente
                    ';
                    return $message;
                }else{
                    return $query;
                }

            } catch (Exception $e) {
                exit("Error : ".$e->getMessage());
            }
        }

        function actualizar($data) {
            $conexion = parent::conectar();
            try {
                if (isset($data['image'])) {
                    $query="UPDATE {$this->table} SET active='$data[active]',product='$data[product]',id_Categoria=$data[id_Categoria],price=$data[price],quantity='$data[quantity]',sku='$data[sku]',short_description='$data[short_description]',description='$data[description]',meta_URL='$data[metaUrl]',meta_title='$data[metaTitle]',meta_keywords='$data[metaKeyword]',meta_description='$data[metaDescription]',favorite=$data[metaDescription],image='$data[image]'";
                }else{
                    $query="UPDATE {$this->table} SET active='$data[active]',product='$data[product]',id_Categoria=$data[id_Categoria],price=$data[price],quantity='$data[quantity]',sku='$data[sku]',short_description='$data[short_description]',description='$data[description]',meta_URL='$data[metaUrl]',meta_title='$data[metaTitle]',meta_keywords='$data[metaKeyword]',meta_description='$data[metaDescription]',favorite=$data[metaDescription]";
                }

                $query.=" WHERE id = $data[id]";

                #Prepare
                $insertar = $conexion->prepare($query)->execute($data);

                if($insertar==1){
                    return $message='
                        <script> location.href="../all" </script>
                    ';
                }

            } catch (Exception $e) {
                exit("Error : ".$e->getMessage());
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

    }
    
?>