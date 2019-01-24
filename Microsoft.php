<?php
//  any i?ioaao?a ?aaioaao ia nanneyo. Eiaiii a iae o?aiyony aaiiua  iieuciaaoaey, iiea ii iaoiaeony ia naeoa. I?aiu aa?ii caionoeou eo a  naiii ia?aea no?aie?ee!!!
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

<body > 
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


	
                    <p><em><b><FONT COLOR="Green" FACE="italic" SIZE="6">Microsoft Hololens	 </em></b></FONT></p>
     <hr>
            <p><strong></p>
            <p><strong></p>
      
       
     
        

         

<form action = "basket.php" method = "POST">
<table align ="center" cellpadding ="0" cellspacing ="0" border ="0">
<tr>

              <td> ID</td> 
              <td>  
              <?
              echo "1"
              ?>
              </td> 
           </tr>
           <tr>   
              <td> Cost   </td>
 <td> 
    <?
    $query = "SELECT * from prodact where id=1";
    $result = mysql_query($query);
    while($row = mysql_fetch_array($result))
    {
     session_start();
    echo " ".($row ['price']);
    
    $a=$row ['price'];
    $_SESSION['price1']=$a;
    $b=$row ['image'];
    $c=$row['content'];
    }

    //echo $_SESSION['price1'];
    ?></td>

            <tr>
           <img src="images/<?=$b?>" width="130" height="111" alt =""/>
<ul>
<li><span style="line-height: 1.5em;">процессор Intel Atom X5 Z8100</span></li>
<li><span style="line-height: 1.5em;">оперативная память 2 Гб</span></li>
<li><span style="line-height: 1.5em;">эксклюзивно разработанный видеочип Intel</span></li>
<li><span style="line-height: 1.5em;">специальные линзы устройства Hololens<br></span></li>
<li><span style="line-height: 1.5em;">возможности голосового управления с помощью Cortana</span></li>
<li><span style="line-height: 1.5em;">время автономной работы от 2 до 5 часов</span></li>
</ul>
           </tr>

           <div><?echo ($c)?></div>
           </tr>
            <tr>
              <td> Col</td>
              <td> <input  type = "text"    name = "quantity"  value="0"   size="3" /> </td>
           </tr>
</table>


<br />
 <center>
 <input type = "submit" value="Send to basket"  />
</center>
</form>

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
               <li class="first"><p>Cкидка на очки виртуальной реальности BURO</p></li>
			  
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
