<?php
include_once('Connexion.php');
class crudhelp
{
    public function construct__()
    {
        $db = Connexion::getConnexion();   
    }

    private $db;

    public function getRows($table){
        $req = "SELECT * FROM ".$table;
        $stmt = $pdo->prepare($req);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function insert($table, $data){
        try {
            $db = Connexion::getConnexion();  
            if(!empty($data) && is_array($data)){
                $columns = '';
                $values  = '';
                $i = 0;
                foreach($data as $key=>$val){
                    $pre = ($i > 0)?',':'';
                    $columns .= $pre.$key;
                    $values  .= $pre."?";
                    $i++;
                }
                
                $sqlR= "INSERT INTO ".$table." (".$columns.") VALUES (".$values.")";
                $req = $db->prepare($sqlR);
                $saveV = array();
                $count = 0;
                foreach($data as $key=>$val){
                    $saveV[$count++] = $val;
                }
                $insert = $req -> execute($saveV);
                echo 'Saved';
            }else{
                echo 'No data';
            }
        } catch (Exception $e) {
            echo $e;
        }
    }

    public function update($table, $data, $conditions)
    {
        try {
            $db = Connexion::getConnexion();  
            if(!empty($data) && is_array($data)){
                $ColVal  = '';
                $i = 0;
                $saveV = array();
                $count = 0;
                foreach($data as $key=>$val){
                    $pre = ($i > 0)?',':'';
                    $ColVal .= $pre.$key. "=?";
                    $saveV[$count++] = $val;
                    $i++;
                }
                $whereSql = '';
                if(!empty($conditions)&& is_array($conditions)){
                    $whereSql .= ' WHERE ';
                    $i = 0;
                    foreach($conditions as $key => $value){
                        $pre = ($i > 0)?' AND ':'';
                        $whereSql .= $pre.$key." = ?";
                        $saveV[$count++] = $value;
                        $i++;
                    }
                }
                $sqlR= "UPDATE $table SET $ColVal $whereSql";
                $req = $db->prepare($sqlR);
                $update = $req -> execute($saveV);
                echo 'bien';
            }else{
                echo 'betise';
            }
        } catch (Exception $e) {
            echo $e;
        }
    }

    public function delete($table, $wherecond)
    {
        try {
            $db = Connexion::getConnexion(); 
            $whereSql = '';
            if(!empty($wherecond)&& is_array($wherecond)){
                $whereSql .= ' WHERE ';
                $i = 0;
                $valDel = array();
                foreach($wherecond as $key => $value){
                    $pre = ($i > 0)?' AND ':'';
                    $whereSql .= $pre.$key." = ?";
                    $valDel[$i] = $val;
                    $i++;
                }
                $query = "DELETE FROM $table $whereSql";
                $req = $db->prepare($query);
                $delete = $req -> execute($valDel);
            }
        } catch (Exception $e) {
            echo $e;
        }
    }


    public function getData($table, $conditions = array())
    {
        $db = Connexion::getConnexion();
        $sql = 'SELECT ';
        $sql .= array_key_exists("select",$conditions)?$conditions['select']:'*';
        $sql .= ' FROM '.$table;
        $valCond = [];
        if(array_key_exists("where",$conditions)){
            $sql .= ' WHERE ';
            $i = 0;
            foreach($conditions['where'] as $key => $value){
                $pre = ($i > 0)?' AND ':'';
                $sql .= $pre.$key." = ?";
                $valCond[i] = $value;
                $i++;
            }
        }
        
        if(array_key_exists("order_by",$conditions)){
            $sql .= ' ORDER BY '.$conditions['order_by']; 
        }else{
            $sql .= ' ORDER BY id DESC '; 
        }
        
        if(array_key_exists("start",$conditions) && array_key_exists("limit",$conditions)){
            $sql .= ' LIMIT '.$conditions['start'].','.$conditions['limit']; 
        }elseif(!array_key_exists("start",$conditions) && array_key_exists("limit",$conditions)){
            $sql .= ' LIMIT '.$conditions['limit']; 
        }
        $data = $db->prepare($sql);
        $result = $data->execute($valCond);

        
        if(array_key_exists("return_type",$conditions) && $conditions['return_type'] != 'all'){
            switch($conditions['return_type']){
                case 'count':
                    $data = $result->fetchColumn();
                    break;
                case 'single':
                    $data = $result->fetch(PDO::FETCH_ASSOC);
                    break;
                default:
                    $data = '';
            }
        }else{
            if($result->num_row > 0){
                while($row = $result->fetchAll(PDO::FETCH_ASSOC)){
                    $data[] = $row;
                }
            }
        }
        return !empty($data)?$data:false;
    }
    
    

}
