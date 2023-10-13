<!DOCTYPE html>
<html>
<head>
    <style>
        .employe
        {
            width: 300px;
            margin: 50px auto;
            padding: 20px;
            background-color: #d4c6c6;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 4, 0, 0.2);
        }
    </style>
        <title> Exercice 4 - TP 1 </title>
</head>
<body>
    <div class="employe">

        <?php

            $Id = $_POST['id'];

            $Nom = $_POST['nom'];
            $Prenom = $_POST['prenom'];
            $Nbh = $_POST['nbh'];

            $GA = 30;
            $GB = 50;
            $GC = 70;

            if (isset($_POST['grade'])) 
            {
                $grade = $_POST['grade'];
                $Grade = '';
                $salaire = 0;
                
                if ($grade === 'A')
                {
                    $salaire = $GA * $Nbh;
                    $Grade = "Grade A";
                } 
                
                if ($grade === 'B') 
                {
                    $salaire = $GB * $Nbh;
                    $Grade = "Grade B";
                } 

                if ($grade === 'C')
                {
                    $salaire = $GC * $Nbh;
                    $Grade = "Grade C";
                }
            }

            echo "<h2> Employé ID N° $Id </h2>";
            echo "<p><strong> Employé ID:</strong> $Id </p>";
            
            echo "<p><strong> Nom Employé :</strong> $Nom </p>";
            echo "<p><strong> Prénom Employé :</strong> $Prenom </p>";
            echo "<p><strong> Nombre Heure Totale :</strong> $Nbh </p>";
            echo "<p><strong> Grade :</strong> $Grade</p>";
               
            echo "<p><strong> Le Salaire de l'Employé est $salaire Dt </strong></p>";

        ?>
    </div>
</body>
</html>
