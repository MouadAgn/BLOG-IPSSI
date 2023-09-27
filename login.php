<?php require('actions/users/loginAction.php'); ?>
<!DOCTYPE html>
<html lang="en">
<?php include('includes/head.php'); ?>
<body >

<br><br><br>
    <form class="container" method="POST" action="">

        <?php if(isset($error_msg))  {  echo '<p style=color:red;>'.$error_msg.'</p>';   }  ?>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Pseudo</label>
            <input type="text" class="form-control" name="pseudo">
        </div>
        
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="pwd">
        </div>
        <button type="submit" class="btn btn-primary" name="login">Se connecter</button>
        <br><br>
        <a href="signup.php"><p>Je n'ai pas de compte, je m'inscris</p></a>
    </form>
    
</body>
</html>