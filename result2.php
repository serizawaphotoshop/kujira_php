<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=divice-width, initial-scale=1">
    <title>お問い合わせ | KUJIRA Cafe</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <!-- ヘッダー -->
        <header class="header">
            <h1 class="logo"><a href="index.html"><img src="logo.png" alt="KUJIRA Cafe"></a></h1>
        </header>
        <!-- ヘッダーここまで -->
        <!-- メイン -->
        <main>
            <h2>入力内容の確認</h2>
            <section class="formdiv">
                <dl>
                    <dt>お名前</dt>
                    <dd>
                        <?php
                            $fullname=$_POST["fullname"];
                            if(empty($fullname)){
                                echo "氏名を入力してください";
                            }else{
                                echo $fullname;
                            }
                        ?>
                    </dd>
                </dl>
            </section>            
            <section class="formdiv">
                <dl>
                    <dt>メールアドレス</dt>
                    <dd>
                    <?php
                            $address=$_POST["address"];
                            if(empty($address)){
                                echo "メールアドレスを入力してください";
                            }elseif (!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\?\*\[|\]%'=~^\{\}\/\+!#&\$\._-])*@([a-zA-Z0-9_-])+\.([a-zA-Z0-9\._-]+)+$/", $address)) {
                                echo "メールアドレスの形式で入力してください";
                            }else{
                                echo $address;
                            }
                        ?>
                    </dd>
                </dl>
            </section>
            <section class="formdiv">
                <dl>
                    <dt>お問い合わせの種類</dt>
                    <dd>
                        <?php
                            $kind=$_POST['kind'];
                            if($kind==="1"){
                                echo "ご予約";
                            }elseif($kind==="2"){
                                echo "イベントについて";
                            }elseif($kind==="3"){
                                echo "その他お問い合わせ";
                            }
                        ?>
                    </dd>
                </dl>
            </section>
            <section class="formdiv">
                <dl>
                    <dt>ご来店の有無</dt>
                    <dd>
                        <?php
                            $first=$_POST['first'];
                            if($first==="yes"){
                                echo "あり";
                            }elseif($first==="no"){
                                echo "なし";
                            }
                        ?>
                    </dd>
                </dl>
            </section>
            <section class="formdiv">
                <dl>
                    <dt>当カフェをお知りになったきっかけ</dt>
                    <dd>
                        <?php

                        $how = [
                            "friend2" => $_POST['howFriend'] ?? false, 
                            "magazine2" => $_POST['howMagazine'] ?? false
                        ];


                            // if(isset($_POST['howFriend']) && isset($_POST['howMagazine'])){
                            //     $aaa = $_POST['how']="未選択";
                            // }
                            // $how=$_POST['how'];
                            
                            if($how["friend2"]){
                                echo "知り合いの紹介で";
                            }
                            if($how["magazine2"]){
                                echo "雑誌・Webサイトで見て";
                            }
                            if(!($how["friend2"] || $how["magazine2"])){
                                echo "チェックされていません";
                            }
                            var_dump($how);
                            echo $how["friend2"];
                            echo $how["magazine2"];



                            ?>
                    </dd>
                </dl>
            </section>
            <section class="formdiv">
                <dl>
                    <dt>お問い合わせの件名</dt>
                    <dd>
                        <?php
                            if(!isset($_POST['subject'])){
                                $_POST['subject']="件名が未入力です";
                            }
                            $subject=$_POST['subject'];
                            
                            if($subject==="件名が未入力です"){
                                echo "件名が未入力です";
                            }
                            else{
                                echo $subject;
                            }
                            // var_dump($how);
                            ?>
                    </dd>
                </dl>
            </section>
            <section class="formdiv">
                <dl>
                    <dt>お問い合わせの具体的内容</dt>
                    <dd>
                        <?php
                            if(!isset($_POST['message'])){
                                $_POST['message']="内容が入力されていません";
                            }
                            $message=$_POST['message'];
                            if(mb_strlen($message)>20){
                                echo "文字数が20文字を超えています";
                            }
                            elseif($message==="内容が入力されていません"){
                                echo "内容が入力されていません";
                            }
                            else{
                                echo $message;
                            }
                            // var_dump($how);
                            ?>
                    </dd>
                </dl>
            </section>
        </main>
        <!-- メインここまで -->
        <!-- フッター -->
        <footer class="footer">
            <p>&copy;Copyright KUJIRA Cafe. All rights reserved.</p>
        </footer>
        <!-- フッターここまで -->
    </div>
</body>
</html>

