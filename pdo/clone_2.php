<?php

class AnimalClass{
   public $username = 'root';
   public $password ='webonise6186';
   public $animal_id;
   public $animal_name;
   public $animal_type;
   public $db;
   public $query='select * from animals';
   function _construct(){
      try{
           $this->db = new PDO('mysql:host=localhost;dbname=webonise', $this->username, $this->password);
           echo "<br/>connection established <br/>-----------------------------------<br/>";
           $this->db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
           //$this->db = null;
      } catch(PDOException $error_string){
          echo $error_string->getMessage();
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
       }catch(PDOException $e){
    /*** roll back the transaction if we fail ***/
        $this->db->rollback();
    /*** echo the sql statement and error message ***/
        echo $sql . '<br />' . $e->getMessage();
       }
     }

   public function insertData(){
      /*Insert query*/
      $this->db=$this->_construct();
      $count = $this->db->exec("insert into animals(animal_type, animal_name) values ('kiwi', 'troy'),('Panther','pantha')")or die('error in query');
      if ($count===0){
         echo "No rows effected";
      }
      else{
         echo $count;
      }
    }
   public function selectData(){
      //$this->db=$this->_construct();
         /* Select query*/
      $sql= "Show databases";
      echo "Databases<br/>";
      foreach ($this->db->query($sql) as $row) {
           echo $row['Database']."<br/>";
      }
   }
   public function fetchAllData(){
      $this->db=$this->_construct();
      /* fecthAll*/
     $query = "select * from animals";
     $result = $this->db->query($query)->fetchAll(PDO::FETCH_ASSOC);
     foreach ($result as $value) {
         echo $value['animal_id']."--".$value['animal_type']."--".$value['animal_name']."<br/>";
     }
   }

   public function updateData(){
     $this->db=$this->_construct();
   /* Update query*/
     $count = $this->db->exec("update animal set animal_name='king kong' where animal_name='bruce'");
     echo $count;
   }
   public function fetchAssoc(){
       $this->db=$this->_construct();
       $sql= "select * from animals";
       $query = $this->db->query($sql);
       $result = $query->fetch(PDO::FETCH_ASSOC);
       foreach($result as $key=>$val){
          echo $key." --- ".$val."<br/>";
       }
     }
   public function fetchBoth(){
       $this->db=$this->_construct();
       $sql= "select * from animals";
       $query = $this->db->query($sql);
       $result = $query->fetch(PDO::FETCH_BOTH);
       foreach($result as $key=>$val){
          echo $key." --- ".$val."<br/>";
       }
    }
   public function fetchNum(){
       $this->db=$this->_construct();
       $sql= "select * from animals";
       $query = $this->db->query($sql);
       $result = $query->fetch(PDO::FETCH_NUM);
       foreach($result as $key=>$val){
          echo $key." --- ".$val."<br/>";
       }
    }
   public function fetchObject(){
       $this->db=$this->_construct();
       $sql= "select * from animals";
       $query = $this->db->query($sql);
       $result = $query->fetch(PDO::FETCH_OBJ);
       echo $result->animal_id.'<br/>';
       echo $result->animal_type.'<br/>';
       echo $result->animal_name.'<br/>';
    }
   public function fetchLazy(){
       $this->db=$this->_construct();
       $result = $this->db->query("select * from animals",PDO::FETCH_LAZY);
       foreach($result as $row){
         echo $row['animal_type']."<br/>";
       }
    }

   public function prepareQuery(){
       $this->db=$this->_construct();
       $animal_id = 10; // will not execute this bcoz 15 will overwrite 10.
       $animal_type = 'crocodile';
       $animal_name = 'king kong';
       $query = "select * from animals where animal_id = :animal_id ";

      //$query = "select * from animals where animal_id = :animal_id or animal_name=:animal_name";
       $stmt = $this->db->prepare($query);
       $stmt->bindParam(':animal_id', $animal_id, PDO::PARAM_INT);
      // $stmt->bindParam(':animal_name', $animal_name, PDO::PARAM_STR,5);
       $animal_id = 15;
       $stmt->execute();

       $res=$stmt->fetchAll();
       foreach($res as $row ){
          echo $row['animal_id']."---".$row['animal_name']."---".$row['animal_type']."<br/>";
       }
       $animal_id = 2;
       $stmt->execute();

       $res=$stmt->fetchAll();
       foreach($res as $row ){
          echo $row['animal_id']."---".$row['animal_name']."---".$row['animal_type']."<br/>";
       }
       $animal_id = 5;
       $stmt->execute();

       $res=$stmt->fetchAll();
       foreach($res as $row ){
         echo $row['animal_id']."---".$row['animal_name']."---".$row['animal_type']."<br/>";
       }
     }
   public function upperType(){
      return strtoupper($this->animal_type);
    }
   public function capitalizeType(){
      return ucwords($this->animal_type);
    }

}

$a = new AnimalClass;
// uncomment the following and see the output

//$a->CreateTransaction();
//$a->insertData();
$a->selectData();
//$a->updateData();
//$a->fetchAllData();
//$a->fetchAssoc();
//$a->fetchBoth();
//$a->fetchNum();
//$a->fetchObject();
//$a->fetchLazy();
//$a->prepareQuery();


/*fetch class*/
function fetchClass(){
    $a = new AnimalClass;
    //$query = "select * from animals";

    $obj = $db->query($query)->fetchAll(PDO::FETCH_CLASS, 'AnimalClass');
    $obj = $db->query($query);
   //echo $this->db->errorCode()."<br/>";
    $obj->setFetchMode(PDO::FETCH_INTO, new AnimalClass);
    foreach ($obj as $row) {
       echo $row->upperType()."<br/>";
   }
}
//uncomment the following
//fetchClass();

?>
