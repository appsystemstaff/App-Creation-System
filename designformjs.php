<?php session_start();  
?>    
<?php 
if($_SESSION[guanyin]){
require_once 'excel_reader2.php';	
		$ftexls="xls/".$_SESSION[guanyin].'trn.xls';
		$ftdata = new Spreadsheet_Excel_Reader("$ftexls");
		$ftdata->setOutputEncoding('utf-8');
		
		$author = htmlspecialchars($ftdata->val(1,'B'));
		$email = htmlspecialchars($ftdata->val(2,'B'));$appdir = str_replace('.','',$email);$appdir = str_replace('@','',$appdir);
		$website = htmlspecialchars($ftdata->val(3,'B'));
		$appn = htmlspecialchars($ftdata->val(4,'B'));
		$des = htmlspecialchars($ftdata->val(5,'B'));
		$theme = strtolower(htmlspecialchars($ftdata->val(6,'B')));$themehr = strtolower(htmlspecialchars($ftdata->val(6,'D')));
		
		$htitle = htmlspecialchars($ftdata->val(7,'B'));
		$htext = htmlspecialchars($ftdata->val(8,'B'));$pur = htmlspecialchars($ftdata->val(8,'D'));
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
		$infwebs = htmlspecialchars($ftdata->val(19,'B'));
		$infweb = $infwebs.'/jqmpigdata/website/'.$appdir;
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

		if((!$calendar and !$folder) or $ndata)$calendar = 'Calendar';
		if((!$form and !$folder) or $ndata)$form = 'Form';
		if((!$kiss and !$folder) or $ndata)$kiss = 'Kiss me';
		if((!$playground and !$folder) or $ndata)$playground = 'Playground';
		if((!$video and !$folder) or $ndata)$video = 'Video';
		if((!$album and !$folder) or $ndata)$album = 'Album';
		if((!$poster and !$folder) or $ndata)$poster = 'Poster';
		if(!$appr)$appr = ' ';

		
if(!preg_match('/^[a-z]*$/', $theme) or !$theme or strlen($theme)>1)$theme = 'b';
if($folderdir){$phonegapjsdir = '../';}else{$phonegapjsdir = '';}
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
	<style type="text/css">
			@media all and (min-width: 1250px){#height{min-height: 1875px;}}
			@media all and (min-width: 1020px) and (max-width: 1250px){#height{min-height: 1875px;}}
			@media all and (min-width: 768px) and (max-width: 1020px){#height{min-height: 1530px;}}
			@media all and (min-width: 601px) and (max-width: 768px){#height{min-height: 1152px;}}
			@media all and (min-width: 321px) and (max-width: 600px){#height{min-height: 900px;}}
			@media all and (max-width: 320px){#height{min-height: 480px;}}';
	if($theme=='y')$htmlcontn .= '
	#form5{background:rgba(255, 255, 255, 0.2);}';
	$htmlcontn .= '</style>
	<script src="'.$folderdir.'js/jquery.js"></script>
	<script src="'.$folderdir.'js/jquery.mobile-1.4.0.min.js"></script>
	<script src="'.$folderdir.'js/fastclick.js"></script>
	<script type="text/javascript" charset="utf-8" src="'.$phonegapjsdir.'cordova.js"></script>
	<script>$(\'input[type=text], textarea\').val(\'\');
	$(function(){FastClick.attach(document.body);});
	
	function onLoad() {
	if(navigator.userAgent.match(/(iPhone|iPod|iPad|Android|IEMobile)/)){
	var networkState = navigator.connection.type;
	if(networkState == Connection.NONE)alert("No Internet.");};}	
	</script>
	</head>
	<body onload="onLoad()"><div data-role="page"  class="page" data-theme="'.$theme.'">
	<div  data-role="header" data-theme="'.$themehr.'" style="color:;background-image:url(images/formhr.gif);background-size:100% 100%;">
	<a href="#navigations" id="menubttns"  data-rel="popup" class="ui-btn-left ui-btn ui-btn-inline ui-btn-icon-left ui-icon-edit">&nbsp;&nbsp;&nbsp;</a>
	<a href="#navigation" id="menubttn"  data-rel="popup" class="ui-btn-right ui-btn ui-btn-inline ui-btn-icon-right ui-icon-bars">&nbsp;&nbsp;&nbsp;</a><h1 id="formhr">'.$form.'</h1>
	</div>
	<div data-role="content" id="height"  style="background-image:url(images/formbackground.gif);background-size:100%;background-repeat:repeat-y;"><form id="form" name="form">';
	if($formtitle)$htmlcontn .= ''.$formtitle.'<HR><BR>';
	if($form1)$htmlcontn .= $form1.'<input type="text" id="form1" name="form1" data-corners="false" required>';
	if($form2)$htmlcontn .= $form2.'<input type="text" id="form2" name="form2" data-corners="false">';
	if($form3)$htmlcontn .= $form3.'<input type="text" id="form3" name="form3" data-corners="false">';
	if($form4)$htmlcontn .= $form4.'<input type="text" id="form4" name="form4" data-corners="false">';
	if($form5)$htmlcontn .= $form5.'<textarea id="form5" name="form5" data-corners="false"></textarea>';
	if($form1 or $form2 or $form3 or $form4 or $form5)$htmlcontn .= '<HR><HR><input type="submit" id="submit" Value="Send" data-corners="false">';
	if($formremark)$htmlcontn .= '<p>'.$formremark.'</p>';
	$htmlcontn .= '</form><a href="'.$folderdir.'index.html" class="ui-btn ui-btn-inline ui-btn-icon-notext ui-icon-home">&nbsp;&nbsp;&nbsp;</a><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></div>
	<div id="navigations" data-role="popup" data-theme="none">
	<ul style="min-width:210px;" data-role="listview" data-corners="false" id="uls" data-inset="true">
	</ul></div><!-- /navigation -->
	
	<div id="navigation" data-role="popup" data-theme="none">
<ul style="min-width:210px;" data-role="listview" data-corners="false" id="ul" data-inset="true">
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
	
	if($folder)$formfolder = $folder.'/';
	$htmlcontn .= '<script>
	if(navigator.userAgent.match(/(iPhone|iPod|iPad|Android|IEMobile)/)){$(document).ready(function() {$.mobile.loading(\'show\');}); $( window ).load(function() {$.mobile.loading( "hide" );});};  
	
	$("#form").submit(function() {
	var infhref= localStorage.getItem("infhref");
		if(infhref.indexOf("http") == -1){infhref= "http://"+infhref;}		
		if(infhref.substr(infhref.length - 1)=="/"){var postphp = "'.$formfolder.'post.php";}else{var postphp = "/'.$formfolder.'post.php";}
		var url = infhref+postphp;
		
	var order = $("form").serialize();
	$.ajax({
    type: "POST",
    url: url,
    data: { \'order\': order },
    cache: false,
    success:function(data){
                alert("Sent.");			
				window.location = "form.html";
            },
            error: function(){
				alert("Error.");	
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
if(albummenu[j])menushtml += \'<li \'+slt+\'><a href="';if($folderdir)$htmlcontn .= '../';$htmlcontn .= '\'+menusdir+\'form.html" data-ajax="false" style="background-image:url(\'+menusdir+\'images/formhtml.gif);background-size:100% 100%;background-repeat: no-repeat;">\'+albummenu[j]+\'</a></li>\';
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
$websites = str_replace('0','',$website);
$websites = str_replace('1','',$websites);
$websites = str_replace('2','',$websites);
$websites = str_replace('3','',$websites);
$websites = str_replace('4','',$websites);
$websites = str_replace('5','',$websites);
$websites = str_replace('6','',$websites);
$websites = str_replace('7','',$websites);
$websites = str_replace('8','',$websites);
$websites = str_replace('9','',$websites);
$webs = explode('.',$websites);
$webn = $webs[2].'.'.$webs[1].'.'.$webs[0];


if(!$_SESSION[folder]){
if(!$ver){$ver = '1';}else{$ver = $_SESSION[ver];}
$htmlcontn = '<?xml version="1.0" encoding="UTF-8"?>
    <widget xmlns = "http://www.w3.org/ns/widgets"
        xmlns:gap = "http://phonegap.com/ns/1.0"
        id        = "'.htmlspecialchars($webn).'"
        versionCode="'.htmlspecialchars($pgver).'" 
        version   = "'.htmlspecialchars($ver).'">
	<preference name="phonegap-version" value="3.3.0" />
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
<access origin="*"/>';
$htmlcontn .= '
<gap:plugin name="org.apache.cordova.inappbrowser"/>
<gap:plugin name="org.apache.cordova.network-information" version="0.2.7" />
</widget>';

				$fpagtrns="app/".$_SESSION[guanyin]."/config.xml";
				$opnrtrns = fopen($fpagtrns, "w");
				fwrite($opnrtrns,$htmlcontn);
 				fclose($opnrtrns);	
				$htmlcontn ='';	}
		

$htmlcontn .= 'if(navigator.userAgent.match(/(iPhone|iPod|iPad|Android|IEMobile)/)){$(document).ready(function() {$.mobile.loading(\'show\');}); $( window ).load(function() {$.mobile.loading( "hide" );});};';
if(!preg_match('/^[a-z]*$/', $themehr) or !$themehr or strlen($themehr)>1)$themehr = $theme;
if($folderdir){$htmlcontn .= 'localStorage.setItem("pigsmenudir","1");';}else{$htmlcontn .= 'localStorage.setItem("pigsmenudir","");';}
$htmlcontn .= '$(".page").attr("data-theme","'.$theme.'");$("#hrdiv").attr("data-theme","'.$themehr.'");';
if($theme=='a' or $theme=='p' or $theme=='x')$htmlcontn .= '$(".tps td").css("border-top","1px solid #FFFFFF");';
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
$("#facebk").attr("href","'.str_replace('..','',$tl).'");';
if(!$_SESSION[folder])$htmlcontn .= 'if(!localStorage.getItem("infhref") || localStorage.getItem("infhref")!="'.$infweb.'")localStorage.setItem("infhref","'.$infweb.'");';
if($folder){$htmlcontn .= 'localStorage.setItem("webdir","/'.$folder.'");';}else{$htmlcontn .= 'localStorage.setItem("webdir","");';}

if(!$_SESSION[folder])$htmlcontn .=';if(navigator.userAgent.match(/(iPhone|iPod|iPad|Android|IEMobile)/)){
var mobile = 1;}else{var mobile = \'\';};
localStorage["nagvigationmenu"];
sessionStorage["nagvigationmenu"];
if( (!localStorage.getItem("nagvigationmenu") && mobile) || (!sessionStorage.getItem("nagvigationmenu") && !mobile) ){
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
if(navigator.userAgent.match(/(iPhone|iPod|iPad|Android|IEMobile)/)){
localStorage.setItem("nagvigationmenu","1");}else{sessionStorage.setItem("nagvigationmenu","1");}
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

if($pur)$htmlcontn .= ';$("#indexpurehtml").height($(this).width()*4/10);
	$("#indexpurepig").css("display","show");';

				$fpagtrns="app/".$_SESSION[guanyin]."/theme.js";
				$opnrtrns = fopen($fpagtrns, "w");
				fwrite($opnrtrns,$htmlcontn);
 				fclose($opnrtrns);	
				$htmlcontn ='';	



	

					
echo "<meta http-equiv='refresh' content='0;URL=designflist.php'>";
;} 
?>