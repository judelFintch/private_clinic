<?php
class Connexion
{
    private static $resource;

    private function __construct()
    {
    }

   
    public static  function getConnexion(){
        if(session_status() == PHP_SESSION_NONE){
           
        }


        if (self::$resource==null){
          
            self::$resource = new PDO (DSN,
                DB_USER,
                DB_PWD,
                array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

        

            return self::$resource;
        } else{
            return self::$resource;
        }
    }

}