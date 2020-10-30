<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styleinvul.css">

    <title>InvulGegevens</title>
</head>
<body>

    <div class="wrapper">
        <div class="box1">
            <a href="beroepsportfolio.php">Beroepsportfolio</a>
            <a href="contactPagina.php">Contact</a>
        </div>
    </div>

    <div class="rform">
        <form method="POST">
            <p>Portfolio Foto</p>
            <label>Afbeelding van jezelf link:</label><br><br>
            <input type="text" name="txtAfbeelding" required/><br/>

            <div class="submitKnop"><input type="submit" name="btnAfbeelding" value="Verstuur" class="button"/></div>
        </form>
    </div>

<?php
//dataverbinding maken
require("database.php");

//controleren of het formulier bestaat en controleren of alle velden gevuld zijn
if(isset($_POST["btnAfbeelding"])){

            //Sturen naar de database
            $afbeelding = $_POST["txtAfbeelding"];


            //Dit is de query om gegevens op te slaan in de tabel
            $query = "INSERT INTO pafbeelding (afbeelding)
                        VALUES(:afbeelding)";

            //inlezen van de query
            $stm = $verbinding->prepare($query);

            //Alliassen verbinden met waarde
            $stm->bindParam(":afbeelding", $afbeelding);


            if ($stm->execute()) {
                echo "<p class='gelukt'>Opslaan is gelukt!<p/>";
            } else {
                echo "<p class='gelukt'>Er ging iets fout!<p/>";
            }

    }

?>

    <form method="POST" >
        <p>Persoonlijke gegevens</p>
        <label>Naam:</label>
        <input type="text" name="txtNaam" required/><br/>
        <label>Email:</label>
        <input type="text" name="txtEmail" required/><br/>
        <label>Tel:</label>
        <input type="text" name="txtTel" required/><br/>
        <label>Adres:</label>
        <input type="text" name="txtAdres" required/><br/>

        <div class="submitKnop"><input type="submit" name="btnVerstuur" value="Verstuur" class="button"/></div>
    </form>

<?php
    //dataverbinding maken
    require("database.php");

    //controleren of het formulier bestaat en controleren of alle velden gevuld zijn
    if(isset($_POST["btnVerstuur"])){
        if(!empty($_POST["txtNaam"] || $_POST["txtEmail"] || $_POST["txtTel"] || $_POST["txtAdres"])){

            //controleer of de velden zijn ingevuld
            if(empty($_POST["txtNaam"] || $_POST["txtEmail"] || $_POST["txtTel"] || $_POST["txtAdres"])){
                echo "Er kan niets naar de database verstuurd worden";
            }
            else{

                //Sturen naar de database
                $naam = $_POST["txtNaam"];
                $email = $_POST["txtEmail"];
                $tel = $_POST["txtTel"];
                $adres = $_POST["txtAdres"];

                //Dit is de query om gegevens op te slaan in de tabel
                $query = "INSERT INTO persoonlijkegegevens (naam, email, tel, adres)
                            VALUES(:naam,:email,:tel,:adres)";

                //inlezen van de query
                $stm = $verbinding->prepare($query);

                //Alliassen verbinden met waarde
                $stm->bindParam(":naam", $naam);
                $stm->bindParam(":email", $email);
                $stm->bindParam(":tel", $tel);
                $stm->bindParam(":adres", $adres);

                if ($stm->execute()) {
                    echo "<p class='gelukt'>Opslaan is gelukt!<p/>";
                } else {
                    echo "<p class='gelukt'>Er ging iets fout!<p/>";
                }
            }
        }else{
            echo "Er moet nog iets ingevuld worden";
        }
    }
