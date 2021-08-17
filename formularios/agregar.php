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
			
			<div>
                <div id="container">
                <h1>Agregar datos del producto:</h1>
                      <br>
                <p>Ingrese los datos que se piden a continuación:</p>
                      <br>
                <form name="formulario" method="post" action="/back/regN.php">
                <div class="d1" >Número de lote: <input class="boton" placeholder="Id con maximo de 15 digitos" type="int" name="numero" minlength="1" maxlength="15" size="30" required></div>
                      <br>
                <div class="d1" >Nombre(s) de responsable: <input class="boton" placeholder="Ingresar el nombre(s) del responsable" type="text" name="nombre" size="30" required></div>
                      <br>
                <!--
                    <div class="d1" >Apellido paterno: <input class="boton" placeholder="Ingresar su apellido paterno" type="text" name="ape1" size="40" required></div>
                      <br>
                    <div class="d1" >Apellido materno: <input class="boton" placeholder="Ingresar su apellido materno" type="text" name="ape2" size="40" required></div>
                      <br>
                -->
                <div class="d1" >Fecha de inicio: <input class="boton" type="date" name="fecha" size="40" required></div>
                      <br>
                <div class="d1" >Fecha de terminación: <input class="boton" type="date" name="fecha_ter" size="40" required ></div>
                      <br>
                <div class="d1" >Tipo de piezas: <input class="boton" placeholder="Tipo de piezas producidas" type="text" name="Tpiezas" required></div>
                      <br>
                <div class="d1" >Número de piezas: <input class="boton" placeholder="Ingrese el número" type="int" name="Npiezas"  required></div>
                      <br>
                <div class="d1" >Número de piezas defectuosas: <input class="boton" placeholder="Ingrese el número " type="int" name="piezasD" required></div>
                      <br>
                      <br>
                <center><input class="button" type="submit" value="Continuar" onClick=""></center>
                <!--
                    <a href="login.php">Ya tienes una cuenta?</a>
                -->
                </form>
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