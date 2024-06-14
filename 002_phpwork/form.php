<html>
  <head>
    <title>個人向け挨拶フォーム</title>
  </head>

  <body>
    <?php if(!empty($_POST['name'])) {
      echo "ようこそ、{$_POST['name']}さん";
    } ?>

    <from action="<?php echo $_SEVER['PHP_SELF']; ?>" method="post">
      名前を入力してください: <input type="text" name="name" />
    </from>
  </body>
</html>