?>

    <form method="POST">
        <p>Kwalificaties</p>
        <label>Taal1:</label>
        <input type="text" name="txtTaal1" required/><br/>
        <label>Taal2:</label>
        <input type="text" name="txtTaal2" required/><br/>
        <label>Taal3:</label>
        <input type="text" name="txtTaal3" required/><br/>
        <label>Taal4:</label>
        <input type="text" name="txtTaal4" required/><br/>

        <div class="submitKnop"><input type="submit" name="btnKwalificatie" value="Verstuur" class="button" /></div>
    </form>

    <?php
    //dataverbinding maken
    require("database.php");

    //controleren of het formulier bestaat en controleren of alle velden gevuld zijn
    if(isset($_POST["btnKwalificatie"])){


                //Sturen naar de database
                $taal1 = $_POST["txtTaal1"];
                $taal2 = $_POST["txtTaal2"];
                $taal3 = $_POST["txtTaal3"];
                $taal4 = $_POST["txtTaal4"];

                //Dit is de query om gegevens op te slaan in de tabel
                $query = "INSERT INTO kwalificaties (taal1, taal2, taal3, taal4)
                            VALUES(:taal1,:taal2,:taal3,:taal4)";

                //inlezen van de query
                $stm = $verbinding->prepare($query);

                //Alliassen verbinden met waarde
                $stm->bindParam(":taal1", $taal1);
                $stm->bindParam(":taal2", $taal2);
                $stm->bindParam(":taal3", $taal3);
                $stm->bindParam(":taal4", $taal4);

                if ($stm->execute()) {
                    echo "<p class='gelukt'>Opslaan is gelukt!<p/>";
                } else {
                    echo "<p class='gelukt'>Er ging iets fout!<p/>";
                }
    }
    ?>

    <form method="POST">
        <p>Visie</p>
        <label>Visie:</label>
        <textarea name="txtVisie" required></textarea><br/>

        <div class="submitKnop"><input type="submit" name="btnVisie" value="Verstuur" class="button" /></div>
    </form>

    <?php
    //dataverbinding maken
    require("database.php");

    //controleren of het formulier bestaat en controleren of alle velden gevuld zijn
    if(isset($_POST["btnVisie"])){


        //Sturen naar de database
        $visie = $_POST["txtVisie"];

        //Dit is de query om gegevens op te slaan in de tabel
        $query = "INSERT INTO visie (visie)
                            VALUES(:visie)";

        //inlezen van de query
        $stm = $verbinding->prepare($query);

        //Alliassen verbinden met waarde
        $stm->bindParam(":visie", $visie);

        if ($stm->execute()) {
            echo "<p class='gelukt'>Opslaan is gelukt!<p/>";
        } else {
            echo "<p class='gelukt'>Er ging iets fout!<p/>";
        }
    }
    ?>

    <form method="POST">
        <p>Andere Informatie</p>
        <label>Informatie:</label>
        <textarea name="txtInformatie" required></textarea><br/>

        <div class="submitKnop"><input type="submit" name="btnInfo" value="Verstuur" class="button" /></div>
    </form>

    <?php
    //dataverbinding maken
    require("database.php");

    //controleren of het formulier bestaat en controleren of alle velden gevuld zijn
    if(isset($_POST["btnInfo"])){


        //Sturen naar de database
        $info = $_POST["txtInformatie"];

        //Dit is de query om gegevens op te slaan in de tabel
        $query = "INSERT INTO informatie (informatie)
                            VALUES(:info)";

        //inlezen van de query
        $stm = $verbinding->prepare($query);

        //Alliassen verbinden met waarde
        $stm->bindParam(":info", $info);

        if ($stm->execute()) {
            echo "<p class='gelukt'>Opslaan is gelukt!<p/>";
        } else {
            echo "<p class='gelukt'>Er ging iets fout!<p/>";
        }
    }
    ?>

    <form method="POST">
        <p>Link Projecten</p>
        <label>Projectlink1:</label>
        <input type="text" name="txtPL1" required/>
        <label>Projectafbeelding1:</label>
        <input type="text" name="txtPA1" required/><br/>

        <label>Projectlink2:</label>
        <input type="text" name="txtPL2" required/>
        <label>Projectafbeelding2:</label>
        <input type="text" name="txtPA2" required/><br/>

        <label>Projectlink3:</label>
        <input type="text" name="txtPL3" required/>
        <label>Projectafbeelding3:</label>
        <input type="text" name="txtPA3" required/><br/>

        <div class="submitKnop"><input type="submit" name="btnProjecten" value="Verstuur" class="button" /></div>
    </form>

    <?php
    //dataverbinding maken
    require("database.php");

    //controleren of het formulier bestaat en controleren of alle velden gevuld zijn
    if(isset($_POST["btnProjecten"])){


        //Sturen naar de database
        $pl1 = $_POST["txtPL1"];
        $pa1 = $_POST["txtPA1"];
        $pl2 = $_POST["txtPL2"];
        $pa2 = $_POST["txtPA2"];
        $pl3 = $_POST["txtPL3"];
        $pa3 = $_POST["txtPA3"];

        //Dit is de query om gegevens op te slaan in de tabel
        $query = "INSERT INTO projecten (projectlink1, projectlink2, projectlink3, projectafbeelding1, projectafbeelding2, projectafbeelding3)
                  VALUES(:txtPL1, :txtPL2, :txtPL3, :txtPA1, :txtPA2, :txtPA3)";

        //inlezen van de query
        $stm = $verbinding->prepare($query);

        //Alliassen verbinden met waarde
        $stm->bindParam(":txtPL1", $pl1);
        $stm->bindParam(":txtPL2", $pl2);
        $stm->bindParam(":txtPL3", $pl3);
        $stm->bindParam(":txtPA1", $pa1);
        $stm->bindParam(":txtPA2", $pa2);
        $stm->bindParam(":txtPA3", $pa3);

        if ($stm->execute()) {
            echo "<p class='gelukt'>Opslaan is gelukt!<p/>";
        } else {
            echo "<p class='gelukt'>Er ging iets fout!<p/>";
        }
    }
    ?>

</body>
</html>