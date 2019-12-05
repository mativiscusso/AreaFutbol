# AreaFutbol
AreaFutbol es una plataforma donde se reunen los entrenadores para poder subir entrenamientos, comentarlos y retroalimentar el conocimiento.

# Modo de Uso
1- Clonar repositorio para tener el proyecto instalado de manera local.
https://github.com/mativiscusso/AreaFutbol.git
Ubicados en la ruta del proyecto ejecutar el comando:

'composer install'

2- Crear Base de Datos llamada "areafutbol_db"

DESDE CONSOLA
Lo primero que tenemos que hacer para poder ejecutar comandos es ejecutar el programa ‘mysql‘ que si ya tenéis instalado en el ordenador o servidor, bastaría con ejecutar desde la consola el siguiente comando:

'$mysql -u usuario -p'

Es posible que no tengáis contraseña si estáis utilizando algún paquete como XAMPP o similar. En ese caso bastaría con poner el siguiente comando:

'$mysql -u root'

Si al ejecutar el comando mysql te un error de que no encuentra el programa, tendrás que ejecutarlo directamente en la ruta en la que está ubicado o añadir esa ruta para que podamos ejecutarlo desde cualquier directorio de nuestro disco.
Ahora llega el momento de crear una nueva base de datos mysql
Para crear la base de datos «areafutbol_db» introducimos el siguiente comando:

CREATE DATABASE areafutbol_db;

3- Abrir el proyecto con su editor de texto y configurar el archivo .env asignandole el nombre de la Base de Datos para su conexion

4- Ubicados por consola en el PATH donde clonaron el repositorio o desde la consola de su editor de texto correr los siguientes comandos:

    php artisan key:generate
    
    php artisan migrate
    
    php artisan db:seed (Genera usuario Administrador para interactuar con el Panel de Control)
    
    php artisan serv 
 
 Datos de acceso como Administrador
 Email: administrador@admin.com
 Password: admin1234
 
 5- Inicializar programa que brinde conexion a base de datos (por ejemplo XAMPP)
 
 6- Abrir el navegador e ingresar a la ruta 
 
    localhost:8000
 
