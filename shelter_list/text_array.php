<?php
/* ファイルポインタをオープン */
$file = fopen("test.txt", "r+");
$contents = null;

while ($line = fgets($file)){
    $line = str_replace("表示", "", $line);
    $line = str_replace("○", "", $line);
    // $line = preg_replace(" /^\r\n/m ", "", $line);
    // if($line == ""){
    //     $contents .= $line;
    // }
    // $line = str_replace(PHP_EOL, '', $line);
    $contents .= $line;
    
    // 変数の初期化
    // $array = null;
    // $slice_array = null;
    // // 配列を用意
    // $array = array("Mie_shelter_1p.txt");
    // // 要素を削除
    // $slice_array = array_splice($array, 4, 7, null);
    // // 削除した後の配列を出力
    // var_dump($array);
    // // 削除された部分を出力
    // var_dump($slice_array);
};


echo "test\n";
// ファイルポインタを先頭に戻す
rewind($file);
// 書き込み
fwrite($file, $contents);
fclose($file);
?>