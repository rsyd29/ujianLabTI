<html lang="en">
    <head>
		<title>To Do List</title>
		<style type="text/css">
			
			body {
				background-image: url("<?php echo base_url();?>/assets/img/todolist.png");				
				background-size: cover;	
				font-family: Arial, Helvetica, sans-serif;			
			}

			/* The Modal (background) */
			.modal {
			display: none; /* Hidden by default */
			position: fixed; /* Stay in place */
			z-index: 1; /* Sit on top */
			padding-top: 100px; /* Location of the box */
			left: 0;
			top: 0;
			width: 100%; /* Full width */
			height: 100%; /* Full height */
			overflow: auto; /* Enable scroll if needed */
			background-color: rgb(0,0,0); /* Fallback color */
			background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
			}

			/* Modal Content */
			.modal-content {
			background-color: #fefefe;
			margin: auto;
			padding: 20px;
			border: 1px solid #888;
			width: 80%;
			}

			/* The Close Button */
			.close {
			color: #aaaaaa;
			float: right;
			font-size: 28px;
			font-weight: bold;
			}

			.close:hover,
			.close:focus {
			color: #000;
			text-decoration: none;
			cursor: pointer;
			}
		</style>
        <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/style.css">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <?php if($this->session->userdata('logged_in')){?>
        <a class="navbar-brand" href="<?php echo base_url();?>posts">To DO! List</a>
        <?php } else { ?>
        <a class="navbar-brand" href="<?php echo base_url();?>users/login">To DO! List</a>
        <?php } ?>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <?php if($this->session->userdata('logged_in')){?>
        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url();?>posts">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url();?>posts/create">Create Task</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url();?>about">About</a>
                </li>
            </ul>
            <ul class="navbar-nav navbar-rigth">
                <li class="nav-item">					
                    <a class="nav-link" href="<?php echo base_url();?>users/logout">Logout</a>
                </li>
            </ul>
                <?php } else { ?>
            <ul class="navbar-nav mv-auto">
                <!-- <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url();?>users/login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url();?>users/register">Register</a>
                </li> -->
                <? } ?>
            </ul>
        </div>
    </nav>
    <div class="container-fluid">
    <!-- Flash messages -->
        <?php if($this->session->flashdata('user_registered')): ?>
            <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
        <?php endif; ?>

        <?php if($this->session->flashdata('post_created')): ?>
            <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>'; ?>
        <?php endif; ?>

        <?php if($this->session->flashdata('post_deleted')): ?>
            <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_deleted').'</p>'; ?>
        <?php endif; ?>

        <?php if($this->session->flashdata('login_failed')): ?>
            <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
        <?php endif; ?>

        <?php if($this->session->flashdata('user_logged_in')): ?>
            <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_logged_in').'</p>'; ?>
        <?php endif; ?>

        <?php if($this->session->flashdata('user_logged_out')): ?>
            <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_logged_out').'</p>'; ?>
        <?php endif; ?>
