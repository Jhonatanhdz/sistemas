<?php
 extract($_REQUEST);
	session_start();
	if (!isset($_SESSION['nombreusuario'])) {
		header("Location:loginvista.php");
	}
	?>
 ?>

<!DOCTYPE html>
<html lang="es">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link href="https://fonts.googleapis.com/css2?family=Domine:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;1,300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Hind:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Amiri&display=swap" rel="stylesheet">
        <title>Sport's Passion</title>
    </head>
<body>
	
	<header>
	<!--<nav class="navbar navbar-default">	<div class="container">-->
	
		<nav class="navbar navbar-expand-lg navbar-light fixed-top navegacion" style="background-color: #e3f2fd;">
		<!--<div class="navbar-header">-->
		 
         	
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       		<!-- <span class="sr-only">Desplejar/ Ocultar Menu</span>
       		 <span class="icon-bar"></span>
       		 <span class="icon-bar"></span>
       		 <span class="icon-bar"></span>
       		 -->
       		<span class="navbar-toggler-icon"></span>
       		
       		 </button>
       	<a href="Pag_principal.php" class="navbar-brand "> <img class="im align-top" src="Img/logo sport.png" ></a>	 	
       		 
         	<!-- Menu d-inline-block -->
         	
         	<div class="collapse navbar-collapse" id="navbarSupportedContent">
         	
         	 	<ul class="navbar-nav mr-auto">
         			<li class=" link nav-item dropdown"> 
         			  <a class="tem  nav-link text-primary"  href="Pag_hombres.php" id="navbarDropdown" role="button" data-toggle="" aria-haspopup="true" aria-expanded="false" >HOMBRE	</a>
         			  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
         			  	<div class="submenu-items">         			  	
         			  		<p class="para2">Calzado</p>
         			  		<ul class="estilo2">
         			
         			  		 <li><a class="dropdown-item linea"  href="Pag_hombres.php"> Correr</a></li>
         			  		 <li><a class="dropdown-item  linea" href="Pag_hombres.php"> Entrenamiento</a></li>
         			  		 <li><a class="dropdown-item linea" href="Pag_hombres.php"> Futbol</a></li>
         			  		 <li><a class="dropdown-item linea" href="Pag_hombres.php"> Basquetbol</a></li>
         			  		</ul>
         			  	</div>
                        <div class="submenu-items"> 		
         			  		<p class="para2">Ropa</p>
         			  		<ul class="estilo2">
         			  		 <li><a class="dropdown-item linea" href="Pag_hombres.php"> Playeras</a></li>
         			  		 <li><a class="dropdown-item linea" href="Pag_hombres.php">Shorts</a></li>
         			  		 <li><a class="dropdown-item linea" href="Pag_hombres.php"> Sudaderas</a></li>
         			  		 <li><a class="dropdown-item linea" href="Pag_hombres.php"> Playeras sin manga</a></li>
         			  		</ul>
         			  	
         			  	</div>
         			  	<div class="submenu-items">
         			  		<p class="para2">Accesorios</p>
         			  		<ul class="estilo2">
         			  		
         			  		 <li><a class="dropdown-item  linea"href="Pag_hombres.php"> Maletas/Mochilas</a></li>
         			  		 <li><a class="dropdown-item  linea" href="Pag_hombres.php"> Gorras</a></li>
         			  		 <li><a class="dropdown-item  linea" href="Pag_hombres.php"> Calcetas</a></li>
         			  		</ul>
         			  	</div>
         			  	
         			  </div>
         			  
         			</li>
         			<li class=" link nav-item dropdown"> 
         			  <a class="tem nav-link text-primary"  href="Pag_mujeres.php" id="navbarDropdown1" role="button" data-toggle="" aria-haspopup="true" aria-expanded="false" >MUJER	</a>
         			  <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
         			  	<div class="submenu-items">         			  	
         			  		<p class="para2">Calzado</p>
         			  		<ul class="estilo2">
         			
         			  		 <li><a class="dropdown-item linea"  href="Pag_mujeres.php"> Correr</a></li>
         			  		 <li><a class="dropdown-item  linea" href="Pag_mujeres.php"> Entrenamiento</a></li>
         			  		 <li><a class="dropdown-item linea" href="Pag_mujeres.php"> Futbol</a></li>
         			  		 <li><a class="dropdown-item linea" href="Pag_mujeres.php"> Basquetbol</a></li>
         			  		</ul>
         			  	</div>
                        <div class="submenu-items"> 		
         			  		<p class="para2">Ropa</p>
         			  		<ul class="estilo2">
         			  		 <li><a class="dropdown-item linea" href="Pag_mujeres.php"> Playeras</a></li>
         			  		 <li><a class="dropdown-item linea" href="Pag_mujeres.php">Shorts</a></li>
         			  		 <li><a class="dropdown-item linea" href="Pag_mujeres.php"> Sudaderas</a></li>
         			  		 <li><a class="dropdown-item linea" href="Pag_mujeres.php"> Playeras sin manga</a></li>
         			  		</ul>
         			  	
         			  	</div>
         			  	<div class="submenu-items">
         			  		<p class="para2">Accesorios</p>
         			  		<ul class="estilo2">
         			  		
         			  		 <li><a class="dropdown-item  linea"href="Pag_mujeres.php"> Maletas/Mochilas</a></li>
         			  		 <li><a class="dropdown-item  linea" href="Pag_mujeres.php"> Gorras</a></li>
         			  		 <li><a class="dropdown-item  linea" href="Pag_mujeres.php"> Calcetas</a></li>
         			  		</ul>
         			  	</div>
         			  	
         			  </div>
         			  
         			</li>
         			<li class=" link nav-item dropdown"> 
         			  <a class="tem nav-link text-primary"  href="pagina_niño.php" id="navbarDropdown" role="button" data-toggle="" aria-haspopup="true" aria-expanded="false" >NI&Ntilde;O</a>
         			  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
         			  	<div class="submenu-items">         			  	
         			  		<p class="para2">Calzado</p>
         			  		<ul class="estilo2">
         			
         			  		 <li><a class="dropdown-item linea"  href="pagina_niño.php"> Correr</a></li>
         			  		 <li><a class="dropdown-item  linea" href="pagina_niño.php"> Entrenamiento</a></li>
         			  		 <li><a class="dropdown-item linea" href="pagina_niño.php"> Futbol</a></li>
         			  		 <li><a class="dropdown-item linea" href="pagina_niño.php"> Basquetbol</a></li>
         			  		</ul>
         			  	</div>
                        <div class="submenu-items"> 		
         			  		<p class="para2">Ropa</p>
         			  		<ul class="estilo2">
         			  		 <li><a class="dropdown-item linea" href="pagina_niño.php"> Playeras</a></li>
         			  		 <li><a class="dropdown-item linea" href="pagina_niño.php">Shorts</a></li>
         			  		 <li><a class="dropdown-item linea" href="pagina_niño.php"> Jerseys</a></li>
         			  		
         			  		</ul>
         			  	
         			  	</div>
         			  	<div class="submenu-items">
         			  		<p class="para2">Accesorios</p>
         			  		<ul class="estilo2">
         			  		
         			  		 <li><a class="dropdown-item  linea"href="pagina_niño.php"> Maletas/Mochilas</a></li>
         			  		 <li><a class="dropdown-item  linea" href="pagina_niño.php"> Gorras</a></li>
         			  		 <li><a class="dropdown-item  linea" href="pagina_niño.php"> Calcetas</a></li>
         			  		</ul>
         			  	</div>
         			  	
         			  </div>
         			  
         			</li>
         		<li class=" link nav-item dropdown"> 
         			  <a class="tem nav-link text-primary"  href="Pagina_marcas.php" id="navbarDropdown" role="button" data-toggle="" aria-haspopup="true" aria-expanded="false" >MARCAS	</a>
         			  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
         			  	<div class="submenu-items">         			  	
         			  		<p></p>
         			  		<ul class="estilo2">
         			
         			  		 <li><a class="dropdown-item linea"  href="https://www.adidas.mx"> Adidas</a></li>
         			  		 <li><a class="dropdown-item  linea" href="https://www.innovasport.com/marca/puma/c/100000790000000000"> Puma</a></li>
         			  		 <li><a class="dropdown-item linea" href="https://www.nike.com/mx"> Nike</a></li>
         			  		 <li><a class="dropdown-item linea" href="https://www.vans.mx"> Vans</a></li>
         			  		</ul>
         			  	</div>
                        <div class="submenu-items"> 		
         			  		<p></p>
         			  		<ul class="estilo2">
         			  		 <li><a class="dropdown-item linea" href="https://www.underarmour.com.mx"> Under Armour</a></li>
         			  		 <li><a class="dropdown-item linea" href="https://www.dpstreet.mx">Fila</a></li>
         			  		 <li><a class="dropdown-item linea" href="https://www.reebok.mx"> Reebok</a></li>
         			  		
         			  		</ul>
         			  	
         			  	</div>
         			  	
         			  	
         			  </div>
         			  
         			</li>
        
         		</ul>
         		           		
         		<div class="container">
         		<form action="" class="form-inline my-2 my-lg-0 marg" role="search">
         		   <div class="form-group ">
         		   	<input type="search" class="form-control mr-sm-2  bus" placeholder="Buscar">
         		   
         		   </div>	
         		   <button type="submit" class="btn btn-primary my-2 my-sm-0 ">
         		      <span> 
         		      <svg class="bi bi-search" width="1em" height="1em" viewBox="0 0 17 17" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 011.415 0l3.85 3.85a1 1 0 01-1.414 1.415l-3.85-3.85a1 1 0 010-1.415z" clip-rule="evenodd"/>
  <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 100-11 5.5 5.5 0 000 11zM13 6.5a6.5 6.5 0 11-13 0 6.5 6.5 0 0113 0z" clip-rule="evenodd"/>
