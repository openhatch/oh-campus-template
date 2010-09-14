<?php
$site_title = "Open source immersion at U Penn";
?>

<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title><?php echo $page_title?> (within <?php echo $site_title ?>)</title>
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
</head>
<body>
<div id="header">
<h1><?php echo $site_title?>: <?php echo $page_title ?></h1>
 <div id="menu">
  <ul id="nav">
   <li><a href="#">Home</a></li>
   <li><a href="#">About Me</a></li>
   <li><a href="#">Archives</a></li>
   <li><a href="#">Sitemap</a></li>
  </ul>
 </div>
</div>
<div id="content">
<div id="right">
<?php echo $content ?>
</div>
	
<div id="left">
	<div class="box">
			<h2>News :</h2>	
			<p>This XHTML/CSS Template was inspired by great NiftyCube layouts. It is released under GPL and it is xhtml/css valid.</p>
	</div>
			
	<div class="box">
				<h2>Links :</h2>
				<ul>
				<li><a href="http://www.minimalistic-design.info">Web Design Directory</a></li>
				<li><a href="http://www.historyexplorer.net">History Timelines</a></li>
				<li><a href="http://www.minimalistic-design.net">Free templates</a></li>
				</ul>
	</div>
		
    <div class="box">
	   <div style="font-size: 0.8em;">Design by <a href="http://www.minimalistic-design.net">Minimalistic Design</a></div>
	</div>
</div>
</div>
</body>
</html>
