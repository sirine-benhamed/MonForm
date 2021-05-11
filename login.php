<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="node_modules/bootswatch/dist/darkly/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<div class="container">
    <form action="processLogin.php" methode="post"> 
       username:<input name="user" type="text" class="form-control">
       password:<input name="pwd" type="password" class="form-control">
       <input type="submit" class="btn btn-primary">
    </form>
    <?php 
    //si ce message (variable) ce trouve dans le tab get qui sera afficher dans l'url
            if(isset($_GET['errorMessage'])){
      ?>
    <div class="alert alert-danger">
       <?=$_GET['errorMessage'] ?>
    </div>
    <?php 
    }
    ?>
    </div>
    
</body>
</html>