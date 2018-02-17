<?php
	if (empty($_POST["dam"])) {
		$_POST["dam"] = "";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Encuesta</title>
    <link rel="shortcut icon" href="./img/favicon.png" type="image/png" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald|Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="./estilo.css">
</head>
<body id="encuesta">

<div id="pagewrap">

	<div id="header">
        <div>
              <ul id="button">
                <li><a href="./index.html">Home</a></li>
                <li><a href="./introduccion.html">Introduccion</a></li>
                <li><a href="./about.html">About</a></li>
                <li><a href="./masdesalvi.html">Más de Salvi</a></li>
                <li><a href="./contacto.html">Contacto</a></li>
                <li><a href="./encuesta.html">Encuesta</a></li>
              </ul>
        <a target="_blank" href="https://GitHub.com/SalvaRebollo" class="twitter" style="color:black;">)</a>
        <a target="_blank" href="https://Linkedin.com/in/SalvaRebollo/" class="twitter" style="color:#3191d8;">L</a>
        <a target="_blank" href="https://YouTube.com/SalviYT" class="twitter" style="color:#db0000;">Y</a>
        <a target="_blank" href="https://YouTube.com/SalviRB" class="twitter" style="color:#db0000;">Y</a>
        </div>
</div>

<div id="content">
    <div class="publicacion">
        <a href="#inicio" id="inicio"></a>

        <a href="./encuesta.html"><img class="flechatras" src="./img/flechatras.png" title="Ir atrás"></a>
        <h2>Encuesta</h2>
<!--ENCUESTA PHP-->
        <br><br>
     
        <div class="tablaform">
            <table class="tabla">
                <thead>
                    <tr>
                        <th colspan="2" class="encapregunta">DATOS PERSONALES</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td width="30%" class="pregunta">Nombre</td>
                        <td class="datos">
                            <?php echo $_POST["nombre"]?>
                        </td>
                        
                    </tr>
                    <tr>
                        <td width="20%" class="pregunta">Apellido</td>
                        <td colspan="2" class="datos">
                            <?php echo $_POST["apellidos"]?>
                        </td>
                    </tr>
                </tbody>
                <thead>
                    <tr>
                        <th colspan="2" class="encapregunta">ENCUESTA</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="pregunta">¿Te ha gustado la web?</td>
                        <td class="datos">
                            <?php echo $_POST["gustaweb"]?>
                        </td>
                        
                        
                    </tr>
                    <tr>
                        <td class="pregunta">¿Cuánto te gustaría aprender producción musical?</td>
                        <td class="datos">
                            <?php echo $_POST["produccion"]?>
                        </td>
                      
                    </tr>
                    <tr>
                        <td class="pregunta">Comentario/Sugerencia</td>
                        <td class="datos">
                            <?php echo $_POST["comentarios"]?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
<!--FIN ENCUESTA PHP-->
            <p><a href="#inicio" id="final">Ir arriba</a></span></p>
		</div>		
	</div>

	<div id="sidebar">
		<h3>Sidebar</h3>
		<ul>
			<li><a href="./index.html">Home</a></li>
			<li><a href="./introduccion.html">Introduccion</a></li>
            <li><a href="./galeria.html">Galería de Imágenes</a></li>
			<li><a href="./about.html">About</a></li>
			<li><a href="./masdesalvi.html">Más de Salvi</a></li>
			<li><a href="./contacto.html">Contacto</a></li>
            <li><a href="./encuesta.html">Encuesta</a></li>
		</ul>
	</div>
	
	<div id="footer">
		Pagina creada por Salvador Rebollo Benítez como proyecto para las asignaturas SINF y LM.
        
        <a target="_blank" href="https://GitHub.com/SalvaRebollo" class="twitter" style="color:black;">)</a>
        <a target="_blank" href="https://Linkedin.com/in/SalvaRebollo/" class="twitter" style="color:#3191d8;">L</a>
        <a target="_blank" href="https://YouTube.com/SalviYT" class="twitter" style="color:#db0000;">Y</a>
        <a target="_blank" href="https://YouTube.com/SalviRB" class="twitter" style="color:#db0000;">Y</a>
        
        
	</div>

</div>



</body>
</html>