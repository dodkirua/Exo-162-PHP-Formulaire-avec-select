<?php
if (!isset($_POST['name'],$_POST['surname'])){
        header('Location: ../index.php?error=2');
    }
else {
    $name2 = trim(htmlentities($_POST['name']));
    $surname2 = trim(htmlentities($_POST['surname']));
    echo "<p>Hello $surname2 $name2</p>";
}
