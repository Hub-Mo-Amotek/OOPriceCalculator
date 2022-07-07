<?php

class Product extends DataSource{


    public function retrieveProducts(){

        $productsArray = [];

        $dbh = $this->connect();

        $sql = "SELECT name FROM Product";

        $query = $dbh->query($sql);

        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            array_push($productsArray, $row);
        }

        return $productsArray;
}
}
