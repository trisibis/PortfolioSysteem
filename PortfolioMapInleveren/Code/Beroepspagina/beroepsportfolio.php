<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <title>CSS Grid</title>

</head>
<body>

<?php
    require("database.php");

    //Het laatste item uit de tabel halen
    $queryP= "SELECT * FROM persoonlijkegegevens ORDER BY id DESC LIMIT 1";
    $queryK = "SELECT * FROM kwalificaties ORDER BY id DESC LIMIT 1";
    $queryV ="SELECT * FROM visie ORDER BY id DESC LIMIT 1";
    $queryI ="SELECT * FROM informatie ORDER BY id DESC LIMIT 1";
    $queryPr ="SELECT * FROM projecten ORDER BY id DESC LIMIT 1";
    $queryA = "SELECT * FROM pafbeelding ORDER BY id DESC LIMIT 1";

    //Query inlezen
    $stmP = $verbinding->prepare($queryP);
    $stmK = $verbinding->prepare($queryK);
    $stmV = $verbinding->prepare($queryV);
    $stmI = $verbinding->prepare($queryI);
    $stmPr = $verbinding->prepare($queryPr);
    $stmA = $verbinding->prepare($queryA);
    //Query uitvoeren
    if($stmP->execute()) {
        $resP = $stmP->fetch(PDO::FETCH_OBJ);
    }
    if($stmK->execute()) {
        $resK = $stmK->fetch(PDO::FETCH_OBJ);
    }
    if($stmV->execute()) {
        $resV = $stmV->fetch(PDO::FETCH_OBJ);
    }
    if($stmI->execute()) {
        $resI = $stmI->fetch(PDO::FETCH_OBJ);
    }
    if($stmPr->execute()) {
        $resPr = $stmPr->fetch(PDO::FETCH_OBJ);
    }
    if($stmA->execute()) {
        $resA = $stmA->fetch(PDO::FETCH_OBJ);
    }


?>

    
    <div class="wrapper">
        <div class="box1">
            <a href="invulpersgegevens.php">Invoer</a>
            <a href="contactpagina.php">Contact</a>
        </div>
        <div class="box2">
            <div>
                <div class="foto">
                    <img src="fotos/<?php echo $resA->afbeelding; ?>" width="500px"  >
                </div>

                <div class="tekstvlak1">
                    <table>
                        <tr>
                            <th>
                                Naam: <td> <?php echo $resP->naam; ?></td>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                E-mail: <td> <?php echo $resP->email; ?></td>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                Tel: <td> <?php echo $resP->tel; ?></td>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                Adres: <td> <?php echo $resP->adres; ?></td>
                            </th>
                        </tr>
                    </table>

                </div>


                <div class="tekstvlak2">
                    <p>Kwalificaties</p>
                    <ul>
                        <li><?php echo $resK->taal1; ?></li>
                        <li><?php echo $resK->taal2; ?></li>
                        <li><?php echo $resK->taal3; ?></li>
                        <li><?php echo $resK->taal4; ?></li>
                    </ul>
                </div>


                <div class="tekstvlak3">
                    <h1>Visie & Toekomstbeeld</h1>
                    <div>
                        <p><?php echo $resV->visie; ?></p>
                    </div>
                </div>

                <div class="tekstvlak3">
                    <h1>Andere informatie</h1>
                    <div>
                        <p><?php echo $resI->informatie; ?></p>
                    </div>
                </div>
            </div>
        </div>

        <!--Dit is het projectengedeelte-->

        <div class="box3">
                    <div id="kopje"><h1>Projecten</h1></div>
                    <div class="circle1">
                        <a href="<?php echo $resPr->projectlink1; ?>" target="_blank">
                            <img width="400px" height="400px" style="border-radius: 50%;"src="fotos/<?php echo $resPr->projectafbeelding1; ?>">
                        </a>
                    </div>
                    <div class="circle2">

                    </div>
                    <div class="circle3">

                    </div>
                    <div class="circle4">
                        <a href="<?php echo $resPr->projectlink2; ?>" target="_blank">
                            <img width="400px" height="400px" style="border-radius: 50%;"src="fotos/<?php echo $resPr->projectafbeelding2; ?>">
                        </a>
                    </div>
                    <div class="circle5">
                        <a href="<?php echo $resPr->projectlink3; ?>" target="_blank">
                            <img width="400px" height="400px" style="border-radius: 50%;"src="fotos/<?php echo $resPr->projectafbeelding3; ?>">
                        </a>
                    </div>
                    <div class="circle6">

                    </div>
        </div>


            
        
    </div>
</body>
</html>