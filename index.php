<!DOCTYPE html>
<html lang="pl">
<head>
    <!-- meta tags -->
    <?php require("./templates/meta.php") ?>
    <title>Strona Główna</title>
</head>
<body>

    <!-- navbar -->
    <?php require("./templates/navbar.php") ?>
        
    <div class="container-fluid">

        <div class="row justify-content-center">
            <div class="col-12 m-0 p-0">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators mt-2">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="./assets/slide1.jpg" class="d-block w-100 carousel-img" alt="...">
                        <div class="carousel-caption d-md-block">
                            <h5>CKZiU Elektronik</h5>
                            <p>Szkoła, która odmieni twoje życie!</p>
                        </div>
                        </div>
                        <div class="carousel-item">
                        <img src="./assets/slide2.jpg" class="d-block w-100 carousel-img" alt="...">
                        <div class="carousel-caption d-md-block">
                            <h5>CKZiU Elektronik</h5>
                            <p>Szkoła, która odmieni twoje życie!</p>
                        </div>
                        </div>
                        <div class="carousel-item">
                        <img src="./assets/slide3.jpg" class="d-block w-100 carousel-img" alt="...">
                        <div class="carousel-caption d-md-block">
                            <h5>CKZiU Elektronik</h5>
                            <p>Szkoła, która odmieni twoje życie!</p>
                        </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- footer -->
        <?php require("./templates/footer.php") ?>
    </div>

</body>
</html>