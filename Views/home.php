<?php
declare(strict_types=1);
include 'Views/include/header.php';
?>

<?php

 //var_dump($productNames); 

?>

<div class="container">
    <form method="post">
        <div class="form-row p-1">
            <div class="col-md-3">
                <select class="custom-select" name='customerId'>
                    <option selected="selected">Customer</option>
                    <?php foreach($customerNames as $customer): ?>

                        <option value='<?= $customer->getId(); ?>'> <?= $customer->getFullName(); ?> </option>
                    
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-md-4">
                <select class="custom-select" name='productId'>
                    <option selected="selected">Product</option>
                    <?php foreach($productNames as $product): ?>

                        <option value='<?= $product->getId(); ?>'> <?= $product->getName()?> - $ <?= $product->getProductPrice() / 100; ?> </option>

                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-md-2">
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
    
    <?php 

        if(isset($baseInfo)) {
            include 'Views/calcTable.php' ;
        } 
            
    ?>

</div>
<?php
include 'Views/include/footer.php';
?>
