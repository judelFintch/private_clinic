<?php
session_start();
require_once('../model/UserModel');
require_once('../config/Connexion.php');
if(isset($_POST[''])){
    $nom = $_POST['nom'];
    $postnom = $_POST['postnom'];
    $prenom = $_POST['prenom'];
    $age = $_POST['age'];
    $sexe = $_POST['sexe'];
    $date = $_POST['type'];
    $heure = $_POST['role'];
}