<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1.0"
		/>
		<title>Baristas</title>
		<link rel="stylesheet" href="styless.css" />
	</head>
	<body class="">
        <div class="container-hero">
            <header>
            <div class="container hero">
                <div class="customer-support">
                    <i class="fa-solid fa-headset"></i>
                    <div class="content-customer-support">
                        <span class="text">Soporte al cliente</span>
                        <span class="number">123-456-7890</span>
                    </div>
                </div>

                <div class="container-logo">
                    <i class="fa-solid fa-mug-hot"></i>
                    <h1 class="logo"><a href="/">Chocolateria</a></h1>
                </div>

                <div class="container-user">
                    <i class="fa-solid fa-user"></i> 
                    <div class="content-shopping-cart">
                        <i class="fa-solid fa-basket-shopping"></i>
                        <span class="text">Carrito</span>
                        <span class="number">(0)</span>
                    </div>
                </div>  
            </div>
        </div>

        <div class="contenedor_todo">
            <div class="caja_trasera">
                <div class="caja_trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia Sesion para entrar en la pagina</p>
                    <button id="btn iniciar sesion">Iniciar Sesion</button>
                </div>
                        <div class="caja_trasera-registrer">
                            <h3>¿Aun no tienes una cuenta?</h3>
                            <p>Registrate para quue puedas iniciar sesion </p>
                            <button id="btn registrarse">Registrarse</button>
                     </div>
            </div>
            <!--formulario de login y registro-->
            <div class="contenedor_login-registrer">

            <form action="login_usuario_be.php" method="POST" class="formulario_login">
                    <h2>Iniciar Sesion</h2>
                    <input type="text" placeholder="Correo Electronico">
                    <input typr1="password" placeholder="Contraseña">
                    <button>Entrar</button>
                </form>
            <!--formulario de registro-->
            <form action="registro_usuario_be.php" method="POST" class="formulario_registrer">
                   <h2>Registrarse</h2>
                   <input type="text" placeholder="Nombre Completo"name = "nombre_completo"> 
                   <input type="text" placeholder="Correo Electronico"name = "correo">
                   <input type="text" placeholder="Usuario"name = "usuario">
                   <input type="password" placeholder="contraseña"name = "contrasena">
                   <button>Regristrarse</button>
                </form>
            </div>
        </div>
    
        <!--Funcion Carrito de compras-->
        <div class="cartTab">
            <h1> Shopping Cart</h1>
            <div class="ListCart">
                <div class="item">
                     <div class="image">
                        <img src="image/cafe-australiano.jpg" alt="">
                </div>
                <div class="name">
                    Nombre
                </div>
                <div class="Total Precio">
                    200
                </div>
                <div class="quantity">
                    <span class="minus"><</span>
                    <span>1</span>
                    <span class="plus">></span>
                </div>
                </div>

            </div>
            <div class="btn">
                <button class="close">CLOSE</button>
                <button class="checkOut">CHECK</button>
            </div>
        </div>

            <script
                src="https://kit.fontawesome.com/3c35d27787.js"
                crossorigin="anonymous"
            ></script>
            
            <script src="app.js"></script>
            <script src="script.js"></script>
    </body>
    </html>
    