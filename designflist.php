<?php session_start();  
?>  
 
<?php require_once 'excel_reader2.php';?>
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

</head>
	<body><div data-role="page" data-theme="f" class="page indexhtml">
	<div  data-role="header" id="hrdiv" data-theme="f"><h1 id="hrs">AppMoney712 App Creation System</h1><a href="index.html"  data-ajax="false" class="ui-btn-left ui-btn ui-btn-inline ui-corner-all ui-btn-icon-left ui-icon-home">&nbsp;&nbsp;&nbsp;</a>
	</div><!-- /header --><div data-role="content" class="pagebg"><!--copyiframe--><!-- /content!-->
    <?php if($_SESSION[guanyin]){?>
		 <h3 style="color:#000000"><b>Google search:</b></h3>
		 <a class="ui-btn ui-btn-f ui-btn-inline" href="jsqrs.php?r=1" target="_blank">jsqr.png[Red]</a>&nbsp;&nbsp;&nbsp;<a class="ui-btn ui-btn-f ui-btn-inline" href="jsqrs.php?r=2" target="_blank">jsqr.png[Golden]</a>&nbsp;&nbsp;&nbsp;<a class="ui-btn ui-btn-f ui-btn-inline" href="jsqrs.php?r=3" target="_blank">jsqr.png[Pink]</a>&nbsp;&nbsp;&nbsp;<a class="ui-btn ui-btn-f ui-btn-inline" href="jsqrs.php?r=5" target="_blank">jsqr.png[Golden]</a>&nbsp;&nbsp;&nbsp;<a class="ui-btn ui-btn-f ui-btn-inline" href="jsqrs.php?r=6" target="_blank">jsqr.png[Blue]</a>&nbsp;&nbsp;&nbsp;<a class="ui-btn ui-btn-f ui-btn-inline" href="jsqrs.php" target="_blank">jsqr.png[Black]</a> 
		 <br>Please choose one to use.<br>
		 <hr>
		 <h3 style="color:#000000"><b>FB Timeline:</b></h3>
		 <a class="ui-btn ui-btn-f ui-btn-inline" href="jsqrs.php?p=1&r=1" target="_blank">jsqr.png[Red]</a>&nbsp;&nbsp;&nbsp;<a class="ui-btn ui-btn-f ui-btn-inline" href="jsqrs.php?p=1&r=2" target="_blank">jsqr.png[Golden]</a>&nbsp;&nbsp;&nbsp;<a class="ui-btn ui-btn-f ui-btn-inline" href="jsqrs.php?p=1&r=3" target="_blank">jsqr.png[Pink]</a>&nbsp;&nbsp;&nbsp;<a class="ui-btn ui-btn-f ui-btn-inline" href="jsqrs.php?p=1&r=5" target="_blank">jsqr.png[Golden]</a>&nbsp;&nbsp;&nbsp;<a class="ui-btn ui-btn-f ui-btn-inline" href="jsqrs.php?p=1&r=6" target="_blank">jsqr.png[Blue]</a>&nbsp;&nbsp;&nbsp;<a class="ui-btn ui-btn-f ui-btn-inline" href="jsqrs.php?p=1" target="_blank">jsqr1.png[Black]</a> 
		 <br>Please choose one to use.<br><br>
		 If you do not need to create the QR code, you can click any one of them and do not to refresh the broswer to the code on next page. And then download the zip file only. 
		 
	<?php  ;}?>
	
  		</div><!-- /content -->
	</div><!-- /page -->
	
   
	
	

 

 	
</body>
</html>