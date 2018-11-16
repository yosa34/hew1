<?php include 'include/top.php'; ?>
<?php 
$connection = mysqli_connect("localhost","root","","hew");/* データベースに接続 */
$query ="SET NAMES utf8";/* 文字化け防止 */
mysqli_query($connection, $query);

if(isset($_GET["item_no"]) && !isset($_GET["item_no2"])){
     $ItemNo = $_GET["item_no"];
     $scroll1="a";
     $ItemNo2 =5;
     
 }elseif(isset($_GET["item_no2"]) && !isset($_GET["item_no"])){
     $ItemNo2=$_GET["item_no2"];
     $scroll2='b';
     $ItemNo=1;
}else{ $ItemNo=1; $ItemNo2=5; }

$query = "SELECT shop_id,shop_name,shop_price,shop_text,shop_img FROM shop where shop_id = {$ItemNo} AND shop_coode = 'MILBON-ミルボン-' ";
$shop = mysqli_query($connection, $query);
$query2 = "SELECT shop_id,shop_name,shop_price,shop_text,shop_img FROM shop where shop_id = {$ItemNo2} AND shop_coode = 'NAPUR' ";
$shop2 = mysqli_query($connection, $query2);

$item=1;
$item2=5;
if(isset($_GET["item_no"])){
if($_GET["item_no"]<3){ 12; $item=1; $item2=5;}elseif($_GET["item_no"]<5){ 34; $item=2; $item2=5;}
}
if(isset($_GET["item_no2"])){
    if($_GET["item_no2"]==5){ 5; $item=1; $item2=5;}elseif($_GET["item_no2"]==6){ 6; $item=1; $item2=6; }elseif($_GET["item_no2"]==7){ 7; $item=1; $item2=7;}elseif($_GET["item_no2"]==8){ 8; $item=1; $item2=8;}elseif($_GET["item_no2"]==9){ 9; $item=1; $item2=9;}elseif($_GET["item_no2"]==10){ 10; $item=1; $item2=10;}
}
?>


<link rel="stylesheet" href="css/shop.css" media="screen,projection,tv" />


<script type="text/javascript">
        window.onload = function(){
        window.scroll(0,<?php if(isset($scroll1)){echo 700;}elseif(isset($scroll2)){echo 2350;}else{echo 0;} ?>); 
    }    
</script>
</head>

<body>
    
<?php include 'include/header.php'; ?>



<section id="concept">
    <h2 id="h2_cpt">商品</h2>
    <h3 id="h3_cpt">
        BLOOMでは、当店使用している商品を本店にて販売しています。<br>
        また、商品はそれらの各リンクにてネット通販もしていますので是非お買い求めください。<br>
        お客様のお肌や髪にあわせて洗い流しの際使用していますのでお声掛けしてもらえれば本店にてお買い求めいただけます。
    </h3>
    <?php while ($row = mysqli_fetch_assoc($shop)): ?>
        
    <div id="shop1" class="clearfix">
        <h2 class="midasi">MILBON-ミルボン-</h2>
        <div class="slide">
            <ul class="slider">
            <li><img src="images/<?php echo $row['shop_img'];?>" width="360" height="360"></li>
            </ul>
        </div>
        <div class="text">
            <p>
            <?php  echo $row['shop_name'];?> 
            </p>
            <p>￥<some style="color:blue;">
            <?php echo $row['shop_price']; ?>
            </some>
             </p>
            <a href="shop.php?item_no=1">●MO</a>
            <a href="shop.php?item_no=2" >●FO</a>
            <a href="shop.php? item_no=3" >●ｴﾏﾙｼﾞｮﾝ</a>
            <a href="shop.php? item_no=4" >●ｴﾏﾙｼﾞｮﾝ＋</a>

            <div id="shop_price"><?php echo $row['shop_text']; ?></div>
         <?php endwhile;?> 
        </div>
    </div><!--shop1-->
    <div id="setumei" class="clearfix">
        <h2 class="midasi">説明</h2>
        <div class="slide">
            <img src="images/<?php if($item==1){echo "setumei1.jpg";}elseif($item==2){echo "setumei02.jpg";} ?>" width="400" height="650">
         </div>
    </div><!--shop-->

<?php while ($row2 = mysqli_fetch_assoc($shop2)): ?>

    <div id="shop2" class="clearfix">
        <h2 class="midasi">NAPUR</h2>

        <div class="slide">
            <ul class="slider">
               <li><img src="images/<?php echo $row2['shop_img'];?>" width="360" height="360"></li>
            </ul>
        </div>
        <div class="text">
        <p>
        <?php  echo $row2['shop_name'];?> 
        </p>
        <p>￥<some style="color:blue;">
        <?php echo $row2['shop_price']; ?>
        </some>
         </p>
        <a href="shop.php?item_no2=5"><some style="color:orange;">●</some>Cure</a>
        <a href="shop.php?item_no2=6"><some style="color:green;">●</some>Natural Airy</a>
        <a href="shop.php? item_no2=7"><some style="color:purple;">●</some>Moisture</a>
        <a href="shop.php? item_no2=8"><some style="color:pink;">●</some>Sensitive</a>
        <br><a href="shop.php?item_no2=9" ><some style="color:blue;">●</some>Scalp</a>
        <a href="shop.php?item_no2=10" ><some style="color:red;">●</some>Color Care</a>

        <div id="shop_price"><?php echo $row2['shop_text']; ?></div>
    </div>
    </div><!--shop2-->
    <?php endwhile;?>


    <div id="setumei" class=" clearfix">
        <h2 class="midasi">説明</h2>
        <div class="slide">
            <img src="images/<?php if($item2==5){echo "setumei5.png";}elseif($item2==6){echo "setumei6.png";} elseif($item2==7){echo "setumei7.png";} elseif($item2==8){echo "setumei8.png";} elseif($item2==9){echo "setumei9.png";} elseif($item2==10){echo "setumei10.png";} ?>" width="360" height="500">
        </div>
        
        </div>
    </div><!--shop-->
</section>
<?php include 'include/access.php'; ?>
<p id="page_top"><a href="#header"><img src="images/pagetop.png" width="50" height="50" alt="pegetop"></a></p>

</body>
</html>