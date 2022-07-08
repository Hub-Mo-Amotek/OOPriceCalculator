<?php

class DataSource {

    public function connect() {

        $servername = $_ENV['MySQL_DB_HOST'];
        $username = $_ENV['MySQL_DB_USER_NAME'];
        $password = $_ENV['MySQL_DB_PASSWORD'];
        $database = $_ENV['MySQL_DB_NAME'];

        try {
            $dsn = "mysql:host=" . $servername . ";dbname=" . $database . ";";
            $pdo = new PDO($dsn, $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connection succesfull!";
            return $pdo;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function retrieveAllCustomerNames(){

        $dbh = $this->connect();

        $allCustomerNames = [];

        $sql = "SELECT id, firstname, lastname FROM Customer";
        $query = $dbh->query($sql);
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            $object = (object)array('id' => $row['id'], 'name' => $row['firstname'] . " " . $row['lastname']);

            array_push($allCustomerNames, $object);
        }

        return $allCustomerNames;

    }


    public function retrieveCustomer($id){

        $dbh = $this->connect();

        $responseArray = [];

        $sql = "SELECT * FROM Customer WHERE id=" . $id;
        $query = $dbh->query($sql);
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            array_push($responseArray, $row);
        }

        return $responseArray;

    }
}