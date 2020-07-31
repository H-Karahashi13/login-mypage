<?php
mb_internal_encoding("utf8");

session_start();

if(empty(rand())){
    header("location:login_error.php");
}

?>

<!DOCTYPE HTML>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>マイページ登録</title>
    <link rel="stylesheet" type="text/css" href="mypage_hensyu.css">
  </head>
    
  <body>
     <header>
      <img src="4eachblog_logo.jpg">
      <div class="logout"><a href="log_out.php">ログアウト</a></div>
     </header>
      
     <main>
       <form action="mypage_update.php" method="post">
         <div class="edit_contents">
          <h2>会員情報</h2>
          <div class="aisatsu">こんにちは！ <?php echo $_SESSION['name'];?>さん</div>
          <p><img src="<?php echo $_SESSION['picture'];?>"></p>
          <div class="name">
            <label>氏名 :</label>
            <input type="text" class="formbox" size="40" name="name" value="<?php echo $_SESSION['name'];?>">
          </div>
          <div class="mail">
            <label>メールアドレス :</label>
            <input type="text" class="formbox" size="40" name="mail" value="<?php echo $_SESSION['mail'];?>" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+.[a-z]{2,3}$">
          </div>
          <div class="password">
            <label>パスワード :</label>
            <input type="text" class="formbox" size="40" name="password" value="<?php echo $_SESSION['password'];?>" pattern="^[a-zA-Z0-9]{6,}$">
          </div>
          <div class="comments">
            <textarea rows="5" cols="80" class="formbox" name="comments" value="<?php echo $_SESSION['comments'];?>"></textarea>
          </div>
          <div class="edit_button">
            <input type="submit" class="button1" size="35" value="この内容に変更する">  
          </div>
        </div>     
       </form>
     </main>
      
     <footer>
       ©︎2018 InterNous.inc. All rights reserved 
     </footer>
      
     <script>
      function.confirmpassword(confirm){
          var input1 = password.value;
          var input2 = confirm.value;
          if(input1 !== input2){
              confirm.setCustomValidity("パスワードが一致しません。");
          }else{
              confirm.setCustomValidity("");
          }
      }  
    </script>
  </body>
</html>