<?php

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="description" content="float">
    <meta name="viewpoint" content="width=device-width, initial-scale-1">
    <title>Registering</title>

    <link rel="stylesheet" type="text/css" href="registration.css">

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

        <div id="registry1">

            <section id="section1">
                <div class="month">
                    <h2>Måned</h2>

                    <select class="drop_down" name="drop_down">
                        <option value="januar">Januar</option>
                        <option value="febuar">Februar</option>
                        <option value="marts">Marts</option>
                        <option value="april">April</option>
                        <option value="maj">Maj</option>
                        <option value="juni">Juni</option>
                        <option value="Juli">Juli</option>
                        <option value="august">August</option>
                        <option value="september">September</option>
                        <option value="oktober">Oktober</option>
                        <option value="november">November</option>
                        <option selected value="december">December</option>
                    </select>
                </div>

                <div class="year">
                    <h2>År</h2>
                    
                    <select class="drop_down" name="drop_down">
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option selected value="2022">2022</option>
                        <option value="2023">2023</option>
                    </select>
                </div>

                <div class="campus">
                    <h2>Campus</h2>

                    <select class="drop_down" name="drop_down">
                        <option value="jelling">Jelling</option>
                        <option selected value="seebladsgade">Seebladsgade, Odense</option>
                        <option value="niels">Niels Bohrs Alle, Odense</option>
                        <option value="svendborg">Svendborg</option>
                        <option value="boulevarden">Boulevarden, Vejle</option>
                        <option value="vestre">Vestre Engvej, Vejle</option>
                    </select>
                </div>
            </section>

            <section id="section2">
                <h2>Uddannelse</h2> 
                <input class="search" type="text" placeholder="Uddannelse" name="search">

                <form class="education_grid">   
                    <div class="education_grid_item_0">                 
                        <input type="radio" id="Administrationsbachelor" name="education" value="Administrationsbachelor">
                            <label for="Administrationsbachelor">Administrationsbachelor</label>
                    </div>

                    <div class="education_grid_item_1">
                        <input type="radio" id="Administrationsbachelor, e-læring" name="education" value="Administrationsbachelor, e-læring">
                            <label for="Administrationsbachelor, e-læring">Administrationsbachelor, e-læring</label>
                    </div>

                    <div class="education_grid_item_2">
                        <input type="radio" id="Automationsteknolog" name="education" value="Automationsteknolog">
                            <label for="Automationsteknolog">Automationsteknolog</label>
                    </div>

                    <div class="education_grid_item_3">
                        <input type="radio" id="Autoteknolog" name="education" value="Autoteknolog">
                            <label for="Autoteknolog">Autoteknolog</label>
                    </div>

                    <div class="education_grid_item_4">
                        <input type="radio" id="Bioanalytiker" name="education" value="Bioanalytiker">
                            <label for="Bioanalytiker">Bioanalytiker</label>
                    </div>

                    <div class="education_grid_item_5">
                        <input type="radio" id="Byggekoordinator" name="education" value="Byggekoordinator">
                            <label for="Byggekoordinator">Byggekoordinator</label>
                    </div>

                    <div class="education_grid_item_6">
                        <input type="radio" id="Byggetekniker" name="education" value="Byggetekniker">
                            <label for="Byggetekniker">Byggetekniker</label>
                    </div>

                    <div class="education_grid_item_7">
                        <input type="radio"id="Bygningskonstruktør" name="education" value="Bygningskonstruktør">
                            <label for="Bygningskonstruktør">Bygningskonstruktør</label>
                    </div>

                    <div class="education_grid_item_8">
                        <input type="radio" id="Datamatiker" name="education" value="Datamatiker">
                            <label for="Datamatiker">Datamatiker</label>
                    </div>

                    <div class="education_grid_item_9">
                        <input type="radio" id="Digital konceptudvikling" name="education" value="Digital konceptudvikling">
                            <label for="Digital konceptudvikling">Digital konceptudvikling</label>
                    </div>

                    <div class="education_grid_item_10">
                        <input type="radio" id="E-handel" name="education" value="E-handel">
                            <label for="E-handel">E-handel</label>
                    </div>

                    <div class="education_grid_item_11">
                        <input type="radio" id="Energiteknolog" name="education" value="Energiteknolog">
                            <label for="Energiteknolog">Energiteknolog</label>
                    </div>

                    <div class="education_grid_item_12">
                        <input type="radio" id="Ergoterapeut" name="education" value="Ergoterapeut">
                            <label for="Ergoterapeut">Ergoterapeut</label>
                    </div>

                    <div class="education_grid_item_13">
                        <input type="radio" id="Financial controller" name="education" value="Financial controller">
                            <label for="Financial controller">Financial controller</label>
                    </div>
                    
                    <div class="education_grid_item_14">
                        <input type="radio" id="Finans (-bachelor)" name="education" value="Finans (-bachelor)">
                            <label for="Finans (-bachelor)">Finans (-bachelor)</label>
                    </div>

                    <div class="education_grid_item_15">
                        <input type="radio" id="Finansøkonom" name="education" value="Finansøkonom">
                            <label for="Finansøkonom">Finansøkonom</label>
                    </div>

                    <div class="education_grid_item_16">
                        <input type="radio" id="Fysioterapeut" name="education" value="Fysioterapeut">
                            <label for="Fysioterapeut">Fysioterapeut</label>
                    </div>
                    
                    <div class="education_grid_item_17">
                        <input type="radio" id="Handelsøkonom" name="education" value="Handelsøkonom">
                            <label for="Handelsøkonom">Handelsøkonom</label>
                    </div>

                    <div class="education_grid_item_18">
                        <input type="radio" id="Innovation og entrepreneurship" name="education" value="Innovation og entrepreneurship">
                            <label for="Innovation og entrepreneurship">Innovation og entrepreneurship</label>
                    </div>

                    <div class="education_grid_item_19">
                        <input type="radio" id="Installatør (VVS & EL)" name="education" value="Installatør (VVS & EL)">
                            <label for="Installatør (VVS & EL)">Installatør (VVS & EL)</label>
                    </div>

                    <div class="education_grid_item_20">
                        <input type="radio" id="International handel og markedsføring" name="education" value="International handel og markedsføring">
                            <label for="International handel og markedsføring">International handel og markedsføring</label>
                    </div>

                    <div class="education_grid_item_21">
                        <input type="radio" id="International hospitality management" name="education" value="International hospitality management">
                            <label for="International hospitality management">International hospitality management</label>
                    </div>

                    <div class="education_grid_item_22">
                        <input type="radio" id="IT-sikkerhed" name="education" value="IT-sikkerhed">
                            <label for="IT-sikkerhed">IT-sikkerhed</label>
                    </div>

                    <div class="education_grid_item_23">
                        <input type="radio" id="IT-teknolog" name="education" value="IT-teknolog">
                            <label for="IT-teknolog">IT-teknolog</label>
                    </div>

                    <div class="education_grid_item_24">
                        <input type="radio" id="Jordbrug" name="education" value="Jordbrug">
                            <label for="Jordbrug">Jordbrug</label>
                    </div>

                    <div class="education_grid_item_25">
                        <input type="radio" id="Jordbrugsteknolog" name="education" value="Jordbrugsteknolog">
                            <label for="Jordbrugsteknolog">Jordbrugsteknolog</label>
                    </div>

                    <div class="education_grid_item_26">
                        <input type="radio" id="Laborant" name="education" value="Laborant">
                            <label for="Laborant">Laborant</label>
                    </div>

                    <div class="education_grid_item_27">
                        <input type="radio" id="Logistikøkonom" name="education" value="Logistikøkonom">
                            <label for="Logistikøkonom">Logistikøkonom</label>
                    </div>

                    <div class="education_grid_item_28">
                        <input type="radio" id="Lærer" name="education" value="Lærer">
                            <label for="Lærer">Lærer</label>
                    </div>

                    <div class="education_grid_item_29">
                        <input type="radio" id="Lærer (Merit)" name="education" value="Lærer (Merit)">
                            <label for="Lærer (Merit)">Lærer (Merit)</label>
                    </div>

                    <div class="education_grid_item_30">
                        <input type="radio" id="Markedsføringsøkonom" name="education" value="Markedsføringsøkonom">
                            <label for="Markedsføringsøkonom">Markedsføringsøkonom</label>
                    </div>

                    <div class="education_grid_item_31">
                        <input type="radio" id="Multimediedesigner" name="education" value="Multimediedesigner">
                            <label for="Multimediedesigner">Multimediedesigner</label>
                    </div>

                    <div class="education_grid_item_32">
                        <input type="radio" id="Procesteknolog" name="education" value="Procesteknolog">
                            <label for="Procesteknolog">Procesteknolog</label>
                    </div>

                    <div class="education_grid_item_33">
                        <input type="radio" id="Produktionsteknolog" name="education" value="Produktionsteknolog">
                            <label for="Produktionsteknolog">Produktionsteknolog</label>
                    </div>

                    <div class="education_grid_item_34">
                        <input type="radio" id="Produktudvikling og teknisk integration" name="education" value="Produktudvikling og teknisk integration">
                            <label for="Produktudvikling og teknisk integration">Produktudvikling og teknisk integration</label>
                    </div>
                    
                    <div class="education_grid_item_35">
                        <input type="radio" id="Pædagog" name="education" value="Pædagog">
                            <label for="Pædagog">Pædagog</label>
                    </div>

                    <div class="education_grid_item_36">
                        <input type="radio" id="Pædagog (merit)" name="education" value="Pædagog (merit)">
                            <label for="Pædagog (merit)">Pædagog (merit)</label>
                    </div>

                    <div class="education_grid_item_37">
                        <input type="radio" id="Radiograf" name="education" value="Radiograf">
                            <label for="Radiograf">Radiograf</label>
                    </div>

                    <div class="education_grid_item_38">
                        <input type="radio" id="Serviceøkonom" name="education" value="Serviceøkonom">
                            <label for="Serviceøkonom">Serviceøkonom</label>
                    </div>

                    <div class="education_grid_item_39">
                        <input type="radio" id="Socialrådgiver" name="education" value="Socialrådgiver">
                            <label for="Socialrådgiver">Socialrådgiver</label>
                    </div>

                    <div class="education_grid_item_40">
                        <input type="radio" id="Socialrådgiver, e-læring" name="education" value="Socialrådgiver, e-læring">
                            <label for="Socialrådgiver, e-læring">Socialrådgiver, e-læring</label>
                    </div>

                    <div class="education_grid_item_41">
                        <input type="radio" id="Softwareudvikling" name="education" value="Softwareudvikling">
                            <label for="Softwareudvikling">Softwareudvikling</label>
                    </div>

                    <div class="education_grid_item_42">
                        <input type="radio" id="Sport management" name="education" value="Sport management">
                            <label for="Sport management">Sport management</label>
                    </div>

                    <div class="education_grid_item_43">
                        <input type="radio" id="Sundhedsadministrativ koordinator" name="education" value="Sundhedsadministrativ koordinator">
                            <label for="Sundhedsadministrativ koordinator">Sundhedsadministrativ koordinator</label>
                    </div>

                    <div class="education_grid_item_44">
                        <input type="radio" id="Sygeplejerske" name="education" value="Sygeplejerske">
                            <label for="Sygeplejerske">Sygeplejerske</label>
                    </div>

                    <div class="education_grid_item_45">
                        <input type="radio" id="Webudvikling" name="education" value="Webudvikling">
                            <label for="Webudvikling">Webudvikling</label>
                    </div>

                    <div class="education_grid_item_46">
                        <input type="radio" id="Økonomi & IT" name="education" value="Økonomi & IT">
                            <label for="Økonomi & IT">Økonomi & IT</label>
                    </div>
                </form>

                <button id="next_button">Næste</button>
            </section>
        </div>
        
        <div id="registry2" style="display: none;">

            <section id="section3">
                <div class="gender">
                    <h2>Køn</h2>

                    <select class="drop_down2" name="drop_down">
                        <option value="mand">Mand</option>
                        <option value="kvinde">Kvinde</option>
                        <option value="gruppe">Gruppe</option>
                    </select>
                </div>

                <div class="inquiry">
                    <h2>Hendvendelse</h2>
                    
                    <select class="drop_down2" name="drop_down">
                        <option value="online">Online</option>
                        <option value="fysisk">Fysisk</option>
                        <option value="telefon">Telefon</option>
                    </select>
                </div>

                <div class="conversation_time">
                    <h2>Samtaletid</h2>

                    <select class="drop_down2" name="drop_down">
                        <option value="1-15 min">1-15min</option>
                        <option selected value="16-30min">16-30min</option>
                        <option value="31-45min">31-45min</option>
                        <option value="46-60min">46-60min</option>
                        <option value="over_60min">Over 60min</option>
                    </select>
                </div>
            </section>

            <section id="section4">
                <h2>Emne</h2> 
                <input class="search2 type="text" placeholder="Emne" name="search">

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
                        <button id="back_button">Tilbage</button>

                        <button id= "registrate">Registere</button>
                    </div>
                </div>
            </section>
        </div> 

    </div>

    <script src="registration.js"></script>
</body>
</html>