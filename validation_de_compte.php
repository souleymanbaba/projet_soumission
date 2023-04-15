<?php
// $_SESSION['email']=$_POST['email'];
// header("location:acc.php")
session_start();
$nom=$_POST['nom'];
$pass_word=$_POST['pwd'];
$connexion = mysqli_connect('localhost', 'root', '', 'soumission');
			if (!$connexion) {
			    die('Erreur de connexion à la base de données : ' . mysqli_connect_error());
			}
$sql="SELECT * FROM utilisateur where login='$nom' AND  pwd='$pass_word' ";
$resu=mysqli_query($connexion,$sql);
if(mysqli_num_rows($resu) == 1){
    $_SESSION['nom']=$nom;
    header("location: acc.php");
    }
    else{
        echo "le nom ou mot de pass incorrecte";
    }
?>