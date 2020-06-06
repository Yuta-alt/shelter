<?php
/* ファイルポインタをオープン */
$file = fopen("Mie_read.txt", "r+");
$contents = null;

while ($line = fgets($file)){
    // ↓file内の消したい文字を空白で置き換える
    $line = str_replace("表示", "", $line);
    $line = str_replace("○", "", $line);
    // ↓空白行の削除
    $line = preg_replace("/^(\s)*(\r|\n|\r\n)/m", "", $line); 
    // if ( preg_match('/[^※]+$/', $line )) {
    // };
        //   ０ならコンテンツに入れる処理を追記
    $contents .= $line;
    
        
};

fclose($file);

// ↓別ファイルに"test.txt"から読み取った内容を書き出す
$fil = fopen("Mie_write.txt", "w");
fwrite($fil, $contents);
fclose($fil);

?>