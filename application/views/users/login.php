<head>
  <title>E-Class Report Card</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/bs/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/bs/font-awesome.css">
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <style type="text/css">
    .dropdown-menu{ filter:drop-shadow(3px 3px 5px #4d87c5); 
      border: 1px solid darkblue;
    }

    .thumnail{
      max-width: 100px;
      max-height: 75px;
    }
    
    li{ margin: 50px; }

    .hey{
      background-image: url('<?php echo base_url(); ?>assets/images/index.jpeg'); 
      background-repeat: no-repeat;
    }
    .container{
    	border: 2px solid #ddd;
    	padding-top: 10px; 
    	padding-right: 50px;
    	height: 75%;
    	text-align: justify;
    }
    .row{
    	margin-left: 15px;
    }
  </style>
</head>

<body>
	<div class="navbar navbar-expand-lg navbar-primary bg-light hey" style="border-bottom: 2px solid #ddd; padding-right: 50px; margin-bottom: 15px;">
		<a class="navbar-brand" href="<?php echo base_url(); ?>">
	  		<p class="text-primary"><h1>TechClass ERC</h1>
	  		The place where grades are transparent</p></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
	    	<span class="navbar-toggler-icon"></span>
	  	</button>
	</div>

	<div class="row">
		<div class="container col-md-4">
			<h3>About</h3>
			<p><b>TechClass ERC</b> is website application that lets the parents, teacher and students interact with each other. Teachers can compute the grades here and post it online, let the parents know their children's performance in school. with this website, transparancy as to how the student is graded will be implemented. the formula for the calculation of the raw grades data and the grades itself will be shown.</p>
		</div>
		<div class="col-md-8">
			<ul class="nav justify-content-center">
		 	<li class="nav-item">
				<div class="row dropdown">
			            <a href="" class="navbar-brand" data-toggle="dropdown"><img class="thumnail" src="<?php echo base_url();?>assets/images/images.jpeg">
			            	<small><b>I'm A Student</b></small></a>
			           	<div class="dropdown-menu" style="margin-top: 10px;">
			            		<?php if($this->session->flashdata('login_failed')): ?>
				      			<?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
				    		<?php endif; ?>
				
							<div class="container">;
								<?php echo form_open('users/login_stud'); ?>
									<div class="form-group table-primary"  style="border-radius: 10px;">
										<label style="margin-left: 15px;"><b>Username</b></label>
										<input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
									</div>
									<div class="form-group table-primary"  style="border-radius: 	10px;">
										<label style="margin-left: 15px;"><b>Password</b></label>
										<input type="password" name="password" class="form-control" placeholder="********" required autofocus>
									</div>
									<button type="submit" class="btn btn-primary ">Login</button>
								<?php echo form_close(); ?>
							</div>
			           	</div>
				</div>
		 	</li>
		 	<li class="nav-item">
			<div class="row dropdown">
	            <a href="" class="navbar-brand" data-toggle="dropdown"><img class="thumnail" src="<?php echo base_url();?>assets/images/index.png"><small><b>I'm A Teacher</b></small></a>
	           	<div class="dropdown-menu" style="margin-top: 10px;">
	            		<?php if($this->session->flashdata('login_failed')): ?>
		      			<?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
		    		<?php endif; ?>
		
					<div class="container">;
						<?php echo form_open('users/login_teach'); ?>
							<div class="form-group table-primary"  style="border-radius: 10px;">
								<label style="margin-left: 15px;"><b>Username</b></label>
								<input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
							</div>
							<div class="form-group table-primary"  style="border-radius: 	10px;">
								<label style="margin-left: 15px;"><b>Password</b></label>
								<input type="password" name="password" class="form-control" placeholder="********" required autofocus>
							</div>
							<button type="submit" class="btn btn-primary ">Login</button>
						<?php echo form_close(); ?>
					</div>
	           	</div>
			</div>
		 	</li>

		 <li class="nav-item">
			<div class="row dropdown">
	            <a href="" class="navbar-brand" data-toggle="dropdown"><img class="thumnail" src="<?php echo base_url();?>assets/images/par.png"><small><b>I'm A Parent</b></small></a>
	           	<div class="dropdown-menu" style="margin-top: 10px;">
	            		<?php if($this->session->flashdata('login_failed')): ?>
		      			<?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
		    		<?php endif; ?>
		
					<div class="container">;
						<?php echo form_open('users/login_par'); ?>
							<div class="form-group table-primary"  style="border-radius: 10px;">
								<label style="margin-left: 15px;"><b>Username</b></label>
								<input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
							</div>
							<div class="form-group table-primary"  style="border-radius: 	10px;">
								<label style="margin-left: 15px;"><b>Password</b></label>
								<input type="password" name="password" class="form-control" placeholder="********" required autofocus>
							</div>
							<button type="submit" class="btn btn-primary ">Login</button>
						<?php echo form_close(); ?>
					</div>
	           	</div>
	        </div>
		</li>
	 </ul>
		</div>
	</div>
</body>

