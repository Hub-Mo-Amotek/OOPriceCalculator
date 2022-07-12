<?php
declare(strict_types=1);
include 'Views/include/header.php';
?>

<?php

$dummyInfo = ["productPrice" => 1234, "amount" => 5, "highestGroupVariable" => 32, "totalGroupFixed" => 32, "customerOwnVariable" => NULL, "customerOwnFixed" => 10, "finalPrice" => 251];
var_dump($dummyInfo);

?>

<div class="container">
    <form method="post">
        <div class="form-row p-1">
            <div class="col-md-3">
                <select class="custom-select" name='customerId'>
                    <option selected="selected">Customer</option>
                    <?php
                    // A sample product array
                    // Iterating through the product array
                    foreach($customerNames as $item){
                    echo "<option value='$item->id'>$item->name</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="col-md-4">
                <select class="custom-select" name='productId'>
                    <option selected="selected">Product</option>
                    <?php
                    // A sample product array
                    // Iterating through the product array
                    foreach($productNames as $item){
                    $price = $item->price / 100;
                    echo "<option value='$item->id'>$item->name - $ $price</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="col-md-3">
                <select class="custom-select" name='quantity'>
                    <option selected="selected">Quantity</option>
                    <?php
                    for($i=1;$i<=100;$i++)  {
                        echo "<option value='$i'>$i</option>";
                    } 
                    ?>
                </select>
            </div>
            <div class="m-1">
                <button class="btn btn-primary" type="submit" value="Submit" name="submit">Calculate</button>
            </div>
        </div>
    </form>
</div>
<?php
include 'Views/include/footer.php';
?>
