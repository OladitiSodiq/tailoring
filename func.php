<?php


 $conn = new PDO("mysql:host=localhost;dbname=tail_oring", 'root', '');
//$conn = new PDO("mysql:host=sql202.epizy.com;dbname=epiz_24073010_tail_oring", 'epiz_24073010', 'NM0Hs3cQZ98');
if(!function_exists('img_con')){
function img_con($conn){
    $stmt = $conn->prepare("SELECT * FROM upload"); 
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC); 
    return $result;
}}
?>