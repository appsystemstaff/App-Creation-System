<?php session_start();  
$_SESSION[tn]=EN;
?>  
<!doctype html>
<html> 
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title></title>
<link rel="stylesheet" href="css/pure-min.css">
<link rel="stylesheet" href="css/side-menu.css">
<style type="text/css">
.button-secondary {
            color: white;
            border-radius: 4px;
            text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
			background: rgb(66, 184, 221); 
}
</style>
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
				<li class="menu-item-divided pure-menu-selected"><a href="index.php" data-ajax="false">xls form design method</a></li>
				<li><a href="background.html" data-ajax="false">Background pictures</a></li>
				<li><a href="design.php" data-ajax="false">App design upload page</a></li>
				<li><a href="designmenu.php" data-ajax="false">Navigation Menu for sub-apps</a></li>
				<li><a href="explanation.php" data-ajax="false">Explanation</a></li>
            </ul>
        </div>
    </div>
    <div id="main">
        <div class="header" style="background-color:#0098FF">          
            <h2>AppMoney712 App Creation System</h2>
        </div>

        <div class="content">
	
	 <h3 style="color:#000000"><b>xls form design method</b></h3>
	 Please refer to the xls form example and the instructions of Form method on our website.<br>	 
	 <hr>
	 <h3 style="color:#000000"><b>Information</b></h3>
	 <a class="pure-button button-secondary" href="background.html" target="_blank">Background picture list</a>
	 <a class="pure-button button-secondary" href="https://www.dropbox.com/s/7lvpm5a1y98dtz7/app.xls" target="_blank">xls form</a>
	 <a class="pure-button button-secondary" href="https://www.dropbox.com/s/4ea71hx8fgxyb7u/apps.xls" target="_blank">xls form example</a>
	 <a class="pure-button button-secondary" href="subappxls.php" data-ajax="false">sub-app xls form generating</a><br>
	 If you need to add more function pages to your app, you need to use 'sub-app xls form generating'.
	 <hr>
	 <h4 style="color:#000000">xls form upload page</h4>	 
	 <a class="pure-button button-secondary"  data-ajax="false" href="design.php">Upload page</a>

	  <h4 style="color:#000000">Save as proper format</h4>
	 <span aria-hidden="true" class="icons-info-sign" style="color:blue;"></span> The xls file must be saved as xls format(not xlsx format) or go to <a class="pure-button" href="http://www.freefileconvert.com"  target="_blank">xls convertor</a><br>
	 You can use <a class="pure-button" href="http://www.libreoffice.org"  target="_blank">Editing software</a> to edit the xls file and save it as xls file.
	<hr>
	 <h3 style="color:#000000"><b>Download zip file for phonegap build</b></h3>

	 You may need to add background picture files to your app. You need to unzip the zip file and place your own pictures to 'images' named folder. You need to zip the app files which is for phonegap build use. Click the index.html or using PHP server to preview your app by web browser[Chrome, Safari] which you need to resize as mobile phone size. Type some text to the app form to ensure its readable, particularly if you use limpid theme with background picture. <br>
	 You can use <a class="pure-button" href="http://www.7-zip.org" target="_blank">zip software</a> to unzip the app files and zip the combined files.<br><br>
	 For development of debug app and creating data testing account, you need to viist our website tutorials. 
	 <br><br>
	You need to consider your zip file size of design work not exceeding the size limitation of phonegap build(15M and 40M). You also need to consider related limitations of Android market and IOS store. You may use picture size similar to screen size of target device of your app.<br>
	 For pictures in app, most of them need to be gif format(animated GIF or static GIF). For different formats of pictures, you can use Windows paint to resize and save your static pictures and then rename their file extensions(e.g. picture.png to picture.gif) in Windows file manager(you need to show the file extension by Windows 'Control Panel'-'Appearance and Personalization'-'Folder Options'-'View'-not tick the 'Hide extensions for known file types').<br> 
	 For pictures in the Internet data server(user device receiving the pictures in app), you also need to consider their sizes which affect the picture showing speed in your app.<br> 
	 If you need a big size app, you may consider to install phonegap software to build your app locally.
	<hr>
	 <h3 style="color:#000000"><b>Create an app build account</b></h3>
	 Go to <a class="pure-button" href="https://build.phonegap.com/"  target="_blank">phonegap build</a>.<br>
	<hr>
	<div class="copyright">&copy; 2014 Lee Wai Kwok(Hong Kong). JSTRUST CONSULTANCY. All Rights Reserved.</div>
	
	
</div>   
    </div>
</div>

</body>
</html>
