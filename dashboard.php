<?php
include("includes/dbcon.php");
$sql ="SELECT COUNT(id) AS amount, month FROM registration GROUP BY month ORDER BY month_num ASC";
$monthChartRes = $dbCon->query($sql);
$regisMonth = [];
while($row = $monthChartRes->fetch_assoc()){
    if(!array_key_exists($row['month'], $regisMonth)){
    $regisMonth[$row['month']] = $row['amount'];
    }
}

$topFive ="SELECT COUNT(registration.id) as uddannelse, name FROM registration INNER JOIN educations ON registration.educations_id = educations.id GROUP BY educations_id ORDER BY uddannelse DESC LIMIT 5";
$topEducation = $dbCon->query($topFive);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="app.css">
    <link rel="stylesheet" type="text/css" href="dashboard.css">
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</head>
<body>
    <?php include('nav.php'); ?>    

    <div id="content"> 
        <div class="dashSidebar">
            <div class="dashPad">
                <h2>Vejleder</h2>
                <select class="drop_down" name="drop_down">
                    <option value="vejleder">Vejleder</option>
                    <option value="dorthe">Dorthe</option>
                    <option value="susanne">susanne</option>
                </select>

                <h2>Periode</h2>
                <p>Fra</p>
                <select class="drop_down" name="drop_down">
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                </select>
                <br>
                <p>Til</p>
                <select class="drop_down" name="drop_down">
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                </select>

                <h2>Vælg</h2>
                <form>  
                <div class="education_grid_item_1">                 
                        <input type="checkbox" name="henvendelser" value="henvendelser">
                            <label>Henvendelser for et helt år</label>
                </div>
                <div class="education_grid_item_1">                 
                        <input type="checkbox" name="køn" value="køn">
                            <label>Henvendelser fordelt på køn/gruppe</label>
                </div>
                <div class="education_grid_item_1">                 
                        <input type="checkbox" name="type" value="type">
                            <label>Henvendelser fordelt på type</label>
                </div>
                <div class="education_grid_item_1">                 
                        <input type="checkbox" name="emner" value="emner">
                            <label>Top 5 emner ift. campus</label>
                </div>
                <div class="education_grid_item_1">                 
                        <input type="checkbox" name="uddannelser" value="uddannelser">
                            <label>Top 5 uddannelser ift. campus</label>
                </div>
                <div class="education_grid_item_1">                 
                        <input type="checkbox" name="top_emner" value="top_emner">
                            <label>Top 10 emner</label>
                </div>
                <div class="education_grid_item_1">                 
                        <input type="checkbox" name="lav_emner" value="lav_emner">
                            <label>Laveste 10 emner</label>
                </div>
                <div class="education_grid_item_1">                 
                        <input type="checkbox" name="tilfredshed" value="tilfredshed">
                            <label>Studerendes tilfredshed</label>
                </div>
                <div class="education_grid_item_1">                 
                        <input type="checkbox" name="vejleder" value="vejleder">
                            <label>Flest vejledninger pr. campus</label>
                </div>
                </form>
            </div>

        </div>
        
        <div id="wrapper">
            <div id="chart" style="max-width: 500px;"></div>
        </div>
        
            
    </div>
    <script>
    var options = {
          series: [{
            name: 'Antal',
          data: [<?php foreach($regisMonth as $month => $amount){ echo $amount . ",";} ?>],
        }],
          chart: {
          type: 'bar',
          height: 500,
          width: 1000
        },
        plotOptions: {
          bar: {
            borderRadius: 4,
          }
        },
        dataLabels: {
          enabled: false
        },
        xaxis: {
          categories: [<?php foreach($regisMonth as $month => $amount){echo "'$month'"; if($month !== array_key_last($regisMonth)){echo ",";}} ?>],
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
    </script>
</body>
</html>