</svg>
         		      </span>
         		   </button> 
         		</form>
           		</div>
           		<div class="container">
           		<ul class="navbar-nav mr-auto lista">
           		
			    <li class="link "> 
         			<a class="nav-link cu text-primary" href="loginvista.php">
         			
         			Cuenta/Registro</a>
         		</li>
         		 <button type="submit " class="btn btn-primary boton ml-auto">
           		  <span>
 <ion-icon name="person-sharp"></ion-icon>
                  </span>
           	      </button>
         		<li class="link"> 
         			<a class="nav-link cu text-primary" href="carrito.php">Carrito</a>
         		</li>
           			<button type="submit" class="btn btn-primary boton ml-auto">
           		  <span>
           		  
           		<ion-icon name="cart"></ion-icon>	
                  </span>
           	      </button>
           		</ul>
	
           		
           		</div>
        </div>
  
</nav>

	
	</header>
	<section class="seccion">
	<div class="d-flex flex-row-reverse bd-highlight">
     <ul class="list-group list-group-horizontal-lg">
  <li class="list-group-item list-group-item-primary fuente4">Hombres</li>
  <li class="list-group-item list-group-item-primary fuente4">Bienvenid@ <strong><?php echo $_SESSION['nombreusuario'];?></strong></li>
 <li class="list-group-item list-group-item-primary "><a class="fuente4 text-dark" href="desconectar.php">Cerrar sesion</a></li>
