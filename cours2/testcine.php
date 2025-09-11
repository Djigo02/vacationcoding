<?php
$cine = [
  "A" => [
    ["siege" => "A1", 'reserve' => true],
    ["siege" => "A2", 'reserve' => false],
    ["siege" => "A3", 'reserve' => false],
    ["siege" => "A4", 'reserve' => false],
    ["siege" => "A5", 'reserve' => true],
    ["siege" => "A6", 'reserve' => false],
    ["siege" => "A7", 'reserve' => false],
    ["siege" => "A8", 'reserve' => false]
  ],
  "B" => [
    ["siege" => "B1", 'reserve' => false],
    ["siege" => "B2", 'reserve' => false],
    ["siege" => "B3", 'reserve' => true],
    ["siege" => "B4", 'reserve' => false],
    ["siege" => "B5", 'reserve' => true],
    ["siege" => "B6", 'reserve' => false],
    ["siege" => "B7", 'reserve' => false],
    ["siege" => "B8", 'reserve' => false]
  ],
  "C" => [
    ["siege" => "C1", 'reserve' => false],
    ["siege" => "C2", 'reserve' => false],
    ["siege" => "C3", 'reserve' => false],
    ["siege" => "C4", 'reserve' => true],
    ["siege" => "C5", 'reserve' => true],
    ["siege" => "C6", 'reserve' => true],
    ["siege" => "C7", 'reserve' => false],
    ["siege" => "C8", 'reserve' => false]
  ],
  "D" => [
    ["siege" => "D1", 'reserve' => false],
    ["siege" => "D2", 'reserve' => false],
    ["siege" => "D3", 'reserve' => false],
    ["siege" => "D4", 'reserve' => true],
    ["siege" => "D5", 'reserve' => true],
    ["siege" => "D6", 'reserve' => false],
    ["siege" => "D7", 'reserve' => false],
    ["siege" => "D8", 'reserve' => false]
  ],
  "E" => [
    ["siege" => "E1", 'reserve' => false],
    ["siege" => "E2", 'reserve' => false],
    ["siege" => "E3", 'reserve' => false],
    ["siege" => "E4", 'reserve' => false],
    ["siege" => "E5", 'reserve' => false],
    ["siege" => "E6", 'reserve' => false],
    ["siege" => "E7", 'reserve' => false],
    ["siege" => "E8", 'reserve' => false]
  ]
];

$nbPlaceReserveAB = 0;
$nbPlaceReserveC = 0;
$nbPlaceReserveDE = 0;
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <title>CinéSalle</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      padding: 20px;
    }

    h1 {
      margin-bottom: 20px;
    }

    .salle {
      display: inline-block;
      background: #f3f3f3;
      padding: 20px;
      border-radius: 10px;
      width: 500px;
    }

    .rang {
      display: flex;
      justify-content: center;
      margin: 5px 0;
    }

    .place {
      width: 30px;
      height: 30px;
      margin: 3px;
      border-radius: 4px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 14px;
      font-weight: bold;
      cursor: default;
    }

    /* état des places */
    .libre {
      background: #048a09;
      /* vert */
      color: white;
    }

    .reserve {
      background: #a81404;
      /* rouge */
      color: white;
    }

    /* écran */
    .ecran {
      width: 100%;
      height: 20px;
      background: #333;
      color: white;
      line-height: 20px;
      margin-bottom: 100px;
      border-radius: 4px;
      font-size: 12px;
    }
  </style>
</head>

<body>
  <h1>Plan de la salle</h1>
  <div class="salle">
    <div class="ecran">ÉCRAN</div>

    <?php foreach ($cine as $rang => $rangee) :
    ?>
      <div class="rang">
        <?php foreach ($rangee as $siege) :
          if (($rang == "A" || $rang == "B") && $siege["reserve"] == true) {
            $nbPlaceReserveAB++;
          }
          if ($rang == "C"  && $siege["reserve"] == true) {
            $nbPlaceReserveC++;
          }
          if (($rang == "D" || $rang == "E") && $siege["reserve"] == true) {
            $nbPlaceReserveDE++;
          }
        ?>
          <div class="place <?= $siege['reserve'] == true ? 'reserve' : 'libre' ?> "><?= $siege['siege'] ?></div>
        <?php endforeach ?>
      </div>
    <?php endforeach ?>

    <p><?= "Le nombre de siege pour a et b : $nbPlaceReserveAB " ?></p>
    <p><?= "Le nombre de siege pour c : $nbPlaceReserveC " ?></p>
    <p><?= "Le nombre de siege pour d et e : $nbPlaceReserveDE " ?></p>

  </div>
</body>

</html>