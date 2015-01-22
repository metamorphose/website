<?php
$page = $_GET['page'];
if ($page == '') {$page = 'Main';}

$active = "id='active'";
$inactive = "";
if ($page == 'Main') {
	$Main = $active;
	$title="Powerful batch renamer";
}
else {
	$Main = $inactive;
	$title = $page;
}

$error404 = "<center><img src='art/ceci_pas_pipe.jpg'><br><br></center>\n".
            "<h3 class='heading'>This cannot be a page <i>since it doesn't exist</i>.</h3>error 404";


if ($page == 'Download') {$Download = $active;}
else {$Download = $inactive;}

if ($page == 'ScreenshotsM1') {$ScreenshotsM1 = $active;}
else {$ScreenshotsM1 = $inactive;}

if ($page == 'ScreenshotsM2') {$ScreenshotsM2 = $active;}
else {$ScreenshotsM2 = $inactive;}

if ($page == 'Examples') {$Examples = $active;}
else {$Examples = $inactive;}

if ($page == 'Help') {$Help = $active;}
else {$Help = $inactive;}

if ($page == 'ChangeLog') {$ChangeLog = $active;}
elseif ($page == 'ChangeLog_m1') {$ChangeLog = $active;}
else {$ChangeLog = $inactive;}

if ($page == 'License') {$License = $active;}
else {$License = $inactive;}

if ($page == 'Links') {$Links = $active;}
else {$Links = $inactive;}

if ($page == 'Programming') {$Programming = $active;}
else {$Programming = $inactive;}

$page_name = $page.'.html';

$pages = glob("*.html");

if (in_array($page_name, $pages) and file_exists($page_name)){
    $page_data = file_get_contents($page_name);
}
else {$page_data = $error404;}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="robots" content="index,follow">
<meta name="revisit" content="20 days">
<link rel="shortcut icon" href="metamorphose.ico" type="image/x-icon">
<link rel="stylesheet" href="main.css" type="text/css">
<title>Métamorphose : A File and Folder Renamer - <?= $title ?></title>
</head>
<body>

<div id="page">

<img src="/art/metamorphose_big.png" alt="Métamorphose logo" border="0" height="124">
<h2>Métamorphose : <i>A File -n- Folder Renamer</i></h2>

<div id="navcontainer">
<ul>
<li><a <?= $Main ?> href='index.php?page=Main' style='margin-top: 40px;'><i>Home</i></a></li>
<li><a <?= $Download ?> href='index.php?page=Download'><i><b>Downloads</b></i></a></li>
<li><a href='http://sourceforge.net/donate/index.php?group_id=146403'><i><b>Donate</b></i></a></li>
<li><a <?= $ScreenshotsM1 ?> href='index.php?page=ScreenshotsM1'><i>Screenshots v1</i></a></li>
<li><a <?= $ScreenshotsM2 ?> href='index.php?page=ScreenshotsM2'><i>Screenshots v2</i></a></li>
<li><a <?= $Examples ?> href='index.php?page=Examples'><i>Examples</i></a></li>
<li><a <?= $Help ?> href='index.php?page=Help'><i>Help</i></a></li>
<li><a <?= $ChangeLog ?> href='index.php?page=ChangeLog'><i>Change Log</i></a></li>
<li><a <?= $Links ?> href='index.php?page=Links'><i>Links &amp; Credits</i></a></li>
<li><a <?= $Programming ?> href='index.php?page=Programming'><i>Programming</i></a></li>
<li><a href='http://sourceforge.net/projects/file-folder-ren/'><i>Sourceforge</i></a></li>
<li><a href='http://launchpad.net/metamorphose1'><i>Launchpad</i></a></li>
</ul>
</div>

<!-- start content -->
<div id="content">
<?= $page_data ?>

<p>
<a href='http://sourceforge.net'>
<img src='http://sourceforge.net/sflogo.php?group_id=146403&amp;type=1' width='88' height='31' border='0' alt='SourceForge.net Logo' title="SourceForge.net"></a>
</p>

<!-- end content -->
</div>

<!-- end page -->
</div>

<br>


<!-- analytics tracker script -->
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-132217-2']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

</body>
</html>
