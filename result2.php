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
                            if(!isset($_POST['how'])){
                                $_POST['how']="未選択";
                            }
                            $how=$_POST['how'];
                            
                            if($how==="friend"){
                                echo "知り合いの紹介で";
                            }
                            if($how==="magazine"){
                                echo "雑誌・Webサイトで見て";
                            }
                            if($how==="未選択"){
                                echo "チェックされていません";
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

