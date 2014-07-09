<?php session_start(); ?>
<?php if($_SESSION[guanyin]){
$zip = new ZipArchive;

$zipname = 'app/'.$_SESSION[guanyin].'/phonegap'.$_SESSION[folder].'.zip';
if($zip->open($zipname, ZipArchive::OVERWRITE) === TRUE){
if($_SESSION[folder])$templates= 's';

  if(!$_SESSION[htmls] or strpos($_SESSION[htmls],'c')!==false)$zip->addFile("template".$templates."/index.html", "index.html");
  if(!$_SESSION[htmls] or strpos($_SESSION[htmls],'k')!==false)$zip->addFile("template".$templates."/kiss.html", "kiss.html");
  if(!$_SESSION[htmls] or strpos($_SESSION[htmls],'g')!==false)$zip->addFile("template".$templates."/playground.html", "playground.html");
  if(!$_SESSION[htmls] or strpos($_SESSION[htmls],'v')!==false)$zip->addFile("template".$templates."/video.html", "video.html");
  if(!$_SESSION[htmls] or strpos($_SESSION[htmls],'a')!==false)$zip->addFile("template".$templates."/album.html", "album.html");
  if(!$_SESSION[htmls] or strpos($_SESSION[htmls],'p')!==false)$zip->addFile("template".$templates."/poster.html", "poster.html");
  if(!$_SESSION[htmls])$zip->addFile("template/1.html", "1.html");
  $zip->addFile("template/license.txt", "license.txt");
  
  if(!$_SESSION[folder]){	
  $zip->addFile("template/css/jquerymobile-1.4.0.min.css", "css/jquerymobile-1.4.0.min.css");
  $zip->addFile("template/css/jquery.mobile-1.4.0.min.css", "css/jquery.mobile-1.4.0.min.css");
  $zip->addFile("template/css/icon/style.css", "css/icon/style.css");
  //$zip->addFile("template/css/icon/fonts/icomoon.eot", "css/icon/fonts/icomoon.eot");
    $zip->addFile("template/css/icon/fonts/icomoon.svg", "css/icon/fonts/icomoon.svg");
	//  $zip->addFile("template/css/icon/fonts/icomoon.tff", "css/icon/fonts/icomoon.tff");
	   // $zip->addFile("template/css/icon/fonts/icomoon.woff", "css/icon/fonts/icomoon.woff");
  $zip->addFile("template/css/icons/style.css", "css/icons/style.css");
 // $zip->addFile("template/css/icons/fonts/icomoon.eot", "css/icons/fonts/icomoon.eot");
    $zip->addFile("template/css/icons/fonts/icomoon.svg", "css/icons/fonts/icomoon.svg");
	//  $zip->addFile("template/css/icons/fonts/icomoon.tff", "css/icons/fonts/icomoon.tff");
	   // $zip->addFile("template/css/icons/fonts/icomoon.woff", "css/icons/fonts/icomoon.woff");

  
  $zip->addFile("template/css/images/ajax-loader.gif", "css/images/ajax-loader.gif");
   $zip->addFile("template/css/images/football.svg", "css/images/football.svg");
   $zip->addFile("template/css/images/nbr.svg", "css/images/nbr.svg");
   $zip->addFile("template/css/images/pigpaper.svg", "css/images/pigpaper.svg");
    $zip->addFile("template/css/images/icons-18-black.png", "css/images/icons-18-black.png");
	 $zip->addFile("template/css/images/icons-18-white.png", "css/images/icons-18-white.png");
      $zip->addFile("template/css/images/icons-36-black.png", "css/images/icons-36-black.png");
	   $zip->addFile("template/css/images/icons-36-white.png", "css/images/icons-36-white.png");
  
  $zip->addFile("template/images/jsqr.png", "css/icon/jsqr.png");
  }

  
   $zip->addFile("template/images/jsqr1.png", "images/jsqr.png");
    $zip->addFile("template/images/jsqrt.png", "images/jsqr1.png");
  
  if(!$_SESSION[folder]){ 
  $zip->addFile("template/js/fastclick.js", "js/fastclick.js");
  $zip->addFile("template/js/LICENSE.txt", "js/LICENSE.txt");
   $zip->addFile("template/js/jquery.js", "js/jquery.js");
    $zip->addFile("template/js/jquery.mobile-1.4.0.min.js", "js/jquery.mobile-1.4.0.min.js");
  }
	

  
  if(!$_SESSION[htmls] or strpos($_SESSION[htmls],'f')!==false)$zip->addFile("app/".$_SESSION[guanyin]."/form.html", "form.html");
  if(is_file("app/".$_SESSION[guanyin]."/theme.js")){$zip->addFile("app/".$_SESSION[guanyin]."/theme.js", "js/theme.js");}
  	 else{$zip->addFile("template/js/theme.js", "js/theme.js");}

 
  	 
  if(!$_SESSION[folder]){ 	 
  $zip->addFile("app/".$_SESSION[guanyin]."/config.xml", "config.xml");
  }
  if(is_file("app/".$_SESSION[guanyin]."/jsqr.png"))$zip->addFile("app/".$_SESSION[guanyin]."/jsqr.png", "images/jsqr.png");
  if(is_file("app/".$_SESSION[guanyin]."/jsqr1.png"))$zip->addFile("app/".$_SESSION[guanyin]."/jsqr1.png", "images/jsqr1.png"); 
  
  $zip->close();
  
} 
;}

?> 
Please download the <a href="<?php echo 'app/'.$_SESSION[guanyin].'/phonegap'.$_SESSION[folder].'.zip'; ?>">zip file</a> for phonegap build.