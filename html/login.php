<?php include 'include/top.php'; ?>
<?php
if(isset($_GET['login'])){
    $pass = $_GET['pass'];
    $email = $_GET['email'];




    $query = "SELECT * FROM users WHERE email = '$email'";
    $login = mysqli_query($connection, $query);
    if(mysqli_num_rows($login) > 0){
     $row = mysqli_fetch_assoc($login);
    
        if($row['password']==$pass){$_SESSION['name']=$row['user_name'];
                        
        }

    }
}


?>

<link rel="stylesheet" href="css/touroku.css" media="screen,projection,tv" />

<script type="text/javascript">

</script>
</head>

<body>

<?php include 'include/header.php'; ?>
    <section id="concept">
        <h2 id="h2_cpt">ログインについて</h2>
        <h3 id="h3_cpt">
            こちらでは、Bloomへのログインを行っています。<br>
            ログインをするとBloomへの予約ができるようになります。<br>
        </h3>

        <div id="about" class="clearfix">
            <h2 class="midasi">ログイン</h2>
            <div class="slide">
                <ul class="slider">
                    <li><img src="images/ki1.jpeg" width="360" height="360"></li>
                </ul>
            </div>
            
            <div class="text" id="login">
                <p>
                <form method="get" name="form2" action="login.php">
                <table Border>
                    <tr>
                        <th>メールアドレス/ID</th>
                        <td>
                        <input type="email" name="email"  placeholder="メールアドレス" style="width: 200px; height:40px; margin:10px; font-size:20px;">
                        </td> 
                    </tr>
                    <tr>
                        <th>パスワード</th>
                        <td>
                        <input type="password" name="pass" style="width: 200px; height:40px; margin:10px; font-size:20px;">
                        </td> 
                    </tr>
                    <tr>
                        <td colspan="2" >
                        <input type="checkbox" id="check2" /><label for="check">上記の記述でお間違いないですか？また、内容は登録後に変更可能です。</label>
                        </td> 
                    </tr>
                    <tr id="login01">
                        <td > 
                            <input type="submit" id="login" name="login" value="ログイン">
                            </form>

                        </td>                         
                        <td > 
                            <button id="sin">新規会員登録</abutton>
                        </td> 
                    </tr>                    
                </table>

                </p>
            </div>
            <div class="text" id="kaiin">
                <p>
                <form method="get" name="form3" action="">
                <table Border>
                    <tr>
                        <th>氏名</th>
                        <td>
                        <input type="text" name="name"  placeholder="名前を入力して下さい" style="width: 100px; height:40px; margin:10px; font-size:20px;">
                        </td> 
                    </tr>
                    <!-- <tr>
                        <th>住所</th>
                        <td>
                        <input type="text" name="address"  placeholder="住所" style="width: 200px; height:20px;">
                        </td> 
                    </tr> -->
                    <tr>
                        <th>メールアドレス/ID</th>
                        <td>
                        <input type="email" name="email"  placeholder="メールアドレス" style="width: 200px; height:40px; margin:10px; font-size:20px;">
                        </td> 
                    </tr>
                    <tr>
                        <th>パスワード</th>
                        <td>
                        <input type="password" name="pass" style="width: 200px; height:40px; margin:10px; font-size:20px;">
                        </td> 
                    </tr>
                    <tr>
                        <th>性別</th>
                        <td>
                           <input type="radio" name="seibetu" value="1" style=" margin:10px; font-size:20px;">男性
                           <input type="radio" name="seibetu" value="2" style=" margin:10px; font-size:20px;">女性

                        </td> 
                    </tr>
                    <tr>
                        <td colspan="2" >
                        <input type="checkbox" id="check" /><label for="check">上記の記述でお間違いないですか？また、内容は登録後に変更可能です。</label>
                        </td> 
                    </tr>
                    <tr>
                    <td> 
                        <input type="submit" name="register" id="submit" value="登録" onclick="return checkForm();">
                    </td>
                    <td > 
                        <button id="sin1">新規会員登録</abutton>
                    </td>  
                    </tr>


                </form>
                </table>
                </p>
            </div>
        </div><!--about-->
    </section>


<?php include 'include/access.php'; ?>
<p id="page_top"><a href="#header"><img src="images/pagetop.png" width="50" height="50" alt="pegetop"></a></p>

</body>
</html>
