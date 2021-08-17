<?php
    require_once("../APIRest/index.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Cokiie Games</title>
	<link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/style1.css">
</head>
<body>
	<header id="main-header">
		<nav id="navlogo">
            <href="index.php">
            <ul class="nav">
                <li><img src="/imagenes/Cokiie.gif"  alt="" width="80" height="80" /></li>
                <li><a href="/index.php">Cookie Games</a></li> 
            </ul>
        </nav>
        <nav>
            <ul class="nav">
			    <li><a href="/formularios/agregar.php">Agregar producto</a></li>
				<li><a href="">Configuración</a>
					<ul>
						<li><a href="/formularios/eliminar.php">Eliminar producto</a></li>
					</ul>
				</li>
			</ul>
        </nav>
	</header>
	<section id="main-content">
		<article>
			<div id="suspender">
            <div id="container">
                <h1>Tabla de vendedores</h1>
                    <br><br><br>

                <table border="5">
                        <thead>
                            <tr class="">
                                <th>CURP</th>
                                <th>Nombre(s)</th>
                                <th>Apellido Paterno</th>
                                <th>Correo electrónico</th>
                                <th>Admin</th>
                                <th>Habilitado </th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            $datos = array();
                            $datos["funcion"]="lista";
                            $ejecucion = escojer($datos);
                            
                            //print_r($ejecucion);
                            foreach($ejecucion as $row) {
                                
                                echo '<tr class="d2">';
                                echo '<td>'.$row["curp"].'</td>';
                                echo '<td>'.$row["nombre"].'</td>';
                                echo '<td>'.$row["ape1"].'</td>';
                                echo '<td>'.$row["correo"].'</td>';
                                if($row["fecha_administrador"]!=null){
                                    echo '<td><a href="/back/listaU.php">degradar</a></td>';
                                } else {
                                    echo '<td><a href="">nombrar</a></td>';
                                }
                                if($row["valido"]!=0){
                                    echo '<td><a href="">inhabilitar</a></td>';
                                } else {
                                    echo '<td><a href="">habilitar</a></td>';
                                }

                            }
                        ?>
                    </tbody>
                    </table>

            </div>
        </div>
			
		</article> <!-- /article -->
		
		
		
	</section>
	
	<footer  id="main-footer">
        <div class="container">
            <div>
                <table>
                    <tr>
                        <th>Información de la empresa:</th>
                        <th>Servicios que se brindan:</th>
                        <th>Objetivos generales:</th>
                    </tr>
                    <tr>
                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>
						<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>
						<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>
					</tr>
                </table>                    
            </div>
            <br>
        </div>
        <p>&copy; 2021  Cokiie Games</p>
    </footer>

</body>
</html>