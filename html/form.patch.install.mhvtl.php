<html>
<head><title>MHVTL</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<hr width="100%" size=10 color="blue">
<b><font color=purple size=3>MHVTL Support</font></b>
<hr width="100%" size=1 color="blue">


<tr>
<td>
<img src="images/help.png" >
</td>
</tr>

<?php
echo "<pre><b> Install Patches :</b></pre>";
?>


<TABLE BORDER='4' CELLSPACING='4' CELLPADDING='4' bgcolor='#000000' <FONT COLOR='#FFFFFF'></FONT>
<TR>
<TD>


<table border="0">
<td>
<div style="overflow:auto;height:150px;width:450px;">

<?php
$PATCH = $_REQUEST['patch'];
$PATCHFILE = ` echo $PATCH | sed -e "s/^.* //"|cut -d "/" -f3,4` ;
$run = system("sudo -u root -S ../scripts/mhvtl.patch.sh install $PATCHFILE ");
?>

</div>
</td>
</table>

</TR>
</TD>
</TABLE>

</body>
</html>
