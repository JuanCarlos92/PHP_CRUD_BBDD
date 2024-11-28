<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Ventas</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <header>
        <h1>Gestión de Ventas</h1>
    </header>
    <nav>
        <ul class="menu">
            <li><a href="index.php?opcion=consultar">Consulta de Datos</a></li>
            <li><a href="index.php?opcion=insertar">Inserción de Datos</a></li>
            <li><a href="index.php?opcion=modificar">Modificación de Datos</a></li>
            <li><a href="index.php?opcion=eliminar">Eliminación de Datos</a></li>
        </ul>
    </nav>
    </div>
    <main>
        <section>
            <?php
            //Incluir archivo conexion
            include('conexionBD.php');
            //Switch CASE
            if (isset($_GET['opcion'])) {
                $action = $_GET['opcion'];
                switch ($action) {
                    case 'consultar':
                        consultarDatos($conexion);
                        break;
                    case 'insertar':
                        insertarDatos($conexion);
                        break;
                    case 'modificar':
                        modificarDatos($conexion);
                        break;
                    case 'eliminar':
                        eliminarDatos($conexion);
                        break;
                }
            }
            // Funciones para cada acción
            function consultarDatos($conexion) {
                echo "<h2>Consulta de Datos</h2>";
                $resultComerciales = $conexion->query("SELECT * FROM comerciales");
                $resultProductos = $conexion->query("SELECT * FROM productos");
                $resultVentas = $conexion->query("SELECT * FROM ventas");

                $comerciales = $resultComerciales->fetch_object();

                 // Mostrar comerciales
                 echo "<h3>Comerciales</h3>";
                if ($resultComerciales) {
                        while ($comerciales) {
                        echo "<p>$comerciales->codigo: $comerciales->nombre $comerciales->salario $comerciales->hijos $comerciales->fNacimiento</p>";
                        
                        $comerciales = $resultComerciales->fetch_object();
                        }
                } else {
                    echo "Error al obtener los comerciales: " . $conexion->error;
                }
                // Mostrar productos
                echo "<h3>Productos</h3>";
                $productos = $resultProductos->fetch_object();
                if ($resultProductos) {
                    while ($productos) {
                        echo "<p>$productos->referencia: $productos->nombre $productos->descripcion $productos->precio $productos->descuento</p>";
                        
                        $productos = $resultProductos->fetch_object();
                        }
                } else {
                    echo "Error al obtener los productos: " . $conexion->error;
                }
                // Mostrar Ventas
                echo "<h3>Ventas</h3>";
                $ventas = $resultVentas->fetch_object();
                if ($resultVentas) {
                    while ($ventas) {
                        echo "<p>$ventas->codComercial: $ventas->refProducto $ventas->cantidad $ventas->fecha </p>";

                        $ventas = $resultVentas->fetch_object();
                    }
                } else {
                echo "Error al obtener las ventas: " . $conexion->error;
                }   
            }   
            function insertarDatos() {
                echo "<h2>Inserción de Datos</h2>";
            }

            function modificarDatos() {
                echo "<h2>Modificación de Datos</h2>";
            }

            function eliminarDatos() {
                echo "<h2>Eliminación de Datos</h2>";
            }
            ?>
        </section>
    </main>
</body>
</html>