<?php
declare(strict_types=1);
include 'Views/include/header.php';
?>

<div class="container d-flex justify-content-center">
    <form method="post">
        <select>
            <option selected="selected">Choose one</option>
            <?php
            // A sample product array
            // Iterating through the product array
            foreach($customerNames as $item){
                echo "<option value='strtolower($item->id)'>$item->name</option>";
            }
            ?>
        </select>
        <select>
            <option selected="selected">Choose Product</option>
            <?php
            // A sample product array
            // Iterating through the product array
            foreach($productNames as $item){
                echo "<option value='strtolower($item->id)'>$item->name</option>";
            }
            ?>
        </select>
        <button type="submit" value="Submit" name="submit">Calculate</button>
    </form>

</div>
<?php
include 'Views/include/footer.php';
?>
