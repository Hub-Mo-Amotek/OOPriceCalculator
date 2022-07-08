<?php
declare(strict_types=1);
include 'Views/include/header.php';
$dummyArray = ['Mo El', 'Lucas S', 'Michael Monteiro', 'Hello names', 'hello planet']
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
    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
    <?php
        foreach($dummyArray as $name){
            echo "<li><a class='dropdown-item active' href='#' value='$name'>".$name."</a></li>";
        }
    ?>
    </ul>
</div>

<?php
include 'Views/include/footer.php';
?>
