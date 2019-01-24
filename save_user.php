<?php
    if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
    if (isset($_POST['name'])) { $name = $_POST['name']; if ($name == '') { unset($name);} }
    if (isset($_POST['fam'])) { $fam = $_POST['fam']; if ($fam == '') { unset($fam);} }
    //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
 if (empty($login) or empty($password)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
    {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
    //если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    
    $password = stripslashes($password);
    $password = htmlspecialchars($password);
    //$salt = mt_rand(100, 999);
    $tm = time(); //в эту переменную пишем время регистрации, необходимое для записи в БД. Также это время будет использовано для сохранения в БД времени последней активности пользователя.
    //$password = md5(md5($password).$salt);//  хэш пароля
    $hash= CRYPT ($password);
    
    $name = stripslashes($name);
    $name = htmlspecialchars($name);
    $fam = stripslashes($fam);
    $fam = htmlspecialchars($fam);

 //удаляем лишние пробелы
    $login = trim($login);
    $password = trim($password);
    $name=trim($name);
    $fam=trim($fam);
 // подключаемся к базе
    include ("bd.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 
 // проверка на существование пользователя с таким же логином
    $result = mysql_query("SELECT login FROM users WHERE login='$login'",$db);
    $myrow = mysql_fetch_array($result);
    if ($myrow)
    {
    exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
    }
//регулярное выражение для проверки e-mail
if (!preg_match("/[0-9a-z]+[0-9a-z_\.\-]*@[0-9a-z_\-\.]+\.[a-z]{2,6}/i",$login)) 
exit ("invalid mail");
//регулярное выражение для проверки password
if (strlen($_POST['password']) < 5) 
exit ("invalid password");
if ($_POST['password'] != $_POST['password1']) exit ("passwords don't match");  //равен ли пароль его подтверждению


 // если такого нет, то сохраняем данные
    $result2 = mysql_query ("INSERT INTO users (login,password,name, fam) VALUES('$login','$hash','$name', '$fam')");
    // Проверяем, есть ли ошибки
    if ($result2=='TRUE')
    {
    echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='index.php'>Главная страница</a>";
    }
 else {
    echo "Ошибка! Вы не зарегистрированы.";
    }


?>