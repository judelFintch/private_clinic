<?php
    class Connexion
    {
        private $DATABASE_HOST = 'localhost';
        private $DATABASE_USER = 'root';
        private $DATABASE_PASS = '';
        private $DATABASE_NAME = 'clinicsoft';
    
        public static function getConnexion()
        {
            $DATABASE_HOST = 'localhost';
            $DATABASE_USER = 'root';
            $DATABASE_PASS = '';
            $DATABASE_NAME = 'clinicsoft';
            try {
            	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' .  $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
            } catch (PDOException $exception) {
            	exit('Echec de connexion');
            }
        }
    }
    