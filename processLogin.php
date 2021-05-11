<?php
//tester si le login et le mot de passe sont correct
//username:aymen et le mot de passe secret
/* echo '<br> contenu de $_GET : <br>';
var_dump($_GET);
echo '<br> contenu de $_post : <br>';
var_dump($_POST); */
if($_POST['user']=='sirine' && $_POST['pwd']=='123') {
    //rediriger le user vers sa page d'acceil 
    header('location:home.php');
}
/*else{
    //rediriger le user vers la page login avec un message d'erreur
    //le ? c pour affiche le message apres le ? dans l'url
    header('location:login.php?errorMessage=veillez verifier votre login ou mot de passe');
    
}
?>*/