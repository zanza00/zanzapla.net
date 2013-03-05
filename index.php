<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Zanza Planet</title>
<link href="zanzastyle.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="jquery-ui-1.8.custom.min.js"></script>
<link href="jquery-ui-1.8.custom.css" rel="stylesheet" type="text/css" />
</head>
<body>
<script type="text/javascript">
	$(function() {
		$("#tabs").tabs();
	});
	</script>

<div id="container">
<div id="head">
  <h1><a href="http://zanzapla.net/yard">Zanza Pla.net</a></h1>
  <p>&tilde; il mio piccolo pianeta privato &tilde;</p>
</div>
<div id="tabs">
	<ul>
		<li><a bitly="BITLY_PROCESSED" href="#tabs-1">Home</a></li>
		<li><a bitly="BITLY_PROCESSED" href="#tabs-2">AnimeItalia</a></li>
		<li><a bitly="BITLY_PROCESSED" href="#tabs-3">Social Networks</a></li>
        <li><a bitly="BITLY_PROCESSED" href="#tabs-4">Works</a></li>
        <li><a bitly="BITLY_PROCESSED" href="#tabs-5">About me</a></li>
        <li><a bitly="BITLY_PROCESSED" href="#tabs-6">Contacts</a></li>
	</ul>
	<div id="tabs-1">
		<? include 'home.htm' ?>
	</div>
	<div id="tabs-2">
		<? include 'animeitalia.htm' ?>
	</div>
	<div id="tabs-3">
		<? include 'social.php' ?>
	</div>
    <div id="tabs-4">
    	<? include 'works.htm' ?>
    </div>
    <div id="tabs-5">
    	<? include 'altro.htm' ?>
    </div>
    <div id="tabs-6">
    	<? include 'contacts.htm' ?>
    </div>

</div>
</div>
<div id="footer">
 <? include 'footer.htm' ?>
</div>
</body>
</html>
