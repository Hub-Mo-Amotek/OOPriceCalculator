<?php
declare(strict_types=1);
include 'Views/include/header.php';
?>

<div class="container">
    <form method="post">
        <div class="form-row">
            <div class="col-md-5 mb-3">
                <select class="custom-select" name='customerId'>
                    <option selected="selected">Choose one</option>
                    <?php
                    // A sample product array
                    // Iterating through the product array
                    foreach($customerNames as $item){
                    echo "<option value='$item->id'>$item->name</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="col-md-5 mb-3">
                <select class="custom-select" name='productId'>
                    <option selected="selected">Choose Product</option>
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
            <div class="col-md-5 mb-3">
                <select class="custom-select" name='quantity'>
                    <option selected="selected">Choose Product</option>
                    <?php
                    for($i=1;$i<=100;$i++)  {
                        echo "<option value='$i'>$i</option>";
                    } 
                    ?>
                </select>
            </div>
            <div>
                <button class="btn btn-primary" type="submit" value="Submit" name="submit">Calculate</button>
            </div>
        </div>
    </form>
</div>
<?php
include 'Views/include/footer.php';
?>
