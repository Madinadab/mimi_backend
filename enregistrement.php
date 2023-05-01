<?php 
// if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['date'])){
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$date = $_POST['date'];

include('connexion.php');
// $reponse=$bdd->query("INSERT INTO 'simplon' ('nom', 'prenom' 'date_de_naissance') values('$Nom', '$Prenom', '$date_de_naissance' ")
$reponse=$bdd->query("INSERT INTO `simplon`(`id`, `Nom`, `Prénom`, `Date de naissance`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]')")
$reponse->closeCursor();

echo('Enregistrement effectué avec succès');
// $nom_serveur = "localhost";
// $utilisateur = "root";
// $mot_de_passe ="";
// $nom_base_données ="p4_formulaire";
// $con = mysqli_connect($nom_serveur , $utilisateur ,$mot_de_passe , $nom_base_données);
// $req = mysqli_query($con , "SELECT * FROM utilisateurs WHERE nom='$nom' AND prenom='$prenom'  AND date='$date");
// $num_ligne = mysqli_num_row($req);
// if($num_ligne > 0){
//     header("Location:connexion.php");
// }
// else{
//     serveur = "Nom ,prenom et date de naissance";
// }

// }
?>