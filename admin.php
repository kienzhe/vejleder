<?php
include("includes/dbcon.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <link rel="stylesheet" type="text/css" href="admin.css">
    <link rel="stylesheet" href="app.css">
</head>
<body>
    <?php include('nav.php'); ?>

    <div id="content">
        <div class="adminSidebar">
            <div class="adminPad">
                <input id="educationBtn" type="button" value="Uddannelser">
                <input id="topicBtn" type="button" value="Emner">
                <input id="counslorBtn" type="button" value="Vejledere">
            </div>

        </div>
        <div id="eduEdit" style="display:block;">
            <table>
                <tr>
                    <th>Uddannelse</th>
                    <th>Redigering</th>
                </tr>
                <tr>
                    <td>Administrationsbachelor</td>
                    <td><input type="button" value="Rediger"> <input type="button" value="Slet"></td>
                </tr>
                <tr>
                   <td>Datamatiker</td>
                   <td><input type="button" value="Rediger"> <input type="button" value="Slet"></td>

                </tr>
                <tr>
                    <td>Webudvikler</td>
                    <td><input type="button" value="Rediger"> <input type="button" value="Slet"></td>
                </tr>
            </table>
        </div>
        <div id="topicEdit" style="display:none;">
            <table>
                <tr>
                    <th>Emne</th>
                    <th>Beskrivelse</th>
                    <th>Redigering</th>
                </tr>
                <tr>
                    <td>Administrative forhold</td>
                    <td>Vejledning om at sæge</td>
                    <td><input type="button" value="Rediger"> <input type="button" value="Slet"></td>
                </tr>
                <tr>
                   <td>Barsel</td>
                   <td></td>
                   <td><input type="button" value="Rediger"> <input type="button" value="Slet"></td>

                </tr>
                <tr>
                    <td>Eksamen</td>
                    <td>FX. regler</td>
                    <td><input type="button" value="Rediger"> <input type="button" value="Slet"></td>
                    <!-- <label for="<?php echo $row["name"]; ?>"><?php echo $row["name"]; ?></label> -->
                </tr>
            </table>
        </div>
        <div id="counslorEdit" style="display:none;">
            <table>
                <tr>
                    <th>Navn</th>
                    <th>Efternavn</th>
                    <th>Email</th>
                    <th>Brugernavn</th>
                    <th>Uddannelser</th>
                    <th>Campus</th>
                </tr>
                <tr>
                    <td>Kristian</td>
                    <td>Kristensen</td>
                    <td>Kristian@ucl.dk</td>
                    <td>Kris575703</td>
                    <td>Bygningskoordinator, pædago</td>
                    <td>UCL Odense, Svendborg</td>
                    <td><input type="button" value="Rediger"> <input type="button" value="Slet"></td>
                </tr>
                <tr>
                   <td>Lotte</td>
                   <td>Ditlevsen</td>
                   <td>Lotte@ucl.dk</td>
                   <td>Loot575703</td>
                   <td>Vuggestue, Bygningskonstruktør</td>
                   <td>UCL Odense</td>
                   <td><input type="button" value="Rediger"> <input type="button" value="Slet"></td>

                </tr>
                <tr>
                    <td>Henrik</td>
                    <td>Henriksen</td>
                    <td>Henrik@ucl.dk</td>
                    <td>Henr676785</td>
                    <td>Bygningskonstruktør, Datamatiker</td>
                    <td>UCL Kolding</td>
                    <td><input type="button" value="Rediger"> <input type="button" value="Slet"></td>
                </tr>
            </table>
        </div>
    </div>
    <script src="admin.js"></script>
</body>
</html>
