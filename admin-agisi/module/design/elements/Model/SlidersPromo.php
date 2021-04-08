<?php
    class SliderPromo extends DB { 

        public $table="catalog_sliderPromo";

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
                $query="INSERT INTO {$this->table} (title,parraf,url,image,image_mobile) VALUES ('$data[title]','$data[parraf]','$data[url]','$data[image]','$data[image_mobile]') "; 
                #Prepare
                $insertar = $conexion->prepare($query)->execute($data);
                if($insertar==1){
                    $message='
                        <script> location.href="all" </script>
                    ';
                    return $message;
                }
            } catch (Exception $e) {
                exit("Error : ".$e->getMessage());
            }
        }

        function actualizar($data) {
            $conexion = parent::conectar();
            try {
                $query="UPDATE {$this->table} SET title='$data[title]',parraf='$data[parraf]',url='$data[url]'";
                if (isset($data['image']) AND isset($data['image_mobile'])) {
                    $query.=",image='$data[image]' , image_mobile='$data[image_mobile]' ";
                }else{
                    if (isset($data['image'])) {
                        $query.=",image='$data[image]'";
                    }elseif (isset($data['image_mobile'])) {
                        $query.=",image_mobile='$data[image_mobile]";
                    }
                }
                

                $query.=" WHERE id = $data[id]";

                #Prepare
                $insertar = $conexion->prepare($query)->execute($data);

                if($insertar==1){
                    return $message='
                        <script> location.href="../all" </script>
                    ';
                }else{
                    return $query;
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
