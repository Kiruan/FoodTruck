<!DOCTYPE html>
<html>
    <head>
        <title>Horaires</title>
    </head>
    <body style = "background-color:powderblue;">
    	<?php 
    	include 
		"header.html";
		"footer.html"; ?>
        <form name = "envoie" action = "horaires2.php" method = "post" enctype='multipart/form-data'>

			<p>Jour : <input type="text" name="jour" size="50px" value="" placeholder="Indiquez le jour de la semaine a modifier" /></p>
			<p>Heure : <input type="number" name="Heure" size="70px" value="" placeholder="Indiquez l'heure a modifier" /></p>


            ?>





</body>
</html>