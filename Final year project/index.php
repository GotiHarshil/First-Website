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
    <div id="home" class="container-fluid">
        <div id="img" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#img" data-slide-to="0" class="active"></li>
                <li data-target="#img" data-slide-to="1"></li>
                <li data-target="#img" data-slide-to="2"></li>                
            </ul>
          
            <!-- The slideshow -->
            <center>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="Images/p1.svg" class="mt-3" alt="Image 1">
                    </div>
                    <div class="carousel-item">
                        <img src="Images/p2.svg"class="mt-3" alt="Image 2">
                    </div>
                    <div class="carousel-item">
                        <img src="Images/p3.svg" class="mt-3" alt="Image 3">
                    </div>
                </div>
            </center>
            
          
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#img" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#img" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>

    <div id="menu" class="container-fluid mt-5 mb-5">
        <div class="card-group d-flex justify-content-center">
            <a href="#" target="_blank" class="cardLinks">
                <div class="card zoom">
                    <img class="card-img-top" src="Images/forMen.png" alt="Card image">
                    <div class="card-img-overlay">
                        <h5 class="card-title">For Men</h5>
                    </div>
                </div>
            </a>
            <a href="#" target="_blank" class="cardLinks">
                <div class="card zoom">
                    <img class="card-img-top" src="Images/forWomen.png" alt="Card image">
                    <div class="card-img-overlay">
                        <h5 class="card-title">For Women</h5>
                    </div>
                </div>
            </a>
            <a href="#" target="_blank" class="cardLinks">
                <div class="card zoom">
                    <img class="card-img-top" src="Images/forKids.png" alt="Card image">
                    <div class="card-img-overlay">
                        <h5 class="card-title">For Kids</h5>
                    </div>
                </div>
            </a>
        </div>
    </div>

    
</body>
</html>