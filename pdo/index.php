<?php
$username = 'root';
$password ='webonise6186';

class AnimalClass{
   public $animal_id;
   public $animal_name;
   public $animal_type;      

   public function upperType(){
      return strtoupper($this->animal_type);
   }
   public function capitalizeType(){
      return ucwords($this->animal_type);
   }
}

$animals_obj = new AnimalClass;

try{

   $db = new PDO('mysql:host=localhost;dbname=webonise', $username, $password);
   print_r($db);
   $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   echo "<br/>connection established <br/>-----------------------------------<br/>";
   //$db->beginTransaction();
   
$animal_id = 10; // will not execute this bcoz 15 will overwrite 10.
$animal_type = 'crocodile';
$animal_name = 'king kong';
$query = "select * from animals where animal_id = :animal_id or animal_name=:animal_name";

   $stmt = $db->prepare($query);
   $stmt->bindParam(':animal_id', $animal_id, PDO::PARAM_INT);
   $stmt->bindParam(':animal_name', $animal_name, PDO::PARAM_STR,5);
   $animal_id = 15;
   $stmt->execute();
   
    $res=$stmt->fetchAll();
   foreach($res as $row ){
      echo $row['animal_id']."---".$row['animal_name']."---".$row['animal_type']."<br/>";
   }
   /*$animal_id = 2;
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
   }*/
   //$count = $db->exec('insert into animals value(18,"peacock","pc")');
   //echo $db->lastInsertId();
   //echo "<br/>".$count;
   //$db->commit();

   /*fetch class
    $query = "select * from animals";
   //$obj = $db->query($query)->fetchAll(PDO::FETCH_CLASS, 'AnimalClass');
      
   $obj = $db->query($query);
   //echo $db->errorCode()."<br/>";
   $obj->setFetchMode(PDO::FETCH_INTO, new AnimalClass);
   foreach ($obj as $row) {
       echo $row->capitalizeType()."<br/>";
   }*/


/* CALBACK ---NOT WORKING---
 function print_result($res,$s) {
  foreach ($result as $value) {
       echo $value['animal_id']."--".$value['animal_type']."--".$value['animal_name']."<br/>";
  }
}
$res = $db->query('SELECT * FROM animals');
$res->fetchAll(
PDO::FETCH_FUNC,
'print_result'
);*/
/* fecthAll

$query = "select * from animals";
$result = $db->query($query)->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $value) {
       echo $value['animal_id']."--".$value['animal_type']."--".$value['animal_name']."<br/>";
}*/

/* fetch assoc,fetch_both,fetch_num,fetch rows
$sql= "select * from animals";

$query = $db->query($sql);
//$result = $query->fetch(PDO::FETCH_ASSOC);
//$result = $query->fetch(PDO::FETCH_BOTH);
 //$result = $query->fetch(PDO::FETCH_NUM);
//$result = $query->fetch(PDO::FETCH_OBJ);
echo $result->animal_id.'<br/>';
echo $result->animal_type.'<br/>';
echo $result->animal_name.'<br/>';
//$result = $query->fetch(PDO::FETCH_LAZY);
$result = $db->query("select * from animals",PDO::FETCH_LAZY);
foreach($result as $key=>$val){
        echo $key." --- ".$val."<br/>";
}
foreach($result as $row){
        echo $row['animal_type']."<br/>";
}*/

/* Update query
$count = $db->exec("update animals set animal_name='king kong' where animal_name='bruce'");
echo $count;
*/

/* Select query
$sql= "Show databases";
echo "Databases<br/>";
foreach ($db->query($sql) as $row) {
   echo $row['Database']."<br/>";
}*/


/*Insert query
$count = $db->exec("insert into animals(animal_type, animal_name) values ('kiwi', 'troy'),('Panther','pantha')")or die('error in query');
if ($count===0){
        echo "No rows effected";
}
else{
echo $count;
}*/
$db = null;
}catch(PDOException $error_string){
     echo $error_string->getMessage();
}

?>
