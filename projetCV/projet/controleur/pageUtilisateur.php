<?php




if(isset($_POST['Déconnexion'])){
   
    header("Location:../public/login-fr.html");
    exit();
}

if(isset($_POST['Paramètres'])){
    header("Location:../public/settings-fr.html");
    exit();
}

if(isset($_POST['Continue'])){
    header("Location:../public/historiqueCV.html");
    exit();
}

if(isset($_POST['Continuer'])){
    header("Location:../public/importationCV.view.php");
    exit();
}

// Si aucun bouton n'est cliqué, rester sur la même page
header("Location:../public/PageUtilisateur.html");
exit();

?>