<?php

require_once __DIR__ . '/Models/Category.php';
require_once __DIR__ . '/Models/Subcategory.php';
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/assets/data/db.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/style/style.css">
  <title>PHP OOP 2</title>
</head>

<body>

  <header>
    <div class="header-top"></div>
    <div class="header-bottom d-flex align-items-center justify-content-center">
      <h1><a class="text-black text-decoration-none fw-bold" href="#">Boonimal</a></h1>
    </div>
  </header>

  <main class="pt-5">

    <div class="container">

      <div class="row">

        <div class="col-4">
          <h4 class="mb-4">Filtri:</h4>
          <ul class="list-unstyled">
            <li class="cp">Categoria</li>
            <li class="cp">Sottocategoria</li>
          </ul>
        </div>

        <div class="col-8">

          <div class="container">

            <div class="row row-cols-3">

              <?php foreach ($db as $product) : ?>
                <div class="col d-flex justify-content-center">

                  <div class="card mb-5" style="width: 18rem;">
                    <img src="<?php echo $product->image ?>" class="card-img-top w-100 h-100 object-fit-contain " alt="<?php echo $product->name ?>">
                    <div class="card-body">
                      <h4 class="card-title"><?php echo $product->name ?></h4>
                      <p class="card-text"><?php echo $product->description ?></p>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item bg-body-secondary"><strong>Categoria: </strong><?php echo $product->animal ?></li>
                      <li class="list-group-item bg-body-secondary"><strong>Tipo: </strong><?php echo $product->type ?></li>
                      <li class="list-group-item bg-body-secondary"><strong>Prezzo: </strong>&euro; <?php echo number_format($product->price, 2, ',') ?></li>
                    </ul>
                  </div>

                </div>
              <?php endforeach ?>

            </div>

          </div>

        </div>

      </div>

    </div>

  </main>

  <footer class="d-flex align-items-center justify-content-center text-white">
    
    <h4>Boonimal &copy;</h4>

  </footer>

</body>

</html>