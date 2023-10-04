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
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#">
                <img src="Images/needlenest.svg" class="img-fluid" height="110px" width="140px" alt="NeedleNest">
            </a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Our Stores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                        <i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <i class="fa fa-user-circle-o dropbtn" aria-hidden="true"></i>
                            <?php
                                if(isset($_SESSION['userid']))
                                {
                            ?>
                            <div class="dropdown-content">
                                <a href="login.php">Login</a>
                                <a href="signup.php">SignUp</a>
                            </div>
                            <?php
                                }else {
                            ?>
                            <div class="dropdown-content">
                                <?php echo "Hello" . $_SESSION['userid']; ?>
                            </div>
                            <?php
                                }
                            ?>
                            <!--
                            <div class="dropdown-content">
                                <a href="login.php">Login</a>
                                <a href="signup.php">Sign Up</a>
                            </div>
                            
                            If login is successful
                            <div class="dropdown-content">
                                <a href="uprofile.php">My Profile</a>
                                <a href="logout.php">Log Out</a>
                            </div>
                            -->
                          </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
</body>
</html>