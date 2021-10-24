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
                    <center><h1>Sign Up</h1></center>
                    <hr>
                    <?php if(isset($validation)): ?>
                        <div class="alert alert-danger"><?= $validation->listErrors(); ?></div>
                    <?php endif; ?>
                    <form action="/register/save" method="post">
                    <div class="mb-3">
                        <label for="inputid_card" class="form-label">ID_Card Number</label>
                        <input type="text" name="id_card" class="form-control" id="inputforcard" value="<?= set_value('id_card'); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="inputname" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="inputforname" value="<?= set_value('name'); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="inputage" class="form-label">Age</label>
                        <input type="text" name="age" class="form-control" id="inputforage" value="<?= set_value('age'); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="inputemail" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="inputforemail" value="<?= set_value('email'); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="inputpassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="inputforpassword">
                    </div>
                    <div class="mb-3">
                        <label for="inputconfpassword" class="form-label">Confirm Password</label>
                        <input type="password" name="confpassword" class="form-control" id="inputforconfpassword">
                    </div>
                    <center>
                    <button type="submit" class="btn btn-success">Sign Up</button>
                    <a href="/welcome_message.php" class="btn btn-danger me-1">Cancel</a>
                    </center>
                </form>
                </div>
            </div>
        </div><br><br>
        <?php require('footer.php'); ?>
</body>

</html>

