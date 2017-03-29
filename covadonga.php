<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<link href="estiloCovadonga.css"
              rel="stylesheet" type="text/css">
<title>Real Sitio de Covadonga</title>
</head>
<body>
<body>
    <center>
        <div id="principal">
            <div id="encabezado">
                <h1 >Covadonga</h1>
            </div><br/>
            <div id="precuerpo">
			<?php
			if(isset($_POST["edad"]))
				$edad = $_POST["edad"];
			
			$valoracion=$_POST["valoracion"];
			if (isset($_POST["sexo"]))
				$sexo=$_POST["sexo"];
			if(isset($_POST["gustos"])){
			$gustos=$_REQUEST["gustos"];}
		
			$mensaje=$_POST["mensaje"];
			echo "<h2>Estos son los datos que nos ha proporcionado en tu formulario</h2>";
            echo "<table>";
            if (isset($edad))
            {
            	echo "<tr>";
				echo "<td>Edad: $edad</td>";
				echo "</tr>";
            }
            echo "<tr>";
            echo "<td>Valoracion: $valoracion</td>";
            echo "</tr>";
			foreach ($gustos as $gusto)
			{	
				echo "<tr><td>Tegustaría: $gusto </td></tr> ";
			}
			echo "<div>Este ha sido tu comentario: $mensaje</div>";
			echo "</table>";
			?>
			<div>
            	<br/><a href="Covadonga.html" title="Real sitio de Covadonga">Volver a Covadonga</a>  
        	</div>
			</div>
			
		</div>
		
	</center>
</body>
</html>
