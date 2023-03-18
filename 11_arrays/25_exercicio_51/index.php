<?php

$ranking = [
  "Carlos" => 200,
  "Matheus" => 158,
  "Kaue" => 450,
  "Luan" => 30,
  "Patricia" => 520
];

arsort($ranking);

?>

<h1>Ranking:</h1>
<ol>
  <?php foreach ($ranking as $pessoa => $pontos) : ?>
    <li><?= $pessoa ?> -> <?= $pontos ?> pontos</li>
  <?php endforeach; ?>
</ol>