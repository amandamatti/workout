<!--
    * Config
    * DT173G - Webbutveckling III 
    * Mittuniversitetet 
    * Amanda Matti, 2018 
-->

<?php
// Autoload of classes
function __autoload($class_name) {
    include "classes/" . $class_name . ".class.php";
}

// Database settings
define("DBHOST", "localhost");
define("DBUSER", "adventures");
define("DBPASS", "password");
define("DBDATABASE", "adventures");


// Database settings (remote - studenter.miun.se) 
/*define("DBHOST", "studentmysql.miun.se");
define("DBUSER", "amma1702");
define("DBPASS", "m3KKpZhwU6aAKMeY");
define("DBDATABASE", "amma1702"); 
*/
// Start session 
if(session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>