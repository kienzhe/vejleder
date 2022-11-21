<?php

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="description" content="float">
    <meta name="viewpoint" content="width=device-width, initial-scale-1">
    <title>Registering</title>

    <link rel="stylesheet" type="text/css" href="registration-2.css">

</head>

  <body>
    <nav>
        <ul id="navbar">
            <li class="navbar_link"><a href="#">Registration</a></li>
            <li class="navbar_link"><a href="#">Dashboard</a></li>
            <li class="navbar_link"><a href="#">Admin</a></li>
            <li class="profil"><a href="#">Navn</a></li>
        </ul>
    </nav>

    <div id="content">
      <div class="sidebar">
            <ul class="steps">
                <li class="steps_link"><a href="#">Del 1</a></li>
                <li class="steps_link"><a href="#">Del 2</a></li>
            </ul>
        </div>

        <div class="registry2">

            <section id="section1">
                <div class="gender">
                    <h2>Køn</h2>

                    <select class="drop_down" name="drop_down">
                        <option value="mand">Mand</option>
                        <option value="kvinde">Kvinde</option>
                        <option value="gruppe">Gruppe</option>
                    </select>
                </div>

                <div class="inquiry">
                    <h2>Hendvendelse</h2>
                    
                    <select class="drop_down" name="drop_down">
                        <option value="online">Online</option>
                        <option value="fysisk">Fysisk</option>
                        <option value="telefon">Telefon</option>
                    </select>
                </div>

                <div class="conversation_time">
                    <h2>Samtaletid</h2>

                    <select class="drop_down" name="drop_down">
                        <option value="1-15 min">1-15min</option>
                        <option selected value="16-30min">16-30min</option>
                        <option value="31-45min">31-45min</option>
                        <option value="46-60min">46-60min</option>
                        <option value="over_60min">Over 60min</option>
                    </select>
                </div>
            </section>

            <section id="section2">
                <h2>Emne</h2> 
                <input class="drop_down" type="text" placeholder="Emne" name="search">

                <form class="subject_grid">   
                    <div class="subject_grid_item_1">                 
                        <input type="checkbox" id="Administrative forhold " name="subject" value="Administrative forhold ">
                            <label for="Administrative forhold ">Administrative forhold </label>
                    </div>

                    <div class="subject_grid_item_2">
                        <input type="checkbox" id="Barsel" name="subject" value="Barsel">
                            <label for="Barsel">Barsel</label>
                    </div>

                    <div class="subject_grid_item_3">
                        <input type="checkbox" id="Eksamen" name="subject" value="Eksamen">
                            <label for="Eksamen">Eksamen</label>
                    </div>

                    <div class="subject_grid_item_4">
                        <input type="checkbox" id="Fastholde trivsel" name="subject" value="Fastholde trivsel">
                            <label for="Fastholde trivsel">Fastholde trivsel</label>
                    </div>

                    <div class="subject_grid_item_5">
                        <input type="checkbox" id="Internationale muligheder" name="subject" value="Internationale muligheder">
                            <label for="Internationale muligheder">Internationale muligheder</label>
                    </div>

                    <div class="subject_grid_item_6">
                        <input type="checkbox" id="Mistrivsel" name="subject" value="Mistrivsel">
                            <label for="Mistrivsel">Mistrivsel</label>
                    </div>

                    <div class="subject_grid_item_7">
                        <input type="checkbox" id="Optagelsesvejledning" name="subject" value="Optagelsesvejledning">
                            <label for="Optagelsesvejledning">Optagelsesvejledning</label>
                    </div>

                    <div class="subject_grid_item_8">
                        <input type="checkbox"id="Orlov" name="subject" value="Orlov">
                            <label for="Orlov">Orlov</label>
                    </div>

                    <div class="subject_grid_item_9">
                        <input type="checkbox" id="Overflytning/genindskrivning" name="subject" value="Overflytning/genindskrivning">
                            <label for="Overflytning/genindskrivning">Overflytning/genindskrivning</label>
                    </div>

                    <div class="subject_grid_item_10">
                        <input type="checkbox" id="Personlige forhold" name="subject" value="Personlige forhold">
                            <label for="Personlige forhold">Personlige forhold</label>
                    </div>

                    <div class="subject_grid_item_11">
                        <input type="checkbox" id="E-handel" name="subject" value="E-handel">
                            <label for="E-handel">E-handel</label>
                    </div>

                    <div class="subject_grid_item_12">
                        <input type="checkbox" id="Praktik i DK/klinik/dialogmøder" name="subject" value="Praktik i DK/klinik/dialogmøder">
                            <label for="Praktik i DK/klinik/dialogmøder">Praktik i DK/klinik/dialogmøder</label>
                    </div>

                    <div class="subject_grid_item_13">
                        <input type="checkbox" id="Ikke studievejledningsrelevant henvendelse" name="subject" value="Ikke studievejledningsrelevant henvendelse">
                            <label for="Ikke studievejledningsrelevant henvendelse">Ikke studievejledningsrelevant henvendelse</label>
                    </div>

                    <div class="subject_grid_item_14">
                        <input type="checkbox" id="SPS" name="subject" value="SPS">
                            <label for="SPS">SPS</label>
                    </div>
                    
                    <div class="subject_grid_item_15">
                        <input type="checkbox" id="Studieophør /-stop " name="subject" value="Studieophør /-stop ">
                            <label for="Studieophør /-stop ">Studieophør /-stop </label>
                    </div>

                    <div class="subject_grid_item_16">
                        <input type="checkbox" id="Studieplanlægning " name="subject" value="Studieplanlægning ">
                            <label for="Studieplanlægning ">Studieplanlægning </label>
                    </div>

                    <div class="subject_grid_item_17">
                        <input type="checkbox" id="Studietvivl / Studievalg" name="subject" value="Studietvivl / Studievalg">
                            <label for="Studietvivl / Studievalg">Studietvivl / Studievalg</label>
                    </div>
                    
                    <div class="subject_grid_item_18">
                        <input type="checkbox" id="Sygdom  " name="subject" value="Sygdom  ">
                            <label for="Sygdom  ">Sygdom  </label>
                    </div>

                    <div class="subject_grid_item_19">
                        <input type="checkbox" id="Undervisningen" name="subject" value="Undervisningen">
                            <label for="Undervisningen">Undervisningen</label>
                    </div>

                    <div class="subject_grid_item_20">
                        <input type="checkbox" id="Økonomi" name="subject" value="Økonomi">
                            <label for="Økonomi">Økonomi</label>
                    </div>
                </form>

                <div class="buttons">
                    <button id="back_button"><a href="registration-1.php">Tilbage</a></button>

                    <button id= "registrate"></button>
                </div>
            </section>
        </div> 
    </div>
  </body>
</html>