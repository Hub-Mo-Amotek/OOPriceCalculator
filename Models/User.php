<?php

class User extends DataSource{

public function retrieveCustomerNames(){

    $responseArray = [];

    $dbh = $this->connect();

    $sql = "SELECT firstname, lastname FROM Customer";

    $query = $dbh->query($sql);

    while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
        array_push($responseArray, $row);
    }

    return $responseArray;

}

}