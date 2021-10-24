<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <?php require('navbar.php'); ?>
    
    <div class="container mt-4">
            <div class="row justify-content-md-center">
                <div class="col-md-6">
                    <center><h1>Login</h1></center>
                    <hr>
                    <?php if(session()->getFlashdata('msg')): ?>
                        <div class="alert alert-danger"><?= session()->getFlashdata('msg'); ?></div>
                    <?php endif; ?>
                    <form action="/login/auth" method="post">
                    <div class="mb-3">
                        <label for="inputemail" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="inputforemail" value="<?= set_value('email'); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="inputpassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="inputforpassword">
                    </div>
                    <center>
                    <button type="submit" class="btn btn-success">Login</button>
                    <a href="/welcome_message.php" class="btn btn-danger me-1">Cancel</a>
                    </center>
                </form>
                </div>
            </div>
        </div>
</div>   
<br>  <br>  <br>     <br>  
<?php require('footer.php'); ?>

</body>

</html>