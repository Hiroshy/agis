<?php
    class Customer extends DB { 
        
        public $table = "catalog_leads";
        
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
                exit('Error : '.$e->getMessage());
            }
        }

        public function insertar($data){
            $conexion=parent::conectar();

            try {
                
                $query="INSERT INTO {$this->table} (name, lastname, phono, email, message, idArticle, Quantity";
                $query_val="VALUES ('$data[name]','$data[lastname]','$data[phono]','$data[email]','$data[message]',".($data['idArticle']=='')?null:$data['idArticle'].",".($data['Quantity']=='')?null:$data['Quantity'];

                if($data['url']):
                    $query.=",url)";
                    $query_val.=",'$data[url]')";
                else:
                    $query.=")";
                    $query_val.=")";
                endif;

                return $query.' '.$query_val;

                #Insertar
                $insertar = $conexion->prepare($query);
                if($insertar==1):
                    $message='
                        <script> location.href="all" </script>
                    ';
                    return $message;
                endif; 

            } catch (Exception $e) {
                exit('Error:'.$e->getMessage());
            }
        }

        public function actualizar($data){

        }

        public function eliminar($data){}

    }
?>