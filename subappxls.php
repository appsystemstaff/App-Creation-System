<?php session_start();  
if(!$_POST[nbr]){
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
<script>
	function checkform ( form )
	{

	
	if(form.nbr.value==''){
	alert("Please enter value.");
	form.nbr.focus();
	return (false);
	;}
	
if(form.menucalendar.value=='' && form.menuform.value=='' &&  menukissme.value=='' &&  menuplayground.value=='' &&  menuvideo.value=='' &&  menualbum.value=='' &&  menuposter.value==''){
	alert("Please enter the title at least one to ensure the function page involving into app.");
	form.menucalendar.focus();
	return (false);

;}
	
	}
	</script>
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
            <h2>AppMoney712 App Creation System</h2><h3 style="color:#000000"><b>sub-app xls form generation</b></h3>
        </div>

         <div class="content">
	 
	 <FORM action="subappxls.php" class="pure-form" method="post" onSubmit="return checkform(this);">

	
	 <div class="pure-g">
	 <div class="pure-u-1-3">
	 Folder Number:
	 <input type="number" name="nbr" required> </div></div>
	
	<div class="pure-g">
	<div class="pure-u-1-3">
	App color theme : 	
	<select name="apptheme">
	<option value=""></option>
	<option value="a">Theme A [Black]</option>
	<option value="b">Theme B [Blue]</option>
	<option value="c">Theme C [Grey]</option>
	<option value="d">Theme D [Grey 1]</option>
	<option value="e">Theme E [Yellow]</option>
	<option value="f">Theme F [Blue 1]</option>
	<option value="g">Theme G [Yellow 1]</option>
	<option value="h">Theme H [Green]</option>
	<option value="i">Theme I [Green 1]</option>
	<option value="j">Theme J [Pink]</option>
	<option value="k">Theme K [Blue 2]</option>
	<option value="l">Theme L [Golden]</option>
	<option value="m">Theme M [Red]</option>
	<option value="n">Theme N [Orange]</option>
	<option value="v">Theme V [Limpid gold]</option>
	<option value="w">Theme W [Limpid blue]</option>
	<option value="x">Theme X [Limpid black]</option>
	<option value="y">Theme Y [Limpid white]</option>
	<option value="z">Theme Z [Limpid]</option>
	</select></div>
	<div class="pure-u-1-3">
	App color theme[page header] : 	
	<select name="appthemehr">
	<option value=""></option>
	<option value="a">Theme A [Black]</option>
	<option value="b">Theme B [Blue]</option>
	<option value="c">Theme C [Grey]</option>
	<option value="d">Theme D [Grey 1]</option>
	<option value="e">Theme E [Yellow]</option>
	<option value="f">Theme F [Blue 1]</option>
	<option value="g">Theme G [Yellow 1]</option>
	<option value="h">Theme H [Green]</option>
	<option value="i">Theme I [Green 1]</option>
	<option value="j">Theme J [Pink]</option>
	<option value="k">Theme K [Blue 2]</option>
	<option value="l">Theme L [Golden]</option>
	<option value="m">Theme M [Red]</option>
	<option value="n">Theme N [Orange]</option>
	<option value="v">Theme V [Limpid gold]</option>
	<option value="w">Theme W [Limpid blue]</option>
	<option value="x">Theme X [Limpid black]</option>
	<option value="y">Theme Y [Limpid white]</option>
	<option value="z">Theme Z [Limpid]</option>
	</select>
	 </div></div>
	 <hr>
	 You need to fill in the title of function pages which involve in sub-app.
	 <hr>
	<div class="pure-g">
	<div class="pure-u-1-3">
Add function page – Calendar : 
    <input type="text" name="menucalendar">
	</div>
	<div class="pure-u-1-3">
Add function page – Form : 
     <input type="text" name="menuform">
	 </div>
	<div class="pure-u-1-3">
Add function page – Kiss me : 
     <input type="text" name="menukissme">
	</div>
	<div class="pure-u-1-3">
Add function page – Playground : 
     <input type="text" name="menuplayground">
	</div>
	<div class="pure-u-1-3">
Add function page – Video : 
     <input type="text" name="menuvideo"></div>
	<div class="pure-u-1-3">
Add function page – Album : 
     <input type="text" name="menualbum"></div>
	<div class="pure-u-1-3">
Add function page – Poster  
     <input type="text" name="menuposter"></div>
	</div>
	<hr>
	<div class="pure-g">
	 <div class="pure-u-1-3">
	 <input type="hidden" name="guanyin" value="<?php if(!$_POST[guanyin])$_SESSION[guanyin]=rand();
	echo htmlspecialchars($_SESSION[guanyin]); ?>">
	<input type="submit" name="submit" class="pure-button button-secondary" Value="Generate">
	<input type="reset" name="clear" class="pure-button button-secondary" Value="Clear"></div></div></FORM>
	<br><hr>
	Sub App note:<br>
<p><?php if($_SESSION[tn]==PRC){echo '';}else if($_SESSION[tn]==EN){echo 'You can create sub-apps and combine them to one app. You need to fill in the folder number.';}else{echo '';}?></p>
In the example, you can find two buttons at the page header. The right one is function page menu. The left one is adding page for the function page which is about sub-app. This case is calendar function page.<br>
<a href="http://www.appmoney712.net/prev/calendar.html" target="_blank" class="pure-button pure-button-primary">App page example</a>
<a href="xls/menu.php" target="_blank" class="pure-button pure-button-primary">App containing sub-app example</a>
	  <hr>
	 xls note:<br>
<p><?php if($_SESSION[tn]==PRC){echo '';}else if($_SESSION[tn]==EN){echo 'You do not need to fill in the \'No need\' mentioned items of generated xls form.<br>After filling in xls form, you need to upload the xls file on \'App design upload design\' page. You need to unzip the generated zip file, add picture files to folder - images, create number named folder to main app root folder and place the sub-app files to the created folder.';}else{echo '';}?></p>

	  	
		
</div>   
    </div>
</div>

</body>
</html>


<?php
;}//$_POST[nbr]
if($_POST[nbr] and preg_match('/^[0-9]*$/',$_POST[nbr])  and $_SESSION[guanyin] and $_SESSION[guanyin]==$_POST[guanyin]){

$nbr = $_POST[nbr];



		$xml = "<tr><td>[No need]Author Name</td></tr>";
		$xml .= "<tr><td>[No need]Author Email</td></tr>";
		$xml .= "<tr><td>[No need]Author website</td></tr>";
		$xml .= "<tr><td>[No need]App Name</td></tr>";
		$xml .= "<tr><td>[No need]App description</td></tr>";
		
		if($_POST[apptheme])$apptheme = '<td>'.htmlspecialchars($_POST[apptheme]).'</td>';
		if($_POST[appthemehr])$appthemehr = '<td></td><td>'.htmlspecialchars($_POST[appthemehr]).'</td>';
		$xml .= "<tr><td>App color theme[a to z]</td>".$apptheme.$appthemehr."</tr>";
		
		
		$xml .= "<tr><td>";
		if(!$_POST[menucalendar])$xml .='[No need]';
		$xml .= "Header area title [Company name/App name]</td></tr>";
		$xml .= "<tr><td>";
		if(!$_POST[menucalendar])$xml .='[No need]';
		$xml .= "Header text area content</td></tr>";
		$xml .= "<tr><td>";
		if(!$_POST[menucalendar])$xml .='[No need]';
		$xml .= "Footer area title</td></tr>";
		$xml .= "<tr><td>";
		if(!$_POST[menucalendar])$xml .='[No need]';
		$xml .= "Footer text area content</td></tr>";
		
		$xml .= "<tr><td>";
		if(!$_POST[menuform])$xml .='[No need]';
		$xml .= "Form title</td></tr>";
		$xml .= "<tr><td>";
		if(!$_POST[menuform])$xml .='[No need]';
		$xml .= "Contact Form title1</td></tr>";
		$xml .= "<tr><td>";
		if(!$_POST[menuform])$xml .='[No need]';
		$xml .= "Contact Form title2</td></tr>";
		$xml .= "<tr><td>";
		if(!$_POST[menuform])$xml .='[No need]';
		$xml .= "Contact Form title3</td></tr>";
		$xml .= "<tr><td>";
		if(!$_POST[menuform])$xml .='[No need]';
		$xml .= "Contact Form title4</td></tr>";
		
		$xml .= "<tr><td>";
		if(!$_POST[menuform])$xml .='[No need]';
		$xml .= "Contact Form title5</td></tr>";
		$xml .= "<tr><td>";
		if(!$_POST[menuform])$xml .='[No need]';
		$xml .= "Form remark</td></tr>";
		$xml .= "<tr><td>";
		if(!$_POST[menuform])$xml .='[No need]';
		$xml .= "Form receiving email</td></tr>";
		$xml .= "<tr><td>";
		if(!$_POST[menukissme])$xml .='[No need]';
		$xml .= "Information website</td></tr>";
		$xml .= "<tr><td>";
		if(!$_POST[menukissme])$xml .='[No need]';
		$xml .= "";
		//$xml .= "Facebook like button information";
		$xml .= "</td></tr>";
		
		//$xml .= "<tr><td>Facebook timeline information";
		$xml .= "<tr><td>";
		if(!$_POST[menukissme])$xml .='[No need]';
		$xml .= "</td></tr>";
		$xml .= "<tr><td>";
		//$xml .= "<tr><td>Appreciation text";
		if(!$_POST[menukissme])$xml .='[No need]';
		$xml .= "</td></tr>";
		$xml .= "<tr><td>";
		if(!$_POST[menucalendar])$xml .='[No need]';
		$xml .= "Amend Menu title : Calendar</td>";
		if($_POST[menucalendar])$xml .="<tr><td>".$_POST[menucalendar]."</td></tr>";
		$xml .= "<tr><td>";
		if(!$_POST[menuform])$xml .='[No need]';
		$xml .= "Amend Menu title : Form</td><td>".$_POST[menuform]."</td></tr>";
		$xml .= "<tr><td>";
		if(!$_POST[menukissme])$xml .='[No need]';
		$xml .= "Amend Menu title : Kiss me</td></tr>";
		
		$xml .= "<tr><td>";
		if(!$_POST[menuplayground])$xml .='[No need]';
		$xml .= "Amend Menu title : Playground</td><td>".$_POST[menuplayground]."</td></tr>";
		$xml .= "<tr><td>";
		if(!$_POST[menuvideo])$xml .='[No need]';
		$xml .= ">Amend Menu title : Video</td><td>".$_POST[menuvideo]."</td></tr>";
		$xml .= "<tr><td>";
		if(!$_POST[menualbum])$xml .='[No need]';
		$xml .= "Amend Menu title : Album</td><td>".$_POST[menualbum]."</td></tr>";
		$xml .= "<tr><td>";
		if(!$_POST[menuposter])$xml .='[No need]';
		$xml .= "Amend Menu title : Poster</td><td>".$_POST[menuposter]."</td></tr>";
		$xml .= "<tr><td>";
		if(!$_POST[menucalendar])$xml .='[No need]';
		$xml .= "Weekday format</td></tr>";
		
		$xml .= "<tr><td>[No need]You need to accept the agreement.</td></tr>";
		$xml .= "<tr><td>[No need]I Agree.</td></tr>";
		$xml .= "<tr><td>Folder Number(sub-app)</td><td>".htmlspecialchars($nbr)."</td></tr>";


header("Content-Type: application/vnd.ms-excel");
echo '<table>';
echo $xml;
echo '</table>';

header("Content-disposition: attachment; filename=subapp".$nbr.".xls");


;}

?>