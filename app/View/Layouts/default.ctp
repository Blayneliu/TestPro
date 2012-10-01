<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php echo $this -> Html -> charset(); ?>
		<title><?php echo $title_for_layout; ?></title>
	</head>
	<body>
		<div id="container">
			<div id="content">
				<?php echo $this -> Session -> flash(); ?>

				<?php echo $this -> fetch('content'); ?>
			</div>
			<div id="footer"></div>
		</div>
	</body>
</html>
