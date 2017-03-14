<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php $this->load->view('/templates/header'); ?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1>Thank you for signin!</h1>
			</div>
			<h2><?php echo $username . ',' ;?> you have successfully signin. </h2>
		</div>
	</div><!-- .row -->
</div><!-- .container -->

<?php $this->load->view('/templates/footer'); ?>

