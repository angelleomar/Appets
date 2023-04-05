<?php 
    session_start();
  
    if(!$_SESSION['id']){
        header('location:login.php');
    }
 
?>
 
 



<!DOCTYPE html>
<html lang="en">

<head>
    <title>Adopta</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/img/logoo.ico">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
    <link type="text/css" rel="stylesheet" href="/css/bootstraptheme.css" />
	<link rel="stylesheet" href="/css/estilos.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">

	<script src="/js/jquery-3.2.1.js"></script>
	<script src="/js/script.js"></script>
    <link type="text/css" rel="stylesheet" href="/css/footer.css" />
    
</head>

<body>

    <!header>
    <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a href="adopta.php"><img src="/img/logo.png" alt=""></a>
               
            </div>
            <div class="navbar-collapse collapse" id="navbar-main">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="/php/adopta.php">Inicio</a>
                    </li>
                    <li>
                        <a href="/Tienda/index.php">productos</a>
                    </li>
                   
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="download"><?php echo ucfirst($_SESSION['usuario']); ?></h1> <span class="caret"></span></a>
                        <ul class="dropdown-menu" aria-labelledby="download">

                 
                            <li class="divider"></li> 
                            <li><a href="/php/lougth.php?logout=true">Cerrar sesion</a></li>
                         
                
                    </li>
                </ul>

            </div>
        </div>
    </div>

    <br>
    <br>

    <!rejilla con diferentes secciones, textos,tipografias..>
 
        <div class="wrap">
        <div class="page-header">
                        <h1 id="forms"> Adopta 
                              <small >
                                  Encuentra a tu compañero ideal</small>
                          </h1>
                    </div>

                  
                         
                                              
		<div class="store-wrapper">
            
			<div class="category_list">
            <div class="well bs-component">
          
                              
                              <fieldset>
                                  <h4>Filtrar búsqueda</h4>
                                  
                                     
         
                
				<a href="#" class="category_item" category="all">Todo</a>
                <a href="#" class="category_item" category="perros">Perros</a>
				<a href="#" class="category_item" category="gatos">Gatos</a>
				<a href="#" class="category_item" category="otros">Otros</a>

                <p style="text-align:center">¿DESEA DONAR?</p>
	

<form action="https://www.paypal.com/donate" method="post" target="_top" style="text-align:center">
<input type="hidden" name="hosted_button_id" value="VN8ZEQJZF3LLQ" />
<input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donar con el botón PayPal" />
<img alt="" border="0" src="https://www.paypal.com/es_MX/i/scr/pixel.gif" width="1" height="1" />
</form>

</div>
			</div>
   
    
        

			<section class="products-list">
            <legend style="text-align:center">MASCOTAS DISPONIBLES</legend>
                    
				<div class="product-item" category="perros">
					<img src="https://www.huellascallejeras.com/wp-content/uploads/2021/09/leo-perro-talla-peque-en-adopcion-castellon.jpg" alt="" >
					<a href="leo.php">LEO</a>
				</div>
				<div class="product-item" category="perros">
					<img src="https://www.huellascallejeras.com/wp-content/uploads/2021/09/lara-podenca-perros-en-adopcion-castellon.jpg" alt="" >
					<a href="lara.php">LARA</a>
				</div>
				<div class="product-item" category="perros">
					<img src="https://www.huellascallejeras.com/wp-content/uploads/2021/09/lester-perros-en-adopcion-castellon-labrador.jpg" alt="" >
					<a href="#">LESTER</a>
				</div>
                <div class="product-item" category="perros">
					<img src="https://www.huellascallejeras.com/wp-content/uploads/2021/09/alcor-perros-en-adopcion-doberman-castellon.jpg" alt="" >
					<a href="#">ALCOR</a>
				</div>
                <div class="product-item" category="perros">
					<img src="https://www.huellascallejeras.com/wp-content/uploads/2021/09/ronda-pitbull-staffy-perros-en-adopcion-castellon.jpg" alt="" >
					<a href="#">RONDA</a>
				</div>
                
                <div class="product-item" category="perros">
					<img src="https://www.huellascallejeras.com/wp-content/uploads/2021/07/trebol-perro-en-adopcion-castellon.jpg" alt="" >
					<a href="#">NIEVES</a>
				</div>
               
              
				<div class="product-item" category="gatos">
					<img src="https://www.huellascallejeras.com/wp-content/uploads/2020/06/adelina-gata-adulta-en-adopcion.jpg" alt="" >
					<a href="adele.php">ADELINA</a>
				</div>
				<div class="product-item" category="gatos">
					<img src="https://www.huellascallejeras.com/wp-content/uploads/2020/10/anita-gato-en-adopcion-1.jpg" alt="" >
					<a href="#">ANITA</a>
				</div>
                <div class="product-item" category="gatos">
					<img src="https://www.huellascallejeras.com/wp-content/uploads/2020/03/Andrea-gato-en-adopcion-3.jpg" alt="" >
					<a href="#">ANDREA</a>
				</div>
                <div class="product-item" category="gatos">
					<img src="https://www.huellascallejeras.com/wp-content/uploads/2020/07/Alex-gato-en-adopcion-3.jpg" alt="" >
					<a href="#">ALEX</a>
				</div>
                <div class="product-item" category="gatos">
					<img src="https://www.huellascallejeras.com/wp-content/uploads/2021/10/maximo-gato-adulto-en-adopcion.jpg" alt="" >
					<a href="#">MÁXIMO</a>
				</div>
                <div class="product-item" category="otros">
					<img src="https://www.chicagotribune.com/resizer/XN4RR7Hpe8SZJmpBin1HFT_zEe0=/800x625/top/arc-anglerfish-arc2-prod-tronc.s3.amazonaws.com/public/W2FFGTNWYBEFXMO7S6MPA52YQY.jpg" alt="" >
					<a href="#">LUNA</a>
				</div>
                <div class="product-item" category="otros">
					<img src="/img/Cuyo1.jpg" alt="" >
					<a href="#">FABIAN</a>
				</div>
                <div class="product-item" category="otros">
					<img src="/img/Conejo1.jpg" alt="" >
					<a href="#">GRUMO</a>
				</div>
                <div class="product-item" category="otros">
					<img src="/img/Hamster2.jpg" alt="" >
					<a href="#">GRUGO</a>
				</div>
                <div class="product-item" category="otros">
					<img src="/img/Conejo2.jpg" alt="" >
					<a href="#">VAINILLA</a>
				</div>
               
				
			</section>
		</div>
	</div>

   
<footer>
    <div class="footer-content">

    <h3>Siguenos en nuestras redes:</h3>

    <p>Nos tomamos enserio la vida de cada animalito pues son seres vivos igual que nosotros.</p>

    <ul class="socials">
        <li><a href="https://www.facebook.com/Appets-106369258487762"><i class="fa fa-facebook"></i></a></li>
        <li><a href="https://twitter.com/CriaProyect"><i class="fa fa-twitter"></i></a></li>
        <li><a href="https://www.youtube.com/channel/UCnQyl9falFIT8VlPuaGHLvg"><i class="fa fa-youtube"></i></a></li>
        <li><a href="https://www.instagram.com/Appets_2021/"><i class="fa fa-instagram"></i></a></li>
        
    </ul>

    </div>

    <div class="footer-bottom">

        <p>Copyright &copy;2022 author: <span>Appets</span></p>

    </div>

</footer>
    </div>
</body>

</html>
