<?php
//  вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. Очень важно запустить их в  самом начале странички!!!
session_start();
include 'bd.php';
?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href="css/html5reset.css" rel="stylesheet" type="text/css"charset="utf-8">
<link href="css/style.css" rel="stylesheet" type="text/css"charset="utf-8">
<link href="css/slider.css" rel="stylesheet" type="text/css"charset="utf-8">
<link href="css/custom.css" rel="stylesheet" type="text/css"charset="utf-8">
<link href="css/highslide-custom.css" rel="stylesheet" type="text/css"charset="utf-8">
<link href="css/skin_red.css" rel="stylesheet" type="text/css"charset="utf-8">
<script type="text/javascript" src="js/jquery-1.4.4.min.js" charset="utf-8"></script>
<script type="text/javascript" src="js/comment.js" charset="utf-8"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-aller.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
<!--[if lte IE 7]><link href="css/old_ie.css" rel="stylesheet" type="text/css"><![endif]-->
<script src="js/jquery-1.5.min.js" type="text/javascript"charset="utf-8"></script>
<script src="js/jquery.easing.1.3.js" type="text/javascript"charset="utf-8"></script>
<script type="text/javascript" src="js/PIE.js"charset="utf-8"></script>
<script src="js/cufon-yui.js" type="text/javascript"charset="utf-8"></script>
<script src="js/Crimson.font.js" type="text/javascript"charset="utf-8"></script>
<script src="js/slider.js" type="text/javascript"charset="utf-8"></script>
<script type="text/javascript" src="js/jquery.mousewheel.min.js"charset="utf-8"></script>
<script type="text/javascript" src="js/jScrollHorizontalPane.min.js"charset="utf-8"></script>
<script type="text/javascript" src="js/jScrollPane.js"charset="utf-8"></script>
<link rel="stylesheet" type="text/css" media="all" href="js/jScrollPane.css" charset="utf-8" />
<link rel="stylesheet" type="text/css" media="all" href="css/jScrollHorizontalPane.css" charset="utf-8"/>
<script src="js/plugins/placeholder/jquery.placeholder.js" type="text/javascript"charset="utf-8"></script>
<script src="js/plugins/validator/jquery.validationEngine.js" type="text/javascript"charset="utf-8"></script>
<script src="js/plugins/validator/z.trans.en.js" type="text/javascript"charset="utf-8"></script>
<link href="js/plugins/validator/validationEngine.jquery.css" rel="stylesheet" type="text/css"charset="utf-8">
<script src="js/plugins/cycle/jquery.cycle.all.js" type="text/javascript"charset="utf-8"></script>
<script src="js/plugins/drag.js" type="text/javascript"charset="utf-8"></script>
<script src="js/jquery-css-transform.js" type="text/javascript"charset="utf-8"></script>
<script src="js/jquery-animate-css-rotate-scale.js" type="text/javascript"charset="utf-8"></script>
<script src="js/sc-slider.js" type="text/javascript"charset="utf-8"></script>
<script type="text/javascript" src="js/plugins/highslide/highslide-full.js"charset="utf-8"></script>
<script type="text/javascript" src="js/plugins/highslide/highslide.config.js" charset="utf-8"></script>
<link rel="stylesheet" type="text/css" href="js/plugins/highslide/highslide.css" />

<!--[if lt IE 7]>
<link rel="stylesheet" type="text/css" href="js/plugins/highslide/highslide-ie6.css" />
<![endif]-->

<script src="js/vt.js" type="text/javascript"charset="utf-8"></script>


</head>

