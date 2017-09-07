<!DOCTYPE html>
<html >

<head>
  <meta charset="UTF-8">
  <div> <img src="https://clientzone.rumahweb.com/templates/six/img/logo.png"></div>
  <title>Calm breeze login screen</title>
  
  

      <link rel="stylesheet" href="<?php echo base_url();?>assets/login/css/style.css">

  
</head>

<body>
  <div class="wrapper">
  <?php if ($this->session->flashdata('info')): ?>

        <div class="alert alert-success alert-dismissible fade in">
            <?php echo $this->session->flashdata('info'); ?> </div>

    <?php endif; ?>
	<div class="container">
		<h1>Login</h1>
		 <?php echo form_open('login/cobalogin'); ?>
		<div class="form">
			<input type="text" placeholder="Username" name="user">
			<input type="password" placeholder="Password" name="pass">
			<button type="submit"  value="login" name="login">Login</button>
		</div>
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
<?php echo form_close(); ?>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="<?php echo base_url();?>assets/login/js/index.js"></script>

</body>
</html>
