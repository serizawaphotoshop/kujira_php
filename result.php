<?php
$kind= $_POST['kind'];
$first= $_POST['first'];
// $how= $_POST['how'];
$subject= $_POST['subject'];
$message= $_POST['message'];

// if($subject===null){
//     echo "何も選択されていません";
// }

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