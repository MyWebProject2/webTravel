<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view("site/head.php");?>
</head>
<body>
	<?php $this->load->view("site/header.php");?>
	<div id="wrapper">
		<?php $this->load->view('site/left.php');?>
		<?php
				$this->load->view($temp);
		?>
		
	</div>
	<?php $this->load->view("site/footer.php");?>
</body>
</html>