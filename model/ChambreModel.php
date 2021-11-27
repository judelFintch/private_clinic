<?php 

function Creat_room($room_code,$room_type,$room_price,$room_details){
 global $bdd;
 $creat_room=$bdd->query("INSERT INTO room Values('','$room_code','$room_type','$room_price','$room_details')");
  if($creat_room){
      echo true;
  }
  else{
      echo false;
  }
}

function select_room(){
    global $bdd;
    $data=$bdd->query("SELECT * FROM room");
    return $data;
}

function select_room_by_id($id){
    global $bdd;
    $data=$bdd->query("SELECT * FROM room WHER id like($id)");
    return $data;
}