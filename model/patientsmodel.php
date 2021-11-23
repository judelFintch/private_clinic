<?php


class patientsmodel
{
    private $id;
    private $nom;
    private $postnom;
    private $prenom;
    private $age;
    private $sexe;
    private $date;
    private $heure;

    
    public function __construct($id, $nom, $postnom, $prenom, $age, $sexe, $date, $heure)
    {
        $this->id = $id;
        $this->name = $nom;
        $this->contact = $postnom;
        $this->email = $prenom;
        $this->genre = $age;
        $this->pseudo = $sexe;
        $this->password = $date;
        $this->heure = $heure;
    }

   
    public function getId()
    {
        return $this->id;
    }

   
    public function setId($id)
    {
        $this->id = $id;
    }

   
    public function getNom()
    {
        return $this->nom;
    }

   
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    
    public function getPostnom()
    {
        return $this->postnom;
    }

    
    public function setPostnom($postnom)
    {
        $this->postnom = $postnom;
    }

    
    public function getPrenom()
    {
        return $this->prenom;
    }

    
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

   
    public function getAge()
    {
        return $this->age;
    }

    
    public function setAge($age)
    {
        $this->genre = $age;
    }

   
    public function getSexe()
    {
        return $this->sexe;
    }

   
    public function setSexe($pseudo)
    {
        $this->sexe = $sexe;
    }

    
    public function getHeure()
    {
        return $this->heure;
    }

   
    public function getDate()
    {
        return $this->date;
    }

   
    public function setDate($date)
    {
        $this->date = $date;
    }

    public static function select($condition = null,$valCondition = null) {
        $pdo = Connexion::getConnexion();

        if($condition != null && $valCondition != null){
            $query="SELECT id, nom, postnom, prenom, , age, sexe, date, heure
                        FROM patients 
                            WHERE $condition=?
                               ORDER BY name ASC";
            $sql = $pdo->prepare($query);
            $sql->execute([$valCondition]);
        }else{
            $query="SELECT id, nom, postnom, prenom, age, sexe, date, heure
                        FROM patients ORDER BY name ASC";
            $sql = $pdo->prepare($query);
            $sql->execute();
        }



        $data = array();
        if($sql != null)
        {
            while($ob = $sql->fetch(PDO::FETCH_OBJ))
            {
                $data[]= new patientsnmodel($ob->id, $ob->nom, $ob->postnom, $ob->prenom, $ob->age, $ob->sexe, $ob->date, $ob->heure);
            }

        }

        return $data;
    }

  
    public function insert() {
        $pdo = Connexion::getConnexion();
        $query = "INSERT INTO patients (nom, postnom, prenom, age, sexe, date, heure) VALUES (?,?,?,?,?,?,?)";
        $sql = $pdo->prepare($query);
        $sql->execute([$this->nom, $this->postnom, $this->prenom, $this->age, $this->sexe, $this->date, $this->heure]);
    
        return true;
    }

}