<?php session_start();  
?>  
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title></title>
<link rel="stylesheet" href="css/pure-min.css">
<link rel="stylesheet" href="css/side-menu.css">
<link href="css/mtnpjhsp.css" rel="stylesheet">
<style type="text/css">
.button-secondary { 
            color: white;
            border-radius: 4px;
            text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
			background: rgb(66, 184, 221); 
}
</style>
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
<body>

<div id="layout">
    <a href="#menu" id="menuLink" class="menu-link">
        <span></span>
    </a>
    <div id="menu">
        <div class="pure-menu pure-menu-open">
            <a class="pure-menu-heading" href="#">Menu</a>

            <ul>
				<li><a href="index.php" data-ajax="false">xls form design method</a></li>
				<li><a href="background.html" data-ajax="false">Background pictures</a></li>
				<li class="menu-item-divided pure-menu-selected"><a href="design.php" data-ajax="false">App design upload page</a></li>
				<li><a href="designmenu.php" data-ajax="false">Navigation Menu for sub-apps</a></li>
				<li><a href="explanation.php" data-ajax="false">Explanation</a></li>
            </ul>
        </div>
    </div>
    <div id="main">
        <div class="header" style="background-color:#0098FF">          
            <h2>AppMoney712 App Creation System</h2><h3 style="color:#000000"><b>XLS FILE UPLOAD for app creation</b></h3> 
        </div>

        <div class="content">

       

	 <FORM action="design.php"  method="post" enctype="multipart/form-data" class="pure-form" onSubmit="return checkform(this);">
	 <div class="pure-g">
	 <div class="pure-u-1-3">
	 XLS FILE UPLOAD
	 <input type="file" name="webxls" required><br><br>
	 Version Number of your design:
	 <input type="number" name="ver" required><br><br>
	 
	 <input type="hidden" name="guanyin" value="<?php if(!$_POST[guanyin])$_SESSION[guanyin]=rand();
	echo htmlspecialchars($_SESSION[guanyin]); ?>">
	<input type="submit" name="submit" class="pure-button button-secondary" Value="SEND">
	</div></div>
	<br><br>
	Go to <a  class="pure-button pure-button-primary" href="designmenu.php">Menu for sub-apps</a><br><br>
	 <a href="#" class="tps"><img style="width:22px" src="img/tps.gif"><span><br>If you use adding folder to add pages to your app, you need to create sub-apps menu file.</span></a><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	</FORM>
		
</div>   
    </div>
</div>

</body>
</html>
<?php

if($_FILES['webxls']['name'] and $_SESSION[guanyin] and $_SESSION[guanyin]==$_POST[guanyin]){

if($_FILES['webxls']['size']<55000){
$tdy=date('Y-m-d');

$allowedExtensions = array("xls");

$_SESSION[ver] = $_POST[ver];

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