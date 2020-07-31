<?php
// "Mie_read.txt"　の"表示"、"○"を削除し、それによりできた空白を詰める作業
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
    
};
fclose($file);

// ↓別ファイルに"test.txt"から読み取った内容を書き出す
    // ※上書き保存だと、文末にバグが発生したため＋元データ確保のため上書き保存はあまりしない
$write = fopen("Mie_write.txt", "w");
fwrite($write, $contents);
fclose($write);

?>