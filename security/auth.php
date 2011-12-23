<?php

$authorize = false;
echo $authorize."<br>";

function authenticated(){
$uname=$_GET['username'];
echo $uname ."<br>";
$pass=$_GET['password'];
echo $pass ."<br>";
  if($uname=="sanjulika" && $pass=="sanjulika"){
    return true; 
  }
  
  return false;
}

  if(authenticated()== true){
    $authorize = true;
  }

  if($authorize == true){
    echo "higly sensitive data";  
    
  }
  else{
   echo "cannot enter";
  }
?>
