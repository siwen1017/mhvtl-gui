<html>
<head><title>MHVTL</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<hr width="100%" size=10 color="blue">
<b><font color=purple size=3>MHVTL Settings</font><b>
<hr width="100%" size=1 color="blue">

<tr>
<td>
<img src="images/configuration.png" >
</td>
</tr>

<?php
echo "<pre><b> Configuration :</b></pre>";
?>



<table border="0" >

<tr>
<td>
<form action="form.setup.complete.php" method="post" ><input TYPE="submit" style="color:#008000" value=" Add  "></form>
<form action="form.remove.library.php" method="post" ><input TYPE="submit" style="color:#FF0000" value=" Remove "></form>
<form action="setup.options.php" method="post" ><input TYPE="submit" style="color:#0000FF" value=" Options "> Library/Drives/Media</form>
<hr width="100%" size=1 color="blue">
</td>
</tr>

<tr>
<td>
<a href="#" input class="sameLook" style="color: #000000" ONCLICK="parent.frames[1].location.href='form.vtlcmd.make.tape.php'" target="showframe"> Create Additional Media & Slots </a>
</td>
</tr>

<tr>
<td>
<a href="#" input class="sameLook" style="color: #000000" ONCLICK="parent.frames[1].location.href='form.make.external.media.php'" target="showframe"> Create External Media </a>
</td>
</tr>


<tr>
<td>
<a href="#" input class="sameLook" style="color: #000000" ONCLICK="parent.frames[1].location.href='view_device.conf.php'" target="showframe"> View device.conf </a>
</td>
</tr>

<tr>
<td>
<a href="#" input class="sameLook" style="color: #000000" ONCLICK="parent.frames[1].location.href='form.show.library.php'" target="showframe"> View library_contents.X </a>
</td>
</tr>


<tr>
<td>
<a href="#" input class="sameLook" style="color: #000000" ONCLICK="parent.frames[1].location.href='view.options.php'" target="showframe"> View Options </a>
</td>
</tr>

<tr>
<td>
<hr width="100%" size=1 color="blue">
<form action="confirm.reset_default.php" method="post" ><input TYPE="submit" style="color: #FF0000" value="  Reset  " > Restore Original Default Settings
</form>
<hr width="100%" size=1 color="blue">
</td>
</tr>


</table>


</body>
</html>
