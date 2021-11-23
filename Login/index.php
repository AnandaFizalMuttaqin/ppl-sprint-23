
<?php require "../../app/controller/Login.php";?>

<link rel="stylesheet" href="<?= $header_path ?>/Public/css/Login.css">
</head>
<body>
      
    <br><br><br><br>
    <div class="login-form">
      <form action="" method="POST">  
      <h1>Login</h1>
      <?= $alert ?>
      <input type="text" name="username" class="form-control" placeholder="username">
      <input type="password" name="password" class="form-control" placeholder="password">

      <br>
      <button type="submit" name="login" class="btn btn-success">Sign In</button>
      </form>
    </div>
    
  <?php
require "$absolute_path/app/view/footer.php";
?>