<?php session_start();  
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
	var type = /(.xls)$/i;
	if(form.webxls){
	if (form.webxls.value){
	if (!type.test(form.webxls.value)){
	alert( "xls file types only." );
    form.webxls.focus();
	return false;}}
	}
	
	if(form.webxls.value==''){
	alert("Please select xls file.");
	form.webxls.focus();
	return (false);
	;}
	
	}</script>
	</head>
	<body><div data-role="page" data-theme="f" class="page indexhtml">
	<div  data-role="header" id="hrdiv" data-theme="f"><h1 id="hrs">AppMoney712 App Creation System</h1><a href="#navigations" id="menubttns"  data-rel="popup" class="ui-btn-left ui-btn ui-btn-inline ui-corner-all ui-btn-icon-left ui-icon-bars">&nbsp;&nbsp;&nbsp;</a>
	</div><!-- /header --><div data-role="content" class="pagebg"><!--copyiframe--><!-- /content!-->
	
      <h3 style="color:#000000"><b>XLS FILE UPLOAD for app creation</b></h3>  

	 <FORM action="design.php"  method="post" enctype="multipart/form-data" data-ajax="false"  onSubmit="return checkform(this);">
	 <div class="ui-grid-b">
	 <div class="ui-block-a">
	 <input type="file" name="webxls" required>
	 
	 <input type="hidden" name="guanyin" value="<?php if(!$_POST[guanyin])$_SESSION[guanyin]=rand();
	echo htmlspecialchars($_SESSION[guanyin]); ?>">
	<input type="submit" name="submit" Value="SEND">
	</div></div>
	<br><br>
	Go to <a class="ui-btn ui-btn-f ui-btn-inline" href="designmenu.php">Menu for sub-apps</a><br><br>
	 <a href="#" class="tps"><img style="width:22px" src="img/tps.gif"><span><br>If you use adding folder to add pages to your app, you need to create sub-apps menu file.</span></a><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	</FORM>
  	<div id="navigations" data-role="popup" data-theme="none">
	<ul style="min-width:210px;" data-role="listview" data-inset="true">
	<li><a href="index.php" data-ajax="false">xls form design method</a></li>
	<li><a href="background.html" data-ajax="false">Background pictures</a></li>
	<li><a href="design.php" data-ajax="false">App design upload page</a></li>
	<li><a href="designmenu.php" data-ajax="false">Navigation Menu for sub-apps</a></li>
	<li><a href="explanation.php" data-ajax="false">Explanation</a></li>

	

	</ul></div><!-- /navigation -->	
    	</div><!-- /content -->
	</div><!-- /page -->
<?php

if($_FILES['webxls']['name'] and $_SESSION[guanyin] and $_SESSION[guanyin]==$_POST[guanyin]){

if($_FILES['webxls']['size']<55000){
$tdy=date('Y-m-d');

$allowedExtensions = array("xls");



if($_FILES['webxls']){
$filename=$_FILES['webxls']['name'];$tmpname=$_FILES['webxls']['tmp_name'];
;}else{$filename='';$tmpname='';}

$filetyp = end(explode(".",strtolower($filename)));



	if ($filename > "") {  
      if (!in_array(end(explode(".", 
            strtolower($filename))), 
            $allowedExtensions)) {
      		echo "<script>alert(\"incorrect type不正確檔案.\");</script>"; 
      }else{
	  		$filename=str_replace("..","",$filename);
			$filename=str_replace("/","",$filename);
			$filename=str_replace("\\","",$filename);

	 		if($filetyp=='xls'){
	  		$nhtmlprn="xls/";
	    	move_uploaded_file($tmpname,$nhtmlprn.$filename);
			rename("xls/$filename", "xls/".$_SESSION[guanyin]."trn.xls");
			;}
	}
    } //if ($filename > "") 
	
	
	
	
mkdir("app/".$_SESSION[guanyin]."/");
echo "<meta http-equiv='refresh' content='0;URL=designformjs.php'>";
;};}

?>