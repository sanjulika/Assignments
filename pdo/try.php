<?php
class Person
{
   private $name;

   function __construct($name)
   {
       $this->name = $name;
   }

   function getName()
   {
       return $this->name;
   }
}
$a= new Person('sanjulika');
echo $a->getName();


/*fetch class
class B extends AnimalClass {
public function fetchClass(){
    $query = "select * from animals";
    //$obj = $this->db->query($query)->fetchAll(PDO::FETCH_CLASS, 'AnimalClass');
    $obj = $this->db->query($query);
   //echo $this->db->errorCode()."<br/>";
    $obj->setFetchMode(PDO::FETCH_INTO, new AnimalClass);
    foreach ($obj as $row) {
       echo $row->upperType()."<br/>";
   }
}

}*/
//$b = new B;
//$b->fetchClass();
//uncomment the following
//fetchClass();

?>