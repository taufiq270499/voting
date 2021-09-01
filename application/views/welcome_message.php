<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	   <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="<?php echo base_url();?>sweetalert.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

</head>

	<body>

<div class="container">
	<br>
	<br>
	<center>
	<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="text-center">
						<h3><i class="fa fa-users fa-4x"></i></h3>
						<h2 class="text-center">Pilih Coach</h2>
						<p>Pastikan kamu mengisi data dibawah ini<br>dengan lengkap dan valid ya</p>
						<div class="panel-body">
							<?= $this->session->flashdata('message');?>

							<form method="post" action="<?= base_url('Welcome/daftarlogin')?>" role="form">

								<div class="form-group">

								<input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama lengkap">

								</div>

								<div class="form-group">

								<input type="number" name="telp" id="telp" class="form-control" placeholder="Masukkan nomer whatsapp">

								</div>

								<div class="form-group">
									<input  type="email" name="email" id="email" class="form-control" placeholder="Masukkan email">
									<?= form_error('email','<div class="text-danger pl-5">', '</div>'); ?>
								</div>


							 <input type="submit" id="login" class="btn btn-success" value="Masuk" name="submit">
     <br>
     <br>
           					

							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</center>
		</div>
	</section>


</body>

</html>
</div>

</body>

</html>
</div>
</body>
</html>

<script type="text/javascript">

$('input[name="submit"]').on('click', function() {
  if ($('input[name="nama"]').val() == "") {
     swal("data harap dilengkapi", '', 'error');
    return false;
}
 if ($('input[name="telp"]').val() == "") {
     swal("data harap dilengkapi", '', 'error');
    return false;
}

 if ($('input[name="email"]').val() == "") {
     swal("data harap dilengkapi", '', 'error');
    return false;
}
  return true;
})
</script>



