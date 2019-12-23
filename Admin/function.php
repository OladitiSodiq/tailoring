<?php
include('../func.php');
function cool_con($conn){
    $stmts = $conn->prepare("SELECT * FROM upload "); 
   $stmts->execute();
   $results = $stmts->fetchAll(PDO::FETCH_ASSOC);
   return $results; 
  }
  function count_allusers($conn){
    $stmt = $conn->prepare("SELECT * FROM users"); 
    $stmt->execute();
    $count = $stmt->rowCount();

    return $count;
}
function count_allorder($conn){
    $stmt = $conn->prepare("SELECT * FROM upload"); 
    $stmt->execute();
    $count = $stmt->rowCount();

    return $count;
}
function cusdet($conn){
  $stmts = $conn->prepare("SELECT * FROM users "); 
 $stmts->execute();
 $results = $stmts->fetchAll(PDO::FETCH_ASSOC);
 return $results; 
 
}
  ?>