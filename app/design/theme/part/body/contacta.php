<div id="contacta" class="container-fluid bg-dark scroll-margin-5">
      <div class="contacta">
        <div class="row column-reverse">
          <div class="col-md-6 py-5 align-self-center">
            <form action="//<?= $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>" method="post" autocomplete="off" class="my-0">
                <input type="hidden" name="url" value="//<?= $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>">
                <input type="hidden" name="id_Article" value=<?= (isset($idProduct))?$idProduct:''; ?>>
                <div class="form-row form-group mb-4">
                    <div class="col-md-6 mb-3">
                        <div class="form__group field">
                            <input type="input" class="form__field" placeholder="nombre" name="nombre" id="nombre" required>
                            <label for="nombre" class="form__label">Nombre</label>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form__group field">
                            <input type="input" class="form__field" placeholder="apellido" name="apellido" id="apellido" required>
                            <label for="apellido" class="form__label">Apellido</label>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form__group field">
                            <input type="input" class="form__field" placeholder="5546025182" maxlength="10" pattern="[0-9]{1,12}" name="telefono" id="telefono" required>
                            <label for="telefono" class="form__label">Teléfono</label>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form__group field">
                            <input type="email" class="form__field" placeholder="Correo" name="email" id="email" required>
                            <label for="email" class="form__label">Correo</label>
                        </div>
                    </div>
                    <div id="seguroAuto" class="col-12 px-0"></div>
                    <div class="col-md-12 mb-3 form-group">
                        <div class="form__group field w-90">
                            <input type="input" class="form__field" placeholder="mensaje" name="mensaje" id="mensaje" required>
                            <label for="mensaje" class="form__label">Mensaje</label>
                        </div>
                    </div>
                </div>
                <button type="submit" name="crear_interesado" class="btn-info-agis mx-0">
                  Vamos &nbsp; <i class="fas fa-chevron-right"></i>
                </button>
            </form>
          </div>
          <div class="col-md-6 py-5 align-self-center">
            <h1 class="text-danger">AGIS EXTINTORES</h1>
            <h3 class="text-light">Amesh Global Industries Solutions S.A.C</h3>
            <?php 
                if (isset($_POST['crear_interesado'])) :
                    $data=[
                        'url'=>$_POST['url'],
                        'name'=>$_POST['nombre'],
                        'lastname'=>$_POST['apellido'],
                        'phono'=>$_POST['telefono'],
                        'email'=>$_POST['email'],
                        'message'=>$_POST['mensaje']
                    ]; 
                    if ( strlen($_POST['id_Article'])>0) :
                        $data['id_Article']=$_POST['id_Article'];
                    endif;

                    $lead = new Chat();
                    $lead->insertar($data);
                    $mi_mensaje_wsp="https://$linkDesktop$app[telefono]&text=¡Hola! Mi *nombre* es $data[name] $data[lastname] estoy *interesado* en sus servicios mi número de *teléfono* es $data[phono].*Accedí al siguiente link* https:$data[url]. Con el siguiente *mensaje* : $data[message]. *Gracias* *por* *su* *atención* ";
                    ?> 
                    <script> 
                        location.href='<?= $mi_mensaje_wsp;?>'
                    </script>
                        
                    <?php
                endif;
            ?>
          </div>
        </div>
      </div>
    </div>