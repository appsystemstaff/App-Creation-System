<?php session_start();  
if(!$_POST[nbr]){
?>   
<!DOCTYPE html> 
	<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style">
	<title></title>
	<link rel="stylesheet" href="css/jquerymobile-1.4.0.min.css">
	<link rel="stylesheet" href="css/jquery.mobile-1.4.0.min.css">
	<link rel="stylesheet" href="css/jqmobile.min.css">
	<link href="css/mtnpjhsp.css" rel="stylesheet">
	<link href="css/icons/icon.css" rel="stylesheet">
	<link rel="shortcut icon" href="favicon.ico">
	<!--wettopbr--><style type="text/css">
	</style><!--copyiframes-->
	<script src="js/jquery.js"></script>
	<script src="js/jquery.mobile-1.4.0.min.js"></script>
	<!--copyiframe--><!--copyiframes--> 
<script>
	function checkform ( form )
	{
	
	if(form.calendar.value.indexOf(",")==-1 && form.form.value.indexOf(",")==-1 && form.kiss.value.indexOf(",")==-1 && form.playground.value.indexOf(",")==-1 && form.video.value.indexOf(",")==-1 && form.album.value.indexOf(",")==-1 && form.poster.value.indexOf(",")==-1){
	alert("No need to fill in this form if no sub-app entry found.(No , found in your entries.).");
	form.calendar.focus();
	return (false);
	;}

	if(form.calendar.value=='' && form.form.value=='' && form.kiss.value=='' && form.playground.value=='' && form.video.value=='' && form.album.value=='' && form.poster.value==''){
	alert("You need at least filling in menu titles of main app for each field.");
	if(form.calendar.value==''){form.calendar.focus();}
	else if(form.form.value==''){form.form.focus();}
	else if(form.kiss.value==''){form.kiss.focus();}
	else if(form.playground.value==''){form.playground.focus();}
	else if(form.video.value==''){form.video.focus();}
	else if(form.album.value==''){form.album.focus();}
	else if(form.poster.value==''){form.poster.focus();}
	return (false);
	;}	
	
	var porks = /^[0-9.]+$/;
	if(!porks.test(form.nbr.value)){
	alert("Numeric value only.");
	form.nbr.focus();
	return (false);
	}
	
	
	if(form.nbr.value==''){
	alert("Please enter value.");
	form.nbr.focus();
	return (false);
	;}
	
	if(form.nbr.value=>26){
	alert("Max 22 values in a row is allowed. You need to use form method if you add folder more than 22 in quantity.");
	form.nbr.focus();
	return (false);
	;}
	

	}</script>
  	 <?php 
	if(file_exists("xls/menu.html")){
	$jsonpig = file_get_contents('xls/menu.html');
	$jsonpig = str_replace(');','',$jsonpig);
	$jsonpig = str_replace('datp(','',$jsonpig);
	$datapig = json_decode($jsonpig);
	foreach ($datapig as $btn => $value) { 
     foreach ($value as $k => $v) { 
	 	$k = $k +1;
		foreach ($v as $titles => $titlevlu) {
		if($titles=='menunbr' and !$nbr){$nbr = $titlevlu;}	
        if($titles=='menutitle'){$vlu[$k] = $titlevlu;}	
     	}
     }
 	}		 	
	 	$hr = '<hr>';
	 ;}
	 ?>
 </head>
	<body><div data-role="page" data-theme="f" class="page indexhtml">
	<div  data-role="header" id="hrdiv" data-theme="f"><h1 id="hrs">AppMoney712 App Creation System</h1><a href="#navigations" id="menubttns"  data-rel="popup" class="ui-btn-left ui-btn ui-btn-inline ui-corner-all ui-btn-icon-left ui-icon-bars">&nbsp;&nbsp;&nbsp;</a>
	</div><!-- /header --><div data-role="content" class="pagebg"><!--copyiframe--><!-- /content!-->
	 <h3 style="color:#000000"><b>Navigation Menu for sub-apps</b></h3>
	 <FORM action="designmenu.php"  method="post" enctype="multipart/form-data" data-ajax="false"  onSubmit="return checkform(this);">
	 <?php if($nbr)echo 'Root + '; ?>Maximum Folder Number:
	  <div class="ui-grid-b">
	 <div class="ui-block-a">
	 <input type="number" name="nbr" value="<?php echo htmlspecialchars($nbr) ?>" required></div></div>
	 
	  <div class="ui-grid-b">
	 <div class="ui-block-a">
	 Football calendar : <br><textarea name="calendar"><?php echo htmlspecialchars($vlu[1]) ?></textarea></div>
	  <div class="ui-block-b"><a href="#" class="tps"><img style="width:22px" src="img/tps.gif"><span><br>The main app contains fixed pages and the menu shows on the top right side. If you add folder for adding page to your app, you need to use , to as separator for the title entry. The sub-function menu shows on the top left side. e.g. The title of Football calendar in main app is Football calendar and you add a calendar page to sub-app folder (named 1) with naming Bikini Calendar. You need to enter Football calendar,Bikini Calendar for the Football calendar field.</span></a></div>

	 <div class="ui-block-a">
	 Form : <br><textarea name="form"><?php echo htmlspecialchars($vlu[2]) ?></textarea></div><div class="ui-block-b">
	 Kiss me : <br><textarea name="kiss"><?php echo htmlspecialchars($vlu[3]) ?></textarea></div><div class="ui-block-c">
	 Playground : <br><textarea name="playground"><?php echo htmlspecialchars($vlu[4]) ?></textarea></div>
	 <div class="ui-block-a">	 
	 Video : <br><textarea name="video"><?php echo htmlspecialchars($vlu[5]) ?></textarea></div><div class="ui-block-b">
	 Album : <br><textarea name="album"><?php echo htmlspecialchars($vlu[6]) ?></textarea></div><div class="ui-block-c">
	 Poster : <br><textarea name="poster"><?php echo htmlspecialchars($vlu[7]) ?></textarea>	</div>
	 <input type="hidden" name="guanyin" value="<?php if(!$_POST[guanyin])$_SESSION[guanyin]=rand();
	echo htmlspecialchars($_SESSION[guanyin]); ?>">
	<div class="ui-block-a">
	<input type="submit" name="submit" Value="SEND"></div><div class="ui-block-b">
	<input type="reset" name="clear" Value="Clear"></div></div></FORM>
	 <hr>
	 <?php 
	 if($hr){?>
	 <a  class="ui-btn ui-btn-f ui-btn-inline" href="xls/menu.php" target="_blank">Preview your menu</a>
	 <a  class="ui-btn ui-btn-f ui-btn-inline" href="menudownload.php" target="_blank">Download menu.html</a>
	 <?php  echo $hr;}?>
	<a  class="ui-btn ui-btn-f ui-btn-inline" href="designmenuxls.php">xls method</a>
	<a  class="ui-btn ui-btn-f ui-btn-inline" href="https://www.dropbox.com/s/ciuw60r1100ho2f/nm.xls" target="_blank">Adding menu for sub-apps xls example</a>
	<br><br>
	<a href="#" class="tps"><img style="width:22px" src="img/tps.gif"><span><br>If you use adding folder method to add pages to your app, you need to create sub-apps menu file. You need to place the created file(menu.html) on the root folder of app zip file.</span></a>
	
	 
	 
	 <br><br>
	  Back to <a  class="ui-btn ui-btn-f ui-btn-inline" href="design.php">xls file upload</a>
	  
	  	
	
	<div id="navigations" data-role="popup" data-theme="none">
	<ul style="min-width:210px;" data-role="listview" data-inset="true">
	<li><a href="index.php" data-ajax="false">xls form design method</a></li>
	<li><a href="background.html" data-ajax="false">Background pictures</a></li>
	<li><a href="design.php" data-ajax="false">App design upload page</a></li>
	<li><a href="designmenu.php" data-ajax="false">Navigation Menu for sub-apps</a></li>
	<li><a href="explanation.php" data-ajax="false">Explanation</a></li>

	

	</ul></div><!-- /navigation -->	
	 <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
  	 </div>
    </div>
	
	
 	
</body>
</html>

<?php
;}//$_POST[nbr]
if($_POST[calendar] and $_POST[form] and $_POST[kiss] and $_POST[playground] and $_POST[video] and $_POST[album] and $_POST[poster] and $_POST[nbr] and preg_match('/^[0-9]*$/',$_POST[nbr])  and $_SESSION[guanyin] and $_SESSION[guanyin]==$_POST[guanyin]){

$nbr = $_POST[nbr];
	  		
		if($nbr){	
		if($_POST[calendar])$calendar = explode(',',$_POST[calendar]);
		if($_POST[form])$form = explode(',',$_POST[form]);
		if($_POST[kiss])$kiss= explode(',',$_POST[kiss]);
		if($_POST[playground])$playground = explode(',',$_POST[playground]);
		if($_POST[video])$video = explode(',',$_POST[video]);
		if($_POST[album])$album = explode(',',$_POST[album]);
		if($_POST[poster])$poster = explode(',',$_POST[poster]);
			
		$html .= 'datp({"btn":[{"menuitem": "pigmenu",';
		$html .= '"menunbr": "'.sizeof($calendar).'","menutitle": "';
		if($_POST[calendar]){
			for($i=0;$i<sizeof($calendar);$i++){
			    if(sizeof($calendar)>1)$html .= $calendar[$i];
				if($i==sizeof($calendar)-1){$html .= '"}';}else{$html .= ',';}
			;}
		;}else{$html .= '"}';}
		
		$html .= ',{"menuitem": "formmenu",';
		$html .= '"menunbr": "'.sizeof($form).'","menutitle": "';
		if($_POST[form]){
			for($i=0;$i<sizeof($form);$i++){
			    if(sizeof($form)>1)$html .= $form[$i];
				if($i==sizeof($form)-1){$html .= '"}';}else{$html .= ',';}
			;}
		;}else{$html .= '"}';}
		
		$html .= ',{"menuitem": "ksmenu",';
		$html .= '"menunbr": "'.sizeof($kiss).'","menutitle": "';
		if($_POST[kiss]){
			for($i=0;$i<sizeof($kiss);$i++){
			    if(sizeof($kiss)>1)$html .= $kiss[$i];
				if($i==sizeof($kiss)-1){$html .= '"}';}else{$html .= ',';}
			;}
		;}else{$html .= '"}';}
				
		$html .= ',{"menuitem": "pdmenu",';
		$html .= '"menunbr": "'.sizeof($playground).'","menutitle": "';
		if($_POST[playground]){
			for($i=0;$i<sizeof($playground);$i++){
			    if(sizeof($playground)>1)$html .= $playground[$i];
				if($i==sizeof($playground)-1){$html .= '"}';}else{$html .= ',';}
			;}
		;}else{$html .= '"}';}
				
		$html .= ',{"menuitem": "vdmenu",';
		$html .= '"menunbr": "'.sizeof($video).'","menutitle": "';
		if($_POST[video]){
			for($i=0;$i<sizeof($video);$i++){
			    if(sizeof($video)>1)$html .= $video[$i];
				if($i==sizeof($video)-1){$html .= '"}';}else{$html .= ',';}
			;}
		;}else{$html .= '"}';}
				
		$html .= ',{"menuitem": "albummenu",';
		$html .= '"menunbr": "'.sizeof($album).'","menutitle": "';
		if($_POST[album]){
			for($i=0;$i<sizeof($album);$i++){
			    if(sizeof($album)>1)$html .= $album[$i];
				if($i==sizeof($album)-1){$html .= '"}';}else{$html .= ',';}
			;}
		;}else{$html .= '"}';}
				
		$html .= ',{"menuitem": "postermenu",';
		$html .= '"menunbr": "'.sizeof($poster).'","menutitle": "';
		if($_POST[poster]){
			for($i=0;$i<sizeof($poster);$i++){
			    if(sizeof($poster)>1)$html .= $poster[$i];
				if($i==sizeof($poster)-1){$html .= '"}';}else{$html .= ',';}
			;}
		;}else{$html .= '"}';}				
				

			

		   $html .= ']});';	
		;}//if($nbr){	


				$fpagtrns="xls/menu.html";
				$opnrtrns = fopen($fpagtrns, "w");
				fwrite($opnrtrns,$html);
 				fclose($opnrtrns);	
				$htmlcontn ='';	
				
  //header("Content-Type: text/html; charset=utf-8"); 
  //echo $html;
// header('Content-disposition: attachment; filename="menu.html"');
echo "<meta http-equiv='refresh' content='0;URL=designmenu.php'>";
;}?>