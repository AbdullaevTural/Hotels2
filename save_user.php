<?php
    if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } //������� ��������� ������������� ����� � ���������� $login, ���� �� ������, �� ���������� ����������
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
    if (isset($_POST['name'])) { $name = $_POST['name']; if ($name == '') { unset($name);} }
    if (isset($_POST['fam'])) { $fam = $_POST['fam']; if ($fam == '') { unset($fam);} }
    //������� ��������� ������������� ������ � ���������� $password, ���� �� ������, �� ���������� ����������
 if (empty($login) or empty($password)) //���� ������������ �� ���� ����� ��� ������, �� ������ ������ � ������������� ������
    {
    exit ("�� ����� �� ��� ����������, ��������� ����� � ��������� ��� ����!");
    }
    //���� ����� � ������ �������, �� ������������ ��, ����� ���� � ������� �� ��������, ���� �� ��� ���� ����� ������
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    
    $password = stripslashes($password);
    $password = htmlspecialchars($password);
    //$salt = mt_rand(100, 999);
    $tm = time(); //� ��� ���������� ����� ����� �����������, ����������� ��� ������ � ��. ����� ��� ����� ����� ������������ ��� ���������� � �� ������� ��������� ���������� ������������.
    //$password = md5(md5($password).$salt);//  ��� ������
    $hash= CRYPT ($password);
    
    $name = stripslashes($name);
    $name = htmlspecialchars($name);
    $fam = stripslashes($fam);
    $fam = htmlspecialchars($fam);

 //������� ������ �������
    $login = trim($login);
    $password = trim($password);
    $name=trim($name);
    $fam=trim($fam);
 // ������������ � ����
    include ("bd.php");// ���� bd.php ������ ���� � ��� �� �����, ��� � ��� ���������, ���� ��� �� ���, �� ������ �������� ���� 
 // �������� �� ������������� ������������ � ����� �� �������
    $result = mysql_query("SELECT login FROM users WHERE login='$login'",$db);
    $myrow = mysql_fetch_array($result);
    if ($myrow)
    {
    exit ("��������, �������� ���� ����� ��� ���������������. ������� ������ �����.");
    }
//���������� ��������� ��� �������� e-mail
if (!preg_match("/[0-9a-z]+[0-9a-z_\.\-]*@[0-9a-z_\-\.]+\.[a-z]{2,6}/i",$login)) 
exit ("invalid mail");
//���������� ��������� ��� �������� password
if (strlen($_POST['password']) < 5) 
exit ("invalid password");
if ($_POST['password'] != $_POST['password1']) exit ("passwords don't match");  //����� �� ������ ��� �������������


 // ���� ������ ���, �� ��������� ������
    $result2 = mysql_query ("INSERT INTO users (login,password,name, fam) VALUES('$login','$hash','$name', '$fam')");
    // ���������, ���� �� ������
    if ($result2=='TRUE')
    {
    echo "�� ������� ����������������! ������ �� ������ ����� �� ����. <a href='index.php'>������� ��������</a>";
    }
 else {
    echo "������! �� �� ����������������.";
    }


?>