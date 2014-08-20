<?php session_start();  
?>  
 
<?php require_once 'excel_reader2.php';?>
<!doctype html>
<html>
<head> 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title></title>
<link rel="stylesheet" href="css/pure-min.css">
<link rel="stylesheet" href="css/side-menu.css">
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
				<li class="menu-item-divided pure-menu-selected"><a href="index.php" data-ajax="false">Form design method</a></li>
				<li><a href="background.html" data-ajax="false">Background pictures</a></li>
				<li><a href="designform.php">Form page for app design</a></li>
				<li><a href="designmenu.php" data-ajax="false">Navigation Menu for sub-apps</a></li>
				<li><a href="explanation.php">Explanation</a></li>
            </ul>
        </div>
    </div>
    <div id="main">
        <div class="header" style="background-color:#0098FF">          
            <h2>AppMoney712 App Creation System</h2>
        </div>

        <div class="content">
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