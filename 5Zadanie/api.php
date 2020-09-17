<?php 

function getNameBalance ($db){
    $sql = "SELECT * FROM persons
                    INNER JOIN transactions ON persons.id = transactions.transaction_id ";
    $res = array ();
    $stmt = $db->prepare($sql);
    $stmt->execute();
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) { 
        $res[$row['fullname']] = $row;  
    }
    return $res;
}

function getCity ($db) {
    $sql ="SELECT * FROM cities INNER JOIN transactions ON cities.id = transactions.to_person_id  INNER JOIN persons ON persons.city_id = cities.id
    WHERE cities.id = 2 || cities.id = 3 || cities.id = 4";
    $res = array ();
    $stmt = $db->prepare($sql);
    $stmt->execute();
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) { 
        $res[$row['name']] = $row;  
        $res[$row['fullname']] = $row; 
    }
    return $res;
}

 function getIdTransferCoin($db){
    $sql = "SELECT * FROM persons INNER JOIN transactions ON persons.id = transactions.transaction_id INNER join cities ON persons.city_id = cities.id WHERE cities.id = 3 AND transactions.transaction_id = 2 || transactions.transaction_id = 3";
    $res = array();
    $stmt = $db->prepare($sql);
    $stmt->execute();
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) { 
        $res[$row['transaction_id']] = $row;  
      
    }
    return $res;

}
?>
<!-- SELECT from_person_id, COUNT(from_person_id)
FROM transactions
GROUP BY from_person_id
HAVING COUNT(from_person_id) >1 -->

<!-- SELECT * FROM persons INNER JOIN  transactions ON persons.id = transaction_id ON persons.city_id = transactions.transaction_id WHERE -->