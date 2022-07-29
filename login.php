<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<?php require 'pagestyle.html'; ?>
</head>
<body>
<div class="container offset-3">
    <div class="row">
        
        <div class="col-lg-5">
            <div class="bg-primary py-5 px-4 px-sm-5">
                <form class="py-5" method="post" action="">
                    <div class="form-group">
                        <input type="text" name="nom" class="form-control border-0 p-4" placeholder="Nom" required="required" />
                    </div>
                   
                    <div class="form-group">
                        <input type="password" class="form-control border-0 p-4" placeholder="Mot de passe" required="required" />
                    </div>
                    
                    <div>
                        <button class="btn btn-dark btn-block border-0 py-3" type="submit">Se connecter</button>
                    </div>
                    <a href="sign-in.php" class="btn btn-danger">Je n'ai pas de compte</a>
                    <a href="./" class="btn btn-info">Retourner au site</a>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>

<?php 
if (!empty($_POST['nom'])) {
   header('Location:dashboard/admin.html');
}

?>