</ul>
</div>
		
	</section>
    <section class="seccion2">
        <div class="imagen_fon">
            <div class="row">
                <div class="col-lg-5 col-sm-10 offset-sm-1">
                    
                </div>
            </div>
        </div>
    </section>
    <section>
    <div class="container">
    <div class="row">
        <div class="col-6 col-lg-12 col-sm-10 text-center">
        <p style="text-align: center;font-size: 40px;">
            ENCUENTRA EN UN SOLO LUGAR LO MEJOR EN TENIS, ROPA
            <br>Y ACCESORIOS DEPORTIVOS PARA HOMBRE</p>
    </div>
    </div>
    </div>
    </div>
</section>
<section>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-sm-10">
        <img src="Img/calzado-hombre.jpg" style="padding: 0px; height: auto;display: block; width: 100%; margin: 0px;">
    </div>
        <div class="col-lg-4 col-sm-10">
            <h2 class="textoImg">Tenis</h2>
            <p class="textoImg">Disfruta de ejercitarte en tu deporte favorito<br>con las mejores marcas de tenis<br>que tenemos para ti.</p>
            <a href="Pagina_marcas.php" class="textoImg"><button class="textoImg">VER CATEGORIA</button></a>
        </div>
    </div>
    </div>
    </div>
</section>
<section class="conteiner-fluid">
    <div class="conteiner">
        <a href="Pagina_marcas.html">
            <img src="Img/ropa-hombre.jpg" alt="ropa-hombre" style="" class="imgh">
        </a>
    </div>
