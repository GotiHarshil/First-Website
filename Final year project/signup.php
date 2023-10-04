<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="Images/iconr1.png" type="image/png">
    <title> NeedleNest</title>
</head>
<body>
    <?php include "header.php" ?>
    <div class="container-fluid mt-4 w-75 p-4 formBox">
        <h1>Hello!</h1>
        <h4>Create a new account</h4>
        <hr class="mt-3 mb-3">
        <form action="" method="post">
            <div class="form-group">
                <label for="username">Username: </label>
                <input type="text" class="form-control" name="username" id="username" aria-describedby="helpId">
                <small id="helpId" class="form-text text-muted">Please enter a valid username here!</small>
            </div>
            <hr>
            <div class="form-group">
                <label for="password">Password: </label>
                <input type="password" class="form-control" name="password" id="password" aria-describedby="helpId">
                <small id="helpId" class="form-text text-muted">Please enter a valid password here!</small>
            </div>
            <div class="form-group">
                <label for="cpassword">Confirm password: </label>
                <input type="password" class="form-control" name="cpassword" id="cpassword" aria-describedby="helpId">
                <small id="helpId" class="form-text text-muted">Please enter your password again here!</small>
            </div>
            <button type="submit" class="btn btn-block" name="submit">
                <span>SIGN UP</span>
            </button>
            <hr>
            <div class="foot text-center">
                Already have an account!!! <a href="login.php">Login here!</a>
            </div>
        </form>
    </div>
</body>
</html>