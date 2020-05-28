<?php 

$dbname = "example";
$password = "";
$host = "localhost";
$username = "root";

try{
    $conn = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);

      $sql = "CALL `show_client`(:number);";

      $stmt = $conn->prepare($sql);

      $number=1;
      $stmt->bindParam(":number",$number);

      $stmt->execute();
  
      while($row = $stmt ->fetch(PDO::FETCH_ASSOC)){
        echo ($row["personne"])."<br>";
    }  
        

    }catch(PROExeption $e){
        echo"fail";
    }

?>