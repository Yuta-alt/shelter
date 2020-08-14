<?php
// "text_array.php"で編集後の"Mie_write.txt"
// これをカンマ区切りのcsvに変換する作業

// ↓架空のファイルを開く（＝新規のファイル作成）
$file = fopen("Mie_write.csv", "w");
// ↓参照するファイル名
$filename = "Mie_write.txt";
$prefecture=三重県;
$array = file($filename); //配列
$i = 0;
// ↓ 「Mie_write.txt の最後の行まで」と言う条件指定
for ($i = 0 ; $i <= count($array);$i++){
// ↓１行・２行・３行の読み込み
  // ↓改行の削除（配列の連結）
  $name = $array[$i*3+0];
    $name = str_replace(PHP_EOL, '', $name);
  $city = $array[$i*3+1];
    $city = str_replace(PHP_EOL, '', $city);
  $address = $array[$i*3+2];

  //下記をファイルに書き込む
  // ※「.」は連結子。１行にまとめたいときは下記のように
  $contents .= $prefecture.",".$name.",".$city.",".$address;
}
fclose($file);

$write = fopen("Mie_write.csv", "w");
fwrite($write, $contents);
fclose($write);
?>