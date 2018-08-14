<?php include 'include/top.php';?>

<?php
if(empty($_SESSION['name'])){
    header("location: kaiin.php");
}
?>

<link rel="stylesheet" href="css/home.css" media="screen,projection,tv" />

</head>
<body>
<header id="header">

<div id="particles-js"></div>
</header>

<section id="concept">
<h2 id="h2_cpt">ようこそ<?php echo $_SESSION['name'];?>さん</h2>
 <h3 id="h3_cpt">
    会員専用ページです。<br>
    こちらでは、会員のお客様にとって有益になる情報をご提供させていただいています。<br>
    newsには、サロンの情報や割引情報を記載していきます。そちらの画面を見せていただくと割引価格でご利用いただけます。<br>

</h3> 
<div class="zensaito">
    <p id="page1"><a href="index.php">TOP</a></p>
    <p id="page2"><a href="saron.php">SARON</a></p>
    <p id="page3"><a href="shop.php#shop1">-MILBON-</a></p>
    <p id="page5"><a href="logout.php">ログアウト</a></p>

</div>
<div class="left">
    <div class="scrollbar">
        <div class="news">
            <p>2018/00/00　<a href="#">テスト</a></p>
            <p>2018/00/00　<a href="#">テスト</a></p>
            <p>2018/00/00　<a href="#">テスト</a></p>
            <p>2018/00/00　<a href="#">テスト</a></p>
            <p>2018/00/00　<a href="#">テスト</a></p>
            <p>2018/00/00　<a href="#">テスト</a></p>
            <p>2018/01/17　<a href="#">サイトコンセプト立案</a></p>
            <p>2018/01/24　<a href="#">サイトモデル立案</a></p>
            <p>2018/01/25　<a href="#">サイト概要立案</a></p>
            <p>2018/01/19　<a href="#">サイトデザイン作成</a></p>
            <p>2018/01/25　<a href="#">サイト制作開始</a></p>
            <p>2018/03/06　<a href="#">サイト完成</a></p>
            <p>2018/03/06　<a href="#">ブース作成</a></p>
            <p>2018/03/07　<a href="#">展示当日</a></p>
        </div>
    </div>
</div>
</section>
<?php include 'include/access.php'; ?>
</body>
</html>
