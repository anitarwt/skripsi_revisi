<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="/assets/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/assets/admin/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/assets/admin/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/assets/admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet"
          type="text/css">

    <style type="text/css">
        body {
            background: white !important;
        }

        /* Adding !important forces the browser to overwrite the default style applied by Bootstrap */
    </style>
    <style type="text/css">
        .navbar-default {
            background-color: white;
            background-image: none;
            background-repeat: no-repeat;
        }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>


<div class="container">

    <?php if ($this->session->flashdata('info')): ?>

        <div class="alert alert-success alert-dismissible fade in">
            <?php echo $this->session->flashdata('info'); ?> </div>

    <?php endif; ?>

    <div class="col-md-4 col-md-offset-4">
        <div class="login-panel panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Login</h3>
            </div>
            <div class="panel-body">
                <?php echo form_open('login/cobalogin'); ?>
                <fieldset>
                    <div class="form-group">
                        <input class="form-control" placeholder="username" name="user" type="username" autofocus
                               required="username harus di isi">
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="Password" name="pass" type="password" value=""
                               required="password harus di isi">
                    </div>
                    <!-- Change this to a button or input when using this as a form -->
                    <input class="btn btn-lg btn-success btn-block" type="submit" placeholder="login" value="login"
                           name="login">
                </fieldset>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
</div>

<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/admin/vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url(); ?>assets/admin/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo base_url(); ?>assets/admin/vendor/metisMenu/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php echo base_url(); ?>assets/admin/dist/js/sb-admin-2.js"></script>

</body>

</html>
