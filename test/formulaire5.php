 
<!DOCTYPE html>
<html>
    <head>
        <title>formulaire3</title>
    </head>
    <body style="background-color:powderblue;">
            <?php 
            include 
            "header.html";
            "footer.html";
                echo 'Bonjour ' . $_COOKIE['nom'];
             ?>

        <form action="formulaire4.php">
            <p><input type="submit" value="retour" style="font-size:20px;"></p>
        </form>

        <form name="bouton">
            <INPUT type="button" value="Cliquer ici" ONCLICK="alert('Vous avez cliqué !')"></INPUT>
        </form>



    </body>
</html>