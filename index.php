﻿<?php
//  вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. Очень важно запустить их в  самом начале странички!!!
session_start();
include 'bd.php';
$_SESSION['n']= 0 ;

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta keywords="Виртуальная реальность,VR очки"/>
<meta description="Сайт о виртуальной реальности">
<title>Виртуальная реальность</title>
<link href="css/html5reset.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/slider.css" rel="stylesheet" type="text/css">
<link href="css/custom.css" rel="stylesheet" type="text/css">
<link href="css/highslide-custom.css" rel="stylesheet" type="text/css">
<link href="css/skin_red.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
<!--[if lte IE 7]><link href="css/old_ie.css" rel="stylesheet" type="text/css"><![endif]-->
<script src="js/jquery-1.5.min.js" type="text/javascript"></script>
<script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
<script type="text/javascript" src="js/PIE.js"></script>
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/Crimson.font.js" type="text/javascript"></script>
<script src="js/slider.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.mousewheel.min.js"></script>
<script type="text/javascript" src="js/jScrollHorizontalPane.min.js"></script>
<script type="text/javascript" src="js/jScrollPane.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="js/jScrollPane.css" />
<link rel="stylesheet" type="text/css" media="all" href="css/jScrollHorizontalPane.css" />
<script src="js/plugins/placeholder/jquery.placeholder.js" type="text/javascript"></script>
<script src="js/plugins/validator/jquery.validationEngine.js" type="text/javascript"></script>
<script src="js/plugins/validator/z.trans.en.js" type="text/javascript"></script>
<link href="js/plugins/validator/validationEngine.jquery.css" rel="stylesheet" type="text/css">
<script src="js/plugins/cycle/jquery.cycle.all.js" type="text/javascript"></script>
<script src="js/plugins/drag.js" type="text/javascript"></script>
<script src="js/jquery-css-transform.js" type="text/javascript"></script>
<script src="js/jquery-animate-css-rotate-scale.js" type="text/javascript"></script>
<script src="js/sc-slider.js" type="text/javascript"></script>
<script type="text/javascript" src="js/plugins/highslide/highslide-full.js"></script>
<script type="text/javascript" src="js/plugins/highslide/highslide.config.js" charset="utf-8"></script>
<link rel="stylesheet" type="text/css" href="js/plugins/highslide/highslide.css" />
<!--[if lt IE 7]>
<link rel="stylesheet" type="text/css" href="js/plugins/highslide/highslide-ie6.css" />
<![endif]-->

<script src="js/vt.js" type="text/javascript"></script>

</head>

<body> 
<div id="pxs_container" class="pxs_container"> 
  <div class="top-l">
    <div class="top-l-c"></div>
    <div class="logo"><a href="index.php"><img src="images/logo.png" width="143" height="129" alt="" /></a></div>
    <div class="light-t"></div>
  </div>
  <div class="top-ls">  <a href="vhod.php"><img src="images/lk.png" align=”right” width="100" height="100" alt="" /></a>
