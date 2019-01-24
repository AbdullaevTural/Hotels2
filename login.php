
    <html>
    <head>
    <title>Главная страница</title>
<link rel="stylesheet" href="css/reg.css" media="screen" type="text/css" />
    </head>
    <body>
 <div id="login">
  <div class="flip">
    
<div class="form-signup">
  
    <h1>Аутентификация</h1>
<fieldset>

	<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <div class="col-sm-4 col-sm-offset-4 padding-right">

                <?php if (isset($errors) && is_array($errors)): ?>
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li> - <?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

                <div class="signup-form"><!--sign up form-->
                    <h2>Вход на сайт</h2>
                    <form action="#" method="post">
                        <input type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>"/>
                        <input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>"/>
                        <input type="submit" name="submit" class="btn btn-default" value="Вход" />
                    </form>
                </div><!--/sign up form-->


                <br/>
                <br/>
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>
</fieldset>
   
</div>
  
</div>
</div>

 
<canvas class="blur" src="images/abstract-wallpaper-abstract-wallpapers.jpg"></canvas>
  
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
  <script src="js/index.js"></script>

    </body>
    </html>