<?php

/**
 * @author Evgeniy Popov
 * @copyright 2011
 */

require_once 'db.php';

$sql = "
        SELECT id, parent_id, name, comment,
        DATE_FORMAT(date_add, '%d %M %Y %H:%i') as date_add
        FROM comments
";

$query = mysql_query($sql);

while($row = mysql_fetch_assoc($query))
{
    $data[$row[id]] = $row; 
}

/*Функция для создания дерева комментариев  */

function mapTree($dataset) {
	$tree = array(); // Создаем новый массив
    /*
        Проходим в цикле по массиву $dataset, который был передан в качестве аргумента.
        в $id будет попадать уникальный id комментария, 
        &$node - обратите внимание, работаем со значением по ссылке!  
     */
	foreach ($dataset as $id=>&$node) {    
		if (!$node['parent_id']) { // не имеет родителя, т.е. корневой элемент
			$tree[$id] = &$node;
		} else { 
		  /*
             Иначе это чей-то потомок
             этого потомка переносим в родительский элемент, 
             при этом у родителя внутри элемента создастся массив childs, в котором и будут вложены его потомки
           */
            $dataset[$node['parent_id']]['childs'][$id] = &$node; //
             
		}
	}

	return $tree;
}  




function commentsToTemplate($comment)
{
    /* $comment - массив комментария - имя, дата, коммент, потомки (если есть) */
    
    /* Включаем буферизацию вывода, чтобы шаблон не вывелся в месте вызова функции.
    */
    ob_start();  
      
        // Подключаем шаблон  comment_template.php, который просто таки ждет наш массив $comment ))
        include 'comment_template.php';                     
    
    $comments_string =  ob_get_contents(); // Получаем содержимое буфера в виде строки
    ob_end_clean(); // очищаем буфер
    
    return $comments_string;
    // Можно применить более короткую запись - return ob_get_clean(); вместо     $comments_string =  ob_get_contents(); ob_end_clean(); return $comments_string;
} 

 function commentsString($data)
     {
        foreach($data as $w) 
        {
        $string .= commentsToTemplate($w);
        }
         
        return $string; 
     }   


$data = mapTree($data);
$comments = commentsString($data);
$data = null;


?>