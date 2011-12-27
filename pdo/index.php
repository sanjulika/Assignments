<?php

class AnimalClass{
   public $username = 'root';
   public $password ='webonise6186';
   public $animal_id;
   public $animal_name;
   public $animal_type;      
   protected $db;
   public $query='select * from animals';
   
   function __construct(){
     try{
         $this->db= new PDO('mysql:host=localhost;dbname=webonise', $this->username, $this->password);
         echo "<br/>connection established <br/>-----------------------------------<br/>";
         $this->db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      }catch(PDOException $error_string){
          echo $error_string->getMessage();
      }
   }
   public function showResult($res,$value){
     if($value!=null){
       foreach ($res as $row) {
           echo $row[$value]."<br/>";
       }
     }else{
       foreach($res as $key=>$val){
          echo $key." --- ".$val."<br/>";
       }
     }
   }
   public function showOutput($res){
        foreach($res as $row ){
          echo $row['animal_id']."---".$row['animal_type']."---".$row['animal_name']."<br/>";
       }
   }
   
   public function CreateTransaction(){
      $this->db->beginTransaction();
      try{
      
     /*** CREATE table statements ***/
       $table = "CREATE TABLE animal ( animal_id MEDIUMINT(8) NOT NULL AUTO_INCREMENT PRIMARY KEY,animal_type VARCHAR(25) NOT NULL,animal_name VARCHAR(25) NOT NULL)";
       $this->db->exec($table);
     /***  insert statements ***/
       $this->db->exec("insert into animal (animal_type, animal_name) values ('emu', 'bruce')");
       $this->db->exec("insert into animal (animal_type, animal_name) values ('funnel web', 'bruce')");
       $this->db->exec("insert into animal (animal_type, animal_name) values ('lizard', 'bruce')");
       $this->db->exec("insert into animal (animal_type, animal_name) values ('dingo', 'bruce')");
       $this->db->exec("insert into animal (animal_type, animal_name) values ('kangaroo', 'bruce')");
       $this->db->exec("insert into animal (animal_type, animal_name) values ('wallaby', 'bruce')");
       $this->db->exec("insert into animal (animal_type, animal_name) values ('wombat', 'bruce')");
       $this->db->exec("insert into animal (animal_type, animal_name) values ('koala', 'bruce')");
       $this->db->exec("insert into animal (animal_type, animal_name) values ('kiwi', 'bruce')");

    /*** commit the transaction ***/
       $this->db->commit();
    /*** echo a message to say the database was created ***/
       echo 'Data entered successfully<br />';
       $this->db = null;
     }catch(PDOException $e){
    /*** roll back the transaction if we fail ***/
        $this->db->rollback();
    /*** echo the sql statement and error message ***/
        echo $sql . '<br />' . $e->getMessage();
       }
     }

   public function insertData(){
      /*Insert query*/
      $count = $this->db->exec("insert into animals(animal_type, animal_name) values ('kiwi', 'troy'),('Panther','pantha')")or die('error in query');
      if ($count===0){
         echo "No rows effected";
      }else{
         echo $count;
      }
      $this->db = null;
    }
   public function selectData(){
      /* Select query*/
      echo "Databases<br/>";
      $sql= "Show databases";
      $res=$this->db->query($sql);
      $value='Database';//column to be shown
      $this->showResult($res,$value);
      $this->db = null;
   }
   public function fetchAllData(){
     /* fecthAll*/
     $query = "select * from animals";
     $result = $this->db->query($query)->fetchAll(PDO::FETCH_ASSOC);
     foreach ($result as $value) {
         echo $value['animal_id']."--".$value['animal_type']."--".$value['animal_name']."<br/>";
     }
   }
   public function updateData(){
     /* Update query*/
     $count = $this->db->exec("update animal set animal_name='king kong' where animal_name='bruce'");
     echo $count;
   }
   public function fetchAssoc(){
       $sql= "select * from animals";
       $query = $this->db->query($sql);
       $result = $query->fetch(PDO::FETCH_ASSOC);
       $value= null;
       $this->showResult($result,$value); //call key value for each function
     }
   public function fetchBoth(){
       $sql= "select * from animals";
       $query = $this->db->query($sql);
       $result = $query->fetch(PDO::FETCH_BOTH);
       $value= null;
       $this->showResult($result,$value); //call key value for each function
    }
   public function fetchNum(){
       $sql= "select * from animals";
       $query = $this->db->query($sql);
       $result = $query->fetch(PDO::FETCH_NUM);
       $value= null;
       $this->showResult($result,$value); //call key value for each function
    }
   public function fetchObject(){
       $sql= "select * from animals";
       $query = $this->db->query($sql);
       $result = $query->fetch(PDO::FETCH_OBJ);
       echo $result->animal_id.'<br/>';
       echo $result->animal_type.'<br/>';
       echo $result->animal_name.'<br/>';
    }
   public function fetchLazy(){
       $result = $this->db->query("select * from animals",PDO::FETCH_LAZY);
       $value='animal_type';
       $this->showResult($result,$value);
     }
   
   public function prepareQuery(){
       $animal_id = 10; // will not execute this bcoz 15 will overwrite 10.
       $animal_type = 'crocodile';
       $animal_name = 'king kong';
       $query = "select * from animals where animal_id = :animal_id ";

       //$query = "select * from animals where animal_id = :animal_id or animal_name=:animal_name";
       $stmt = $this->db->prepare($query);
       $stmt->bindParam(':animal_id', $animal_id, PDO::PARAM_INT);
       //$stmt->bindParam(':animal_name', $animal_name, PDO::PARAM_STR,5);
       $animal_id = 15;
       $stmt->execute();

       $res=$stmt->fetchAll();
       $this->showOutput($res);
             
       $animal_id = 2;
       $stmt->execute();

       $res=$stmt->fetchAll();
       $this->showOutput($res);
       $animal_id = 5;
       $stmt->execute();

       $res=$stmt->fetchAll();
       $this->showOutput($res);
     }
   public function upperType(){
      return strtoupper($this->animal_type);
    }
   public function capitalizeType(){
      return ucwords($this->animal_type);
    }

   public function fetchClass(){
     $query = "select * from animals";
     //$obj = $this->db->query($query)->fetchAll(PDO::FETCH_CLASS, 'AnimalClass');
     $obj = $this->db->query($query);
     //echo $this->db->errorCode()."<br/>";
     $obj->setFetchMode(PDO::FETCH_INTO, new AnimalClass());
     foreach ($obj as $row) {
        echo $row->upperType()."<br/>";
     }
    }
  }

$a = new AnimalClass;
// uncomment the following and see the output
//$a->CreateTransaction();
//$a->insertData();
//$a->selectData();
//$a->updateData();
//$a->fetchAllData();
//$a->fetchAssoc();
//$a->fetchBoth();
//$a->fetchNum();
//$a->fetchObject();
//$a->fetchLazy();
//$a->prepareQuery();
//$a->fetchClass();
?>
