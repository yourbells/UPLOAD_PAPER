<?php
spl_autoload_register(function ($class_name) {
    if (file_exists("controllers/$class_name.php")) {
        include "controllers/$class_name.php";
    } elseif (file_exists("models/$class_name.php")) {
        include "models/$class_name.php";
    }
});

$controller = new UploadController();
$controller->index();
?>
