<?php
$file = fopen("Mie_write.csv", "r+");
$filename = "Mie_write.txt";
$array = file($filename); //配列
//or
// $strGet = file_get_contents($filename); //文字列

$i = 0;
while(count($array) > $i){

  //下の処理はfileメソッドを使う想定
  $name = $array[$i]; //←「避難所名A」
  $city = $array[$i+1];
  $address = $array[$i+2];

  // $ar = array($name, $shichoson, $jusho);
  // $str_result = implode(",", $ar);
  
  //下記をファイルに書き込む
  $contents .= $name.",".$city.",".$address;

  $i .= 3;
}
$write = fopen("Mie_write.csv", "w");
fwrite($write, $contents);
fclose($write);
?>