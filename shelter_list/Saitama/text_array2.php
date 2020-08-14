<?php

/* ファイルポインタをオープン */
$file = fopen("Saitama_write.txt", "r+");
$contents = null;
$prefecture = 埼玉県;

while ($line = fgets($file)){
    // ↓file内の消したい文字を空白で置き換える
    $line = str_replace(" ", ",", $line);
    
    $contents .= $prefecture.",".$line;
};
fclose($file);

// ↓別ファイルに"test.txt"から読み取った内容を書き出す
    // ※上書き保存だと、文末にバグが発生したため＋元データ確保のため上書き保存はあまりしない
$write = fopen("Saitama_write.csv", "w");
fwrite($write, $contents);
fclose($write);

?>