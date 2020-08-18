<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>BLOG - Inicio Sesión</title>
        <link rel="stylesheet" href="css/inicio_sesion.css"/>      
        <link rel="stylesheet" href="css/css_ext.css"/>
        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js"></script>
        
    </head>
    <body>
        <?php
          include 'includes/header2.php';
        ?>
    </body>
<!--    <div class="contenedor-form">
         <div class="toggle">
             <span><a href="">Registrate</a></span>
        </div>-->

</div>
     <div id="contenedorContenido">
                    <div class="formularios">
                        <form  onsubmit="return validar()" action="">
                        <div class="formItem">
                            <h2>Inicio Sesión</h2>
                             <label>Nombre de usuario</label>
                             <input type="text" name="Nombre de usuario" placeholder="Usuario" id="Nombre de usuario" required />
                             
                        </div>
                         <div class="formItem">
                            <label>Contraseña</label>
                            <input type="password" name="Contrasena" placeholder="Contraseña" id="Contraseña" required/>
                        </div>
                        <div class="formItem">
                            <label>Recordar nombre de usuario</label>
                            <input type="checkbox" name="recordar" value="recordar" id="recordar" required/>
                        </div>
                        <div class="formItem">
                           <input type="submit" name="iniciar" id="iniciar" value="Iniciar Sesión"/>
                        </div>
                        <div class="formIte">
                            <a href=""style=" color: black">¿Olvidó su nombre de usuario o contraseña?</a>
                
                        </div>
              
                    </form>
                    </div>
                </div>
    <?php
            include 'includes/footer.php';
        ?>
</body>
    
</html>
