<?php

//load.php


$conn = new PDO("mysql:host=localhost;dbname=tail_oring", 'root', '');
// $conn = new PDO("mysql:host=sql202.epizy.com;dbname=epiz_24073010_tail_oring", 'epiz_24073010', 'NM0Hs3cQZ98');
// $connect = new PDO('mysql:host=localhost;dbname=testing', 'root', '');

$data = array();

$query = "SELECT * FROM upload";

$statement = $conn->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

foreach($result as $row)
{
 $data[] = array(
  'title'   => $row["mat_type"],
 'start'   => $row["dates"],
 'end'   => $row["dates"] ,
 'className'   => "bg-warning"
 );
}

echo json_encode($data);

?>
