<?php 
$animals1 = ["いぬ" => 1, "ねこ" => 2, "うさぎ" => 6];
$animals2 = ["ぞう" => 1, "きりん" => 1, "さい" => 4];
$animalsList = ["小動物" => $animals1, "大動物" => $animals2];

foreach ($animalsList as $animals) {
  $animalType = []; // 新しい動物の種類のリストを作成
  foreach ($animals as $animalName => $animalNum) {
    if (1 < $animalNum) {
      $animalType[] = $animalName; // 複数の動物の種類をリストに追加
    }
  }
  echo implode('<br>', $animalType); 
}
?>