<body> 
<div id="pxs_container" class="pxs_container"> 
  <div class="top-l">
    <div class="top-l-c"></div>
    <div class="logo"><a href="index.php"><img src="images/logo.png" width="143" height="129" alt="" /></a></div>
    <div class="light-t"></div>
  </div>
  <div class="top-r">
    <div class="top-r-c"></div>
  </div>
  <div class="pxs_bg">
    <div class="pxs_bg1"></div>
    <div class="pxs_bg2"></div>
    <div class="pxs_bg3"></div>
  </div>
  <div class="pxs_loading">Loading...</div>
    <div class="pxs_slider_wrapper">
      <ul class="pxs_slider">
        <li id="for_home">
          <div class="holder post">
            <img style="" src="images/space.gif" width="980" height="450" alt="" />            
            <div class="mask">
              <div class="article">  
                <div class="shadow-t">
                <div class="scroll-wrap">
                  <div class="scroll-pane">   

          

        
          
     <h2><span>All</span> Products</h2>
     <hr>
            <p><strong></p>
            <p><strong></p>
          
         
        <div class="article">
<?php mb_internal_encoding("UTF-8");?>
<center><p><font size="5">Корзина</font></p></center>
   <hr />
   <br /> 
   <form name="lol">
   <?php
      session_start();
      $n = $_SESSION['n'] ;
      $quantity    = $_POST['quantity']   ;    
     if ($quantity != 0)
       {
         $n = $n + 1 ;                  
         $_SESSION['n'] = $n;
         echo '№ '.$n.'<br /><br />';

         $_SESSION[ mas_quantity][$n] = $quantity ;
              

    global $totals;
    $totals = 0 ; 
            $i = $i + 1 ;
            $_SESSION['i'] = $i;
            $d = $_SESSION[mas_quantity][$i];   // ?????????? ??????????? ??????
            $sum[$i]=$d * $_SESSION['price1'];
            ob_start();
             echo " ".($b ['id'])." ".'Цена товара-'." ".($_SESSION['price1'])." ".'Количество-'." ".$d." ".'Сумма заказа- '.$sum[$i].'R.<br /><br /> ';
            $totals = $totals + $sum[$i] ;        
            
           //}
        
        echo '<br /> Общая сумма= '.$totals.'&nbsp R. <br /><br />';
        session_start();
        $_SESSION['totals']=$totals;
        $_SESSION['b']=$b ['id'];
      }
      else {echo '<p><font size="3">В корзине пока пусто :-(</font></p>';}
       
    ?>
    </form>
    <br /><br /> 
    <form action = "totals.php" method = "POST">
        &nbsp   &nbsp
        <input type = "submit" name="Btn" value="Сделать заказ"  />

    </form>

    <form action = "index.php" method = "POST">
         &nbsp   &nbsp
         <input type = "submit" value="Вернуться обратно"  />
    </form>

    <form  action = "" method = "POST">
        &nbsp   &nbsp
        <input type ="submit" onclick="reset()" value="Очистить корзину"  />
    </form>


<!--<p class="infopost"><span class="date"></span> <a href="#"></a> &nbsp;&nbsp;&bull;&nbsp;&nbsp; <a href="#"></a>, <a href="#"></a> <a href="#" class="com"><span></span></a></p>-->
          <div class="clr"></div>          
</div>
          <!--<div class="clr"></div>-->
        </div>
        <!--<p class="pages"><small></small> <span></span> <a href="#"></a> <a href="#">&raquo;</a></p>-->
      </div>
     


   
       
        </ul>
        <div class="pxs_thumbnails_holder">       
       <div class="menu_bot">
         <div class="light_bot"></div>
		
        <ul font size="5" color="red" face="Segoe Script" class="pxs_thumbnails navigatable" style="position: absolute; left: 288px; display: block;">
         
          <li >
		  <font size="5" color="red" face="Segoe Script" font>
            <a >Акции</a></font><div style="opacity: 0; left: -21px; bottom: 55px; display: none;"><img src="images/space.gif" alt="Second Image"></div>
            </font>
            <div>
             <ul>
               <li class="first"><p>Скидка на очки виртуальной реальности BURO</p></li>
			  
               <li><form action="buro.php"><input type="submit" value="BURO " />
               
             
             </ul>
             
            </div>
    
    </div>
        </div>   
    </div>
 </div> 
</div>
</div>
</body>
</html>
