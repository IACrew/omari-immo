<?php 
    
    include("../Connection.php");

    $json = array();

    $query = 'SELECT COUNT(*) as number FROM immeuble WHERE Type="Local-Commercial" AND Statu="locationld" ';

    $pdoStat = $conn->prepare($query);  

    $pdoStat->execute();

    $riads = $pdoStat->fetchAll(PDO::FETCH_ASSOC);

    foreach ($riads as $riad) 
    {
        $json[]=$riad;
    }

    echo json_encode($json);


?>