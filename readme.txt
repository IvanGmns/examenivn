Datos: Ivan Aurelio Lopez Arredondo Backend o FullStack - Nivel de conocimiento 85% - ivan_aurelio@hotmail.com

Referencias: https://ctonline.mx/

Nivel realizado: Avanzado

Instrucciones:

-Se requiere PHP y Mysql, yo utilice XAMPP con la versión de php 7.4.
-Una vez instalado el repositorio se ingresa con la url http://localhost/examenivn/
-La página te mostrara un menu donde vienen los puntos solicitados junto con un boton que ejecuta los requerimientos indicando los de nivel basico, intermedio y avanzado.
-Los datos de la BD son, el host:localhost, el usuario:root y password: se dejo vacío, el nombre de la BD se maneja como "examenivn", si ocupan cambiar los parametros de conexión pueden hacerlo de la siguiente forma:
	-Entrar a la carpeta config
	-Abrir archivo Constants
	-Modificar los parametros DB_USER,DB_PASSWORD,DB_HOST,DB_NAME
-La BD, las tablas y los Views solicitados se crean desde el menu de la página, son la primera y segunda opción, sin necesidad de cargar archivos en Mysql.
-Los insert para la carga de información se crean de la misma forma, ejecutando las secciones del menu.

Listado de actividades

===== CREACIÓN DE LA BD ===== 

NIVEL BÁSICO

1. Se requiere un script que deberá contener la creación de un mínimo de 3 tablas donde se
guardará la información del producto, comentarios y categoría del producto. Deberá
guardarse como mínimo el modelo, especificaciones y precio del producto; para los
comentarios se deberán guardar mínimo texto, nombre y clasificación. Y para las categorías
deberán tener la capacidad de estar anidadas.

2. Cada tabla deberá tener un código para insertar no menos de 10 registros por cada una y no
hay limitación en las columnas:

INTERMEDIO

Adicional a los requerimientos del nivel básico, deberás agregar los siguientes puntos:

1. Crear una vista de los productos con sus comentarios, ordenados por mejor calificación
promedio.

2. Cada tabla debe de tener sus índices, llaves foráneas y constraints.

3. Crear una tabla de accesorios asociados a la categoría del producto.

4. Como parte del script agregar el código para modificar la tabla de productos existente
agregando una nueva columna con la cantidad de visitas a cada producto.

1. Agregar una tabla o columnas de metainformación que se actualice automáticamente,
relacionada a cada producto para guardar sus estadísticas como fecha de registro, fecha de
modificación, cantidad de visitas, cantidad de “likes”, etc.

2. Hacer un procedimiento o similar para calcular una mensualidad con base en el precio de
lista a 6 y 12 meses a 10% de interés anual.

3. Crear una vista donde liste 10 productos en orden aleatorio con base en una clasificación y
muestre la mensualidad calculada.

======= COMUNICACIÓN PHP CON LA BASE DE DATOS =======

Para el script de inicialización de base de datos:

BÁSICO

1. Deberá utilizar PDO para conectarse con la base de datos y hacer un script en el nivel básico
que agregue otros 10 registros a cada tabla. El script deberá generar un log donde reporte
los errores y la cantidad de registros insertados.

INTERMEDIO

1. Hacer un código donde genere 200 productos de forma aleatoria con especificaciones,
marcas y modelos utilizando términos técnicos y precios en un rango de 10,000 hasta
60,000 MXN.
2. Hacer un código Lorem Ipsum para inicializar los comentarios con textos y calificaciones
aleatorias, con un mínimo de 1,000 comentarios repartidos entre los productos.

AVANZADO

1. Las especificaciones generadas de forma aleatoria deberán ser realistas y deberán
corresponder con el precio calculado.

2. Cantidad de productos generados deberá ser de mínimo 2,000 productos y todas las
categorías o categorías hijas deberán tener por lo menos un producto asociado.

3. Los comentarios deberán simular textos coherentes en español y deberán ser por lo menos
10,000 y cada producto deberá tener por lo menos 2 comentarios asociados.

4. En la carpeta PHP deberán estar todas las clases tanto controladoras como modelos,
organizadas en espacios de nombres, así como un class loader que se incluirá en las vistas
para utilizar las clases respectivas.

==== CARPETA PUBLIC_HTML ==== 

En la carpeta de public_html deberá contener un htaccess configurado para permitir únicamente la
visualización de las vistas públicas apropiadas.

BÁSICO

1. Crear un home que muestre el listado de categorías padres dentro de un menú.

2. Listado de 10 productos seleccionados aleatoriamente bajo el texto de productos
destacados.

3. Debajo un listado de mínimo 10 productos más vendidos con base en su clasificación.

4. Cuando se dé click en una categoría, se abrirán categorías hijas y se mostrarán los dos
listados, tanto destacados como de más vendidos filtrados por la categoría seleccionada.

5. Finalmente al visitar un producto se abrirá una nueva página donde se mostrará el detalle
del producto con sus especificaciones y comentarios.

INTERMEDIO

1. El listado de productos destacados y más vendidos deberá ser mostrado en páginas para
poder consultar todos los productos que aplican.

AVANZADO

1. Agregar un campo y funcionalidad de búsqueda.