<?php include 'include/top.php';?>
<?php



if(isset($_POST['submit'])){
    $pass = $_POST['pass'];
    /**
 * ここでは、ソルトをランダムに生成するようにしています。
 * 固定のソルトを使ったり、ランダムではない方法で作ったソルトを使ったりしてはいけません。
 *
 * 利用例の大半にあわせて、password_hash にランダムなソルトを生成させます。
 */
    $options = [
        'cost' => 11,
        'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),
    ];
    $passhash=password_hash($pass, PASSWORD_BCRYPT, $options)."\n";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $seibetu = $_POST['seibetu'];
    $query = "INSERT INTO users (password,user_name,email,seibetu) VALUES('{$passhash}','{$name}','{$email}','{$seibetu}');";
    $shop = mysqli_query($connection, $query);
    $_SESSION['name']=$name; 
    header("Location:homu.php");/*会員登録完了*/    

}
?>
<?php

//ログインボタンを押された時の処理
if(isset($_POST['login'])){
    $logpass = $_POST['logpass'];//ログインパス
    $logemail = $_POST['logemail'];//ログインメール
    $query = "SELECT * FROM users WHERE email = '$logemail'";//SQL：emailを比較
    $login = mysqli_query($connection, $query);
    if(mysqli_num_rows($login) > 0){
     $row = mysqli_fetch_assoc($login);//SQLで取り出されたものを配列にいれる。

        if(password_verify($logpass, $row['password'])){//パスワードの比較
            
            $_SESSION['name']=$row['user_name'];//名前をセッションにいれる。
            header("Location:homu.php");/*ログイン完了*/  
              
        }else{ $huka="ログインできませんでした。";/*ログイン不可*/}
    }else{$huka="ログインできませんでした。";/*ログイン不可*/}
}
?>

<link rel="stylesheet" href="css/touroku.css" media="screen,projection,tv" />
<script type="text/javascript">
$(function(){



    
	// 初期表示は、非表示にする
    $('.kaiin').hide();
    $('login').show();

	// ボタン1を押したとき
	$(".sin").click(function() {
		// 表示のときは、非表示にします。
		// 非表示の時、表示します。
		$("table").toggle();
		$(".slider").toggle();
	});
});

//loginの未入力処理
$(function(){
$("#log").click(function (){
    if(document.form3.logemail.value == "" || document.form3.logpass.value == ""){
        alert("ログインの必須項目を入力して下さい。");
  return false;
    }else{
  return true;
    }
  });
});
//loginボタンの処理
  $(function() {
    $('#log').prop('disabled', true);
  
    $('#check2').on('click', function() {
      if ( $(this).prop('checked') == false ) {
        $('#log').prop('disabled', true);
      } else {
        $('#log').prop('disabled', false);
      }
    });
  });
//submit未入力処理
  $(function(){
$("#submit").click(function (){
    if(document.form3.name.value == "" ||document.form3.email.value == "" || document.form3.pass.value == ""){
        alert("会員登録の必須項目を入力して下さい。");
  return false;
    }else{
  return true;
    }
  });
});
//submitボタンの処理
$(function() {
    $('#submit').prop('disabled', true);
  
    $('#check').on('click', function() {
      if ( $(this).prop('checked') == false ) {
        $('#submit').prop('disabled', true);
      } else {
        $('#submit').prop('disabled', false);
      }
    });
  });
</script>
</head>

<body>

<?php include 'include/header.php'; ?>
    <section id="concept">
        <div >
            <h2 id="h2_cpt">このページは承認されたお客様のみがアクセスできます</h2>
            <h3 id="h3_cpt">
                このページは閲覧制限されています。承認されたお客様ののみアクセスできます。<br>
                ログインまたは会員登録後にアクセスできます。
            </h3>
        </div>
        <div id="about" class="clearfix">
            <div class="slide">
                <div class="slider">
                    <h2>会員登録はお済ですか？</h2>
                    <p>このホームページには登録したお客様のみがアクセスすることのできるページがあります。
                    会員登録を今すぐ行い開覧制限のかかったページへのアクセス権を取得できます。</p>
                    <button class="sin">新規会員登録</button>
                </div>                
                <div class="slider kaiin" >
                    <h2>ログインをしたい方へ</h2>
                    <p>会員登録をした方はこちらのボタンにてログインができます。
                    ログインをしたら会員専用のページを見ることができます。　　
                    </p>
                    <button class="sin">ログインページ</button>
                </div>
            </div>
            
            <div class="text" >
                <form method="POST" name="form3" action="kaiin.php">
                <table Border class="kaiin">
                    <tr>
                        <th>氏名</th>
                        <td>
                        <input type="text" name="name"  placeholder="名前を入力して下さい" style="width: 200px; height:20px;">
                        </td> 
                    </tr>
                    <tr>
                        <th>メールアドレス/ID</th>
                        <td>
                        <input type="email" name="email"  placeholder="メールアドレス" style="width: 200px; height:20px;">
                        </td> 
                    </tr>
                    <tr>
                        <th>パスワード</th>
                        <td>
                        <input type="password" name="pass" style="width: 200px; height:20px;">
                        </td> 
                    </tr>
                    <tr>
                        <th>性別</th>
                        <td>
                           <input type="radio" name="seibetu" value="1">男性
                           <input type="radio" name="seibetu" value="2">女性

                        </td> 
                    </tr>
                    <tr>
                        <td colspan="2" >
                        <input type="checkbox" id="check" /><label for="check">上記の記述でお間違いないですか？また、内容は登録後に変更可能です。</label>
                        </td> 
                    </tr>
                    <tr>
                    <td> 
                    <input type="submit" name="submit" id="submit" class="button"  value="登録" onclick="return checkForm();">
                    </td> 
                    </form>
                    <td>
                    </td>
                    </tr>

                </table>
                <table Border id="login">
                    <tr>
                        <th>メールアドレス/ID</th>
                        <td>
                        <input type="email" name="logemail" value=""  placeholder="メールアドレス" style="width: 200px; height:40px; margin:10px; font-size:20px;">
                        </td> 
                    </tr>
                    <tr>
                        <th>パスワード</th>
                        <td>
                        <input type="password" name="logpass" value="" style="width: 200px; height:40px; margin:10px; font-size:20px;">
                        </td> 
                    </tr>
                    <tr>
                        <td colspan="2" >
                        <input type="checkbox" id="check2" /><label for="check">上記の記述でお間違いないですか？また、内容は登録後に変更可能です。</label>
                        </td> 
                    </tr>
                    <tr id="login01">
                        <td > 
                            <input type="submit" id="log" class="button" name="login" value="ログイン">
                        </td>                         
                        <td > 
                            <p style="color:red;"><?php if(isset($huka)){echo $huka;} ?></p>
                        </td> 
                    </tr>                    
                </table>
                </form>

            </div>
        </div><!--about-->
    </section>

    <?php include 'include/access.php'; ?>
    
</body>
</html>
