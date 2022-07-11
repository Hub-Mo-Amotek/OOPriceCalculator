<?php
declare(strict_types=1);
include 'Views/include/header.php';
?>

<div class="container d-flex justify-content-center">
    <form method="post">
        <select name='customerId'>
            <option selected="selected">Choose one</option>
            <?php
            // A sample product array
            // Iterating through the product array
            foreach($customerNames as $item){
                echo "<option value='$item->id'>$item->name</option>";
            }
            ?>
        </select>
        <select name='productId'>
            <option selected="selected">Choose Product</option>
            <?php
            // A sample product array
            // Iterating through the product array
            foreach($productNames as $item){
<<<<<<< HEAD
                echo "<option value='$item->id'>$item->name - $ $item->price </option>";
=======
                $price = $item->price / 100;
                echo "<option value='strtolower($item->id)'>$item->name - $ $price</option>";
>>>>>>> 83dd6cf19f1f4f665fd017933d89dac05505f1a2
            }
            ?>
        </select>
        <button type="submit" value="Submit" name="submit">Calculate</button>
    </form>

</div>
<?php
include 'Views/include/footer.php';
?>
