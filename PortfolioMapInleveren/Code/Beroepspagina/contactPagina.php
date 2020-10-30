<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <title>Contactpagina</title>
</head>
<body>



    <div class="wrapper">
        <div class="box1">
                <a href="beroepsportfolio.php">Beroepsportfolio</a>
        </div>
    </div>

    <div class="form">
        <div id="tableid">

            <h1 id="tableTitel">Contacteer</h1>
            <form method="POST">

                <table class="tabelclass">
                    <tr>
                        <th>Naam Bedrijf</th>
                        <td><input type="text" name="txtBedrijf" placeholder="Naam" required></td>
                    </tr>
                    <tr>
                        <th>Tel</th>
                        <td><input type="text" name="txtTel" placeholder="Tel" required></td>
                    </tr>
                    <tr>
                        <th>E-mail</th>
                        <td><input type="text" name="txtEmail" placeholder="E-mail" required></td>
                    </tr>
                    <tr>
                        <th>Opmerking</th>
                        <td><textarea name="txtOpmerking" cols="22" rows="10"></textarea></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td><input type="submit" name="btnContact" placeholder="Verstuur" required></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td></td>
                    </tr>

                </table>
            </form>
        </div>
    </div>

<?php
    require("database.php");

    //Variabelen aanmaken
    if(isset($_POST["btnContact"])){

            //Variablen
            $bedrijf = $_POST["txtBedrijf"];
            $tel = $_POST["txtTel"];
            $email = $_POST["txtEmail"];
            $opmerking = $_POST["txtOpmerking"];

            //Query om items in database te gooien
            $queryCon = "INSERT INTO contact (bedrijf, email, tel, opmerking)
             VALUES (:bedrijf, :email, :tel, :opmerking)";

            //De query inlezen
            $stm = $verbinding->prepare($queryCon);

            //Alliassen met waardes verbinden
            $stm->bindParam(":bedrijf", $bedrijf);
            $stm->bindParam(":email", $email);
            $stm->bindParam(":tel", $tel);
            $stm->bindParam(":opmerking", $opmerking);

            if($stm->execute()){
                $res = $stm->fetch(PDO::FETCH_OBJ);
            }else{
                echo "Items naar database sturen mislukt!";
            }

        }


?>
</body>
</html>