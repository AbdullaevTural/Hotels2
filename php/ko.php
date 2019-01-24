CREATE TABLE `comments` (
  `id` int(11) NOT NULL auto_increment,
  `id_article` varchar(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `mail` varchar(60) NOT NULL,
  `text` varchar(500) NOT NULL,
  `date_add` varchar(18) NOT NULL,
  `public` int(1) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=75 DEFAULT CHARSET=cp1251 AUTO_INCREMENT=75 ;
<?php
// Этот блок кода нужен для корректной работы Ajax скрипта
sleep(1); 
header("Content-type: text/plain; charset=windows-1251");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
// Преобразуем полученые данные в нужную кодировку
while(list ($key, $val) = each ($_POST)){$_POST[$key] = iconv("UTF-8","CP1251", $_POST[$key]);}
// Устанавливаем значение даты
$date = date('d.m.Yв H:i');
// Устанавливаем параметры валидации                                       
$nl = strlen($_POST['name']);
$ml = strlen($_POST['mail']);
$tl = strlen($_POST['text']);
$id_article = $_GET['id_article'];
$name = $_POST['name'];
$mail = $_POST['mail'];
$text = $_POST['text'];
if($nl<0 or $nl>60 or $ml<0 or $ml>60 or $tl<0 or $tl>500 or $_POST['nr']!='nerobot')
{$validate = false;}
elseif(!eregi('^[a-z0-9]+(([a-z0-9_.-]+)?)@[a-z0-9+](([a-z0-9_.-]+)?)+\.+[a-z]{2,4}$',$_POST['mail']))
{$validate = false;}
else{$validate = true;}
// Если прошли валидацию
if($validate)
{
// Добавляем комментарий
include("config.php");
mysql_query("insert into comments (id_article, name, mail, text, date_add, public) values ('{$id_article}', '{$name}', '{$mail}', '{$text}', '{$date_add}', '0')") or die ("Error! query - add_comment");
echo '<font color="green">Комментарий добавлен и ожидает проверки!</font>';
}
else
{
echo '<font color="red">Заполните правильно поля ввода!</font>';
}
?>
<?php
function show_comments($id_article)//выводвсехкомментариевкстатье
{
 include("config.php");
 $res = mysql_query("select * from comments where id_article like $id_article and public = 1 order by id", $con) or die ("Error! query – show comments");
 while($arr = mysql_fetch_array($res, MYSQL_NUM))
 {
                echo "
<div class=main>
                               <img src=images/comentator.jpg>
                                               <div class=block_name>
                                                               <span class=name>[2]</span>
                                                               <span class=date>[5]</span>
                                               </div>
                                               <div class=coment>
                                                               <div>$arr[4]</div>
                                               </div>
                </div>
                ";
}
}
?>
<?php
                $hostname="localhost"; // Имя хоста
                $login="root"; // Логин для подкл. к серверу баз даных
                $pwd=""; // Пароль для подкл. к серверу баз даных
                $db_name="yourbasename";  // Название базы даных
                //подключение к базе
                $con = @mysql_connect($hostname, $login, $pwd) or die("Error! connect-database");
                mysql_select_db($db_name, $con) or die ("Error! select-database");                 
?>
<script Language="JavaScript" src="js_comments.js"> </script>
<div id="coments">
<div class="title">
                                <span>
                                               <h2>Комментарии по теме:</h2>
                                                               <ahref="#вставьте сюда ид блока статьи">
Вмонтируйте название вашей статьи сюда
</a>
                               </span>
</div>
<div class="top">
<img id="addcomentbutton"  onClick="toggle('addcoment'); location.href='#coments';" src="images/add_coment.png"/>
</div>
<div id="addcoment" class="addcoment" style="display:none;">
<form name="comment" method="post" action="add_comment.php?id_article=Вмонтируйтеидвашейстатьи ">
<div id="statusbox">Комментарий должен быть по теме и составлен корректно!</div>
<input id="name" type="text" name="name" value="Имя (Обязательно)" maxlength="60" onfocus="clearText(this)" onblur="clearText(this)"/>
<input id="mail" type="text" name="mail" value="Почта (Обязательно, непубликуется)" maxlength="60" onfocus="clearText(this)" onblur="clearText(this)"/>
<textarea id="text" name="text" onfocus="clearText(this)" onblur="clearText(this)"></textarea>
<span>
<input id="nr" onClick="document.getElementById('nr').value='nerobot';" type="checkbox" name="nr"/>
<b>я не робот...</b>
</span>
<img class="button_add" src="images/button_add.png" onclick='ajax({
url:" add_comment.php ?id_article=Вмонтируйтеидвашейстатьи",
                statbox:"statusbox",
method:"POST",
                data:
                                {
                               name:document.getElementById("name").value,
                               mail:document.getElementById("mail").value,
                               text:document.getElementById("text").value,
                               nr:document.getElementById("nr").value,
                               success:function(data){document.getElementById("statusbox").innerHTML=data;}
                               })'
/>
</form>
</div>
<?php
include("show_comments.php");
show_comments(Вмонтируйте сюда ид вашей статьи);
?>
</div>