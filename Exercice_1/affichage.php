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
    <title> Exercice 1 - TP 1 </title>
</head>
<body>
    <div class="donnée">
        <?php
            $ID = $_POST['id'];
            $Nom = $_POST['nom'];
            $Prenom = $_POST['prenom'];
            $Tel = $_POST['tel'];
            $CIN = $_POST['cin'];

            echo "<h2> Bienvenu $Nom </h2>";
            echo "<p><strong>ID:</strong> $ID</p>";
            echo "<p><strong>Nom:</strong> $Nom</p>";
            echo "<p><strong>Prénom:</strong> $Prenom</p>";
            echo "<p><strong>Numero du Téléphone:</strong> $Tel</p>";
            echo "<p><strong>Numéro CIN:</strong> $CIN</p>";
        ?>
    </div>
</body>
</html>