</div>
<div class="top-rs"><a href="basket.php"><img src="images/kor.png" align=”left” width="103" height="96" alt="" /></a></div>
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
          <div class="holder slider_normal">
            <img class="under" title="" alt="" style="background: green;" src="images/space.gif" width="980" height="450" />
            <div class="cycle">
               <img title =""  alt="Виртуальная реальность — это огромный дивный мир, в который мы не заглянули даже глазком. Хотя под определенной интерпретацией виртуальной реальности можно понимать Интернет, в действительности же ее потенциал гораздо больше. Это место, в которое человек может погрузиться целиком и полностью и найти там гораздо больше, чем в реальной жизни, а также не думая о том, чтобы отличать виртуальное от реального. На данный момент разными компания разрабатывается аппаратное обеспечение для полного выхода в виртуальную реальность: Omni, Oculus Rift, а также для создания дополненной реальности: Google Glass и другие. Вполне может так статься, что с развитием высоких технологий в этой сфере виртуальная реальность займет прочное место в нашей жизни и обеспечит людей огромным, практически безграничным пространством для ведения любых дел." style="background: url('images/slider/1.jpg') no-repeat 0 0" src="images/space.gif" width="980" height="450" /></title>
               <img title="Cab simulators" alt=" Кабинные симуляторы, порожденные автомобильными и авиатренажерами, в которых пользователь садится в кабину и видит перед собой в окне дисплей компьютера, на котором изображены некие ландшафты: если пользователь начнет вертеть управляющими ручками (рычагами или рулем), на дисплее будет соответственно изменяться ландшафт." style="background: url('images/slider/2.jpg') no-repeat 0 0" src="images/space.gif" width="980" height="450" />
               <img title="Augmented reality" alt=" Системы расширенной реальности, в которых изображение на экране головного дисплея прозрачно, так что пользователь видит одновременно и свое реальное окружение, и виртуальные объекты, генерируемые компьютером на экране." style="background: url('images/slider/3.jpg') no-repeat 0 0" src="images/space.gif" width="980" height="450" />
                <img title="Telepresence" alt=" Системы телеприсутствия  используют видеокамеры и микрофоны для погружения в виртуальное окружение пользователя, который либо сморит в дисплей шлема, соединенный с подвижной камерой на платформе, либо орудует джойстиком без шлема. Такого рода системы были установлены на космическом корабле Pathfinder, который в июле 1997 года приземлился на Марс - с их помощью ученые с Земли могли рассматривать и фотографировать поверхность планеты." style="background: url('images/slider/4.jpg') no-repeat 0 0" src="images/space.gif" width="980" height="450" />
                <img title="Desktop VR" alt="Настольные ВР-системы  представляют ВР с помощью больших мониторов или проекторов. Это хороший инструмент бизнес-презентаций, поскольку вместо шлема здесь нужен джойстик, мышь или шаровой манипулятор, при помощи которых пользователь может повернуть трехмерную модель на мониторе на все 360 градусов. С помощью такой системы легко показать модель будущего здания или проект корабля." style="background: url('images/slider/5.jpg') no-repeat 0 0" src="images/space.gif" width="980" height="450" />
                <img title="Head-mounted display" alt="Типичные шлемы виртуальной реальности (очки виртуальной реальности) используют один или два дисплея с линзами и, иногда, зеркалами. В качестве дисплеев могут использоваться миниатюрные электронно-лучевые приборы, ЖК-дисплеи, LCos-проекторы, органические светодиоды. Иногда могут использоваться несколько микродисплеев для увеличения поля зрения.

Часто шлемы делят на два класса по способности комбинировать искусственное изображение с реальным:

