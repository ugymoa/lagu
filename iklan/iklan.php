<?php
$file = array ("images/iklan_1.gif","images/iklan_coba.gif");
$rndfile = array_rand ($file,1);
//echo $rndfile;
?>
<HTML>
<HEAD>
<TITLE>Untitled-1</TITLE>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
<META HTTP-EQUIV="refresh" CONTENT="20">
<LINK REL="stylesheet" HREF="styles.css" TYPE="text/css">
</HEAD>
<BODY BGCOLOR=#FFFFFF LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0><DIV class="divv"><DIV class="dv"><FONT class="fnt">daMob</FONT></DIV>
<!-- ImageReady Slices (Untitled-1) --><DIV>
<IMG SRC="<?php echo $file [$rndfile]?>" WIDTH=400 HEIGHT=95 ALT=""></DIV></DIV>
<!-- End ImageReady Slices -->
</BODY>
</HTML>