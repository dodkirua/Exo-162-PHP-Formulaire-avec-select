<?php
if (!isset($_GET['name'],$_GET['surname'])){
    header('Location: ../index.php?error=1');

}
elseif (isset($_GET['name'],$_GET['surname'])){
    $name = trim(htmlentities($_GET['name']));
    $surname = trim(htmlentities($_GET['surname']));
    echo "<p>Hello $surname $name</p>";
}

