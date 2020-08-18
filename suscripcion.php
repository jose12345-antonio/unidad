<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>EcuaBits - Suscribirse</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0"/>
        <link rel="stylesheet" href="css/suscripciones.css"/>
        <link rel="stylesheet" href="css/css_ext.css"/>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        
        <script type="text/javascript" src="js/validacionessuscripcion.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
    </head>
    <body>   
        
        <?php
            include 'includes/header2.php';
        ?>
        
        <div class="wrap">
            <div class="formularios">
                <form onsubmit="return validarsuscripciones()">
                    <div class="formItem" id="no">
                        <label>Nombres:</label>
                        <input type="text" name="nombres" placeholder="Nombres completos" required="required" id="nombres"/>
                    </div>
                    <div class="formItem" id="co">
                        <label>Correo  : </label>
                        <input type="email" name="email" placeholder="example@gmail.com" maxlength="39" required="required" id="email"/>
                    </div>
                    <div class="formItem" id="tema">
                        <h2 id="s">Temas Relevantes</h2>
                        
                        <label for="articulos">Artículos Tecnológicos Caseros</label>                       
                        <input type="checkbox" name="noticias1" id="articulos"/>
                        
                        <label for="robotica">Robótica</label>
                        <input type="checkbox" name="noticias2" id="robotica"/>
                        
                        <label for="tecnologia">Tecnología</label>
                        <input type="checkbox" name="noticias3" id="tecnologia"/>
                        
                        <label for="hardware">Hardware</label>
                        <input type="checkbox" name="noticias4" id="hardware"/>
                        
                        <label for="software">Software</label>
                        <input type="checkbox" name="noticias5" id="software"/>
                    </div>
                    
                    <div class="formItem" id="sus">
                        <h2 id="d">¿Quieres recibir informacion sobre ultimas noticias?</h2>
                        <ul>
                            <li>
                                <input type="radio" name="informacion" value="S" id="semanal"/> 
                                <label for="semanal">Semanalmente</label>
                            </li>
                            <li>
                                <input type="radio" name="informacion" value="M" id="mensual"/> 
                                <label for="mensual">Mensualmente</label>
                            </li>
                            <li>
                                <input type="radio" name="informacion" value="A" id="anual"/> 
                                <label for="anual">Anualmente</label>
                            </li>
                        </ul>
                    </div>
                    <div class="formItem" id="con">
                         <input type="checkbox" name="condiciones" value="condiciones" id="condiciones"/>
                         <label for="condiciones">Acepta los términos y condiciones</label>
                    </div>
                    <div class="formItem">
                        <input type="submit" name="enviar" id="enviar" value="Suscribirse"/>
                        <input type="reset" name="cancelar" id="cancelar" value="Cancelar"/>
                    </div>
                </form>
            </div>
        </div>
        
        <?php
            include 'includes/footer.php';
        ?>
    </body>
</html>
