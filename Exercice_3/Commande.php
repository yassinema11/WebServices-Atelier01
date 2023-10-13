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
    <title> Exercice 3 - TP 1 </title>
</head>
<body>
    <div class="form">
        <h1> Commande </h1>

        <form action="facture.php" method="POST">

            <label for="idcom">ID-Commande:</label>
            <input type="text" name="idcom" id="idcom">

            <label for="qp1"> Quantité Produit 1 :</label>
            <input type="text" placeholer="150 Dt" name="qp1" id="qp1">  

            <label for="qp2"> Quantité Produit 2 :</label>
            <input type="text" name="qp2" id="qp2">

            <label for="qp3"> Quantité Produit 3 :</label>
            <input type="text" name="qp3" id="qp3">

            <br>

            <input type="submit" value="Généré Facture">
        </form>
    </div>
</body>
</html>
