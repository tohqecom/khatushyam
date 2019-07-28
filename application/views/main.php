
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- Header Content -->
<?php $this->load->view('header'); ?>
 	<body class="none">
 		<!-- Navigation -->
		<?php $this->load->view('nav'); ?>

		<!-- Page Content -->
		<?php $this->load->view($content); ?>

		<!-- Footer -->
		<?php $this->load->view('footer'); ?>
	</body>
</html>