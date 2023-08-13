<?php
require_once('../Model/alldb.php');

if (isset($_POST['addBtn'])) {
    header('location:../View/add.php');
} elseif (isset($_POST['displayBtn'])) {
    header('location:../View/displayEmployee.php');
} else {
    header('location:../View/homePage.php');
}
?>
