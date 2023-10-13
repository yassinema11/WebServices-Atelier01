    <!DOCTYPE html>
    <html>
    <head>
        <style>
            .facture
            {
                width: 300px;
                margin: 50px auto;
                padding: 20px;
                background-color: #d4c6c6;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            }
        </style>
            <title> Exercice 3 - TP 1 </title>
    </head>
    <body>
        <div class="facture">

            <?php

                $Id = $_POST['idcom'];

                $Qp1 = $_POST['qp1'];
                $Qp2 = $_POST['qp2'];
                $Qp3 = $_POST['qp3'];

                $p1 = 150;
                $p2 = 200;
                $p3 = 250;

                $MontTot = (($Qp1 * $p1) + ($Qp2 * $p2) + ($Qp3 * $p3));


                echo "<h2> Facture N° $Id </h2>";
                echo "<p><strong>Commande ID:</strong> $Id</p>";
                
                
                echo "<p><strong>Quantité Produit 1 :</strong> $Qp1 </p>";
                echo "<p><strong>Quantité Produit 2 :</strong> $Qp2 </p>";
                echo "<p><strong>Quantité Produit 3 :</strong> $Qp3 </p>";

                echo "<p><strong>Montant Totale de la Facture est  $MontTot </strong></p>";

            ?>
        </div>
    </body>
    </html>
