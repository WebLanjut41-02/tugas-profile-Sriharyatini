<?php

defined('BASEPATH') OR exit('No direct script access allowed');

?><!DOCTYPE html>
<html>
<head>
<title>FOTO </title>
</head>
<body>
	<h2>Galeri Foto</h2>
		<img onmouseover="preview.src=1.src" name="1" src="<?php echo base_url();?>tugas1/1.JPG" alt=""/>

		<img onmouseover="preview.src=2.src" name="2" src="<?php echo base_url();?>tugas1/2.JPG" alt=""/>

		<img onmouseover="preview.src=3.src" name="3" src="<?php echo base_url();?>tugas1/3.JPG" alt=""/>

		<img onmouseover="preview.src=4.src" name="4" src="<?php echo base_url();?>tugas1/4.JPG" alt=""/>
</body>
</html>