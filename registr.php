<!DOCTYPE html>
<html>

<head>
	
<meta charset="UTF-8">
	
<title></title>
	
 <link rel="stylesheet" href="css/reg.css" media="screen" type="text/css" />

</head>


<body>

<!-- vladmaxi top bar -->
    
<div class="vladmaxi-top">
               
<span class="right">
       
 <a href="http://vladmaxi.net/web-developer/css/22-luchshix-formy-vxoda-i-registracii-na-sajte-v-html-css.html">
                            
</a>
        
</span>
    
<div class="clr"></div>
    
</div>
<!--/ vladmaxi top bar -->

  
<div id="login">
  <div class="flip">
    
<div class="form-signup">
      
<h1><center>Регистрация</center></h1>
   
<form action="save_user.php" method="post">
<!--**** save_user.php - это адрес обработчика.  То есть, после нажатия на кнопку "Зарегистрироваться", данные из полей  отправятся на страничку save_user.php методом "post" ***** -->   
<fieldset>
      
<p class="login-msg"></p>
                
<p>
<label>Имя:<br></label>
<input class="user" name="name" type="text" size="15" maxlength="15">
</p>
<p>
<label>Фамилия:<br></label>
<input class="user" name="fam" type="text" size="15" maxlength="25">
</p>
<p>
<label>e-mail:<br></label>
<input class="user" name="login" type="text" size="15" maxlength="30">
</p>
<p>
<label>Телефон:<br></label>
<input  class="user" name="tel" type="text" size="15" maxlength="15">
</p>
<!--**** В текстовое поле (name="login" type="text") пользователь вводит свой логин ***** -->         
<p>
<label>Ваш пароль:<br></label>
<input class="user" name="password" type="password" size="15" maxlength="15">
</p>
<p>
<label>Подтвердите пароль:<br></label>
<input class="user" name="password1" type="password" size="15" maxlength="15">
</p>
<!--**** В поле для паролей (name="password" type="password") пользователь вводит свой пароль ***** --> 
<p>
    <input Class="btn" type="submit" name="submit" value="Зарегистрироваться">
<!--**** Кнопочка (type="submit") отправляет данные на страничку save_user.php ***** --> 
</p></form>
</fieldset>
   
</div>
     
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
  <script src="js/index.js">
</script>


</body>

</html>