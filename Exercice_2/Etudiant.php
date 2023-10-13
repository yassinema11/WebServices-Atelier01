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

<title> Exercice 2 - TP 1 </title>

</head>
<body>
    <div class="form">
        <h1> Etudiant </h1>

        <form action="Affichage.php" method="POST">

            <label for="nom">Nom:</label>
            <input type="text" name="nom" id="nom">

            <label for="prenom">Prenom:</label>
            <input type="text" name="prenom" id="prenom">

            <label for="age"> Age :</label>
            <input type="text" name="age" id="age">

            <label for="cin">CIN:</label>
            <input type="text" name="cin" id="cin">

            <label for="ms1">Moyenne Semestre 1 :</label>
            <input type="text" name="ms1" id="ms1">

            <label for="ms2"> Moyenne Semestre 2 : </label>
            <input type="text" name="ms2" id="ms2">

            <input type="submit" value="Envoyer">
        </form>
    </div>
</body>
</html>