Большинство шлемов могут отображать лишь искусственное (виртуальное) изображение.
Некоторые шлемы позволяют комбинировать реальное и виртуальное изображение, реализуя дополненную реальность или смешанную реальность. Комбинирование может происходить за счёт полупрозрачных зеркал (Optical See-Through) или с помощью видеокамер, снимающих реальность, и использования этого видеопотока при генерации изображения (Video See-Through)." style="background: url('images/slider/6.jpg') no-repeat 0 0" src="images/space.gif" width="980" height="450" />

            </div>
            <div class="mask">       
            <div class="desc_outer_outer">   
             <div class="desc_outer">
               <div class="desc">
               <div class="desc-c">
                 <h2></h2>
                 <div class="desc_text"></div> 
                 </div>         
              </div>               
              </div>
            </div>
            <div class="nav_s">   
              <div class="nav_s_inner">  
              </div>
              <div class="slide_right"><span class="pxs_next"></span></div>  
              <div class="slide_left"><span class="pxs_prev"></span></div>
            </div> 
          </div> 
        </div>        

      </li>
      
      <li id="for_typo">
      
          <div class="holder post">
            <img style="" src="images/space.gif" width="980" height="450" alt="" />            
            <div class="mask">
              <div class="article">  
                <div class="shadow-t"></div>
                <div class="scroll-wrap">
                  <div class="scroll-pane">      
                    <h1>History</h1>
                                                   
                   <p>Слово виртуальный берет свои истоки от слова vir (лат. мужчина). Римляне образовали от него другое слово — virtus, которое использовали для обозначения совокупности всех превосходных качеств, присущих мужчинам (физическая сила, доблестное поведение, моральное достоинство). Такое же имя было у богини Виртус из древнеримской мифологии. Из латинского слово проникает в старофранцузский, а в XIII веке — из французского в английский. В английском слово virtual приобрело дополнительный оттенок «но не существующий в действительности»</p>
                   <div class="two-thirds">Понятие «виртуал» появилось в ранневизантийской философии IV века. Василий Великий в книге «Беседы на шестоднев» написал: «Некая реальность может породить другую реальность, законы существования которой не будут сво­диться к законам порождающей реальности»</div>                  
                   <div class="one">
				   
					<img src="images/slider/7.jpg" align="left" vspace="10" border="3" ">		 
                   
                   <div class="blockquote_bg"><blockquote><span class="quotes-l"><span class="quotes-r">Виртуальная реальность вовсе не так же «полна искушений», как реальная. В виртуальной их куда как больше. 
				  <li>Януш Леон Вишневский. "Одиночество в Сети"</span></span></blockquote></div>
                   <div class="clear"></div>
                   
                   <p>В 1970-х годах компьютерная графика полностью заменила видеосъемку, до того использовавшуюся в симуляторах. Графика была крайне примитивной, однако важным было то, что тренажеры (это были симуляторы полетов) работали в режиме реального времени. Первой реализацией виртуальной реальности считается «Кинокарта Аспена» (Aspen Movie Map), созданная в Массачусетском Технологическом Институте в 1977 году. Эта компьютерная программа симулировала прогулку по городу Аспен, штат Колорадо, давая возможность выбрать между разными способами отображения местности. Летний и зимний варианты были основаны на реальных фотографиях.

В середине 1980-х появились системы, в которых пользователь мог манипулировать с трехмерными объектами на экране благодаря их отклику на движения руки. В 1989 году Джарон Ланьер ввёл более популярный ныне термин «виртуальная реальность». В фантастической литературе поджанра киберпанк виртуальная реальность есть способ общения человека с «киберпространством» — некой средой взаимодействия людей и машин, создаваемой в компьютерных сетях.

