<?php

require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Category.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Toy.php';
require_once __DIR__ . '/Models/Accessory.php';
require_once __DIR__ . '/assets/data/db.php';
require_once __DIR__ . '/partials/head.php';

$foods = array_filter($db, fn($product)=> get_class($product) === 'Food');

$toys = array_filter($db, fn($product)=> get_class($product) === 'Toy');

$accessories = array_filter($db, fn($product)=> get_class($product) === 'Accessory');

//assegno i valori al trait tramite foreach, invece di creare una nuova variabile

foreach($toys as $item){
  if ($item->name === 'Fit and Fun Osso'){
    $item->material = ['Gomma'];
  } elseif ($item->name === 'Frisbee in Gomma Naturale'){
    $item->material = ['Gomma'];
  }
}
foreach($accessories as $item){
  if ($item->name === 'Ciotola Modern Bianca'){
    $item->material = ['Plastica', 'Legno'];
  } elseif ($item->name === 'Cappotto Impermeabile Montreal Grigio'){
    $item->material = ['Tela', 'Plastica'];
  }
}

// se nella funzione setName inseriamo al posto di 'prova' un nome minore di 4 caratteri, otteniamo l'errore non fatale causato da try/catch
try{
  $prova = new Food('Virtus Protein Selection Dog Lattina 400G', 'Virtus soddisfa le esigenze nutrizionali del tuo cane e gatto attraverso una gamma di alimenti', 2.99, 'https://arcaplanet.vtexassets.com/arquivos/ids/266207/virtus-dog-protein-selection-anatra-400g.jpg?v=637755900210570000', new Category('Cani', '<i class="fa-solid fa-dog"></i>'), 400, ['carni e derivati', 'ortaggi', 'additivi']);
  $prova->setName('prova');
} catch(Exception $e){
  var_dump($e->getMessage());
}

?>

<body>

  <header>
    <div class="header-top"></div>
    <div class="header-bottom d-flex align-items-center justify-content-center">
      <h1><a class="text-black text-decoration-none fw-bold text-uppercase " href="#">boolplanet</a></h1>
    </div>
  </header>

  <main class="pt-5">

    <div class="container">

      <div class="row">

        <!-- cibo -->

        <?php if(count($foods) > 0): ?>
        <hr>
        <div class="col-4">
          <h4 class="mb-4">Cibo</h4>
        </div>
        <?php endif ?>

        <div class="col-8">

          <div class="container">

            <div class="row row-cols-3">

              <?php foreach ($foods as $item): ?>
                <div class="col d-flex justify-content-center">

                  <div class="card cp mb-5" style="width: 18rem;">
                    <img src="<?php echo $item->image ?>" class="card-img-top w-100 h-100 object-fit-contain " alt="<?php echo $item->name ?>">
                    <div class="card-body">
                      <h4 class="card-title"><?php echo $item->name ?></h4>
                      <p class="card-text"><?php echo $item->description ?></p>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item bg-body-secondary"><strong>Prezzo: </strong>&euro; <?php echo number_format($item->getPrice(), 2, ',') ?></li>
                      <li class="list-group-item bg-body-secondary"><strong>Peso: </strong><?php echo $item->weight ?>gr</li>
                      <li class="list-group-item bg-body-secondary"><strong>Categoria: </strong><?php echo $item->category->name ?> <?php echo $item->category->icon ?></li>
                      <li class="list-group-item bg-body-secondary"><strong>Ingredienti: </strong>
                        <ul class="list-group list-group-flush">
                          <?php foreach($item->ingredients as $ingredient): ?>
                            <li class="list-group-item bg-body-secondary text-capitalize"><?php echo $ingredient ?></li>
                          <?php endforeach ?>
                        </ul>
                      </li>
                    </ul>
                  </div>

                </div>
              <?php endforeach ?>

            </div>

          </div>

        </div>

        <!-- /cibo -->

        <!-- giocattoli -->
        
        <?php if(count($toys) > 0): ?>
          <hr>
          <div class="col-4">
          <h4 class="mb-4">Giocattoli</h4>
        </div>
        <?php endif ?>

        <div class="col-8">

          <div class="container">

            <div class="row row-cols-3">

              <?php foreach ($toys as $item): ?>
                <div class="col d-flex justify-content-center">

                  <div class="card cp mb-5" style="width: 18rem;">
                    <img src="<?php echo $item->image ?>" class="card-img-top w-100 h-100 object-fit-contain " alt="<?php echo $item->name ?>">
                    <div class="card-body">
                      <h4 class="card-title"><?php echo $item->name ?></h4>
                      <p class="card-text"><?php echo $item->description ?></p>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item bg-body-secondary"><strong>Prezzo: </strong>&euro; <?php echo number_format($item->getPrice(), 2, ',') ?></li>
                      <li class="list-group-item bg-body-secondary"><strong>Dimensioni: </strong><?php echo $item->size ?></li>
                      <li class="list-group-item bg-body-secondary"><strong>Categoria: </strong><?php echo $item->category->name ?> <?php echo $item->category->icon ?></li>
                      <li class="list-group-item bg-body-secondary"><strong>Dettagli: </strong><?php echo $item->features ?></li>
                      <li class="list-group-item bg-body-secondary"><strong>Materiali: </strong><?php $item->getFormatMaterial() ?></li>
                    </ul>
                  </div>

                </div>
              <?php endforeach ?>

            </div>

          </div>

        </div>

        <!-- /giocattoli -->

        <!-- accessori -->

        <?php if(count($accessories) > 0): ?>
        <hr>
        <div class="col-4">
          <h4 class="mb-4">Accessori</h4>
        </div>
        <?php endif ?>

        <div class="col-8">

          <div class="container">

            <div class="row row-cols-3">

            <?php foreach ($accessories as $item): ?>
                <div class="col d-flex justify-content-center">

                  <div class="card cp mb-5" style="width: 18rem;">
                    <img src="<?php echo $item->image ?>" class="card-img-top w-100 h-100 object-fit-contain " alt="<?php echo $item->name ?>">
                    <div class="card-body">
                      <h4 class="card-title"><?php echo $item->name ?></h4>
                      <p class="card-text"><?php echo $item->description ?></p>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item bg-body-secondary"><strong>Prezzo: </strong>&euro; <?php echo number_format($item->getPrice(), 2, ',') ?></li>
                      <li class="list-group-item bg-body-secondary"><strong>Dimensioni: </strong><?php echo $item->size ?></li>
                      <li class="list-group-item bg-body-secondary"><strong>Categoria: </strong><?php echo $item->category->name ?> <?php echo $item->category->icon ?></li>
                      <li class="list-group-item bg-body-secondary"><strong>Materiali: </strong><?php $item->getFormatMaterial() ?></li>
                    </ul>
                  </div>

                </div>
              <?php endforeach ?>

            </div>

          </div>

        </div>

        <!-- /accessori -->

      </div>

    </div>

  </main>

  <footer class="d-flex align-items-center justify-content-center text-white text-uppercase">
    
    <h4>boolplanet &copy;</h4>

  </footer>

</body>

</html>