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
    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
        <li><a class="dropdown-item active" href="#">Action</a></li>
        <li><a class="dropdown-item" href="#">Another action</a></li>
        <li><a class="dropdown-item" href="#">Something else here</a></li>
        <li><hr class="dropdown-divider" /></li>
        <li><a class="dropdown-item" href="#">Separated link</a></li>
    </ul>
</div>

<?php
include 'Views/include/footer.php';
?>
