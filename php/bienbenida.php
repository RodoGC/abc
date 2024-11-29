<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Chocolates</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fdf5e6;
            color: #333;
        }

        header {
            background-color: #6b4226;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .container {
            padding: 20px;
        }

        .product-list {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .product {
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 15px;
            width: 250px;
            text-align: center;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .product img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 10px;
        }

        .product h3 {
            margin: 10px 0;
        }

        .product button {
            background-color: #6b4226;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .product button:hover {
            background-color: #54331d;
        }

        footer {
            text-align: center;
            padding: 10px;
            background-color: #6b4226;
            color: white;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<header>
    <h1>Tienda de Chocolates</h1>
    <p>¡Los mejores chocolates para ti!</p>
</header>

<div class="container">
    <h2>Catálogo de Productos</h2>
    <div class="product-list">
        <!-- Producto 1 -->
        <div class="product">
            <img src="https://via.placeholder.com/250x150" alt="Chocolate Negro">
            <h3>Chocolate Negro</h3>
            <p>Precio: $2.50</p>
            <button>Añadir al carrito</button>
        </div>
        <!-- Producto 2 -->
        <div class="product">
            <img src="https://via.placeholder.com/250x150" alt="Chocolate con Leche">
            <h3>Chocolate con Leche</h3>
            <p>Precio: $3.00</p>
            <button>Añadir al carrito</button>
        </div>
        <!-- Producto 3 -->
        <div class="product">
            <img src="https://via.placeholder.com/250x150" alt="Chocolate Blanco">
            <h3>Chocolate Blanco</h3>
            <p>Precio: $2.80</p>
            <button>Añadir al carrito</button>
        </div>
    </div>
</div>

<footer>
    <p>&copy; 2024 Tienda de Chocolates. Todos los derechos reservados.</p>
</footer>

</body>
</html>
