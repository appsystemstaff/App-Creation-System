<!DOCTYPE html> 
	<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style">
	<link rel="stylesheet" href="../template/css/jquerymobile-1.4.0.min.css">
	<link rel="stylesheet" href="../template/css/jquery.mobile-1.4.0.min.css">
	<link href="../css/mtnpjhsp.css" rel="stylesheet">

	
	<script src="../template/js/jquery.js"></script>
	<script src="../template/js/jquery.mobile-1.4.0.min.js"></script>
	<style type="text/css">
	tr,td{border: 1px solid #000000;}
	</style>
	<?php 
	if(file_exists("menu.html")){
	$jsonpig = file_get_contents('menu.html');
	$jsonpig = str_replace(');','',$jsonpig);
	$jsonpig = str_replace('datp(','',$jsonpig);
	$datapig = json_decode($jsonpig);
	foreach ($datapig as $btn => $value) { 
     foreach ($value as $k => $v) { 
	 	$k = $k +1;
		foreach ($v as $titles => $titlevlu){
        	if($titles=='menutitle' and $k==1){$calendar = explode(',',$titlevlu);}
			else  if($titles=='menutitle' and $k==2){$form = explode(',',$titlevlu);}
			else  if($titles=='menutitle' and $k==3){$kiss = explode(',',$titlevlu);}
			else  if($titles=='menutitle' and $k==4){$playground = explode(',',$titlevlu);}
			else  if($titles=='menutitle' and $k==5){$video = explode(',',$titlevlu);}
			else  if($titles=='menutitle' and $k==6){$album = explode(',',$titlevlu);}
			else  if($titles=='menutitle' and $k==7){$poster = explode(',',$titlevlu);}
     	}
     }
 	}		 	
	
	 ;}
	 ?>
	</head>
	<body><div data-role="page" class="page" data-theme="f">
	<div  data-role="header" id="hrdiv" data-theme="f">
	<a href="#navigations" id="menubttns"  data-rel="popup" class="ui-btn-left ui-btn ui-btn-inline ui-corner-all ui-btn-icon-left ui-icon-<?php 
	if($_GET[fn]==2){echo 'edit';}
	else if($_GET[fn]==3){echo 'heart';}
	else if($_GET[fn]==4){echo 'tag';}
	else if($_GET[fn]==5){echo 'video';}
	else if($_GET[fn]==6){echo 'camera';}
	else if($_GET[fn]==7){echo 'comment';}
	else{echo 'calendar';} ?>">&nbsp;&nbsp;&nbsp;</a><a href="#navigation"  id="menubttn"  data-rel="popup" class="ui-btn-right ui-btn ui-btn-inline ui-corner-all ui-btn-icon-right ui-icon-bars">&nbsp;&nbsp;&nbsp;</a><h1><?php 
	if($_GET[fn]==2){echo htmlspecialchars($form[0]);}
	else if($_GET[fn]==3){echo htmlspecialchars($kiss[0]);}
	else if($_GET[fn]==4){echo htmlspecialchars($playground[0]);}
	else if($_GET[fn]==5){echo htmlspecialchars($video[0]);}
	else if($_GET[fn]==6){echo htmlspecialchars($album[0]);}
	else if($_GET[fn]==7){echo htmlspecialchars($poster[0]);}
	else{echo htmlspecialchars($calendar[0]);} ?></h1>
	</div>
	<div data-role="content">
	<b style="color:#000000">Please click the above buttons on header section to preview your menu.</b><hr>
	<b style="color:#000000">The folder/file structure of app [without sub-app]:</b><br>
	<a href="#" class="tps"><img style="width:22px" src="../img/tps.gif"><span><img src="../img/appfile.png"/></span></a>After unzip the zip file you created by design form, you can find:<br>
	<table>
	<tr><td>in zip file</td><td>type</td><td>function</td><td>Furthur actions you need to take</td></tr>
	<tr><td>css</td><td>folder</td><td>css style sheet folder</td><td></td></tr>
	<tr><td>images</td><td>folder</td><td>page background image folder</td><td>Add your pictures to this folder.</td></tr>
	<tr><td>js</td><td>folder</td><td>page javascript file folder</td><td></td></tr>
	<tr><td>1.html</td><td>file</td><td>user agreement of your app</td><td>Add your user agreement content to this file by Windows wordpad or similar html editor software and save it as 1.html.</td></tr>
	<tr><td>album.html</td><td>file</td><td>App's album function page file</td><td></td></tr>
	<tr><td>index.html</td><td>file</td><td>App's calendar function page file(also as a first page)</td><td></td></tr>
	<tr><td>kiss.html</td><td>file</td><td>App's kiss(QR code) function page file</td><td></td></tr>
	<tr><td>playground.html</td><td>file</td><td>App's playground function page file</td><td></td></tr>
	<tr><td>poster.html</td><td>file</td><td>App's poster function page file</td><td></td></tr>
	<tr><td>video.html</td><td>file</td><td>App's video function page file</td><td></td></tr>
	</table>
	The above files and folders are in root folder of app. 
	<br><br>
	<b style="color:#000000">The sub-app folder named 1 in this app example:</b><br>
	<a href="#" class="tps"><img style="width:22px" src="../img/tps.gif"><span><img src="../img/appfile1.png"/></span></a> In this example, files of sub-app are placed to folder 1. 
	<table>
	<tr><td>in zip file</td><td>type</td><td>function</td><td>Furthur actions you need to take</td></tr>
	<tr><td>1</td><td>folder</td><td>Sub-app folder. In this example page, you can click the top left menu to show sub-app page title.</td><td></td></tr>

	<tr><td>menu.html</td><td>file</td><td>Create sub-app menu which is the top left menu in this example page.</td><td>You need to create menu file by <a href="../designmenu.php" class="ui-btn ui-btn-f ui-btn-inline">Navigation menu for sub-app</a>.</td></tr>
	</table>
	<br><br>
	<b style="color:#000000">The folder/file structure of sub-app folder 1 in this app example:</b><br>
	<a href="#" class="tps"><img style="width:22px" src="../img/tps.gif"><span><img src="../img/appfile2.png"/></span></a>
	
	<table>
	<tr><td>in zip file</td><td>type</td><td>function</td><td>Furthur actions you need to take</td></tr>
	<tr><td>images</td><td>folder</td><td>page background image folder</td><td>Add your pictures to this folder. The pictures are used for this sub-app's pages only.</td></tr>
	<tr><td>js</td><td>folder</td><td>Sub-App page javascript file folder</td><td></td></tr>
	<tr><td>index.html, album.html, kiss.html, playground.html, poster.html, video.html</td><td>file</td><td>Sub-App files. You can decide to add any function page. If you want to add more page of a function type, you need to add more sub-app folder.<br>
	For example, if you want to add 5 more pages of kiss function page, you need to create 5 sub-apps containing the kiss page, name the folder 1 to 5 and place them to the root folder of app. If you want to add 3 more playground pages, you need to include the playground page when creating the sub-app which the folders are 1 - 3.<br><a href="#" class="tps"><img style="width:22px" src="../img/tps.gif"><span><img src="../img/appsubfile.png"/></span></a></td><td></td></tr>
	</table>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	</div>
	
	
	<div id="navigations" data-role="popup" data-theme="none">
	<ul style="min-width:210px;" data-role="listview" id="uls" data-inset="true">
	<?php
	if($_GET[fn]==2){for($i=0;$i<sizeof($form);$i++){echo '<li><a href="#">'.htmlspecialchars($form[$i]).'</a></li>';};}
	else if($_GET[fn]==3){for($i=0;$i<sizeof($kiss);$i++){echo '<li><a href="#">'.htmlspecialchars($kiss[$i]).'</a></li>';};}
	else if($_GET[fn]==4){for($i=0;$i<sizeof($playground);$i++){echo '<li><a href="#">'.htmlspecialchars($playground[$i]).'</a></li>';};}
	else if($_GET[fn]==5){for($i=0;$i<sizeof($video);$i++){echo '<li><a href="#">'.htmlspecialchars($video[$i]).'</a></li>';};}
	else if($_GET[fn]==6){for($i=0;$i<sizeof($album);$i++){echo '<li><a href="#">'.htmlspecialchars($album[$i]).'</a></li>';};} 
	else if($_GET[fn]==7){for($i=0;$i<sizeof($poster);$i++){echo '<li><a href="#">'.htmlspecialchars($poster[$i]).'</a></li>';};} 
	else{for($i=0;$i<sizeof($calendar);$i++){echo '<li><a href="#">'.htmlspecialchars($calendar[$i]).'</a></li>';};}
	?>
	</ul></div><!-- /navigation -->
	
	
	<div id="navigation" data-role="popup" data-theme="none">
	<ul style="min-width:210px;" data-role="listview" data-inset="true">
	<li><a href="menu.php" data-ajax="false"><?php echo htmlspecialchars($calendar[0]);  ?></a></li>
	<li><a href="menu.php?fn=2" data-ajax="false"><?php echo htmlspecialchars($form[0]);  ?></a></li>
	<li><a href="menu.php?fn=3"  data-ajax="false"><?php echo htmlspecialchars($kiss[0]);  ?></a></li>
	<li><a href="menu.php?fn=4"  data-ajax="false"><?php echo htmlspecialchars($playground[0]);  ?></a></li>
	<li><a href="menu.php?fn=5"  data-ajax="false"><?php echo htmlspecialchars($video[0]);  ?></a></li>
	<li><a href="menu.php?fn=6"  data-ajax="false"><?php echo htmlspecialchars($album[0]);  ?></a></li>
	<li><a href="menu.php?fn=7"  data-ajax="false"><?php echo htmlspecialchars($poster[0]);  ?></a></li>
	</ul></div><!-- /navigation -->
	
	</div>
	</body>
	</html>
	