
<?php include 'include/top.php'; ?>
    <link rel="stylesheet" href="css/index.css" media="screen,projection,tv" />


</head>

<body>
<?php include 'include/header.php'; ?>

<section id="concept">
    <h2 id="h2_cpt">BLOOMについて</h2>
    <h3 id="h3_cpt">
            年齢層を問わず、幅広いお客様に愛されております。<br>
            アットホームなスタッフと明るい空間と、通いやすい価格のサロンです。<br><br>

            流行をおさえながらも似合わせを考えたスタイルとお客様のライフスタイルに合っ<br>
            たスタイルのご提案、再現性を重視しているのでサロンで仕上げたようなスタイル<br>
            をご自身でも簡単に作り上げられるように施術しております。
    </h3>
	
    <div id="about" class="clearfix">
        <h2 class="midasi">サロン</h2>
        <div class="slide">
            <ul class="slider">
                <li><img src="images/hana1.jpg" width="360" height="450"></li>
            </ul>
        </div>
        
        <div class="text">
            <p>
                年齢層を問わず、幅広いお客様に愛されております。<br>
                アットホームなスタッフと明るい空間と、通いやすい価格のサロンです。<br><br>
 
                流行をおさえながらも似合わせを考えたスタイルとお客様のライフスタイルに合っ
                たスタイルのご提案、再現性を重視しているので<br>サロンで仕上げたようなスタイル
                をご自身でも簡単に作り上げられるように施術しております。
            </p>
        </div>
    </div><!--about-->
    <div id="shop" class="clearfix">
            <h2 class="midasi">商品</h2>
        <div class="slide">
                <ul class="slider">
                    <li><img src="images/hana3.jpg" width="360" height="450"></li>
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
        </div><!--staff-->
        <div id="yoyaku" class="clearfix">
            <h2 class="midasi">予約</h2>

            <div class="slide">
                <ul class="slider">
                    <li><img src="images/hana2.jpg" width="360" height="450"></li>
                </ul>
            </div>
            
            <div class="text">
            <p>
                スタッフはスタイリング二名アシスタント一名で行ています。<br>
                みんなフレンドリーで親しみやすく居心地の良い雰囲気を心がけていて
                小さなお子様からご老人まで幅広い方にご来店していただいています。<br><br>
                当サロンは、ご予約優先となっておりますのでよろしくお願いします。<br>
            </p>
                <!-- <form action="login.php">
                <input type="submit" value="を詳しく→">
                </form> -->
            </div>
        </div><!--shop-->
    </section>

<?php include 'include/access.php'; ?>
<p id="page_top"><a href="#header"><img src="images/pagetop.png" width="50" height="50" alt="pegetop"></a></p>

</body>
</html>
