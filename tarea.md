Debes crear una aplicación en PHP que gestione las ventas que realizan los comerciales de una tienda. Los datos serán almecandos en una base de datos en MySQL llamada ventas_comerciales (se adjunta el script para la creación de la base de datos: ventas_comerciales.sql)

El acceso a la base de datos debe hacerse a través del usuario dam con contraseña hlc. La conexión debe hacerse mediante PDO. 

En la página principal (index.php)  se debe mostrar el menú que de acceso a:

    Consulta de datos de todas las ventas de un comercial dado y de las tablas: comerciales, productos y ventas.
    Inserción de datos en las tablas: comerciales, productos y ventas.
    Modificación de datos de las tablas: comerciales, productos y ventas.
    Eliminación de datos de las tablas: comerciales, productos y ventas.

Este menú debe aparecer en todas las páginas para permitir la navegación.

En la consulta de todas las ventas de un comercial, el usuario seleccionará uno de los comerciales de la tienda (de la tabla comerciales) y se mostrará el listado de todas las ventas realizadas por ese comercial concreto.

Debido a la integridad referencial de la base de datos a la hora de insertar un registro en la tabla ventas, el comercial y el producto que se vaya a introducir tienen que estar previamente registrados en sus tablas correspondientes, es decir, en la inserción o modificación de datos de la tabla ventas se debe controlar que los datos introducidos se encuentren en sus tablas asociadas.

En la eliminación ocurrirá algo similar, si se intenta eliminar por ejemplo un registro de la tabla productos y ese producto ya se encuentra registrado en la tabla de ventas, debido a la integridad referencial saltará un error, se debe controlar (independientemente del manejo de excepciones) ésto, bien avisando al usuario de que no puede eliminar el registro al encontrarse dicho producto en alguna venta o bien dando la opción al usuario de eliminar previamente los registros asociados en su tabla correspondiente.

Deben usarse funciones al menos para el acceso a la base datos: conexión, acceso y manipulación de datos, etc. Todas estas funciones deben estar definidas en un fichero llamado funciones.inc que debe ser incluido en todas las páginas de la aplicación.

 Debe gestionarse el manejo de errores al menos siempre que se trabaja con la base de datos.

 RECOMENDACIONES:

    Para el campo de fecha usar el nuevo type que incorpora HTML5: <input type="date" ...>, pero en algunos navegadores como firefox no funciona (podéis ver su comportamiento en el navegador Chrome por ej.), por lo tanto es imprescindible que aunque lo uséis controleis la entrada del texto introducido con el atributo pattern. (Aquí tenéis ejemplos de su uso: http://html5pattern.com/Dates
    Para el control de los datos a introducir en la inserción/modificación de la tabla ventas se puede usar un cuadro desplegable que muestre los datos de su tabla correspondiente (es decir para el campo producto por ejemplo mostrar una lista desplegable con todos los productos de la tabla productos, pero cuidado, lo que debe mostrar es el nombre del producto, sin embargo si os fijáis la clave primaria de la tabla es la referencia, por lo que aunque muestre el nombre del producto lo que debe almacenar es su referencia). Lo mismo para la consulta de ventas de un comercial dado. 

NOTA: No se puede hacer ninguna modificación sobre la estructura de la base de datos ni el usuario de acceso a ésta, de ser así no se corregirá la tarea.