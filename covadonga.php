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
			if (isset($_POST["edad"]))
				$edad=$_POST["edad"];
			$valoracion=$_POST["valoracion"];
			if (isset($_POST["sexo"]))
				$sexo=$_POST["sexo"];
			if(isset($_POST["gustos"])){
				$gustos=$_REQUEST["gustos"];}
			if (isset($_POST["mensaje"]))
				$mensaje=$_POST["mensaje"];
			echo "<h2>Estos son los datos que nos ha proporcionado en tu formulario</h2>";
            echo "<table>";
            if (!empty("$edad"))
            {
            	if ($edad>0 && $edad<120)
            	{
            		echo "<tr>";
					echo "<td><strong>Edad: </strong></td><td>$edad&nbsp;&nbsp;</td>";
					echo "</tr>";
            	}else 
            	{
            		echo "<tr>";
            		echo "<td><strong>Edad: </strong></td><td>La edad introducida no se ajusta a los parametros</td>";
            		echo "</tr>";
            	}
            		
            }
            if (!empty($sexo))
            	echo "<tr>";
            	echo "<td><strong>Sexo: </strong></td><td>$sexo&nbsp;&nbsp;</td>";
            	echo "</tr>";
            echo "<tr>";
            echo "<td><strong>Valoracion: </strong></td><td> $valoracion</td>";
            echo "</tr>";
            if (!empty($gustos))
            {
				foreach ($gustos as $gusto)
				{	
					if ($gusto!="otro concepto" && $gusto!="noVolver")
						echo "<tr><td><strong>Te gustarían más: </strong></td><td>$gusto &nbsp;</td></tr> ";
					else 
						echo "<tr><td><strong>Te gustaría más: </strong></td><td>$gusto &nbsp;</td></tr> ";
				}
            }
            if (!empty($mensaje)){
            	echo "<tr><td colspan=2><strong>Este ha sido tu comentario:</strong></td></tr>
            	<tr><td colspan=2>$mensaje</td></tr>";
            }
			
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
