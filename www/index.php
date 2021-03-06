<?php
	$is_local = true; /*"localhost" == $_SERVER['HTTP_HOST'];
	
	define( 'DOLL_VERSION', 20000 );
	require_once('config.php');
	require_once('controller/db.php');	
	require_once('controller/forum/smf.php');
	require_once('model/class.user.php');
	require_once('model/class.character.php');	
	require_once('util/misc.php');
	require_once('view/json.php');
	
	// 1. Auth - see who is coming
	User::init($member);
*/	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="page.css?180306">
<!--[if IE]><link rel="stylesheet" type="text/css" href="page_ie.css?180306" /><![endif]-->

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sphere-K2 - Кукла 2 для игры "Сфера"</title>
</head>
<?php 	
	if ( $is_local ) 
	echo '<script src="db.js"></script>
  <script src="js.js"></script>';
	else
	echo '<script src="d.js"></script>
  <script src="q.js"></script>
  <script src="o.js"></script>';
?>

<body>
	<div id="rootdiv" class="state_dressup">
    <div id="header">
    	<div id="userinfo" class="left-side">
      	Привет, Гость! <br />
        Регистрация пока не работает, сохранить персонажей нельзя :(
      </div>
	    <h2>Кукла 2, онлайн &alpha;-версия</h2>
    </div>
      <div id="contents"> 
        <div class="left-side">
          <div id="characterHeader">
            <div class="characterOptions"><div id="charMenu">/* Меню */</div>
					</div>
            <span id="characterName">Новая Кукла</span>
            <input id="editCharacterName" type="text" maxlength="18" />
            
          	<div id="panelChangeLevel">
               <div class="backlayer"></div>
              <input id="editCharacterTitle" type="text" maxlength="2" />
              <select id="selectGreatTitle">
                <option value="1">(обычный)</option>
                <option value="2">великий</option>
                <option value="3">величайший</option>
                <option value="4">величайший(2)</option>
              </select>
              <input id="editCharacterDegree" type="text" maxlength="2" />   
              <select id="selectGreatDegree">
                <option value="1">(обычный)</option>
                <option value="2">великий</option>
                <option value="3">величайший</option>
                <option value="4">величайший(2)</option>
              </select>
              <button id="editCharacterDone">OK</button>
            </div>                      
          </div>
          
          <div class="doll">
            <div id="doll-slots">
              <!-- weapon -->
              <div id="s0" class="slot weapon e1a r2a"></div>
              <!-- <div id="s-1" class="weapon-mut e1a r2a"></div>  -->
              <!-- armor pieces -->
              <div id="s1" class="slot head c2 r1"></div>
              <div id="s2" class="slot neck c2 r2"></div>
              <div id="s3" class="slot chest c2 r3"></div>
              <div id="s4" class="slot waist c2 r4"></div>
              <div id="s5" class="slot legs c2 r5"></div>    
              <div id="s6" class="slot feet c2 r6"></div>  
              <div id="s7" class="slot ring c1 r5a"></div>                                                    
              <div id="s8" class="slot ring c1 r6a"></div>  
              <div id="s9" class="slot ring c3 r5a"></div>  
              <div id="s10" class="slot ring c3 r6a"></div>  
              <div id="s11" class="slot brace c1 r4a"></div>  
              <div id="s12" class="slot brace c3 r4a"></div>   
              <div id="s13" class="slot gloves c1 r3a"></div>   
              <div id="s14" class="slot shield c3 r3a"></div>
              <!-- spec -->
              <div id="s15" class="slot spec e2a r2a"></div>  
              <!-- muts -->                                      
              <div id="s29" class="slot mut mu1 e1"></div>                                                    
              <div id="s28" class="slot mut mu2 e2"></div>  
              <div id="s27" class="slot mut mu3 e1"></div>                                                    
              <div id="s26" class="slot mut mu4 e2"></div>                      
              <div id="s25" class="slot mut mu5 e1"></div>                                                    
              <div id="s24" class="slot mut mu6 e2"></div>   
              <div id="s23" class="slot mut mu7 e1"></div>                                                    
              <div id="s22" class="slot mut mu8 e2"></div>                       
              <div id="s21" class="slot mut mu9 e1"></div>                                                    
              <div id="s20" class="slot mut mu10 e2"></div>                         
              <!-- crystals -->
              <div id="s16" class="slot crys mu9 rb"></div>                                                    
              <div id="s17" class="slot crys mu7 rb"></div>  
              <div id="s18" class="slot crys mu5 rb"></div>  
              <div id="s19" class="slot crys mu3 rb"></div>  
  
              <div id="characterTitle" class="level"></div>
              <div id="characterDegree" class="level"></div>            
            </div>
  
            
          </div> 
          <!-- /div.doll -->
          <div id="stats">
          	<div id="torba">
            	<div class="torba-caption">Малая торба</div>
              <div id="gt-total">100</div>
	            <div id="s30" class="slot"></div>
	            <div id="s31" class="slot"></div>
	            <div id="s32" class="slot"></div>
	            <div id="s33" class="slot"></div>
	            <div id="s34" class="slot"></div>
	            <div id="s35" class="slot"></div>
	            <div id="s36" class="slot"></div>
            </div>
            <div class="titles">
              <div id="hp" class="s-value hp"></div>
              <div id="fa" class="s-value fa"></div>
              <div id="fd" class="s-value fd"></div> 
              <div id="f1" class="s-value f1"></div>
              <div id="f2" class="s-value f2"></div> 
              <div id="f3" class="s-value f3"></div>
              <div id="f4" class="s-value f4"></div> 
              <div id="f0" class="s-value f0"></div>               
            </div>
            <div class="degrees">
              <div id="mp" class="s-value mp"></div>            
              <div id="ma" class="s-value ma"></div>
              <div id="md" class="s-value md"></div> 
              <div id="m1" class="s-value m1"></div>
              <div id="m2" class="s-value m2"></div> 
              <div id="m3" class="s-value m3"></div>
              <div id="m4" class="s-value m4"></div> 
              <div id="m0" class="s-value m0"></div> 
            </div>
          </div>
        </div> <!-- div.character -->
        <div class="rightpart">
        	<div id="itemMenu">/* Меню создается скриптом*/</div>
          <div id="itemList">
          	<div id="prefixSelector"><br />В этой части экрана будут появляться префиксы<br />на выбор<div class="expressNews">Последние обновления:<br /><br />
<b>06.03.2018</b> - Проект возвращён к жизни<br /><br />
<b>11.10.2008</b> - Дабл-клик в пустом слоте выводит список вещей для этого слота.<br />При переходе между категориями с одинаковым префиксом, выбор префикса сохраняется<br /><br />
<b>25.08.2008</b> - Разделение ЭШ и обычного для специальностей (пока сделано только для мультов)<br /><br />
<b>22.08.2008</b> - Можно работать с несколькими куклами, переключаясь через меню персонажа<br /><br />
	</div>
</div>
            <div id="theList">
              <div class="hint">После того, как выберите из меню какую-нибудь категорию, здесь появятся предметы.<br /><br /><br />Чтобы одеть предмет, перетащите его на куклу персонажа или дабл-клик по нему.<br /><br /><br />Чтобы изменить характеристики, такие как земля, огонь, сила, выносливость, можно дважды кликнуть по числу характеристики<br /><br /><br />Чтобы изменить имя или уровень персонажа, дважды щелкните по имени или уровню</div>
              <div class="hint hint-feedback">Отзывы, предложения и замечания принимаются <a href="https://github.com/makhotkin/Sphere_K2">на github</a></div>
            </div>
          </div>
        </div>
      </div>
      <div id="bottomline">Проект "Кукла" &copy; 2004-2008, 2018 <a href="https://vk.com/max_makhotkin">Максим Махоткин</a>. <br />Изображения предметов и характеристик © <a href="http://www.nikitaonline.ru">Фабрика развлечений</a>, 2007-2008. Все права защищены <br/> Сайт не собирает и не обрабатывает никакие личные данные.</div>  </div>

<script>
	var api_url = "backend.php";
<?php 	
	if ( false && getUser()->isMember() ) 
	{
		echo "var auth = ".getUser()->getJsonAuth().";\n";
		DB::connect();		
		Character::getCharactersForUser(getUser()->getId());
		echo "var chars = ".Character::globalJSon().";";			
	}
	else
		echo 'var setup = { apiurl: "backend.php", auth: [0,"guest",3], chars: {} };';
?>	
	var Template = {
		slot: '<div class="inslot-icon"><div class="highlite"></div></div>',
		svalue: '<div class="total"></div><a class="down"></a><a class="up"></a><div class="req"></div><input class="base" type="text" maxlength="3"/>',
		tooltip: '<div class="item-name">$1</div>\n<div class="item-rank">$2</div><div class="item-id">$3</div><div class="item-contents">$4</div>',
		tooltipContents: '<div class="item-damage">$1</div><div class="item-reqs">$2</div><div class="item-bonus">$3</div><div class="item-misc">$4</div>',
		tooltipBonus: '<span class="bonus"><img src="i/$1.gif"><img src="i/$2.gif">$3</span>',
		tooltipBonusPen: '<span class="bonus"><img src="i/$1.gif"><img src="i/$2.gif">$3 ($4)</span>',
		tooltipReq: '<span class="req"><img src="i/$1.gif">$2</span>',
		tooltipReqOk: '<span class="req" style="background-image:url(i/$1.gif);">$2</span>', // $2 [$3]
		tooltipReqFail: '<span class="req fail" style="background-image:url(i/$1.gif);">$2 [$3]</span>',
		tooltipDoT: '<span class="bonus"><img src="i/$1.gif">$2 / 2 мин.</span>',
		tooltipDelay: '<span class="dmg"><img src="i/delay.gif">$1 сек.</span>',
		tooltipDescr: '<span class="descr">$1</span>',
		tooltipDamage: '<span class="dmg">$1</span>',
		tooltipDistance: '<span class="dmg"><img src="i/dist.gif"> $1 м</span>',
		tooltipDistanceAE: '<span class="dmg"><img src="i/dist.gif"> $1 [$2] м</span>',
		tooltipMutatorHrs: '<span class="bonus"><img src="g/$1.png">$2 ч.</span>',
		tooltipMutatorMins: '<span class="bonus"><img src="g/$1.png">$2 мин.</span>',
		tooltipMutatorPenalty: '<span class="descr">$1 %</span>',
		tooltipGt: '<span class="cost"><img src="i/price.gif"> $1 GT</span>',		
		menuItem: '<li id="m$2">$1</li>',
		menuItemIcon: '<li id="m$2" class="icon" style="background-image: url(i/$3.gif)">$1</li>',
		menuItemCheck: '<li id="m$2" class="check">$1</li>',
		menuItemParent: '<li id="m$2" class="has_submenu_$4">$1 $3</li>',
		menuSeparator: '<li class="separator">$1</li>',
		menuSeparatorIcon: '<li class="separator separator-icon">$1</li>',		
		menuGroup: '<ul>$1</ul>',
		menuRoot: '<ul class="jdmenu $2">$1</ul>',
		prefixSwitch: '<a class="prefix-sw" href="javascript:;" id="p$1">$2</a>',
		prefixSwitchDisable:  '<span class="prefix-sw" id="p$1">$2</span>',
		welcome: 'Добро пожаловать, <a href="/forums/index.php?action=profile;u=$1">$2</a><br/><a href="javascript:getRfc().listCharacters();" id="myperss">Мои персонажи</a> (в разработке)',
		welcome_stranger: 'Добро пожаловать, Гость',		
		use: function ( z ) {	/* console.log(z); */ z = this[z]; for( var i = 1, len = arguments.length; i < len; ++i ) { z = z.replace( "$"+i, arguments[i] ); } return z; },
		great: function( lvl ) { return lvl > 120 ? ( lvl > 180 ? 'ВВ' : 'В' ) : ( lvl > 60 ? 'в' : '' ); }
	};
	var FastTemplate = [
		function( z ) { z = this[z]; for( var i = 1, len = arguments.length; i < len; ++i ) { z[2*i-1] = arguments[i]; } return z.join(""); }, 
		['<div class="itemline ',0,'" style="left: ',0,'px; top: ',0,'px;"><div class="icon" gameid="',0,'" style="background-image: url(g/',0,'.png)"></div></div>']
	];
</script>

</body>
</html>
