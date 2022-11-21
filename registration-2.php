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
                <input class="search" type="text" placeholder="Emne" name="search">

                <form class="subject_grid">   
                    <div class="subject_grid_item_0">                 
                        <input type="checkbox" id="Administrative forhold " name="subject" value="Administrative forhold ">
                            <label for="Administrative forhold ">Administrative forhold</label>
                            
                        <img src="img/info_icon.png" alt="info" title="Vejledning om at søge dispensation, merit, kompetencevurdering mm.">
                    </div>

                    <div class="subject_grid_item_1">
                        <input type="checkbox" id="Barsel" name="subject" value="Barsel">
                            <label for="Barsel">Barsel</label>
                    </div>

                    <div class="subject_grid_item_2">
                        <input type="checkbox" id="Eksamen" name="subject" value="Eksamen">
                            <label for="Eksamen">Eksamen</label>
                                                    
                            <img src="img/info_icon.png" alt="info" title="Fx regler, klage, snyd, omprøver, særlige prøvevilkår">
                    </div>

                    <div class="subject_grid_item_3">
                        <input type="checkbox" id="Fastholde trivsel" name="subject" value="Fastholde trivsel">
                            <label for="Fastholde trivsel">Fastholde trivsel</label>
                                                    
                            <img src="img/info_icon.png" alt="info" title="Statussamtaler og opfølgning på studerende mm.">                    
                    </div>

                    <div class="subject_grid_item_4">
                        <input type="checkbox" id="Internationale muligheder" name="subject" value="Internationale muligheder">
                            <label for="Internationale muligheder">Internationale muligheder</label>
                        
                            <img src="img/info_icon.png" alt="info" title="Studieophold og/eller praktik">                    
                    </div>

                    <div class="subject_grid_item_5">
                        <input type="checkbox" id="Mistrivsel" name="subject" value="Mistrivsel">
                            <label for="Mistrivsel">Mistrivsel</label>
                                                    
                            <img src="img/info_icon.png" alt="info" title="Fx i forhold til stidiet, hverdagen">                    
                    </div>

                    <div class="subject_grid_item_6">
                        <input type="checkbox" id="Optagelsesvejledning" name="subject" value="Optagelsesvejledning">
                            <label for="Optagelsesvejledning">Optagelsesvejledning</label>
                                                    
                            <img src="img/info_icon.png" alt="info" title="Fx indhold, adgangskrav, videreuddannelse, struktur">                    
                    </div>

                    <div class="subject_grid_item_7">
                        <input type="checkbox" id="ordensreglement" name="subject" value="Ordensreglement">
                            <label for="Ordensreglement">Ordensreglement</label>
                                                    
                            <img src="img/info_icon.png" alt="info" title="Fx krænkelser, overskridelser af regler">                    
                    </div>

                    <div class="subject_grid_item_8">
                        <input type="checkbox"id="Orlov" name="subject" value="Orlov">
                            <label for="Orlov">Orlov</label>                   
                    </div>

                    <div class="subject_grid_item_9">
                        <input type="checkbox" id="Overflytning/genindskrivning" name="subject" value="Overflytning/genindskrivning">
                            <label for="Overflytning/genindskrivning">Overflytning/genindskrivning</label>   
                            
                            <img src="img/info_icon.png" alt="info" title="Internt/externt">                    

                    </div>

                    <div class="subject_grid_item_10">
                        <input type="checkbox" id="Personlige forhold" name="subject" value="Personlige forhold">
                            <label for="Personlige forhold">Personlige forhold</label>
                                                    
                            <img src="img/info_icon.png" alt="info" title="Fx alvorlige sociale begivenheder, familiære/nære forhold">                    
                    </div>

                    <div class="subject_grid_item_11">
                        <input type="checkbox" id="Praktik i DK/klinik/dialogmøder" name="subject" value="Praktik i DK/klinik/dialogmøder">
                            <label for="Praktik i DK/klinik/dialogmøder">Praktik i DK/klinik/dialogmøder</label>
                    </div>

                    <div class="subject_grid_item_12">
                        <input type="checkbox" id="Ikke studievejledningsrelevant henvendelse" name="subject" value="Ikke studievejledningsrelevant henvendelse">
                            <label for="Ikke studievejledningsrelevant henvendelse">Ikke studievejledningsrelevant henvendelse</label>
                    </div>

                    <div class="subject_grid_item_13">
                        <input type="checkbox" id="SPS" name="subject" value="SPS">
                            <label for="SPS">SPS</label>
                    </div>
                    
                    <div class="subject_grid_item_14">
                        <input type="checkbox" id="Studieophør /-stop " name="subject" value="Studieophør /-stop ">
                            <label for="Studieophør /-stop ">Studieophør /-stop </label>
                                                    
                            <img src="img/info_icon.png" alt="info" title="Udmeldelse">                    
                    </div>

                    <div class="subject_grid_item_15">
                        <input type="checkbox" id="Studieplanlægning " name="subject" value="Studieplanlægning ">
                            <label for="Studieplanlægning ">Studieplanlægning </label>

                            <img src="img/info_icon.png" alt="info" title="Individuel studieplan, omlagte forløb. Fx forsinkede studerende og UCL. Eliteordning">
                    </div>

                    <div class="subject_grid_item_16">
                        <input type="checkbox" id="Studietvivl / Studievalg" name="subject" value="Studietvivl / Studievalg">
                            <label for="Studietvivl / Studievalg">Studietvivl / Studievalg</label>
                    </div>

                    <div class="subject_grid_item_17">
                        <input type="checkbox" id="studieudfordringer" name="subject" value="Studieudfordringer">
                            <label for="Studieudfordringer">Studieudfordringer</label>

                            <img src="img/info_icon.png" alt="info" title="Faglige, eksamensnervøsitet/-angst, studie- og eksamensteknik, forståelse for studiet, samarbejdsvanskeligheder, manglende gruppe mm.">
                    </div>
                    
                    <div class="subject_grid_item_18">
                        <input type="checkbox" id="Sygdom  " name="subject" value="Sygdom">
                            <label for="Sygdom  ">Sygdom</label>
                                                    
                            <img src="img/info_icon.png" alt="info" title="Egen fysisk eller psykisk sygdom mm.">
                    </div>

                    <div class="subject_grid_item_19">
                        <input type="checkbox" id="Undervisningen" name="subject" value="Undervisningen">
                            <label for="Undervisningen">Undervisningen</label>
                                                    
                            <img src="img/info_icon.png" alt="info" title="Fx samarbejdsvanskeligheder med underviser, kritik af kvaliteten">
                    </div>

                    <div class="subject_grid_item_20">
                        <input type="checkbox" id="Økonomi" name="subject" value="Økonomi">
                            <label for="Økonomi">Økonomi</label>
                                                    
                            <img src="img/info_icon.png" alt="info" title="Fx SU, private forhold">
                    </div>
                </form>

                <div class="buttons_box">
                    <div class="buttons">
                        <button id="back_button"><a href="registration-1.php">Tilbage</a></button>

                        <button id= "registrate"><a href="#">Registere</a></button>
                    </div>
                </div>
            </section>
        </div> 
    </div>
</body>
</html>
