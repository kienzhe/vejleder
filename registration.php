<?php
include("includes/dbcon.php");

$allCampus = $dbCon->query("select * from campus");

$allEducation = $dbCon->query("select * from educations");

$allTopics = $dbCon->query("select * from topics");

$monthArray = [];
$danishMonths = [1 => 'Januar', 2 => 'Februar', 3 => 'Marts', 4 => 'April', 5 => 'Maj', 6 => 'Juni', 7 => 'Juli', 8 => 'August', 9 => 'September', 10 => 'Oktober', 11 => 'November', 12 => 'December'];
for($i = 1; $i <= 12; $i++){

    if(!array_key_exists($i, $monthArray)){
        $monthArray[$i] = $danishMonths[$i];
    }
};
$yearArray = [];
for($year = 2016; $year <= (date('Y') +1); $year++){
    if(!in_array($year, $yearArray)){
        $yearArray[] = $year;
    }
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="description" content="float">
    <meta name="viewpoint" content="width=device-width, initial-scale-1">
    <title>Registering</title>
    <link rel="stylesheet" type="text/css" href="app.css">
    <link rel="stylesheet" type="text/css" href="registration.css">
</head>

  <body>
<?php include('nav.php'); ?>

    <div id="content">
        <div id="modalBox">
                    <h1>Din registering er gået igennem</h1>
        </div>
        <form action="doCodes/doRegister.php" method="POST">
        <div id="registry1">
            <section id="section1">
                
                <div class="month">
                    <h2>Måned</h2>
                    <select class="drop_down" name="month">
                        <?php
                            foreach($monthArray as $monthNum => $monthName){
                                echo "<option value='$monthNum' ";
                                if($monthNum == date('n')){ echo "selected"; }
                                echo ">$monthName</option>";
                            }
                        ?>
                    </select>
                </div>

                <div class="year">
                    <h2>År</h2>
                    
                    <select class="drop_down" name="year">
                        <?php
                        foreach($yearArray as $yearNum => $year){
                                echo "<option value='$year' ";
                                if($year == date('Y')){ echo "selected"; }
                                echo ">$year</option>";
                            }
                        ?>
                    </select>
                </div>

                <div class="campus">
                    <h2>Campus</h2>
                    <select class="drop_down" name="campus">
                    <?php
                    while($row = $allCampus->fetch_assoc()){
                    ?>
                    <option value="<?php echo $row["id"]; ?>"><?php echo $row["name"]; ?> <?php echo $row["city"]; ?></option>
                    <?php
                    }
                    ?>
                    </select>

                </div>
            </section>

            <section id="section2">

                <h2>Uddannelse</h2> 
                <input class="drop_down" id="education_container_search" onkeyup="searchbar('#education_container')" type="text" placeholder="Søg Uddannelse" name="search">
                <div class="flex_box" id="education_container">
                <?php
                    while($row = $allEducation->fetch_assoc()){
                    ?>
                    <div class="grid_item">
                        <input type="radio" id="<?php echo $row["name"]; ?>" name="education" value="<?php echo $row["id"]; ?>">
                        <label for="<?php echo $row["name"]; ?>"><?php echo $row["name"]; ?></label>
                    </div>
                    
                    <?php
                    }
                    ?>
</div>
                
                <button id="next_button" type="button">Næste</button>
            </section>
        </div>
        
         <div id="registry2" style="display: none;">

            <section id="section3">
                <div class="gender">
                    <h2>Køn</h2>

                    <select class="drop_down" name="gender">
                        <option value="1">Mand</option>
                        <option value="2">Kvinde</option>
                        <option value="3">Gruppe</option>
                    </select>
                </div>

                <div class="inquiry">
                    <h2>Hendvendelse</h2>
                    
                    <select class="drop_down" name="inquiry">
                        <option value="1">Online</option>
                        <option value="2">Fysisk</option>
                        <option value="3">Telefon</option>
                    </select>
                </div>

                <div class="conversation_time">
                    <h2>Samtaletid</h2>

                    <select class="drop_down" name="time">
                        <option value="1-15 min">1-15min</option>
                        <option selected value="16-30 min">16-30min</option>
                        <option value="31-45 min">31-45min</option>
                        <option value="46-60 min">46-60min</option>
                        <option value="over 60 min">Over 60min</option>
                    </select>
                </div>
            </section>

            <section id="section2">
                <h2>Emne</h2> 
                <input class="search" id="topic_container_search" onkeyup="searchbar('#topic_container')" type="text" placeholder="Søg Emne" name="search">
                <div class="flex_box" id="topic_container">
                <?php
                    while($row = $allTopics->fetch_assoc()){
                    ?>
                    <div class="grid_item">
                        <input type="checkbox" id="<?php echo $row["title"]; ?>" name="topics[]" value="<?php echo $row["id"]; ?>">
                        <label for="<?php echo $row["title"]; ?>"><?php echo $row["title"]; ?></label>
                        <?php
                        if($row['description'] !== ""){
                            ?>
                            <img src="img/info_icon.png" alt="info" title="<?php echo $row["description"]; ?>">
                            <?php
                        }
                        ?>
                    </div>
                    
                    <?php
                    }
                    ?>
                   </div>
            

                <div class="buttons_box">
                    <div class="buttons">
                        <button id="back_button" type="button">Tilbage</button>

                        <input type="submit" id="registrate" name="submit" value="Registrer">
                    </div>
                </div>
            </section>
        </div> 
        </form>
    </div>

    <script src="registration.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="search.js"></script>
  </body>
</html>
