<?php
/**
 * Created by PhpStorm.
 * User: Hamza
 * Date: 30/11/2018
 * Time: 19:48
 */
class config {
    private static $instance = NULL;
    public static function getConnexion() {
        if (!isset(self::$instance)){
            try{
                self::$instance = new PDO('mysql:host=localhost;dbname=projet','root','');
                self::$instance->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            }
            catch(Exception $e)
            {
                die("Erreur".$e->getMessage());
            }
        }
        return self::$instance;
    }
}
?>
