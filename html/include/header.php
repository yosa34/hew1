<header id="header">

	<div id="particles-js"></div>
    
     <div id="header_nav">
        <nav id="gnav">
            <ul class="clearfix">
                <li class="hover-balloon"><a href="index.php" >	<span onmouseover="this.innerText='トップ'" onmouseout="this.innerText='TOP'"> TOP</span></a></li>
                <li><a href="saron.php"><span onmouseover="this.innerText='サロン'" onmouseout="this.innerText='SALON'"> SALON</span></a></li>
                <li><a href="shop.php"><span onmouseover="this.innerText='アイテム'" onmouseout="this.innerText='ITEM'"> ITEM</span></a></li>
                <li><a href="saron.php #messe"><span onmouseover="this.innerText='ボイス'" onmouseout="this.innerText='VOICE'"> VOICE</span></a></li>
                <li><a href="#contact"><span onmouseover="this.innerText='アクセス'" onmouseout="this.innerText='ACCESS'"> ACCESS</span></a></li>
                <!-- <li><a href="index.php" id="bloom"><img src="images/.png" style="width:150px; height:150px; margin:-30px 0px;" alt="BLOOM"></a></li> -->
                <li><a href="homu.php"><span onmouseover="this.innerText='ホーム'" onmouseout="this.innerText='HOME'"> HOME</span></a></li>
                <li><a href="homu.php"><span onmouseover="this.innerText='ニュース'" onmouseout="this.innerText='NEWS'"> NEWS</span></a></li>

                <?php
                if(isset($_SESSION['name'])){
                echo'<li style=" font-size:19px; "><a href="logout.php">ログアウト</a></li>';
                }
                ?>
            </ul>
        </nav>
    </div>
    
</header>