В данный момент технологии виртуальной реальности широко применяются в различных областях человеческой деятельности: проектировании и дизайне, добыче полезных ископаемых, военных технологиях, строительстве, тренажерах и симуляторах, маркетинге и рекламе, индустрии развлечений и т. д.Объём рынка технологий виртуальной реальности оценивается в 15 млрд долларов в год.</p>
                   
                                     
        
      </li>
	  
	  </li>
      <li id="for_portfolio">
      
          <div class="holder post horiz">
            <img style="" src="images/space.gif" width="980" height="450" alt="" />            
            <div class="mask">
              <div class="article">
                <div class="shadow-l"></div>
                  <div id="scroll-box" class="scroll-box">
                    <div class="gallery">
                    
                      <div class="gallery_item">
                        <a href="images/usr/zoom-5.jpg" class="shadow_light" onclick="return hs.expand(this, config1 )"><img src="images/usr/p-1.jpg" alt="" />
                        <div class="i">
                          <div class="h-i"> 
                              <div class="gallery-cont">
                                <h1><center>Oculus Rift</h1>
                              </div>
                            </div>
                          </div>
                        </a>
                       </div>
                       

                       <div class="gallery_item">
                         <a href="images/usr/zoom-9.jpg" class="shadow_light" onclick="return hs.expand(this, config1 )"><img src="images/usr/p-2.jpg" alt="" />
                         <div class="i">
                           <div class="h-i">                             
                               <div class="gallery-cont">
                                 <h2><center>HTC</h2>
                               </div>
                             </div>
                           </div>
                         </a>            
                       </div>
                       
                       <div class="gallery_item">
                         <a href="images/usr/zoom-7.jpg" class="shadow_light" onclick="return hs.expand(this, config1 )"><img src="images/usr/p-3.jpg" alt="" />                         
                           <div class="i">
                           <div class="h-i">
                               <div class="gallery-cont">
                                 <h2> <center>Google</h2>
                               </div>
                             </div>
                           </div>
                         </a>
                       </div>
                       
                       
                       
                       
                       
                       
                       
                       <div class="gallery_item">
                         <a href="images/usr/zoom-11.jpg" class="shadow_light"><img src="images/usr/p-7.jpg" alt="" />
                         <div class="i">
                           <div class="h-i">                             
                               <div class="gallery-cont">
                                 <h2><center>Intel</h2>
                               </div>
                             </div>
                           </div>
                         </a>
                       </div>
                       
                       <div class="gallery_item">
                         <a href="images/usr/zoom-1.jpg" class="shadow_light"><img src="images/usr/p-8.jpg" alt="" />
                         <div class="i">
                           <div class="h-i">                             
                               <div class="gallery-cont">
                                 <h2><center>Samsung</h2>
                               </div>
                             </div>
                           </div>
                         </a>
                       </div>
                       
                       <div class="gallery_item">
                         <a href="images/usr/zoom-2.jpg" class="shadow_light"><img src="images/usr/p-9.jpg" alt="" />
                         <div class="i">
                          <div class="h-i">                             
                               <div class="gallery-cont">

 
 
                                 <h2><center> Microsoft</center></h2>
                               </div>
                             </div>
                           </div>
                         </a>
                       </div>
                       
                       
                       
                       
                       
                       
                                                   
                     </div>  
                   </div>
                   <div class="shadow-r"></div> 
                 </div>
               </div> 
             </div>
                   
        </li>
        <li id="for_blog">

          <div class="holder post">
            <img style="" src="images/space.gif" width="980" height="450" alt="" />            
            <div class="mask">
              <div class="Courier">
               
                  <div class="scroll-wrap">
			        <div class="scroll-pane"> 
                      <div class="posts">
                        <div class="post-item first">              
                          <div class="post-i">
                            <a href="images/slider/1.jpg" class="alignleft"><img src="images/usr/b-1.jpg" width="140" height="140" alt=""  />
                            <div class="m">
                              <i></i>
                            </div>
                            </a> 
                            <a class="inf"></a>
                          </div>
                          
                         <div class="info-block"> <div class="arrow"> </div>
                          </div>          
                          <p><font size="3">Обучение</font></p>
                          Виртуальная реальность применяется для обучения профессиям, где эксплуатация реальных устройств и механизмов связана с повышенным риском либо связана с большими затратами (пилот самолёта, машинист поезда, диспетчер, водитель, горноспасатель и т. п.).

Западный резервный университет Кейза дал согласие на внедрение технологии дополненной реальности от Microsoft в обучение студентов.
                          <div class="buttons">
                            
                          </div>
                        </div> 
                        <div class="post-item first">              
                          <div class="post-i">
                            <a href="#" class="alignleft"><img src="images/usr/b-2.jpg" width="140" height="140" alt="" />
                            <div class="m">
                              <i></i>
                            </div>
                            </a> 
                            <a class="inf"></a>
                          </div>             
                          
                         <div class="info-block"> <div class="arrow"> </div>
                            <a href="#" ><FONT COLOR="Green" FACE="Courier" SIZE="3">


</FONT></a>

                          </div>  
                          
                          <p><font size="3">Медицина</font></p>
                          Виртуальная реальность способствовала развитию медицины, ведь в таких условиях можно было спокойно обучать новых медиков, не опасаясь за здоровье пациента. В некоторых случаях виртуальную реальности использовали для проведения так сказать предварительной операции, когда врач делал операцию в виртуальном мире и смотрел за своими ошибками, чтобы потом устранить их на практике. Также развитие ВР привело к тому, что операцию стали проводить с помощью роботов.
                          <div class="buttons">
                            
                          </div>
                        </div> 
                        <div class="post-item">              
                          <div class="post-i">
                            <a href="#" class="alignleft"><img src="images/usr/b-3.jpg" width="140" height="140" alt="" />
                              <div class="m">
                                <i></i>
                              </div>
                            </a> 
                            <a class="inf"></a>
                          </div>          
                          
                         <div class="info-block"> <div class="arrow"> </div>
                            
</FONT></a>
                          </div>  
                          
                          <p><font size="3">Автомобилестроение</font></p>
                          Производители автомобилей тоже используют виртуальную реальность для создания прототипов новых

