<!DOCTYPE html>
<html>
<head>
    <style>
        .form
        {
            width: 300px;
            margin: 0 auto;
            padding: 50px;
            background-color: #d4c6c6;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }

        label 
        {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"] 
         {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ffffff;
            border-radius: 5px;
        }

        input[type="submit"] 
        {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Hover effect for the submit button */
        input[type="submit"]:hover
         {
            background-color: #4c1363;
        }
    </style>
    <title> Exercice 4 - TP 1 </title>
</head>
<body>
    <div class="form">
        <h1> Formulaire d'Employé </h1>

        <form action="salaire.php" method="POST">

            <label for="id">ID Employé:</label>
            <input type="text" name="id" id="id">

            <label for="nom">Nom:</label>
            <input type="text" name="nom" id="nom">

            <label for="prenom">Prenom:</label>
            <input type="text" name="prenom" id="prenom">

            <label for="nbh"> Nombre d'heure de travail :</label>
            <input type="text" name="nbh" id="nbh">


            <fieldset>
            <legend>Selectioner Grade :</legend>
            
                <input type="radio" id="g1" name="grade" value="A" />
                <label for="g1">Grade A </label>

                <input type="radio" id="g2" name="grade" value="B" />
                <label for="g2"> Grade B </label>

                <input type="radio" id="g3" name="grade" value="C" />
                <label for="g3">Grade C </label>

            </fieldset>
            <br>

            <input type="submit" value="Générer Fiche Employé">
        </form>
    </div>
</body>
</html>
