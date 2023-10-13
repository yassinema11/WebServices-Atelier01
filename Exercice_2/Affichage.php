<!DOCTYPE html>
<html>
<head>
    <style>
        .donnée
        {
            width: 300px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f2f2f2;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
    </style>
    <title> Exercice 2 - TP 1 </title>
</head>
<body>
    <div class="donnée">

        <?php

            $Nom = $_POST['nom'];
            $Prenom = $_POST['prenom'];
            $Cin = $_POST['cin'];
            $Age = $_POST['age'];

            $MoySem1 = $_POST['ms1'];
            $MoySem2 = $_POST['ms2'];

            $MoyGen = ($MoySem1 + $MoySem2) / 2;


            echo "<h2> Bienvenu Etudiant $Nom </h2>";
            echo "<p><strong>Nom:</strong> $Nom </p>";
            echo "<p><strong>Prénom:</strong> $Prenom</p>";
            echo "<p><strong>Age :</strong> $Age</p>";
            echo "<p><strong>Numéro CIN:</strong> $Cin</p>";
            echo "<p><strong>Moyenne Semestre 1 :</strong> $MoySem1</p>";
            echo "<p><strong>Moyenne Semestre 2 :</strong> $MoySem2</p>";
            echo "<p><strong>Moyenne Générale :</strong> $MoySem</p>";
        ?>
    </div>
</body>
</html>
