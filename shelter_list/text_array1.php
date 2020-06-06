<?php
$file = 'Mie_shelter_1p.txt';
// ファイルをオープンして既存のコンテンツを取得します
$current = file_get_contents($file);
// ↓file内の消したい文字を空白で置き換える
$current = str_replace("表示", "", $current);
$current = str_replace("○", "", $current);
// ↓特定の文字を持つ行そのものを削除する
$current = preg_replace("/^※/", "", $current);

// ↓結果をファイルに書き出します
file_put_contents($file, $current);


// //↓改行そのものをなくすケース
// $current = trim(("\r\n", "\r", "\n"), "", $current);
// ↓空白行を消したい
// $current = preg_replace('/^\r\n/m',"", $current);

?>