<?php
    include("function.php");
    $id = $_GET['id'];
    delete($id);
    header("Location: main.php");
?>  