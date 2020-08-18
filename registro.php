<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ecuabits - Registro de Usuario</title>
        <link rel="stylesheet" href="css/css_ext.css"/>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js"></script>
        
        <link rel="stylesheet prefetch" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
         <script type="text/javascript" src="js/Validaciones_RegistroUsuario.js"></script>
        <!--ENLAZAR EL DOCUMENTO JAVASCRIPT EXTERNO-->
        
        
        <!--VALIDACION DE NUMEROS-->
    
<!--     <script>
   function solonumeros(e){
    key=e.keyCode ||e.which;
    
    teclado=String.fromCharCode(key);
    numeros="0123456789";
         
    especiales="8-37-38-46";
    
    teclado_especial=false;
    
    for(var i in especiales){
        if(key===especiales[i]){
             teclado_especial=true;
        }
    }
    if(numeros.indexOf(teclado)===-1 && !teclado_especial)
    {
        return false;
    }
    
    }  
    </script>
   
    <script>
          function sololetras(e){
    key=e.keyCode ||e.which;
    
    teclado=String.fromCharCode(key).toLowerCase();
    numeros="abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
         
    especiales="8-37-38-46-164";
    
    teclado_especial=false;
    
    for(var i in especiales){
        if(key===especiales[i]){
             teclado_especial=true;
             break;
        }
    }
    if(numeros.indexOf(teclado)===-1 && !teclado_especial)
    {
        return false;
    }
    
    }   
        </script>  -->
         <style>
/*             *
{
    margin: 0;
    padding: 0;
}*/
/*             #contenedorContenido{
                 background: pink;
             }*/
             
                
          .formitem{
                padding: 15px;
                font-size: 16px;
            }
                .formularios{
                border: 2px solid #ccc;
                border-radius: 10px;
                padding: 20px;
                background: whitesmoke;
                width: 40%;
                margin: auto; /*para centrar*/
                }   
            
            .xd{
                font-size: 30px;
                text-align: center;
                font-weight: bold;
                color: red;
                
            }
   

#contenedorContenido input[type="submit"]
{
    text-align: center;
    background: #a6b7ff;
    color: black;
    font-weight: bold;
    border: none;
    width: 45%;
    padding: 10px 0;
    font-weight: normal;
    /*font-family: josefin sans;*/
    letter-spacing:1px;
    font-size:16px;
    cursor: pointer;
    transition: all .5s ease;
    border-radius: 10px;
}
.formitem label{
    font-weight: bold;
}
#contenedorContenido input[type="reset"]
{
    background: #ffb6bb;
    color: black;
    font-weight: bold;
    border: none;
    width: 45%;
    padding: 10px 0;
    font-weight: normal;
/*    font-family: josefin sans;*/
    letter-spacing:1px;
    font-size:16px;
    cursor: pointer;
    transition: all .5s ease;
    border-radius: 10px;
    margin-left: 40px;
}


        </style>
    </head>
    <body>
        <?php
            include 'includes/header2.php';
        ?>
        
        
        
        <div id="contenedorContenido">
          
                <div class="formularios">
                      <div class="xd"><i class="fa fa-times fa-pencil"></i> REGISTRARME
            </div>
                    <form onsubmit="return validad()"> <!--etiquetas para crear formularios-->
                        
                        <div class="formitem">
                            <label>Nombres:</label> <!--un nombre que acompaña al elemento primario-->
                            <input type="text" name="nombres" id="nombres"/> <!--onkeypress="return sololetras(event)"/>--> <!--type(sirve para darle el formato, sea texto, emai, etc)
                            se le coloca un atributo y un id-->       <!--input, es para el ingreso de datos-->
                        </div>
                        
                        <div class="formitem">
                            <label>Apellidos:</label> 
                            <input type="text" name="apellidos" id="apellidos"/> <!--onkeypress="return sololetras(event)"/>-->
                        </div>
                        
                        <div class="formitem">
                            <label>Número de Cedula:</label>
                            <input type="cedula" name="cedula" id="cedula"/>
                        </div>
                        
                        <div class="formitem">
                            <label>E-mail:</label> 
                            <input type="email" name="correo" id="correo"/> 
                        </div>

                        <div class="formitem">
                            <label>Teléfono:</label> 
                            <input type="text" name="telefono" id="telefono"/> <!--onkeypress="return solonumeros(event)" onpaste="return flas"/>--> 
                        </div>
                        
                        <div class="formitem">
                            <label>Género:</label> 
                            <input type="radio" name="genero" value="F"/> Femenino
                            <input type="radio" name="genero" value="M"/> Masculino
                            <input type="radio" name="genero" value="O"/> Otros
                        <!--para que pertenezca el mismo grupo, y seleccione un sola opción en radio, se debe poner el mismo nombre-->
                        </div>
                        
                        <div class="formitem">
                            <label>Fecha de Nacimiento:</label> 
                            <input type="date" name="fecha" id="fecha"/> 
                        </div>
                        
                        <div class="formitem">
                            <label>Esta interesado en suscribirse?:</label> 
                            <input type="checkbox" name="suscripcion" value="suscripcion" id="suscripcion"/> 
                        </div>
                        
                         
                        <div class="formitem">
                            <label>Estado Civil:</label> 
                            <select name="estado" id="estado">
                                <option value="0">Seleccione.....</option>
                                <option value="1">Soltero</option>
                                <option value="2">Casado</option>
                                <option value="3">Viudo</option>
                                <option value="4">Otro</option>
                                
                            </select> 
                        </div>
                        
                        <div class="formitem1">
                            <input type="submit" name="registrarse" id="registrarse" value="Registrarse"/> <!--tipo submit permite enviar formularios a traves de otros--> 
                            <input type="reset" name="limpiar" id="limpiar" value="Limpiar Contenido"/>
                        </div>

                    </form>
                </div>  
            </div>     
        
          <?php
            include 'includes/footer.php';
        ?>
        
    </body>
</html>
