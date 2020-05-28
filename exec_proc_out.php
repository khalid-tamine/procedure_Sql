<?php 

$dbname = "example";
$password = "";
$host = "localhost";
$username = "root";

try{
    $conn = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);

      $sql = "CALL `show_client`(:number,@nom);";

      $stmt = $conn->prepare($sql);

      $number=1;
      $stmt->bindParam(":number",$number);

      $stmt->execute();

      $sql = "SELECT @nom as 'name'";
      $stmt = $conn->prepare($sql);
      $stmt->execute();  
      while($row = $stmt ->fetch(PDO::FETCH_ASSOC)){
        echo ($row["name"])."<br>";
    }  
        

    }catch(PROExeption $e){
        echo"fail";
    }

?>