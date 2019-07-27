<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<!-- Header Content -->
<?php $this->load->view('header'); ?>
<body>
	<!-- Navigation -->
	<?php $this->load->view('nav'); ?>

    <!-- Page Content -->
    <div class="container">
    	<?php $this->load->view($content); ?>
    </div>
    <!-- /.container -->

	<!-- Footer -->
	<?php $this->load->view('footer'); ?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>