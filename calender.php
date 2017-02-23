<?php 




$mois= $_POST['mois'];
$annee=$_POST['annee'];

$nombre_de_jour = cal_days_in_month(CAL_GREGORIAN, $mois, $annee);
// var_dump($nombre_de_jour);


echo '<table class="ui celled table">';

echo "<tr><th>Lundi</th><th>Mardi</th><th>Mercredi</th><th>Jeudi</th><th>Vendredi</th><th>Samedi</th><th>Dimanche</th></tr>";

for ($i=1; $i <= $nombre_de_jour ; $i++)
{ 

	$jour = cal_to_jd(CAL_GREGORIAN, $mois,$i, $annee);
	// var_dump($jour);
	$jour_semaine = JDDayOfWeek($jour);
	// var_dump($jour_semaine)	;
	if ($i == $nombre_de_jour)
	{

		if ($jour_semaine == 1)
		{
			echo "<tr>";
		}

		echo "<td class='case'>". $i ."</td></tr>";

	}else if ($i == 1)
	{

		echo "<tr>";

		if ($jour_semaine == 0) 
		{
			$jour_semaine = 7;
		}

		for ($k=1; $k != $jour_semaine ; $k++)
		{ 
			echo "<td></td>";
		}

		echo "<td class='case'>". $i ."</td>";

		if ($jour_semaine == 7)
		{
			echo "</tr>";
		}

	}else
	{

		if ($jour_semaine == 1)
		{
			echo "<tr>";
		}

		echo "<td class='case'>". $i ."</td>";

		if ($jour_semaine == 0) {
			echo "</tr>";
		}

	}

}
echo "</table>";





?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>calendrier</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.7/semantic.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>





</body>
</html>