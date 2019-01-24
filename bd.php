<?php
$db = mysql_connect ("localhost","root","");
mysql_select_db ("hotels",$db);
if (! function_exists ('my_db'))
{
function my_db($result)
{   
    $res_array = array($result);
    $count = 0;
    while ($myrow = mysql_fetch_array($result))
    {
      $res_array[$count]=$myrow;
      $count++; 
    }
    return $res_array ;
}}
if (! function_exists ('get_prodact'))
{
function get_prodact()
{
    $query = "SELECT *from prodact order by id desc";
    $result = mysql_query($query);
    $result = my_db($result);
    return $result;
}
}
if (! function_exists ('cat'))
{
function cat()
{
    $callumns  = "select * from category";
    $row = mysql_query ($callumns);
    $row = my_db($row);
    return $row;
    
}
}
if (! function_exists ('get_prodact1'))
{
function get_prodact1()
{
    $query1 = "SELECT *from prodact where parent=1";
    $result1 = mysql_query($query1);
    $result1 = my_db($result1);
    return $result1;
}
}
if (! function_exists ('get_prodact2'))
{
function get_prodact2()
{
    $query2 = "SELECT *from prodact where parent=2";
    $result2 = mysql_query($query2);
    $result2 = my_db($result2);
    return $result2;
}
}
?> 