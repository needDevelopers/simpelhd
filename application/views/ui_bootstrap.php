<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" type="text/css" 
		href="<?php echo base_url('assets/css/bootstrap.min.css');?>" />
	<link rel="stylesheet" type="text/css" 
		href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css');?>" />
	<link rel="stylesheet" type="text/css" 
		href="<?php echo base_url('assets/custom/css/sticky-footer.css');?>" />
    <link href="https://fonts.googleapis.com/css?family=Quattrocento+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css" 
    href="<?php echo base_url('assets/custom/css/custom.css');?>" />
</head>
<body class="background-login">

<div class="container" >
	<?php echo (isset($alert))? $alert : '' ;?>
	<div class="row">
		<div class="col-md-12" style="padding-top: 35px;">
			
				
					<?php echo (isset($content))? $content : '' ;?>
				
					
		</div>
	</div>
	
</div>
<!-- <footer class="footer">
      <div class="text-center">
        	<p class="footer">
        		Page rendered in <strong>{elapsed_time}</strong> seconds. <?php 
        		if (ENVIRONMENT === 'development') {
        			echo 'CodeIgniter Version <strong>' . CI_VERSION . '</strong>';
        		}
        	?></p>
      </div>
</footer> -->
<script type="text/javascript"
	src="<?php echo base_url('assets/js/jquery-3.2.1.min.js');?>">
</script>
<script type="text/javascript"
	src="<?php echo base_url('assets/js/jquery.dataTables.min.js');?>">
</script>
<script type="text/javascript"
	src="<?php echo base_url('assets/js/dataTables.bootstrap.min.js');?>">
</script>
<script type="text/javascript"
	src="<?php echo base_url('assets/js/bootstrap.min.js');?>">
</script>
</body>
</html>