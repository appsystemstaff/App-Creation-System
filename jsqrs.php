<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />


	<!--JSQR - JavaScript Quick Response Code Encoder Library v0.2
	http://jsqr.de/

	Copyright 2011, Jens Duttke
	Dual licensed under the MIT or GPL Version 2 licenses.
	http://jsqr.de/license!-->
<?php if($_SESSION[guanyin]){
if(!$_GET[ftqrs] and !$_GET[n]){

	if($_SESSION[appn]){
		$appn = $_SESSION[appn];
		$tl = $_SESSION[tl];
	;}else{
		require_once 'excel_reader2.php';

		$ftexls="xls/".$_SESSION[guanyin].'trn.xls';
		$ftdata = new Spreadsheet_Excel_Reader("$ftexls");
		$ftdata->setOutputEncoding('utf-8');
		$appn = htmlspecialchars($ftdata->val(4,'B'));
		$appn = 'https://play.google.com/store/search?q='.str_replace(' ','%20',$appn).'&c=apps';
		$tl = strtolower(htmlspecialchars($ftdata->val(21,'B')));
		//if($tl and strpos($tl,'https://www.facebook.com/')===false)$tl = 'https://www.facebook.com/'.$tl;
	}
?>

<script src="js/jsqr-0.2-min.js" type="text/javascript"></script>
<script>

function jsqrfootabl(text,div,rgb,phps,scaleval)
{

var qr = new JSQR();
var code = new qr.Code();
code.encodeMode = code.ENCODE_MODE.UTF8_SIGNATURE;
code.version = code.DEFAULT;
code.errorCorrection = code.ERROR_CORRECTION.H;


	var input = new qr.Input();
	input.dataType = input.DATA_TYPE.URL;
	input.data = {"url": text};

var matrix = new qr.Matrix(input, code);
if(!scaleval)scaleval = 3;
matrix.scale = parseInt(scaleval);
matrix.margin = 1;

var canvas = document.createElement('canvas');  
canvas.setAttribute('width', matrix.pixelWidth);
canvas.setAttribute('height', matrix.pixelWidth);
if(!rgb)rgb = 'rgb(0,0,0)';
canvas.getContext('2d').fillStyle = rgb;
matrix.draw(canvas, 0, 0);
    
var canvasdataurl = canvas.toDataURL("image/png");
    var ajax = new XMLHttpRequest();
	var php = 'jsqrs.php?ftqrs='+phps+'&p=<?php  if($_GET[p]){$p=1;}else{$p='';} echo $p;?>';
    ajax.open("POST",php,false);
    ajax.onreadystatechange = function() {
        console.log(ajax.responseText);
    }
    ajax.setRequestHeader('Content-Type', 'application/upload');
    ajax.send("img="+canvasdataurl);

}

jsqrfootabl('<?php if($_GET[p]){echo $tl;}else{echo $appn;} ?>','','<?php if($_GET[r]==1){echo 'rgb(255,0,0)';}else if($_GET[r]==2){echo 'rgb(153,101,21)';}else if($_GET[r]==3){echo 'rgb(255,0,255)';}else if($_GET[r]==5){echo 'rgb(212,175,55)' ;}else if($_GET[r]==6){echo 'rgb(0,8,255)';}else{echo '';} ?>','1','');


</script>
<?php 
;}//if(!$_GET[ftqrs])

if($_SESSION[guanyin] and $_GET[ftqrs] and !$_GET[n]){
if (isset($GLOBALS["HTTP_RAW_POST_DATA"])) {
  $image=$GLOBALS['HTTP_RAW_POST_DATA'];
  $imgdata=substr($image, strpos($image, ",")+1);
  $basedecode=base64_decode($imgdata);
  if($_GET[p]){$p=1;}else{$p='';}
  $qr = 'app/'.$_SESSION[guanyin].'/jsqr'.$p.'.png';
  $fp = fopen($qr, 'wb' );
  fwrite( $fp, $basedecode);
  fclose( $fp );
  //echo "<meta http-equiv='refresh' content='0;URL=jsqrs.php?n=1'>";
}
}
;}?>
Step 1:Please refresh your browser to show the QR codes.<br>
<?php if(is_file("app/".$_SESSION[guanyin]."/jsqr.png")){?>
<a href="app/<?php echo $_SESSION[guanyin]?>/jsqr.png" target="_blank">jsqr.png - Click this link and you may check it by your mobile phone scan app.</a><br>
<?php if(!is_file("app/".$_SESSION[guanyin]."/jsqr1.png"))echo '<br><br>You need to produce the jsqr1.png. Please go to previous page to product one.<br>';?>
<?php ;}?>
<?php if(is_file("app/".$_SESSION[guanyin]."/jsqr1.png")){?>
<a href="app/<?php echo $_SESSION[guanyin]?>/jsqr1.png" target="_blank">jsqr1.png - Click this link and you may check it by your mobile phone scan app.</a>
<?php if(!is_file("app/".$_SESSION[guanyin]."/jsqr.png"))echo '<br><br>You need to produce the jsqr.png. Please go to previous page to product one.<br>';?>

<?php ;}?>
<br><br>
Step 2:
<a href="zip.php" target="_blank">Produce zip file</a>
</head>
<body>

</body> 
</html>

