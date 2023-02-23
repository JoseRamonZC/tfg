
<?php
try {
    $database = "deded";
    $user = "debianDB";
    $pass = "debianDB";
  
    $url = "mysql:host=127.0.0.1;dbname=$database";
    $cx = new PDO($url, $user, $pass);
  
    $cx->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
  
    $sql = "UPDATE user SET roles = '[\"ROLE_USER_ACCEPT\"]' where id = ".$_POST['user'];
    $cx->exec( $sql );
    echo "\nSUCCESS!\n";
  }
  catch (PDOException $e) {
    die( "Error: " . $e->getMessage() . "\n" );
  }
