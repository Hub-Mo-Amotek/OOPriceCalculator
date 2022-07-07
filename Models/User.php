<?php

class User extends DataSource{

private string $name;
private string $surname;

public function __construct(string $name, string $surname){

    $this->name = $name;
    $this->surname = $surname;

}

public function retrieveCustomers(){

    $responseArray = [];

    $dbh = $this->connect();

    $sql = "SELECT * FROM Customer WHERE group_id < 10";

    $query = $dbh->query($sql);

    while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
        array_push($responseArray, $row);
    }

    return $responseArray;

}

public function retrieveGroupId(){

    $responseArray = [];

    $dbh = $this->connect();

    $sql = "SELECT group_id FROM Customer WHERE firstname='Peg'";

    $query = $dbh->query($sql);

    while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
        array_push($responseArray, $row);
    }

    return $responseArray;

}

}