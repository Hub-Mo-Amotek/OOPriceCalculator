<?php
declare(strict_types=1);


class CustomerGroup {

    public function retrieveGroup($id){

        $dataSource = new DataSource();
        $dbh = $dataSource->connect();

        $fixedVariables = [];
        $sqlCustomer = "SELECT fixed_discount FROM customer WHERE group_id = ".$id;
        $query = $dbh->query($sqlCustomer);
        array_push($fixedVariables, $query->fetch(PDO::FETCH_ASSOC));
        var_dump($fixedVariables);


    }
    // loop trough the groups and have an array of all the fixed and variable discounts

    // wich are the percentages
    // the not percentages discounts can be put in an array and you can take the highest number out of there.
    // percentages should be calculated and the highest discount will be the one that gets used.

    // also if there are more then 1 fixed discounts you can count those up
}