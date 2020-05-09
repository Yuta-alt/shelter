<?php
/**************************************************

◆DBquery.php
このファイルは、日本全国（現在三重県のみ）の避難所のCSVデータをデータベースへ格納するファイルです。

**************************************************/

$DBConfigPath = "Config/DB.ini";

//パースした要素を全て追加 
$DBini_array = parse_ini_file($DBConfigPath);

try{

    //パースした要素をひとつづつ追加 
    $url = array_values($DBini_array)[0]; //データベースサーバ
    $user = array_values($DBini_array)[1]; //データベースユーザ(サーバと同じ)
    $pass = array_values($DBini_array)[2]; //パスワード
    $db = array_values($DBini_array)[3]; //データベース名
    $file = array_values($DBini_array)[4]; //csvのファイル名
    $prefectures = array_values($DBini_array)[5]; //都道府県名

    //＊データベースコネクト処理(クエリの後閉じる処理を行う)
    $link = mysql_connect($url,$user,$pass) or die("MySQLへの接続に失敗しました。");
    $sdb = mysql_select_db($db,$link) or die("データベースの選択に失敗しました。");
    $result = mysql_query('SET NAMES utf8', $link) or die("文字コードを指定できませんでした。");

    $f = fopen("./HinanjoCSV/".$file, "r");

    while($line = fgetcsv($f)){

        $SQL_INSERT = "INSERT INTO Hinanjo_Location(LocateNum, Hinanjo, Prefectures,City,Address) VALUES('$line[0]', '$line[1]', '$prefectures', '$line[2]', '$line[3]')";

        // //INSERT実行
        $result = mysql_query($SQL_INSERT, $link) or die("クエリの送信に失敗しました。<br />SQL:".$SQL_INSERT);
    }

    fclose($f);

    //接続失敗
    mysql_close($link) or die("MySQL切断に失敗しました。");

// エラー（例外）が発生した時の処理を記述
} catch (PDOException $e) {

  // エラーメッセージを表示させる
  echo 'データベースにアクセスできません！' . $e->getMessage();

  // 強制終了
  exit;

}