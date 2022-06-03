<?php

// null合体演算子
// $_POST['how'] = $_POST['how'] ?? "未選択";

// null合体演算子の書き換え
if(!isset($_POST['how'])){//howになにか入力されている状態ではない場合に（isset）
    $_POST['how'] = "未選択";//$_POSTに未選択と言う文字列を代入する
}

$kind= $_POST['kind'];
$first= $_POST['first'];
$how= $_POST['how'];
$subject= $_POST['subject'];
$message= $_POST['message'];

// $how = $how ?? "未選択";
// echo $how;
// if($how===null){
//     echo "何も選択されていません";
// }

echo "きっかけ:" . $how . "<br>";

if($kind==="1"){
    echo "ご予約";
}elseif($kind==="2"){
    echo "イベントについて";
}elseif($kind==="3"){
    echo "その他お問い合わせ";
}

if($subject==="coffee"){
    echo "☕️";
}else{
    echo "あああ";
}

if(mb_strlen($message)>10){
    echo "文字数が多すぎます";
}else{
    echo $message;
}


