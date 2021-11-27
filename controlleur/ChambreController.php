<?php
session_start();
require_once('../model/ChambreModel.php');
require_once('../confg/Connexion.php');
if(isset($_POST['btn_chambre'])){
    $room_code= $_POST['room_code'];
    $room_type= $_POST['room_type'];
    $room_price= $_POST['room_price'];
    $room_details = $_POST['room_details'];
    $creat_room = Creat_room($room_code, $room_type, $room_price, $room_details);
}