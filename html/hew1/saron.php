<?php include 'include/top.php';
?>
<?php
$dataFile='dds.dat';
    if(isset($_GET['name']) && isset($_GET['kome'])){
        $name = trim($_GET['name']);//空白を消す
        $kome = trim($_GET['kome']);
        if($kome !==''){
            $name = ($name ==='')? '名無し' : $name;//名無しが入る
            $kome = str_replace("\t",' ', $kome);
            $name = str_replace("\t",' ', $name);
            date_default_timezone_set('Asia/Tokyo');
            $postdAt = date('Y/m/d H:i:s');
            $newData = $name . "\t" . $kome . "\t". $postdAt . "\n";            
            $fp = fopen($dataFile,'a');
            fwrite($fp,$newData);
            fclose($fp);
        }
    }else{
    }
    $posts = file($dataFile, FILE_IGNORE_NEW_LINES);
    $posts= array_reverse($posts);    

    if(!empty($_GET["psh"])){
        if(isset($_GET["psh"])){
            $min = $_GET["psh"];
            if($min <= 0){
                $min=1;
            }
        }else{
            $min=1;
        }
    }else{
        $min=1;
    }
    //$min=5;
    $max = $min + 4;
    $fp = fopen($dataFile,'r');
    $fval = file($dataFile, FILE_IGNORE_NEW_LINES);
    // $fval = array_reverse($fp);//ファイルを配列に格納
    fclose($fp);
        ?>
<link rel="stylesheet" href="css/saron.css" media="screen,projection,tv" />

<script type="text/javascript">
//   function checkForm(){
//     if(document.form1.name.value == "" || document.form1.kome.value == ""){
//         alert("必須項目を入力して下さい。");
// 	return false;
//     }else{
//       alert("投稿されました。");
// 	return true;
//     }
// }
</script>
</head>

<body>

<?php include 'include/header.php';?>

<section id="concept">
    <h2 id="h2_cpt">サロン</h2>
    <h3 id="h3_cpt">
        落ち着いた雰囲気でスタッフとの会話も楽しく元気になるサロンです。<br>
        お客様のお肌や髪の悩みにもご相談に乗り、お客様にあったスタイルをオススメします。<br>
    </h3>
	
    <div id="about" class="clearfix">
        <div class="slide">
            <ul class="slider">
                <li><img src="images/mise6.png" width="360" height="450"></li>
            </ul>
        </div>
        <div class="text">
            <p>
                BLOOMでは、様々な年齢層の方々にご来店いただくため様々な工夫をほどこしています。<br>
                ご老人にはバリアフリーとして車椅子でもご利用しやすい店の設計になっていて当店ではバリアフリー以外にもアンチエイジングもしています。

            </p>
        </div>
    </div><!--about-->
    <div id="shop" class="clearfix">
        <div class="slide">
            <ul class="slider">
                <li><img src="images/hana4.jpg" width="360" height="450"></li>
            </ul>
        </div>
        <div class="text">
            <p>
            サロンで使っている商品をお客様にもご提供させていただいています。<br>
            お客様の頭皮のご相談にものり商品をご紹介しています。<br>
            ご気軽にご相談ください。
            </p>
            <form action="shop.php">
                <input type="submit" class="button" value="商品を詳しく→">
            </form>
        </div>
    </div><!--shop-->
    <div id="yoyaku" class="clearfix">
        <div class="slide">
            <ul class="slider">
                <li><img src="images/hana1.jpg" width="360" height="450"></li>
            </ul>
        </div>
        <div class="text">
            <p>
                スタッフはスタイリング二名アシスタント一名で行ています。<br>
                みんなフレンドリーで親しみやすく居心地の良い雰囲気を心がけていて<br>
                小さなお子様からご老人まで幅広い方にご来店していただいています。<br><br>
                当サロンは、ご予約優先となっておりますのでよろしくお願いします。<br>
            </p>
                <!-- <form action="login.php">
                <input type="submit" value="を詳しく→">
                </form> -->
        </div>
    </div><!--shop-->
    <div id="messe" >
        <h3 id="h3_cpt">
            いつもBLOOMをご利用いただきありがとうございます。<br>
            当店ではお客様のお声をもっと身近に聞くためにコメントをいただいています。<br>
            是非、コメントの方よろしくお願いいたします。
            又、コメントの消去は行えませんのでご了承ください<br><br>
            これからもご利用よろしくお願いします。
        </h3>
    </div><!--メッセージ-->
    <div id="komento" class="clearfix">
        <div class="slide">
            <div id="fr">
            <form name="form1" method="get" action="">

                <p><input type="text" name="name" value="" placeholder="uname" size="20" style="width: 200px; height:30px; margin:10px; font-size:18px;"></p>
                <p><input type="text" name="kome" value="" placeholder="messege" size="30"style="width: 300px; height:30px; margin:0 10px;"></p>
                <p><input type="checkbox" id="check1" /><label for="check">上記の記述でお間違いないですか？また、内容は登録後に変更できません。</label></p>
                <input type="submit" id="toukou" class="button" value="投稿">

            </form>
            </div>


        </div>     
        <div id="kome" class="text">
            <ul id="list">
                <?php if (!empty($fval)):?> 
                <?php $cnt=1;?>
                <?php foreach($fval as $post):?>
                <?php if($cnt<=$max&&$cnt>=$min):
                    list($name,$kome,$postedAt) = explode("\t",$post);?>
                    <li style="font-size:15px;"><?php echo $name ,$postedAt. "<br>".$kome;?></li>
                <?php endif;
                    $cnt++;
                    endforeach;
                ?>
                <?php else :?>
                    <li>まだ投稿はありません</li>
                <?php endif;?>
            </ul>
            <div style="display:inline-flex">
                <?php if($min > 1):?>
                <form method="get" action="#list">
                    <input type="submit" value="戻る" class="button">
                    <input type="hidden" name="psh"value="<?php echo $min-5 ?>">
                </form>
                <?php endif;?>
                <?php if($max < count($fval)):?>
                <form method="get" action="#list">
                    <input type="submit" value="次へ" class="button">
                    <input type="hidden" name="psh" value="<?php echo $min+5 ?>">
                </form>
                <?php endif;?>
            </div>

        </div>
    </div><!--コメント-->

</section>
<?php include 'include/access.php'; ?>
<p id="page_top"><a href="#header"><img src="images/pagetop.png" width="50" height="50" alt="pegetop"></a></p>

</body>
</html>
