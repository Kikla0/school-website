<!DOCTYPE html>
<html lang="pl">
<head>
    <!-- meta tags -->
    <?php require("./templates/meta.php") ?>
    <title>O szkole</title>
</head>
<body>

    <!-- navbar -->
    <?php require("./templates/navbar.php") ?>
        
    <div class="container-fluid">

    <div class="flex-shrink-0 p-3 bg-custom-1" style="width: 280px;">
    <ul class="list-unstyled ps-0">
      <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed text-light fs-5 fw-semibold" data-bs-toggle="collapse" data-bs-target="#home1" aria-expanded="false">
            O szkole
        </button>
        <div class="collapse" id="home1">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="#" class="link-light rounded">Szkoła</a></li>
            <li><a href="#" class="link-light rounded">Status szkoły</a></li>
            <li><a href="#" class="link-light rounded">Baza dydaktyczna</a></li>
            <li><a href="#" class="link-light rounded">Patronka</a></li>
            <li><a href="#" class="link-light rounded">Galeria</a></li>
          </ul>
        </div>
      </li>
      <li class="border-top my-3"></li>
      <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed text-light fs-5 fw-semibold" data-bs-toggle="collapse" data-bs-target="#home2" aria-expanded="false">
            Organizacja szkoły
        </button>
        <div class="collapse" id="home2">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="#" class="link-light rounded">Szkoła</a></li>
            <li><a href="#" class="link-light rounded">Status szkoły</a></li>
            <li><a href="#" class="link-light rounded">Baza dydaktyczna</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </div>
        
        <!-- footer -->
        <?php require("./templates/footer.php") ?>
    </div>

</body>
</html>