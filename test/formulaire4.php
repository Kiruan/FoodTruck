 
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
                $Genre = htmlspecialchars($_POST['genre']);
                $Nom = htmlspecialchars($_POST['nom']);
                $Prenom = htmlspecialchars($_POST['prenom']);
                $Age = htmlspecialchars($_POST['age']);
                $Mail = htmlspecialchars($_POST['mail']);
                $Yeux = htmlspecialchars($_POST['yeux']);
                $Cheveux = htmlspecialchars($_POST['cheveux']);
                $Code = htmlspecialchars($_POST['code']);
                $Conditions = htmlspecialchars($_POST['conditions']);
                //cookie
                $expiration = time() + 60*60*24*30;
                setcookie('nom', $_POST['nom'], $expiration); 
                //affichage
                echo "Vous êtes un(e) " . $Genre . "<br/>Bonjour " . $Nom . " " . $Prenom . " <br/> Vous avez " . $Age . " ans <br/> Nous pouvons vous joindre à l'adresse suivante : " . $Mail . " <br/> Vos yeux sont de la couleur " . $Yeux . " et vous cheveux sont " . $Cheveux . " <br/> Heureusement pour vous, vous avez un code de réduction qui est : " . $Code . " <br/> Bien évidemment vous avec mis " . $Conditions . " aux conditions";

                $uploadedFile = $_FILES['Fichier'];
                $destinationDirectory = 'upload/';
                $destinationPath = $destinationDirectory . basename($uploadedFile['name']);
                if (move_uploaded_file($uploadedFile['tmp_name'], $destinationPath)){
                    echo " <br/><br/> Upload du fichier réussi";
                 }
                 else{
                    echo " <br/> Echec de l'upload";
                 }
             ?>

        <form action="formulaire3.php">
            <p><input type="submit" value="retour" style="font-size:20px;"></p>
        </form>
        <form action="formulaire5.php">
            <p><input type="submit" value="suivant" style="font-size:20px;"></p>
        </form>
        <form name="bouton">
            <INPUT type="button" value="Cliquer ici" ONCLICK="alert('Vous avez cliqué !')"></INPUT>
        </form>



    </body>
</html>