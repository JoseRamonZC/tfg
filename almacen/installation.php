<?php
$env = '
# In all environments, the following files are loaded if they exist,
# the latter taking precedence over the former:
#
#  * .env                contains default values for the environment variables needed by the app
#  * .env.local          uncommitted file with local overrides
#  * .env.$APP_ENV       committed environment-specific defaults
#  * .env.$APP_ENV.local uncommitted environment-specific overrides
#
# Real environment variables win over .env files.
#
# DO NOT DEFINE PRODUCTION SECRETS IN THIS FILE NOR IN ANY OTHER COMMITTED FILES.
#
# Run "composer dump-env prod" to compile .env files for production use (requires symfony/flex >=1.2).
# https://symfony.com/doc/current/best_practices.html#use-environment-variables-for-infrastructure-configuration

###> symfony/framework-bundle ###
APP_ENV=dev
APP_SECRET=2e37e84be218b82612e256a3558283bc
###< symfony/framework-bundle ###

###> symfony/webapp-meta ###
MESSENGER_TRANSPORT_DSN=doctrine://default?auto_setup=0
###< symfony/webapp-meta ###

###> doctrine/doctrine-bundle ###
# Format described at https://www.doctrine-project.org/projects/doctrine-dbal/en/latest/reference/configuration.html#connecting-using-a-url
# IMPORTANT: You MUST configure your server version, either here or in config/packages/doctrine.yaml
#
# DATABASE_URL="sqlite:///%kernel.project_dir%/var/data.db"
DATABASE_URL="mysql://%DB-USER%:%DB-PASSWORD%@127.0.0.1:3306/%DB-NAME%?serverVersion=5.7&charset=utf8mb4"
# DATABASE_URL="postgresql://symfony:ChangeMe@127.0.0.1:5432/app?serverVersion=13&charset=utf8"
###< doctrine/doctrine-bundle ###

###> symfony/messenger ###
# Choose one of the transports below
# MESSENGER_TRANSPORT_DSN=doctrine://default
# MESSENGER_TRANSPORT_DSN=amqp://guest:guest@localhost:5672/%2f/messages
# MESSENGER_TRANSPORT_DSN=redis://localhost:6379/messages
###< symfony/messenger ###

###> symfony/mailer ###
MAILER_DSN=null://null
###< symfony/mailer ###

';

$api_confirmarUser = '
<?php
try {
    $database = "%api_confirmarUser_DATABASE%";
    $user = "%api_confirmarUser_USER%";
    $pass = "%api_confirmarUser_PASS%";
  
    $url = "mysql:host=127.0.0.1;dbname=$database";
    $cx = new PDO($url, $user, $pass);
  
    $cx->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
  
  }
  catch (PDOException $e) {
    die( "Error: " . $e->getMessage() . "\n" );
  }
';

$env = str_replace("%DB-USER%", $_POST["DB-USER"], $env);
$env = str_replace("%DB-PASSWORD%", $_POST["DB-PASSWORD"], $env);
$env = str_replace("%DB-NAME%", $_POST["DB-NAME"], $env);

$api_confirmarUser = str_replace("%api_confirmarUser_DATABASE%", $_POST["DB-NAME"], $api_confirmarUser);
$api_confirmarUser = str_replace("%api_confirmarUser_USER%", $_POST["DB-USER"], $api_confirmarUser);
$api_confirmarUser = str_replace("%api_confirmarUser_PASS%", $_POST["DB-PASSWORD"], $api_confirmarUser);

file_put_contents(".env", $env);
file_put_contents("public/api/confirmarUsuario.php", $api_confirmarUser);

try {
    $url = "mysql:host=127.0.0.1";
    $conn = new PDO($url, $_POST["DB-USER"], $_POST["DB-PASSWORD"]);
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch (PDOException $e) {
    echo "Error conectándose a la base de datos: " . $e->getMessage();
}

try {
    $conn->exec("CREATE DATABASE ".$_POST["DB-NAME"]);
    $conn->exec("USE ".$_POST["DB-NAME"]);
    echo "<p>Base de datos creada</p>";
}
catch (PDOException $e) {
    echo "Error creando la base de datos: " . $e->getMessage();
}

try {
    $conn->exec(file_get_contents('symfony_almacen.sql'));
    echo "<p>Estructura y admin importados<p>";
    echo "<p>Correo: admin@gmail.es<p>";
    echo "<p>Contraseña: 1234<p>";
    echo "<h3>Diríjase a IP: <a href=\"http://".$_SERVER['SERVER_NAME'].":8000/\">http://".$_SERVER['SERVER_NAME'].":8000/</a></h3>";
}
catch (PDOException $e) {
    echo "Error creando la estructura: " . $e->getMessage();
}