автомобилей, где они также тестируют свои образцы в разных условиях. Благодаря этому дизайнеры могут устранять выявившиеся недостатки автомобиля прямо на экране, не переделывая саму машину. Этот метод был значительно эффективнее всех других и менее дорогостоящим.
                          <div class="buttons">
                            
                          </div>
                        </div> 
                        <div class="post-item">              
                          <div class="post-i">
                            <a href="#" class="alignleft"><img src="images/usr/b-4.jpg" width="140" height="140" alt="" />
                              <div class="m">
                                <i></i>
                              </div>
                            </a> 
                            <a class="inf"></a>
                          </div>             
                          
                         <div class="info-block"> <div class="arrow"> </div>
                            
                          </div>  
                          
                           <p><font size="3">Сфера развлечений</font></p>
Сфера развлечений все больше обращается к мультимедийным технологиям, тем более что в мире давно экспериментируют с виртуальной реальностью. Виртуальные декорации — это панорамные мультиэкранные проекции виртуальных миров. Экраны воспринимаются зрителем как окна в другой мир. Располагать их можно по-разному. Всё зависит от возможностей площадки, желаний и возможностей заказчика. Виртуальные декорации могут не только заменять собой интерьер, но и дополнять его.                           <div class="buttons">
                            
                        
                          
                              
                          
                          
                         
                          
                          
                              
                     

          </div>
          </div>
          <div class="shadow-b"></div>
          </div>
          </div>
 
          </div>

        </li>
			


	  
        <li id="for_post">
         <div class="holder post">
            <img style="" src="images/space.gif" width="980" height="450" alt="" />            
            <div class="mask">
              <div class="article">  
                <div class="shadow-t"></div>
                <div class="scroll-wrap">
                  <div class="scroll-pane">      
                  <h1><span><righ>All</span> Products</righ></h1>
				  <hr>
                                                   
        <?
$prodact = get_prodact();
foreach ($prodact as $item):?>
<table align ="center" cellpadding ="0" cellspacing ="0" borden ="0">
<tr>
<td valign ="top">
<div><a href ="#"> <img src="images/<?=$item ['image']?>" width="130" height="111" alt =""/></a></div>
<div>
<div><a href ="<?=$item ['page']?>"><? echo ($item ['title'])?></a></div>
<div><?echo ($item ['price'].P)?></div>
</div>
</td>
</tr>
</table>
<?endforeach;?>



<!--<p class="infopost"><span class="date"></span> <a href="#"></a> &nbsp;&nbsp;&bull;&nbsp;&nbsp; <a href="#"></a>, <a href="#"></a> <a href="#" class="com"><span></span></a></p>-->

	  </li>
	   <li id="for_pos">
        
          <div class="holder post">

		 
                    


           
           
        
