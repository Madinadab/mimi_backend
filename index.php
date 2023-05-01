
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>formulaire</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./sytle/bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="sytle/style.css">
</head>
<body>
   <section class="section">
    <div class="container ">
        <h2>Formulaire d'inscription</h2><br>
            <form method="post" id="ide" action="enregistrement.php">
                <fieldset form="ide">
                    <label for="nom">Entrez votre nom</label>
                    <input type="text" name="nom" id="nom"  >
                    <br><br>

                    <label for="prenom">Entrez votre prénom</label>
                    <input type="text" name="prenom" id="prenom"  >
                    <br><br>

                    <label for="date">Votre date de naissance</label>
                    <input type="date" name="date" id="date">
                    <br><br>
                    <!-- <div>
                        <label>Choisir votre sexe</label>
                        <br>
                        <input type="radio" name="sexe" id="" value="Femme">Femme <br>
                        <input type="radio" name="sexe" id="" value="homme">homme
                        <label for="radio"></label>
                    </div>
                    <br><br> -->
                    <input class="gras" type="submit" value="Envoyer vos données...">
                </fieldset>
            </form>
    </div>
   </section>
</body>

</html>