<?php
$connection = 'mysql:host=localhost;dbname=cdalbum';
$user = "web001";
$pass = "top";

try{
    $dbh = new PDO($connection, $user, $pass);
}catch (PDOException $e) {
    //header("Location: erreur.html");
}

 foreach ($dbh->query("SELECT album, artiste FROM tableaux_general_cd") as $tableaux_parcourir_tous){
    echo "<br> <li>Le album: artiste: ".$tableaux_parcourir_tous['album']." Artiste:  ".$tableaux_parcourir_tous['artiste']." </li> 
       <br> " ;
   }



?>