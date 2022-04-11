<html>
	<head>
		<title>Home</title>
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	</head>
	<body>
	<div class="container">
		<div class="card">
			<div class="card-header">
				Home Page
			</div>
			<div class="card-body">
				<center><h1>Selamat Datang <?php echo $this->session->userdata('nama'); ?></h1></center>

				

		<form action="<!--?php echo base_url('project/update/' . $berita->id);?-->" method="POST">
  		  <div class="form-group">	
              <div class="row">
				<div class="col-12">

				<label for="exampleFormControlTextarea1">Edit Berita Ummul Quro</label>
    				<textarea class="form-control" id="exampleFormControlTextarea1" rows="3">
    					<!-- <?php echo $berita->content;?> -->

    				</textarea>
				</div>	


			  </div>

			  </div>
		</form>




				<hr/>
				<a href="<?php echo base_url(); ?>index.php/login/logout" class="btn btn-primary btn-lg btn-block">Logout</a>
			</div>
		</div>
	</div>		
	</body>
</html>
