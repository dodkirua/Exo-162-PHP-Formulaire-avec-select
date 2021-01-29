<?php
if (!isset($_POST['name'],$_POST['surname'],$_POST['civ'])){
   require "partial/exo1.php";
   require "partial/exo2.php";
   ?>
<form action="index.php" method="POST" enctype="multipart/form-data">
    <h3>Exo5</h3>

    <?php
   require "form2.php";
   require "form.php";
}
else {
    $name = trim(htmlentities($_POST['name']));
    $surname = trim(htmlentities($_POST['surname']));
    $civ = $_POST['civ'];

    echo "<p>Hello $civ $surname $name</p>";


    if (isset($_FILES['file'])){

        if ($_FILES['file']['type'] === "application/pdf"){
            $file = $_FILES['file']['name'];
            $extend = substr($file,(strpos($file,".")+1),strlen($file));

            echo "<p>le fichier envoyé à pour extension : $extend</p>";
        }
        else {
            echo "<p>le fichier envoyé n'est pas un pdf</p>";
        }
    }
    else {
       echo "erreur a l'upload";
    }

}

?>



