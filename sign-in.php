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
                <form class="py-5" action="" method="post">
                    <div class="form-group">
                        <input type="text" name="nom" class="form-control border-0 p-4" placeholder="Nom" required="required" />
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control border-0 p-4" placeholder="Email" required="required" />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control border-0 p-4" placeholder="Mot de passe" required="required" />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control border-0 p-4" placeholder="Confirmer le mot de passe" required="required" />
                    </div>
                    <div class="form-group">
                        <select class="custom-select border-0 px-4" style="height: 47px;">
                            <option selected>Select A Service</option>
                            <option value="1">Service 1</option>
                            <option value="2">Service 1</option>
                            <option value="3">Service 1</option>
                        </select>
                    </div>
                    <div>
                        <button class="btn btn-dark btn-block border-0 py-3" type="submit">S'enregistrer</button>
                    </div>
                    <a href="login.php" class="btn btn-danger">J'ai deja un compte</a>
                    <a href="./" class="btn btn-info">Retourner au site</a>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>

