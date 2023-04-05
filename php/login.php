<?php
session_start();
require_once('config.php');
 
if(isset($_POST['submit']))
{
	if(isset($_POST['email'],$_POST['password']) && !empty($_POST['email']) && !empty($_POST['password']))
	{
		$email = trim($_POST['email']);
		$password = trim($_POST['password']);
 
		if(filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			$sql = "select * from users where email = :email ";
			$handle = $pdo->prepare($sql);
			$params = ['email'=>$email];
			$handle->execute($params);
			if($handle->rowCount() > 0)
			{
				$getRow = $handle->fetch(PDO::FETCH_ASSOC);
				if(password_verify($password, $getRow['password']))
				{
					unset($getRow['password']);
					$_SESSION = $getRow;
					header('location:adopta.php');
					exit();
				}
				else
				{
					$errors[] = "Error en  Email o Password incorrectos";
				}
			}
			else
			{
				$errors[] = "Error Email o Password incorrectos";
			}
			
		}
		else
		{
			$errors[] = "Email no valido";	
		}
 
	}
	else
	{
		$errors[] = "Email y Password son requeridos";	
	}
 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" href="/img/logoo.ico">
    <link href="/css/login.css" rel="stylesheet" />
	<link href="/css/btnhome.css" rel="stylesheet" />
	<script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <title>Login</title>
</head>
<body>
      <div class="login-container">
          <div class="login-info-container">
              <br>
            <h1 class="title">Iniciar sesion</h1>
           
            <p class="pbla">Introduce tus datos para continuar</p>
            <?php
    if (isset($errors) && count($errors) > 0) {
        foreach ($errors as $error_msg) {
            echo '<div class="alert alert-danger">' . $error_msg . '</div>';
        }
    }
?>
                                        <form class="inputs-container" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        
                <input class="form-control"  type="email" placeholder="Email" name="email">
                
                <input class="form-control" type="password" placeholder="Contraseña" name="password">

                <p class="pbla">Olvidaste tu contraseña? <span class="span"><a class="span" href="/php/register.php">Click aqui</a></span></p>
                <button class="btn" name="submit">login</button>
                <p class="pbla">No tienes cuenta? <span class="span" ><a class="span" href="/php/register.php">Registrese</a></span></p>
            </form>
            <small class="d-inline-block text-muted mt-5">Todos los derechos reservados | © 2022 APPETS</small>
          </div>
            <img class="image-container" src="https://images.pexels.com/photos/5122175/pexels-photo-5122175.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
      </div>



	  <a href="/index.html" class="btn-wsp" target="_blank">
	    <i class="fa fa-home icono"></i>
	</a>



</body>
</html>