<!--<a href="#">-->
<?
$categories = cat();
foreach ($categories as $item):?>
<table    align ="center" cellpadding ="0" cellspacing ="0" >
<tr>
<td valign ="top">
<div>
<div><font size="10" color="red" face="Segoe Script" ><a href ="<?=$item ['Page_c']?>"><? echo ($item ['Name_tov'])?></a></font></div>
</div>
</td>
</tr>
</table>
<?endforeach;?>

            <!--<li><a href="#">Каталог товаров</a></li>
            <li><a href="#">Товар1</a></li>
            <li><a href="#">Товар 2</a></li>
            <li><a href="#">Товар 3</a></li>
            <li><a href="#">Товар 4</a></li>
          -->
                    
          
                                
                   
       <img src="images/vr.jpg" align="left" vspace="10" border="3" ">
		
        </li>
	
        <li id="for_contact">
        
          <div class="holder post">
            <img style="" src="images/space.gif" width="980" height="450" alt="" />            
            <div class="mask">
              <div class="article">
                <div class="panel"> 
                    <div class="contact"> 
                      <div class="contact-info">
                        <h1>Contact info:</h1>
                        <p><span>Tel.:</span> +7 (499) 677-55-92</p>
                        <p><span>E-mail:</span> 2ral.com</p>
                        <p><span>Adress:</span> Москва, м.Кантемировская (склад) 54</p>
                        <p><span>Skype:</span> SPB_Az</p>
                      </div>
                      <div class="social-ico">
                        <h1>Let's get social!</h1>
                        <p><a href=""><span class="facebook"></span>facebook.com/2ral.DreamTheme</a></p>
                        <p><a href=""><span class="twitter"></span>@premium_theme</a></p>
                        <p><a href=""><span class="flickr"></span>Dream_Theme</a></p>
                        <p><a href=""><span class="tumbler"></span>dream-theme.tumblr.com</a></p>
                      </div>
                      <div class="map">
                        <h1>How to find us:</h1>
                        <div class="map-y">
                          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2256.9471758333034!2d37.54384601537524!3d55.5507057150288!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x414aadb1bc661193%3A0xdf8b721f96675946!2z0J_QntCb0K_QndCrLTU0!5e0!3m2!1sru!2sru!4v1448462259610" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                          <br /><i></i>
                        </div>
                      </div>
                    </div>
                    <div class="form">
                      <h1>Have something to say?</h1>
                        <form class="uniform" action="php/send.php" method="post">
                          <p>Your name*</p>
                          <div class="inp-r"><div class="i-h"><input id="name" name="name" type="text" placeholder="" class="inp-c validate[required]" /></div></div>
                          <p>E-mail*</p>
                          <div class="inp-r"><div class="i-h"><input id="email" name="email" type="text" placeholder="" class="validate[required] inp-c" /></div></div>
                          <p>Phone number</p>
                          <div class="inp-r"><div class="i-h"><input id="phone" name="phone" type="text" placeholder="" class="inp-c" /></div></div>
                          <p>Message*</p>
                          <div class="tex-r"><div class="t-h"><textarea id="message" name="message" placeholder="" class="validate[required] textar"></textarea></div></div>
                         
                          <a href="#" class="button" title="Add comment"><span>Send message<i class="submit"></i></span></a>
                          <a href="#" class="do-clear">Reset</a>
                        </form>
                      </div>          
                    </div>
                  </div> 
                  </div>
                </div>
        
        </li>
	
		
      </ul>      
     
     <div class="pxs_thumbnails_holder">       
       <div class="menu_bot">
         <div class="light_bot"></div>
        <ul class="pxs_thumbnails navigatable">
          <li> <font size="5" color="red" face="Segoe Script"><a class="act" href="index.php" id="link_home">Главная</a></li></font>
          <li><font size="5" color="red" face="Segoe Script">
            <a href="typo.html" id="link_typo">История</a><div><img src="images/space.gif" alt="Second Image" /></font></div>
            
          <div>
             <ul>
			   
               <li class="first"><p>Виртуальная реальность в книгах</p></li>
			   
			   
               <li><form action="page.php"><input type="submit" value="Книга 1" />
                <li><input type="button" value="Книга 2" onclick="location.href='page2.html';" />
               <li class="last"><input type="button" value="Книга 3" onclick="location.href='page3.php';" />
             </ul>
             <i></i>
            </div>
          </li>
		  
          <li> <font size="5" color="red" face="Segoe Script">
            <a href="gallery.html" id="link_portfolio">Разработчики</a><div><img src="images/space.gif" alt="Third Image" /></font></div>
          </li>
          <li> <font size="5" color="red" face="Segoe Script">
            <a href="blog.html" id="link_blog">Применения</a><div><img src="images/space.gif" alt="Third Image" /></font></div>
          </li>
		 
          <li> <font size="5" color="red" face="Segoe Script">
            <a href="post.html" id="link_post">Товары</a></font>
          </li>
		    <li> <font size="5" color="red" face="Segoe Script">
            <a href="pos.html" id="link_pos">Категории товаров</a></font>
          </li>
          <li><font size="5" color="red" face="Segoe Script">
            <a href="contacts.html" id="link_contact">Контакты</a><div><img src="images/space.gif" alt="Third Image" /></font></div>
          </li>
	
        </ul>
        </div>   
    </div>
 </div> 
</div>
</div> 
</div>
</body>
</html>
