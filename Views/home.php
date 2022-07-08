<?php
declare(strict_types=1);
include 'Views/include/header.php';
?>

<div class="dropdown">
    <button
        class="btn btn-secondary dropdown-toggle"
        type="button"
        id="dropdownMenuButton2"
        data-mdb-toggle="dropdown"
        aria-expanded="false"
    >
        Dropdown button
    </button>
    //<ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
    <?php
    //$dummyArray = ['Mo El', 'Lucas S', 'Michael Monteiro', 'Hello names', 'hello planet'];
    //    foreach($dummyArray as $name){
    //        echo "<li value='$name' ><a class='dropdown-item' href='#'>".$name."</a></li>";
    //    }
    ?>
    </ul>

</div>
<form method="post">
    <select>
        <option selected="selected">Choose one</option>
        <?php
        // A sample product array
        $products = array("Michael", "Mo", "Lucas", "User");
        // Iterating through the product array
        foreach($products as $item){
            echo "<option value='strtolower($item)'>$item</option>";
        }
        ?>
    </select>
    <input type="submit" value="Submit">
</form>

<?php
include 'Views/include/footer.php';
?>