</section>
<section>
    <div class="imagen_fondo" style="background-image: url('Img/correr-hombre.jpg');">
<div class="container">
    <div class="row">   
        <div class="col-lg-4 col-sm-10" style="text-align: left;">
            <h2 class="textoImg text-dark">PARA CORRER</h2>
            <p class="textoImg text-dark" >Encuentra en cada una de nuestras marcas<br>todo lo que necesitas<br>para salir a correr.</p>
            <a href="Pagina_marcas.php" class="textoImg"><button class="textoImg">VER CATEGORIA</button></a>
        </div>
    </div>
    </div>
    </div>
</div>
</section>
<section>
<div class="imagen_fondo" style="background-image: url('Img/entrenamiento-hombre.jpg');">
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-sm-10">
    </div>
        <div class="col-lg-4 col-sm-10">
            <h2 class="textoImg text-dark">PARA ENTRENAR</h2>
            <p class="textoImg text-dark">Descubre en cada una de las mejores<br>marcas lo que estabas buscando<br>para tu entrenamiento.</p>
            <a href="Pagina_marcas.php" class="textoImg"><button class="textoImg">VER CATEGORIA</button></a>
        </div>
    </div>
    </div>
    </div>

</section>
    <footer class="container-fluid">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-3 align-self-start">
				    <h4 class="text-center">PAGA COMO QUIERAS</h4>
                    <img src="Img/formas-pago.png" alt="formas" height="50px">
                    <h4>#MEJORATUMARCA</h4>
                </div>
                                
                <div class="col-xs-12 col-sm-6 col-md-3 ml-auto align-self-start">
                   <h4 class="header">TIENDA</h4>
                  
                   <ul class="estilo">
                       <li><a class="fuente" href="Pag_hombres.php">Hombres</a></li>
                     <li><a class="fuente" href="Pag_mujeres.php">Mujeres</a></li> 
                     <li ><a class="fuente" href="pagina_niño.php">Ni&ntilde;o</a></li>
                     <li><a class="fuente" href="Pagina_marcas.php">Marcas</a></li>
                   </ul>
                     
                   </div>
                   <div class="col-xs-12 col-sm-6 col-md-3 align-self-start">
                <img  class="rounded-circle imtres" src="Img/teclas.jpg" alt="tecla" width="150px" height="150px"/>
                <h4></h4>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 mr-auto align-self-start" id="footer-social">
                	<h4>REDES SOCIALES</h4>
                    <ul>
                    <li class="lista2"><a href="https://www.facebook.com" target="_blank"><ion-icon name="logo-facebook"></ion-icon></a></li>
                    <li class="lista2"><a href="https://www.youtube.com" target="_blank"><ion-icon name="logo-youtube"></ion-icon></a></li>
                    <li class="lista2"><a href="https://www.instagram.com" target="_blank"><ion-icon name="logo-instagram"></ion-icon></a></li>
                    <li class="lista2"><a href="https://www.twitter.com" target="_blank"><ion-icon name="logo-twitter"></ion-icon></a></li>
                    </ul>
                </div>

                   
                </div> 
			</div>
		
	</footer>
    
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
</body>
</html>