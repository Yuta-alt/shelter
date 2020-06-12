<?php
// PDFからデータ変換したのだが、macとwindowsで貼り付け結果に違いが出た　今回はwindows採用
/* ファイルポインタをオープン */
$file = fopen("Mie_read.txt", "r+");
$contents = null;

while ($line = fgets($file)){
    // ↓file内の消したい文字を空白で置き換える
    $line = str_replace("表示", "", $line);
    $line = str_replace("○", "", $line);
    // ↓空白行の削除
    $line = preg_replace("/^(\s)*(\r|\n|\r\n)/m", "", $line); 
    // $line =  implode(',', $line);
    $contents .= $line;
    // ↓(名称,市町村,住所)で１行を構成　という区切りにする。　＜＝ implodeを使う？
    
};
fclose($file);

// ↓別ファイルに"test.txt"から読み取った内容を書き出す
$write = fopen("Mie_write.txt", "w");
fwrite($write, $contents);
fclose($write);

?>