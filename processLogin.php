<?php
if($_POST['username']=='sirine' && $_POST['pwd']=='secret')
{
    header('location:home.php');
}

/*else{
    //rediriger le user vers la page login avec un message d'erreur
    //le ? c pour affiche le message apres le ? dans l'url
    header('location:login.php?errorMessage=veillez verifier votre login ou mot de passe');
    
}*/
?>