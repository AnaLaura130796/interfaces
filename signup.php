    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Traver&Wish</title>

        <meta name="description" content="Entrega Primer Parcial">
        <meta name="" content="PrimeraEntrega">

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/scripts.js"></script>
    </head>
<script>
   function insertarUsuario()
            {
                if (navigator.onLine == true) {

                    $.ajax({
                        data:
                        {
                            action: 'act_insertarusuario',
                            nombre_usuario:    $('#nombre_usuario').val(),
                            nombres: $('#nombres').val(),
                            amaterno:      $('#apaterno').val(),
                            amaterno: $('#amaterno').val(),
                            password:    $('#password').val()
                        },
                        url:        "srvBO.php",
                        type:       'POST',
                        cache:      false,
                        
                        success:    function(data, status, xhr) {
                           alert("success");
                            
                            lArr= jQuery.parseJSON(data);
                            console.log(lArr);
                           switch (lArr.res) {
                                  case 0:
                                    console.log(lArr.code);
                                    break;
                                  case 1:
                                    console.log(lArr.id);
                                                break;
                            }
                        }, // success
                        
                        error:      function(xhr, status, error) {
                            console.log('Error insertarUsuario');
                        } // error
                    });
                    
                } else {
                    console.log('Advertencia sin servicio');
                }
            }//prInsTarea

            $(document).ready(function(){
                $('#b_add').click(function(){
                    insertarUsuario();
                   
                });
            });

</script>
    <body>
        <!--NAVBAR-->
       
        <header class="header-1">
            <div class="overlay">
                <div class="container h-100">
                    <div class="d-flex text-center h-100">
              
                        
                        <!--LOGIN-->
                        <div class="my-auto w-100 text-white">
                            <h5 class="mb-5 display-4">Se parte de la comunidad </h5>
                            <div class="row">
                                <div class="col-12">
                                    <label>Nombre(s):</label>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-4"></div>
                                <div class="col-4">
                                    <input for="nombres" type="text" placeholder="" class="form-control" />
                                </div>
                                <div class="col-4"></div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <label>Apellido Paterno:</label>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-4"></div>
                                <div class="col-4">
                                    <input for="apaterno" type="text" placeholder="" class="form-control" />
                                </div>
                                <div class="col-4"></div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <label>Apellido Materno:</label>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-4"></div>
                                <div class="col-4">
                                    <input for="amaterno" type="text" placeholder="" class="form-control" />
                                </div>
                                <div class="col-4"></div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <label>Ingresa un nombre de usuario:</label>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-4"></div>
                                <div class="col-4">
                                    <input for="nombre_usuario" type="text" placeholder="" class="form-control" />
                                </div>
                                <div class="col-4"></div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <label>Ingresa una contraseña:</label>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-4"></div>
                                <div class="col-4">
                                    <input for="password" type="password" placeholder="" class="form-control" />
                                </div>
                                <div class="col-4"></div>
                            </div>
                         
                        
                            <div class="form-group"></div>
                            <div class="form-group">
  <div class="col-md-4 control-label"  for="b_add">&nbsp;</div>
    <div class="col-md-4">
    <a id="b_add" name="b_add" class="btn btn-primary">Agregar</a>
  </div>
  </div>
                        </div>

                    </div>

                </div>
            </div>
            </div>
            </div>
        </header>

    </body>

    </html>