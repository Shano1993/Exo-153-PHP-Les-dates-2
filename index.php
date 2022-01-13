<?php

## PHP - Les dates
## Pour tous les exercices, vous pouvez utiliser le site http://php.net
## N'hesitez pas à faire des pages avec du HTML/CSS

## Exercice 1 Afficher la date courante en respectant la forme jj/mm/aaaa (ex : 16/05/2016)
$date1 = date("d/m/Y");

echo "Date d'aujourd'hui $date1";
echo "<br><br>";



## Exercice 2 Afficher la date courante en respectant la forme jj-mm-aa (ex : 16-05-16)
$date2 = date("d-m-y");

echo "Date d'aujourd'hui $date2";
echo "<br><br>";



## Exercice 3 Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016)
## Bonus : Le faire en français.
setlocale(LC_TIME,['fr', 'fra', 'fr_FR']);

echo ucfirst(strftime("%A %d %B %Y"));
echo "<br><br>";



## Exercice 4 Afficher le timestamp du jour.
## Afficher le timestamp du mardi 2 août 2016 à 15h00.
$timeStamp = time();

echo "Le timestamp d'aujourd'hui est $timeStamp";
echo "<br><br>";



##Exercice 5 Afficher le nombre de jours qui séparent la date du jour avec le 16 mai 2016.
$debut = strtotime('16-05-16');
$fin = strtotime('13-01-22');
$dif = ceil(abs($fin - $debut) / 86400);

echo "Il y a $dif jours qui séparent la date d'aujourd'hui et la date du 16 mai 2016";
echo "<br><br>";



##Exercice 6 Afficher le nombre de jours dans le mois de février de l'année 2016.
$number = cal_days_in_month( CAL_GREGORIAN,2, 2016);

echo "Il y avait $number jours en février l'année 2016";
echo "<br><br>";



##Exercice 7 Afficher la date du jour + 20 jours.
echo date("d/m/Y", strtotime('+20 days'));
echo "<br><br>";

##Exercice 8 Afficher la date du jour - 22 jours
echo date("d/m/Y", strtotime('-22 days'));
echo "<br><br>";


## TP Faire un formulaire avec deux listes déroulantes.
## La première sert à choisir le mois, et le deuxième permet d'avoir l'année.
# MEGA BONUS ( surligné et caractère gras :-)  ) : En fonction des choix, afficher un calendrier ( voir libs JS ou autres )

?>

<form>
    <label for="month"></label>
    <select  id="month">
        <?php
        $months = [
            "Janvier",
            "Février",
            "Mars",
            "Avril",
            "Mai",
            "Juin",
            "Juillet",
            "Aout",
            "Septembre",
            "Octobre",
            "Novembre",
            "Décembre",
        ];
        for($i = 0; $i < count($months); $i++){
            echo "<option>$months[$i]</option>";
        }
        ?>
    </select>

    <label for="year"></label>
    <select  id="year">
        <?php
        $year = [2010, 2011, 2012, 2013, 2014, 2015, 2016, 2017, 2018, 2019, 2020];
        for($i = 0; $i < count($year); $i++){
            echo "<option>$year[$i] </option>";
        }
        ?>
    </select>
</form>






