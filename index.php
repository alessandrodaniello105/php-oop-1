<?php

// class Genre {
//   public $number;

//   public function __construct($_number) {
//     $this-> getGenre($_number);
//   }
  
//   public function getGenre($_number) {
//     $this->number = $_number;

//   }
  
// }

try {
  require_once __DIR__ . '/Model/Production.php';
  require_once __DIR__ . '/Model/Movie.php';
  require_once __DIR__ . '/Model/TvSerie.php';
  require_once __DIR__ . '/db/db.php';
} catch (Exception $e) {
  $error = $e->getMessage();
}

// var_dump($error);

// die();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css' integrity='sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==' crossorigin='anonymous'/>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js' integrity='sha512-WW8/jxkELe2CAiE4LvQfwm1rajOS8PHasCCx+knHG0gBHt8EXxS6T6tJRTGuDQVnluuAvMxWF4j8SNFDKceLFg==' crossorigin='anonymous'></script>

  <!-- Vue -->
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>


  <link rel="stylesheet" href="style.css">

  <title>PHP OOP 1</title>
</head>
<body>
  
  <div id="app" class="container border rounded-2 my-3 text-center p-4 w-75">

    <?php if(isset($error)): ?>
    <div class="error-box">
      <?= $error ?>
    </div>

    <?php else: ?>
    
      <h1>MIA LISTA FILM E SERIE TV DA GUARDARE</h1>

      <div class="row justify-content-center border rounded-2 my-3">
        
        <!-- TAB NAV -->
        <ul class="nav nav-tabs nav-tabs-ctm" id="myTab" role="tablist">
          
          <!-- MOVIES -->
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="movies-tab" data-bs-toggle="tab" data-bs-target="#movies-tab-pane" type="button" role="tab" aria-controls="movies-tab-pane" aria-selected="true">MOVIES</button>
          </li>
          <!-- /MOVIES -->

          <!-- TV SERIES -->
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="tvseries-tab" data-bs-toggle="tab" data-bs-target="#tvseries-tab-pane" type="button" role="tab" aria-controls="tvseries-tab-pane" aria-selected="false">TV SERIES</button>
          </li>
          <!-- TV SERIES -->

        </ul>
        <!-- /TAB NAV -->


        <!-- TAB CONTENT -->
        <div class="tab-content" id="myTabContent">

          <!-- MOVIES -->
          <div class="tab-pane fade show active" id="movies-tab-pane" role="tabpanel" aria-labelledby="movies-tab" tabindex="0">

            <div class="row">
              <?php foreach ($productions as $production): ?>
              <?php if (get_class($production) == 'Movie'): ?>

              <div class="col my-3" style="flex: 0 0 0%">

                <!-- CARD -->
                <div class="card" style="width: 18rem;">

                  <img src="img/<?php echo $production->image ?>" class="card-img-top" alt="<?php echo $production->name ?>">

                  <div class="card-body">

                    <h4 class="card-title">
                    <strong><?php echo $production->name ?></strong>
                    </h4>

                    <div class="badges-wrapper d-flex flex-wrap justify-content-center">
                      <?php if(isset($production->genreName)): ?>
                        <?php foreach ($production->genreName as $genre): ?>
                          <span class="badge badge-ctm bg-secondary <?= strtolower($genre) ?>"> <?= $genre ?> </span></h6>
                        <?php endforeach; ?>
                      <?php endif; ?>
                    </div>

                    <p class="card-text">
                      <strong>Anno Pubblicazione:</strong> <?php echo $production->published_year ?>
                    </p>

                    <p class="card-text">
                      <strong>Durata:</strong> <?php echo $production->running_time ?> min
                    </p>

                  </div>

                </div> 
                <!-- /CARD -->

              </div>
              
              <?php endif; ?>
              <?php endforeach; ?>
            </div>

          </div>
          <!-- /MOVIES -->

          <!-- TV SERIES -->
          <div class="tab-pane fade" id="tvseries-tab-pane" role="tabpanel" aria-labelledby="tvseries-tab" tabindex="0">

            <div class="row">
              <?php foreach ($productions as $production): ?>
              <?php if (get_class($production) == 'TvSerie'): ?>

              <div class="col my-3" style="flex: 0 0 0%">

                <!-- CARD -->
                <div class="card" style="width: 18rem;">

                  <img src="img/<?php echo $production->image ?>" class="card-img-top" alt="<?php echo $production->name ?>">

                  <div class="card-body">

                    <h4 class="card-title">
                      <strong><?php echo $production->name ?></strong>
                    </h4>

                    <div class="badges-wrapper d-flex flex-wrap justify-content-center">
                      <?php foreach ($production->genreName as $genre): ?>
                      <span class="badge badge-ctm bg-secondary <?= strtolower($genre) ?>"> <?= $genre ?> </span></h6>
                      <?php endforeach; ?>
                    </div>

                    <p class="card-text">
                      <strong>Da/A:</strong> <?php echo $production->aired_from_year ?>/<?php echo $production->aired_to_year ?>
                    </p>

                    <p class="card-text">
                      <strong>Episodi:</strong> <?php echo $production->number_of_episodes ?>
                    </p>

                    <p class="card-text">
                      <strong>Stagioni:</strong> <?php echo $production->number_of_seasons ?>
                    </p>

                  </div>

                </div>  
                <!-- /CARD -->

              </div>

              <?php endif; ?>
              <?php endforeach; ?>
            </div>
          </div>
          <!-- /TV SERIES -->   

        </div>
        <!-- TAB CONTENT -->
        
      </div>


    <?php endif; ?>

  </div>


  <script src="script.js"></script>
</body>
</html>

