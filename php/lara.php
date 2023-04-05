
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mascota</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/img/logoo.ico">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/login.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <link type="text/css" rel="stylesheet" href="/css/bootstraptheme.css" />
    
    <link type="text/css" rel="stylesheet" href="/css/btnWhat.css" />
  
    <link type="text/css" rel="stylesheet" href="/css/footer.css" />
</head>

<body>

    <!header>
   
    
    <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
          
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
       
            <div class="navbar-collapse collapse" id="navbar-main">
                <ul class="nav navbar-nav">
                    <li>
                    <a href="/php/adopta.php"><img src="/img/hogar.png" alt=""></a>
                        <h3 >INICIO</h3>
                    </li>
                
                   
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                       
                        <ul class="dropdown-menu" aria-labelledby="download">

                 
                            <li class="divider"></li> 
                           
                         
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </div>


    <br>
    <br>
   
  

    <div class="container">
        <div class="row">
            <!--  <div class="col-md-12 text-center">
                    <h2>Mi Perfil</h2>
                    Acerca de ti 
                    <br />
                    <br />
                    <br />
                    
                </div> -->

            <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 text-justify">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-header">
                            <h1 id="forms"> LARA
                              <small>
                                  <br>
                                  Te presento a (LARA)</small>
                          </h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- final cabecera -->
        </div>

        <!-- USER PROFILE ROW STARTS-->
        <div class="row">
            <br>
            <div class="col-md-3 col-sm-3">

                <div class="user-wrapper">
                    <br>
                    <img src="https://www.huellascallejeras.com/wp-content/uploads/2021/09/lara-podenca-perros-en-adopcion-castellon.jpg" class="img-responsive" />
                    <div class="description">
                        <br>
                        <h4 style="text-align:center"> LARA</h4>
                        <hr />

                    </div>
                </div>
            </div>
            <br>


            <div class="col-md-9 col-sm-9  user-wrapper">
                <div class="alert alert-info">
                    <h3> Acerca de Lara </h3>
                    <p>
                        Lara fue rescatado , de las tantas camadas que rescatamos en el 2017. Con solo dos meses fue adoptada por una pareja, lamentablemente en el 2020 debido a la pandemia esta pareja empezó a tener problemas económicos y no podía costear los gastos veterinarios de Lara
                    </p>
                </div>
                <hr />


                <br>
                <!-- <div class="description"> -->

                <div class="panel panel-default">
                    <div class="panel-heading">
                    <h5>HOLA! MY ID ES:209898</h5>
                    </div>


                    <div class="row">
                        <div class="col-lg-4">
                            <h3>RAZA:</h3>
                            <p>PODENCA</p>

                        </div>
                        <div class="col-lg-4">

                            <h3>TAMAÑO:</h3>
                            <p>GRANDE</p>

                        </div>
                        <div class="col-lg-4">

                            <h3>COLOR:</h3>
                            <p>CAFE Y BLANCO</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <h3>EDAD:</h3>
                            <p>AGOSTO 2017</p>

                        </div>
                        <div class="col-lg-4">

                            <h3>SEXO:</h3>
                            <p>HEMBRA</p>

                        </div>
                        <div class="col-lg-4">

                            <h3>VACUNAS:</h3>
                            <p>AL DIA</p>
                        </div>
                        
                    </div>
                    <br>
                </div>
                <br>

           

            </div>
        </div>
    </div>
</div>
</div>


<div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
              
                    <div class="container">
                    <div class="well bs-component">
                        <div class="row justify-content-center" >
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5" style="text-align:center">
                                    <br>
                                    <div class="card-header"><h1 class="text-center font-weight-light my-4">AGENDAR CITA</h1></div>
                                    <div class="card-body">


                                    <form   action="/php/cita.php" method="POST">


                                
                                                <br>
                                                <div class="form-floating mb-3">
                                                <label for="inputnombre">Nombres(s)</label>
                                                <input class="form-control" name="nombres" id="inputnombre" type="text" placeholder="Introduce tu nombres" />
                                             
                                            </div>
                                            <div class="form-floating mb-3">
                                                <label for="inputapellido">Apellidos</label>
                                                <input class="form-control" name="apellidos" id="inputapellido" type="text" placeholder="Introduce tu apellidos" />
                                             
                                            </div>
                                           
                                            <div class="form-floating mb-3">
                                                <label for="inputEmail">Email</label>
                                                <input class="form-control" name="emails" id="inputEmail" type="email" placeholder="name@example.com" />
                                             
                                            </div>
                                          
                                                  
                                         
                                            <div class="form-floating mb-3">
                                                        <br>
                                                        <label for="inputFirstnacimiento">Fecha de cita</label>
                                                        <input class="form-control" name="citas" id="inputFirstnacimiento" type="date" placeholder="Introduce tu nacimiento" />
                                                        
                                                    </div>
                                                </div>
                                                <div class="selected-item">
                                                  
                                                  <label for="inputFirstgenero">(ID) de mascota</label>
                                              </div>
                                      
                                              <select class="Genero" name="idm" id="inputFirstgenero" >

                                                  <option value="203452">203452</option>
                                                  <option value="209232">209232</option>
                                                  <option value="209232">209898</option>
                                                  
                                                  
                                              </select>
                                              <br>
                                              <div class="selected-item">
                                                  
                                                  <label for="inputFirstgenero">HORAS</label>
                                              </div>
                                      
                                              <select class="Genero" name="horas" id="inputFirstgenero" >

                                                  <option value="10:00 AM-11:00 AM">10:00 AM-11:00 AM</option>
                                                  <option value="11:00 AM-12:00 PM">11:00 AM-12:00 PM</option>
                                                  <option value="12:00 PM-1:00 PM">12:00 PM-1:00 PM</option>
                                                  <option value="1:00 PM-2:00 PM">1:00 PM-2:00 PM</option>
                                                  <option value="3:00 PM-3:00 PM">2:00 PM-3:00 PM</option>
                                                  <option value="3:00 PM-4:00 PM">3:00 PM-4:00 PM</option>
                                                  <option value="4:00 PM-5:00 PM">4:00 PM-5:00 PM</option>
                                                  <option value="5:00 PM-6:00 PM">5:00 PM-6:00 PM</option>
                                                  <option value="6:00 PM-7:00 PM">6:00 PM-7:00 PM</option>
                                              </select>
                                              
                                                                                                                                     
<br>
                                     
                                          <br>
                                                  
                                     
                                                <button type="submit" name="submit" class="btn">ENVIAR</button>
                                                                                            
                                            
                                           
                                     <br>
                                          
                                
                                          
                                      </form>
                                     
                                  <br>
                                
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </main>
      </div>
       
                                        </div>
                                      </div>
                                  </div>
                                  </div>
                                  </div>
                                  
                                  <a href="https://api.whatsapp.com/send?phone=+529622113136:Hola me interesa agendar una cita (ID mascota) alas (Hora) , soy (Nombre,Apellido), mi correo es (Correo)" class="btn-wsp" target="_blank">
	    <i class="fa fa-whatsapp icono"></i>
	</a>










<footer>
  
    <div class="footer-content">


    <ul class="socials">
     
    
    </ul>

    </div>

    <div class="footer-bottom">

        <p>Copyright &copy;2022 author: <span>Appets</span></p>

    </div>

</footer>
</div>
</body>

</html>
