
<?php
session_start();
require_once('config.php');
 
if(isset($_POST['submit']))
{
    if(isset($_POST['usuario'],$_POST['nombre'],$_POST['apellido'],$_POST['curp'],$_POST['fecha'],$_POST['genero'],$_POST['email'],$_POST['password']) && !empty($_POST['usuario']) && !empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['curp']) && !empty($_POST['fecha']) && !empty($_POST['genero']) && !empty($_POST['email']) && !empty($_POST['password']))
    {
        $firstUsuario = trim($_POST['usuario']);
        $firstName = trim($_POST['nombre']);
        $lastName = trim($_POST['apellido']);
        $lastCurp = trim($_POST['curp']);
        $lastFecha = trim($_POST['fecha']);
        $lastGenero = trim($_POST['genero']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        $hashPassword = $password;
        $options = array("cost"=>4);
        $hashPassword = password_hash($password,PASSWORD_BCRYPT,$options);
        $date = date('Y-m-d H:i:s');
 
        if(filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $sql = 'select * from users where email = :email';
            $stmt = $pdo->prepare($sql);
            $p = ['email'=>$email];
            $stmt->execute($p);
            
            if($stmt->rowCount() == 0)
            {
                $sql = "insert into users (usuario,nombre, apellido,curp,fecha,genero, email, `password`, created_at,updated_at) values(:vusuario,:vnombre,:vapellido,:vcurp,:vfecha,:vgenero,:email,:pass,:created_at,:updated_at)";
            
                try{
                    $handle = $pdo->prepare($sql);
                    $params = [
                        ':vusuario'=>$firstUsuario,
                        ':vnombre'=>$firstName,
                        ':vapellido'=>$lastName,
                        ':vcurp'=>$lastCurp,
                        ':vfecha'=>$lastFecha,
                        ':vgenero'=>$lastGenero,
                        ':email'=>$email,
                        ':pass'=>$hashPassword,
                        ':created_at'=>$date,
                        ':updated_at'=>$date
                    ];
                    
                    $handle->execute($params);
                    
                    $success = 'Usuario creado correctamente!!';
                    
                }
                catch(PDOException $e){
                    $errors[] = $e->getMessage();
                }
            }
            else
            {
                $valFirstUsuario = $firstUsuario;
                $valFirstName = $firstName;
                $valLastName = $lastName;
                $vallastCurp = $lastCurp;
                $vallastFecha = $lastFecha;
                $vallastgenero = $lastGenero;
                $valEmail = '';
                $valPassword = $password;
 
                $errors[] = 'el Email ya esta registrado';
            }
        }
        else
        {
            $errors[] = "el Email no es valido";
        }
    }
    else
    {


        if(!isset($_POST['usuario']) || empty($_POST['usuario']))
        {
            $errors[] = 'el usuario es requerido';
        }
        else
        {
            $valFirstUsuario = $_POST['usuario'];
        }



        
        if(!isset($_POST['nombre']) || empty($_POST['nombre']))
        {
            $errors[] = 'el nombre es requerido';
        }
        else
        {
            $valFirstName = $_POST['nombre'];
        }




        if(!isset($_POST['apellido']) || empty($_POST['apellido']))
        {
            $errors[] = 'el apellido es requerido';
        }
        else
        {
            $valLastName = $_POST['apellido'];
        }
 

        if(!isset($_POST['curp']) || empty($_POST['curp']))
        {
            $errors[] = 'el curp es requerido';
        }
        else
        {
            $vallastCurp = $_POST['curp'];
        }



        
        if(!isset($_POST['fecha']) || empty($_POST['fecha']))
        {
            $errors[] = 'el fecha es requerido';
        }
        else
        {
            $vallastFecha = $_POST['fecha'];
        }
 


             
        if(!isset($_POST['genero']) || empty($_POST['genero']))
        {
            $errors[] = 'el genero es requerido';
        }
        else
        {
            $vallastgenero = $_POST['genero'];
        }
 

 



        if(!isset($_POST['email']) || empty($_POST['email']))
        {
            $errors[] = 'Email es requerido';
        }
        else
        {
            $valEmail = $_POST['email'];
        }
 




        if(!isset($_POST['password']) || empty($_POST['password']))
        {
            $errors[] = 'el Password es requerido';
        }
        else
        {
            $valPassword = $_POST['password'];
        }




        
    }
 
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
    <link rel="icon" href="/img/logoo.ico">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/modal.css" rel="stylesheet">
    <link href="/css/btnhome.css" rel="stylesheet" />
	<script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
   
    <title>Registro</title>
  </head>
  <body>
   <section class="contact-box">
       <div class="row no-gutters bg-dark">
           <div class="col-xl-5 col-lg-12 register-bg">
            <div class="position-absolute testiomonial p-4">
                <h3 class="font-weight-bold text-dark">BIENVENIDO.</h3>
                <p class="lead text-dark">Quierelos.</p>
            </div>
           </div>
           <div class="col-xl-7 col-lg-12 d-flex">
                <div class="container align-self-center p-6">
                    <h1 class="font-weight-bold mb-3">Crea tu cuenta gratis</h1>
                   
                    <p class="text-muted mb-5">Ingresa la siguiente información para registrarte.</p>
                    <?php 
                                        if(isset($errors) && count($errors) > 0)
                                        {
                                            foreach($errors as $error_msg)
                                            {
                                                echo '<div class="alert alert-danger">'.$error_msg.'</div>';
                                            }
                                        }
                                        
                                        if(isset($success))
                                        {
                                            
                                            echo '<div class="alert alert-success">'.$success.'</div>';
                                        }
                                    ?>
                                        <form  method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">


                    <div class="form-row mb-2">
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Usuario <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Tu usuario" name="usuario" required="">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Curp<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Tu curp" name="curp" required="">
                            </div>
                        </div>



                        <div class="form-row mb-2">
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Nombre(s) <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Tu nombre" name="nombre" required="">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Apellido <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Tu apellido" name="apellido" required="">
                            </div>
                        </div>

                        <div class="form-group mb-3">
      <label for="validationDefault04" class="form-label">Fecha de nacimiento</label>
      <input type="date" class="form-control" name="fecha"id="fechaNacimiento" placeholder="dd/mm/aaaa" min="1960-01-01" max="2004-12-31" required="">
  </div>


                     



                        <div class="form-group mb-3">
                                                  
                                                  <label class="font-weight-bold">Genero<span class="text-danger">*</span></label>
                                            
                                      <br>
                                              <select  class="form-controll" name="genero" required="" >

                                                  <option value="Masculino">Masculino</option>
                                                  <option value="Femenino">Femenino</option>
                                                  
                                              </select>

                                              </div>




                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Correo electrónico <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" placeholder="Ingresa tu correo electrónico" name="email" required="">
                        </div>





                        
                    <div class="form-row mb-2">
                            <div class="form-group col-md-6">
                            <label class="font-weight-bold">Contraseña <span class="text-danger">*</span></label>
                                <input type="password" class="form-control" placeholder="Contraseña" name="password" required="">
                            </div>
                            <div class="form-group col-md-6">
                            <label class="font-weight-bold">Repetir contraseña <span class="text-danger">*</span></label>
                                <input type="password" class="form-control" placeholder="Repetir contraseña" name="repassword" required="">
                            </div>
                        </div>

                

                
                     


                        <div class="form-group mb-5">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" data-required="1" name="terminos" required="">
                                <p class="form-check-label text-muted" style="color:black;padding-left:20px;">Aceptar los <a style="color:blue;" href="#"class="hero__cta" >Términos y Condiciones</a></p>


                            </div>
                        </div>
                        <button class="btn btn-primary width-100" type="submit" name="submit">Regístrate</button>
                        
                    
                    </form>
                    <br>
                    <div class="small"><a href="/php/login.php">Ya tienes cuenta? Inicia sesion</a></div>
                    <small class="d-inline-block text-muted mt-5">Todos los derechos reservados | © 2022 APPETS</small>
                </div>
           </div>
       </div>
   </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <div style="height: 150px; overflow: hidden;" class="hero__waves" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.99 C262.08,217.40 378.89,-120.09 500.00,49.99 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path></svg></div>
    </header>

    <section class="modal ">
        <div class="modal__container">
            <img src="/img/terminos.png" class="modal__img">
            <h2 class="modal__title">Terminos y Condiciones</h2>
            <p class="modal__paragraph">

            1.En caso de contratación de los bienes y servicios ofertados a través de nuestra página, para
                        mantener la relación contractual, así como la gestión, administración.

2.Envío de información solicitada a través de los formularios dispuestos en nuestro sitio web.

3.Remitir boletines , así como comunicaciones comerciales de promociones y/o
publicidad de la página y del sector,En cumplimiento a la Ley Federal de Protección de Datos Personales en Posesión de Appets.com
con domicilio fiscal en Tapachula Chiapas centro, CP 30876, está consciente de que la seguridad de
su información personal por el uso de nuestros servicios es importante. </p>
            <a href="#" class="modal__close">Cerrar</a>
        </div>
    </section>


   
    <script src="/js/modal.js"></script>
    <a href="/index.html" class="btn-wsp" target="_blank">
	    <i class="fa fa-home icono"></i>
	</a>
  
    <script>
     function mostrarForm(){
         document.getElementById('form').style.display = 'block';
     }
    </script>
    <script>
        function ocultarForm(){
         document.getElementById('form').style.display = 'none';
     }
    </script>
    
    <script>
    $('#fechaNacimiento').on('change',function (){
        $('#Edad').val(CalcularEdad());
    });  
    
    function CalcularEdad(){
           var fechaSelect = $('#fechaNacimiento').val();
           var fechaNac =new Date(fechaSelect);
           var fechaActual=new Date();
           var Edad=(parseInt((fechaActual-fechaNac)/(1000*60*60*24*365)));
           return Edad;
       }
    </script>
  </body>
</html>


