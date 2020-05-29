<?php
/* ファイルポインタをオープン */
$file = fopen("Mie_shelter_1p.txt", "r+");
$contents = null;

// while ($line = fgets($file)) {
    // $result = str_replace('表示', '', $line);
//     // fwrite($line, $result);
//     // $result = str_replace('○', '', $line);
//     // fwrite($line, $result);
//     echo $result."test";
//     // $result = mysql_fetch_array($line);
//     // echo $result;
// }

while ($line = fgets($file)){
    $line = str_replace("表示", "", $line);
    $line = str_replace("○", "", $line);
    if($line == ""){
        $contents .= $line;
        echo "test";
    }
}
// ファイルポインタを先頭に戻す
rewind($file);

// 書き込み
fwrite( $file, $contents);
fclose($file);

?>