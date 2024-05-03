<?php 

require_once __DIR__ . '/Models/Category.php';
require_once __DIR__ . '/Models/Subcategory.php';
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/assets/data/db.php';


var_dump($db)

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

  <!-- <div class="container">

    <div class="row">


      <?php foreach($db as $product): ?>
        <div class="col">

          <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
          
        </div>
      <?php endforeach ?>

    </div>

  </div> -->

</body>
</html>