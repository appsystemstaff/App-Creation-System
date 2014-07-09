<?php session_start();  
?>   
<?php
if($_SESSION[guanyin]){
require_once 'excel_reader2.php';	
		$ftexls="xls/".$_SESSION[guanyin].'trn.xls';
		$ftdata = new Spreadsheet_Excel_Reader("$ftexls");
		$ftdata->setOutputEncoding('utf-8');
		
		$author = htmlspecialchars($ftdata->val(1,'B'));
		$email = htmlspecialchars($ftdata->val(2,'B'));$appdir = str_replace('.','',$appdir);$appdir = str_replace('@','',$appdir);
		$website = htmlspecialchars($ftdata->val(3,'B'));
		$appn = htmlspecialchars($ftdata->val(4,'B'));
		$des = htmlspecialchars($ftdata->val(5,'B'));
		$theme = strtolower(htmlspecialchars($ftdata->val(6,'B')));$themehr = strtolower(htmlspecialchars($ftdata->val(6,'D')));
		
		$htitle = htmlspecialchars($ftdata->val(7,'B'));
		$htext = htmlspecialchars($ftdata->val(8,'B'));
		$htext = str_replace('&lt;/a&gt;','</a>',$htext);$ftext = str_replace('&lt;a','<a',$htext);
		$htext = str_replace('&gt;','>',$htext);$htext = str_replace('”',"'",$htext);$htext = str_replace('"',"'",$htext);
		$ftitle = htmlspecialchars($ftdata->val(9,'B'));
		$ftext = htmlspecialchars($ftdata->val(10,'B'));
		$ftext = str_replace('&lt;/a&gt;','</a>',$ftext);$ftext = str_replace('&lt;a','<a',$ftext);
		$ftext = str_replace('&gt;','>',$ftext);$ftext = str_replace('”',"'",$ftext);$ftext = str_replace('"',"'",$ftext);
		
		$formtitle = htmlspecialchars($ftdata->val(11,'B'));
		$form1 = htmlspecialchars($ftdata->val(12,'B'));
		$form2 = htmlspecialchars($ftdata->val(13,'B'));
		$form3 = htmlspecialchars($ftdata->val(14,'B'));
		$form4 = htmlspecialchars($ftdata->val(15,'B'));
		$form5 = htmlspecialchars($ftdata->val(16,'B'));
		$formremark = htmlspecialchars($ftdata->val(17,'B'));
		$formremark = str_replace('&lt;/a&gt;','</a>',$formremark);$formremark = str_replace('&lt;a','<a',$formremark);
		$formremark = str_replace('&gt;','>',$formremark);$formremark = str_replace('”',"'",$formremark);
		$formremark = str_replace('"',"'",$formremark);
		$formail = htmlspecialchars($ftdata->val(18,'B'));
		$infweb = htmlspecialchars($ftdata->val(19,'B'));
		if(strpos($infweb,'http')===false)$infweb = 'http://'.$infweb;
		
		$like = htmlspecialchars($ftdata->val(20,'B'));
		$tl = strtolower(htmlspecialchars($ftdata->val(21,'B')));
		//if($tl and strpos($tl,'https://www.facebook.com/')===false)$tl = 'https://www.facebook.com/'.$tl;
		if($tl and strpos($tl,'http')===false)$tl = 'http://'.$tl;
				
		$appr = htmlspecialchars($ftdata->val(22,'B'));
				
		$calendar = htmlspecialchars($ftdata->val(23,'B'));
		$form = htmlspecialchars($ftdata->val(24,'B'));
		$kiss = htmlspecialchars($ftdata->val(25,'B'));
		$playground = htmlspecialchars($ftdata->val(26,'B'));
		$video = htmlspecialchars($ftdata->val(27,'B'));
		$album = htmlspecialchars($ftdata->val(28,'B'));
		$poster = htmlspecialchars($ftdata->val(29,'B'));
		
		$wkday = htmlspecialchars($ftdata->val(30,'B'));
		$agreepig = htmlspecialchars($ftdata->val(31,'B'));
		$agreeapp = htmlspecialchars($ftdata->val(32,'B'));
		$folder = htmlspecialchars($ftdata->val(33,'B'));
		
		if($folder and !preg_match('/^[0-9]*$/', $folder))$folder = '';
		if($folder){$folderdir = '../';$_SESSION[folder]=$folder;
			if($calendar)$_SESSION[htmls] = 'c';
			if($form)$_SESSION[htmls] .= 'f';
			if($kiss)$_SESSION[htmls] .= 'k';	
			if($playground)$_SESSION[htmls] .= 'g';	
			if($video)$_SESSION[htmls] .= 'v';
			if($album)$_SESSION[htmls] .= 'a';
			if($poster)$_SESSION[htmls] .= 'p';
			if(!$calendar and !$form and !$kiss and !$playground and !$video and !$album and !$poster)$ndata = 1;
		}else{$_SESSION[folder]='';}

		if((!$calendar and !$folder) or $ndata)$calendar = 'Football calendar';
		if((!$form and !$folder) or $ndata)$form = 'Form';
		if((!$kiss and !$folder) or $ndata)$kiss = 'Kiss me';
		if((!$playground and !$folder) or $ndata)$playground = 'Playground';
		if((!$video and !$folder) or $ndata)$video = 'Video';
		if((!$album and !$folder) or $ndata)$album = 'Album';
		if((!$poster and !$folder) or $ndata)$poster = 'Poster';
		if(!$appr)$appr = ' ';

		
if(!preg_match('/^[a-z]*$/', $theme) or !$theme or strlen($theme)>1)$theme = 'b';
if(!$_SESSION[folder] or ($_SESSION[folder]  and  $form)){$htmlcontn = '<!DOCTYPE html> 
	<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style">
	<link rel="stylesheet" href="'.$folderdir.'css/jquerymobile-1.4.0.min.css">
	<link rel="stylesheet" href="'.$folderdir.'css/jquery.mobile-1.4.0.min.css">
	<link rel="stylesheet" href="'.$folderdir.'css/icons/style.css">
	<style type="text/css">.ui-page{background-image:url(images/formbackground.gif);background-size:100% ;background-repeat: no-repeat; background-attachment:fixed;}';
	if($theme=='y')$htmlcontn .= '
	#form5{background:rgba(255, 255, 255, 0.2);}';
	$htmlcontn .= '</style>
	<script src="'.$folderdir.'js/jquery.js"></script>
	<script src="'.$folderdir.'js/jquery.mobile-1.4.0.min.js"></script>
	<script src="'.$folderdir.'js/fastclick.js"></script>
	<script>$(\'input[type=text], textarea\').val(\'\');
	$(function(){FastClick.attach(document.body);});</script>
	</head>
	<body><div data-role="page"  class="page" data-theme="'.$theme.'">
	<div  data-role="header" data-theme="'.$themehr.'">
	<a href="#navigations" id="menubttns"  data-rel="popup" class="ui-btn-left ui-btn ui-btn-inline ui-corner-all ui-btn-icon-left ui-icon-edit">&nbsp;&nbsp;&nbsp;</a>
	<a href="#navigation" id="menubttn"  data-rel="popup" class="ui-btn-right ui-btn ui-btn-inline ui-corner-all ui-btn-icon-right ui-icon-bars">&nbsp;&nbsp;&nbsp;</a><h1 id="formhr">'.$form.'</h1>
	</div>
	<div data-role="content"><form id="form" name="form">';
	if($formtitle)$htmlcontn .= '<h3>'.$formtitle.'</h3><BR>';
	if($form1)$htmlcontn .= $form1.'<input type="text" id="form1" name="form1" required>';
	if($form2)$htmlcontn .= $form2.'<input type="text" id="form2" name="form2">';
	if($form3)$htmlcontn .= $form3.'<input type="text" id="form3" name="form3">';
	if($form4)$htmlcontn .= $form4.'<input type="text" id="form4" name="form4">';
	if($form5)$htmlcontn .= $form5.'<textarea id="form5" name="form5"></textarea>';
	if($form1 or $form2 or $form3 or $form4 or $form5)$htmlcontn .= '<input type="submit" id="submit" Value="Send">';
	if($formremark)$htmlcontn .= '<p>'.$formremark.'</p>';
	$htmlcontn .= '</form><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></div>
	<div id="navigations" data-role="popup" data-theme="none">
	<ul style="min-width:210px;" data-role="listview" id="uls" data-inset="true">
	</ul></div><!-- /navigation -->
	
	<div id="navigation" data-role="popup" data-theme="none">
<ul style="min-width:210px;" data-role="listview" id="ul" data-inset="true">
<li><a href="'.$folderdir.'index.html"  data-transition="flip" class="nvmenu" style="background-image:url(images/indexhtml.gif);background-size:100% 100%;background-repeat: no-repeat;" id="m1">'.$calendar.'</a></li>
	<li><a href="'.$folderdir.'form.html"  data-transition="flip" class="nvmenu" style="background-image:url(images/formhtml.gif);background-size:100% 100%;background-repeat: no-repeat;" data-ajax="false" id="m2">'.$form.'</a></li>
	<li><a href="'.$folderdir.'kiss.html"  data-transition="flip" class="nvmenu" style="background-image:url(images/kisshtml.gif);background-size:100% 100%;background-repeat: no-repeat;" id="m3">'.$kiss.'</a></li>
	<li><a href="'.$folderdir.'playground.html"  data-transition="flip" class="nvmenu" style="background-image:url(images/playgroundhtml.gif);background-size:100% 100%;background-repeat: no-repeat;" id="m4">'.$playground.'</a></li>
	<li><a href="'.$folderdir.'video.html"  data-transition="flip" class="nvmenu" style="background-image:url(images/videohtml.gif);background-size:100% 100%;background-repeat: no-repeat;" id="m5">'.$video.'</a></li>
	<li><a href="'.$folderdir.'album.html"  data-transition="flip" class="nvmenu" style="background-image:url(images/albumhtml.gif);background-size:100% 100%;background-repeat: no-repeat;" id="m6">'.$album.'</a></li>
	<li><a href="'.$folderdir.'poster.html"  data-transition="flip" class="nvmenu" style="background-image:url(images/posterhtml.gif);background-size:100% 100%;background-repeat: no-repeat;" id="m7">'.$poster.'</a></li>
	</ul></div><!-- /navigation -->
	</div></body>
	</html>';
	if($form1 or $form2 or $form3 or $form4 or $form5){
	
	
	
	//if(trim($appdir)=='www.appmoney712.net'){
	//if(date("n")==11){$ndate = '1';}else if(date("n")==12){$ndate = '2';}else{$ndate = date("n");}
	//$htmlcontn .= '<script>
	//var ins = new Date();var insp = ins.getMonth()+1; 
	//if(insp == '.$ndate.'){localStorage.setItem("infhrefs",localStorage.getItem("infhref"));}
	//else{localStorage.setItem("infhrefs","appmoney.space3.info");}
	//</ script>';}
	$htmlcontn .= '<script>
	$("#form").submit(function() {';
	
	if(trim($appdir)=='www.appmoney712.net'){$infhref='infhrefs';}else{$infhref='infhref';}		
	$htmlcontn .= 'var infhref= localStorage.getItem("'.$infhref.'");
		if(infhref.indexOf("http") == -1){infhref= "http://"+infhref;}		
	if(infhref.substr(infhref.length - 1)=="/"){var postphp = "'.$appdir.'post.php";}else{var postphp = "/'.$appdir.'post.php";}
		var url = infhref+postphp;
		
	var order = $("form").serialize();
	$.ajax({
    type: "POST",
    url: url,
    data: { \'order\': order },
    cache: false,
    success:function(data){
                alert("Sent");			
				window.location = "form.html";
            },
            error: function(){
				window.location = "form.html";
            }
    });
});

$(\'.nvmenu\').click(function() {
		var nvmenuhtml = $(this).attr(\'href\');
		$(document).on({"pageshow": function () {window.location = nvmenuhtml.replace(\'../\',\'\');}}, \'.page\');
;})

var albummenu=\'\';var slt=\'\';
if(localStorage.getItem("formmenu"))albummenu =  $.parseJSON(localStorage.getItem("formmenu"));
var menusdir=\'\';var menushtml=\'\';var pigsmenu=\'\';
for(var j=0;j < albummenu.length;j++){
if(j)menusdir = j+"/";
if($("#formhr").text()==albummenu[j]){slt=\'data-icon="check"\';}else{slt=\'\';}
if(albummenu[j])menushtml += \'<li \'+slt+\'><a href="';if($folderdir)$htmlcontn .= '../';$htmlcontn .= '\'+menusdir+\'form.html" data-ajax="false" style="background-image:url(\'+menusdir+\'images/albumhtml.gif);background-size:100% 100%;background-repeat: no-repeat;">\'+albummenu[j]+\'</a></li>\';
;}

if(menushtml){$(\'#uls\').html(menushtml);$(\'#uls\').listview(\'refresh\');}
else{$(\'#menubttns\').css(\'display\',\'none\');}
	</script>';}
	
				$fpagtrns="app/".$_SESSION[guanyin]."/form.html";
				$opnrtrns = fopen($fpagtrns, "w");
				fwrite($opnrtrns,$htmlcontn);
 				fclose($opnrtrns);		
				$htmlcontn='';
				;}//if(!$_SESSION[folder] or ($_SESSION[folder]  and  $form))

$pgver = '1225'.str_replace(' ','',$appn);

if(!$_SESSION[folder]){$htmlcontn = '<?xml version="1.0" encoding="UTF-8"?>
    <widget xmlns = "http://www.w3.org/ns/widgets"
        xmlns:gap = "http://phonegap.com/ns/1.0"
        id        = "1"
        versionCode="'.htmlspecialchars($pgver).'" 
        version   = "1">
    <name>'.$appn.'</name>
    <description>
        '.$des.' 
    </description>
    <author href="'.$website.'" email="'.$email.'">
       '.$author.' 
    </author>
	<gap:platform name="android"/>
	<gap:platform name="ios"/>
	<icon src="icon.png" />
<preference name="permissions" value="none"/>
<preference name="Orientation" value="portrait" />
<access origin="youtube.com" subdomains="true"/>
<access origin="weibo.com" subdomains="true"/>
<access origin="qq.com" subdomains="true"/>
<access origin="facebook.com" subdomains="true"/>
<access origin="google.com" subdomains="true"/>
<access origin="appmoney712.net" subdomains="true"/>';
if($infweb)$htmlcontn .= '<access origin="'.$infweb.'" subdomains="true"/>';
$htmlcontn .= '
<gap:plugin name="org.apache.cordova.inappbrowser"/>
</widget>';

				$fpagtrns="app/".$_SESSION[guanyin]."/config.xml";
				$opnrtrns = fopen($fpagtrns, "w");
				fwrite($opnrtrns,$htmlcontn);
 				fclose($opnrtrns);	
				$htmlcontn ='';	}
				

if(!preg_match('/^[a-z]*$/', $themehr) or !$themehr or strlen($themehr)>1)$themehr = $theme;
if($folderdir){$htmlcontn .= 'localStorage.setItem("pigsmenudir","1");';}else{$htmlcontn .= 'localStorage.setItem("pigsmenudir","");';}
$htmlcontn .= '$(".page").attr("data-theme","'.$theme.'");$("#hrdiv").attr("data-theme","'.$themehr.'");';
if($calendar)$htmlcontn .= '$("#hrs").html("'.$calendar.'");';
if($htitle)$htmlcontn .= '$("#htitle").html("'.$htitle.'");';
if($htext)$htmlcontn .= '$("#htext").html("'.$htext.'");';
if($ftitle)$htmlcontn .= '$("#ftitle").html("'.$ftitle.'");';
if($ftext)$htmlcontn .= '$("#ftext").html("'.$ftext.'");';
if(!$folder)$htmlcontn .= '$("#m1").html("'.$calendar.'");$("#m2").html("'.$form.'");$("#m3").html("'.$kiss.'");$("#m4").html("'.$playground.'");$("#m5").html("'.$video.'");$("#m6").html("'.$album.'");$("#m7").html("'.$poster.'");';
$htmlcontn .= '$("#videohr").html("'.$video.'");$("#kisshr").html("'.$kiss.'");$("#playbhr").html("'.$playground.'");
$("#albumhr").html("'.$album.'");$("#posterhr").html("'.$poster.'");
$("#jsqr").html("'.$appn.'");$("#appr").html("'.$appr.'");
$("#google").attr("href","https://play.google.com/store/search?q='.str_replace(' ','%20',$appn).'&c=apps");
$("#facebk").attr("href","'.str_replace('..','',$tl).'");
if(!localStorage.getItem("infhref"))localStorage.setItem("infhref","'.$infweb.'");
if(!localStorage.getItem("webdir"))localStorage.setItem("webdir","'.$appdir.'");';

if(!$_SESSION[folder])$htmlcontn .= 'localStorage["nagvigationmenu"]; 
if(!localStorage.getItem("nagvigationmenu")){

var url = "menu.html";
		$.ajax({
   		type: "GET",
    	url: url,
    	async: false,
    	jsonpCallback: "datp",
    	contentType: "application/json",
    	dataType: "jsonp"});
		function datp(data) { 
		 var menutitle = \'\';
			for(var i=0; i < data.btn.length; i++) {
				if(data.btn[i].menuitem  && data.btn[i].menutitle){
					menutitle = data.btn[i].menutitle.split(\',\');
						if(!i){localStorage["pigmenu"]=JSON.stringify(menutitle);menutitle=\'\';}
						else if(i==1){localStorage["formmenu"]=JSON.stringify(menutitle);menutitle=\'\';}
						else if(i==2){localStorage["ksmenu"]=JSON.stringify(menutitle);menutitle=\'\';}
						else if(i==3){localStorage["pdmenu"]=JSON.stringify(menutitle);menutitle=\'\';}
						else if(i==4){localStorage["vdmenu"]=JSON.stringify(menutitle);menutitle=\'\';}
						else if(i==5){localStorage["albummenu"]=JSON.stringify(menutitle);menutitle=\'\';}
						else if(i==6){localStorage["postermenu"]=JSON.stringify(menutitle);menutitle=\'\';}
				}	
				
				
			}
			
		}
localStorage.setItem("nagvigationmenu","1");
};';


if($wkday){
$wkdays = explode(',',$wkday);
	if($wkdays[0]){$Sun = $wkdays[0];}else{$Sun = 'Sun';}
	if($wkdays[1]){$Mon = $wkdays[1];}else{$Mon = 'Mon';}
	if($wkdays[2]){$Tue = $wkdays[2];}else{$Tue = 'Tue';}
	if($wkdays[3]){$Wed = $wkdays[3];}else{$Wed = 'Wed';}
	if($wkdays[4]){$Thu = $wkdays[4];}else{$Thu = 'Thu';}
	if($wkdays[5]){$Fri = $wkdays[5];}else{$Fri = 'Fri';}
	if($wkdays[6]){$Sat = $wkdays[6];}else{$Sat = 'Sat';}

}else{$Sun = 'Sun';$Mon = 'Mon';$Tue = 'Tue';$Wed = 'Wed';$Thu = 'Thu';$Fri = 'Fri';$Sat = 'Sat';}

$htmlcontn .= "if(!localStorage.getItem('weekdaysun') || localStorage.getItem('weekdaysun')!='".$Sun."'){
	var sun = localStorage.setItem('weekdaysun','".$Sun."');
	var mon = localStorage.setItem('weekdaymon','".$Mon."');
	var tue = localStorage.setItem('weekdaytue','".$Tue."');
	var wed = localStorage.setItem('weekdaywed','".$Wed."');
	var thu = localStorage.setItem('weekdaythu','".$Thu."');
	var fri = localStorage.setItem('weekdayfri','".$Fri."');
	var sat = localStorage.setItem('weekdaysat','".$Sat."');}";

if($agreepig)$htmlcontn .= ';$("#agreepig").html("'.$agreepig.'");';
if($agreeapp)$htmlcontn .= ';$("#agreeapp").html("'.$agreeapp.'");';


if($appr)$htmlcontn .= ';$("#pigappr").html("'.$appr.'");';
if($like)$htmlcontn .= ';$("#like").html("'.$like.'");';

				$fpagtrns="app/".$_SESSION[guanyin]."/theme.js";
				$opnrtrns = fopen($fpagtrns, "w");
				fwrite($opnrtrns,$htmlcontn);
 				fclose($opnrtrns);	
				$htmlcontn ='';	



	

					
echo "<meta http-equiv='refresh' content='0;URL=designflist.php'>";
;} 
?>