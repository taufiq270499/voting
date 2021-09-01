
<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="<?php echo base_url();?>sweetalert.min.js"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Hello, world!</title>
</head>
<body>
	<div class="container">
		<br>
		<font face="Cordia New"><h1>Selamat Datang, <?= $user['nama']; ?></h1><br></font>
		<p>Silahkan pilih salah satu dari daftar coach dibawah ini :</p>
		<?= $this->session->flashdata('message1'); ?>
    <?= $this->session->flashdata('message2');?>
    <?= $this->session->flashdata('message3');?>
    <?= $this->session->flashdata('message4');?>
    <?= $this->session->flashdata('message5');?>
    <?= $this->session->flashdata('message6');?>
    <?= $this->session->flashdata('message7');?>
    <?= $this->session->flashdata('message8');?>
    <script type="text/javascript">
    
      Swal({
        title: 'Berhasil',
        text: 'fdkjffdk',
        type: 'success'
      });
    </script>
    <?= $this->session->flashdata('message9');?>

    <br>
    <div class="row">
     <div class="col-sm-4">
      <div class="card">
       <div class="card-body">
        <center><img width="150" src="<?php echo base_url();?>coachadi.jpg"></center><br>
        <center><h5 class="card-title">ADIWINATA LIEM
        </h5></center><br>
        <center><button class="btn btn-success" data-toggle="modal" data-target="#pilihcoach1" >pilih coach</button></center>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
     <div class="card-body">
      <center><img width="150" src="<?php echo base_url();?>coachvonny.png"></center><br>
      <center><h5 class="card-title">VONNY RAMALI
      </h5></center><br>
      <center><button class="btn btn-success" data-toggle="modal" data-target="#pilihcoach2" >pilih coach</button></center>
    </div>
  </div>
</div>
<div class="col-sm-4">
  <div class="card">
   <div class="card-body">
    <center><img width="140" src="<?php echo base_url();?>coachandre.png"></center><br>
    <center><h5 class="card-title">ANDRE WIJAYA
    </h5></center><br>
    <center><button class="btn btn-success" data-toggle="modal" data-target="#pilihcoach3" >pilih coach</button></center>
  </div>
</div>
</div>
</div>
<br>
<div class="row">
 <div class="col-sm-4">
  <div class="card">
   <div class="card-body">
    <center><img width="150" src="<?php echo base_url();?>coachindra.jpg"></center><br>
    <center><h5 class="card-title">PHILIPUS INDRA TJAHJANA
    </h5></center><br>
    <center><button class="btn btn-success" data-toggle="modal" data-target="#pilihcoach4" >pilih coach</button></center>
  </div>
</div>
</div>
<div class="col-sm-4">
  <div class="card">
   <div class="card-body">
    <center><img width="160" src="<?php echo base_url();?>coachadit.jpg"></center><br>
    <center><h5 class="card-title">ADITHIA AMIDJAYA
    </h5></center><br>
    <center><button class="btn btn-success" data-toggle="modal" data-target="#pilihcoach5" >pilih coach</button></center>
  </div>
</div>
</div>
<div class="col-sm-4">
  <div class="card">
   <div class="card-body">
    <center><img width="160" src="<?php echo base_url();?>coachrahmadsyah1.png"></center><br>
    <center><h5 class="card-title">RAHMADSYAH
    </h5></center><br>
    <center><button class="btn btn-success" data-toggle="modal" data-target="#pilihcoach6" >pilih coach</button></center>
  </div>
</div>
</div>
</div> 
<br>
<div class="row">
 <div class="col-sm-4">
  <div class="card">
   <div class="card-body">
    <center><img width="160" src="<?php echo base_url();?>coachverly.jpg"></center><br>
    <center><h5 class="card-title">VERLY NURSANTO
    </h5></center><br>
    <center><button class="btn btn-success" data-toggle="modal" data-target="#pilihcoach7" >pilih coach</button></center>
  </div>
</div>
</div>
<div class="col-sm-4">
  <div class="card">
   <div class="card-body">
    <center><img width="160" src="<?php echo base_url();?>coachsusana.jpg"></center><br>
    <center><h5 class="card-title">SUSANA DEWI
    </h5></center><br>
    <center><button class="btn btn-success" data-toggle="modal" data-target="#pilihcoach8" >pilih coach</button></center>
  </div>
</div>
</div>
<div class="col-sm-4">
  <div class="card">
   <div class="card-body">
    <center><img width="140" src="<?php echo base_url();?>coachsalim.jpg"></center><br>
    <center><h5 class="card-title">SALIM SUTIONO
    </h5></center><br>
    <center><button class="btn btn-success" data-toggle="modal" data-target="#pilihcoach9" >pilih coach</button></center>
  </div>
</div>
</div>
</div> 

<br>

</div>






<!-- Modal coach 1 -->
<div class="modal fade" id="pilihcoach1" tabindex="-1" role="dialog" aria-labelledby="tambahAkunLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: green;">
        <h5 class="modal-title" id="tambahAkunLabel" style="color: white;">Input Pilihan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="user" method="post" action="<?php echo base_url('dashboard/inputpilihan'); ?>">
        <div class="modal-body">

          <div class="form-group">
            <input type="hidden" class="form-control form-control-user" name="nama" id="exampleFirstName" value="<?= $user['nama']; ?>" placeholder="Full Name" required>
            <?= form_error('name', '<small class="text-danger pl-3" >', '</small>'); ?>
          </div>

          <div class="form-group">
            <input type="hidden" class="form-control form-control-user" name="telp" value="<?= $user['telp']; ?>" placeholder="Email Address" required>
            <?= form_error('email', '<small class="text-danger pl-3" >', '</small>'); ?>
          </div>


          <div class="form-group">
            <input type="hidden" class="form-control form-control-user" name="email" value="<?= $user['email']; ?>" placeholder="Email Address" required>
            <?= form_error('email', '<small class="text-danger pl-3" >', '</small>'); ?>
          </div>


          <div class="form-group">
            <input type="hidden" class="form-control form-control-user" name="pilihan" value="ADIWINATA LIEM" placeholder="Email Address" required>
            <?= form_error('email', '<small class="text-danger pl-3" >', '</small>'); ?>
          </div>

          <p>Anda akan memilih coach ADIWINATA LIEM ?</p>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Belum Yakin</button>
          <button type="submit" class="btn btn-primary">Iya</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal coach 2 -->
<div class="modal fade" id="pilihcoach2" tabindex="-1" role="dialog" aria-labelledby="tambahAkunLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: green;">
        <h5 class="modal-title" id="tambahAkunLabel" style="color: white;">Input Pilihan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="user" method="post" action="<?php echo base_url('dashboard/inputpilihan2'); ?>">
        <div class="modal-body">

          <div class="form-group">
            <input type="hidden" class="form-control form-control-user" name="nama" id="exampleFirstName" value="<?= $user['nama']; ?>" placeholder="Full Name" required>
            <?= form_error('name', '<small class="text-danger pl-3" >', '</small>'); ?>
          </div>

          <div class="form-group">
            <input type="hidden" class="form-control form-control-user" name="telp" value="<?= $user['telp']; ?>" placeholder="Email Address" required>
            <?= form_error('email', '<small class="text-danger pl-3" >', '</small>'); ?>
          </div>


          <div class="form-group">
            <input type="hidden" class="form-control form-control-user" name="email" value="<?= $user['email']; ?>" placeholder="Email Address" required>
            <?= form_error('email', '<small class="text-danger pl-3" >', '</small>'); ?>
          </div>


          <div class="form-group">
            <input type="hidden" class="form-control form-control-user" name="pilihan" value="VONNY RAMALI" placeholder="Email Address" required>
            <?= form_error('email', '<small class="text-danger pl-3" >', '</small>'); ?>
          </div>

          <p>Anda akan memilih coach VONNY RAMALI ?</p>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Belum Yakin</button>
          <button type="submit" class="btn btn-primary">Iya</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal coach 3 -->
<div class="modal fade" id="pilihcoach3" tabindex="-1" role="dialog" aria-labelledby="tambahAkunLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: green;">
        <h5 class="modal-title" id="tambahAkunLabel" style="color: white;">Input Pilihan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="user" method="post" action="<?php echo base_url('dashboard/inputpilihan3'); ?>">
        <div class="modal-body">

          <div class="form-group">
            <input type="hidden" class="form-control form-control-user" name="nama" id="exampleFirstName" value="<?= $user['nama']; ?>" placeholder="Full Name" required>
            <?= form_error('name', '<small class="text-danger pl-3" >', '</small>'); ?>
          </div>

          <div class="form-group">
            <input type="hidden" class="form-control form-control-user" name="telp" value="<?= $user['telp']; ?>" placeholder="Email Address" required>
            <?= form_error('email', '<small class="text-danger pl-3" >', '</small>'); ?>
          </div>


          <div class="form-group">
            <input type="hidden" class="form-control form-control-user" name="email" value="<?= $user['email']; ?>" placeholder="Email Address" required>
            <?= form_error('email', '<small class="text-danger pl-3" >', '</small>'); ?>
          </div>


          <div class="form-group">
            <input type="hidden" class="form-control form-control-user" name="pilihan" value="ANDRE WIJAYA" placeholder="Email Address" required>
            <?= form_error('email', '<small class="text-danger pl-3" >', '</small>'); ?>
          </div>

          <p>Anda akan memilih coach ANDRE WIJAYA ?</p>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Belum Yakin</button>
          <button type="submit" class="btn btn-primary">Iya</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal coach 4 -->
<div class="modal fade" id="pilihcoach4" tabindex="-1" role="dialog" aria-labelledby="tambahAkunLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: green;">
        <h5 class="modal-title" id="tambahAkunLabel" style="color: white;">Input Pilihan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="user" method="post" action="<?php echo base_url('dashboard/inputpilihan4'); ?>">
        <div class="modal-body">

          <div class="form-group">
            <input type="hidden" class="form-control form-control-user" name="nama" id="exampleFirstName" value="<?= $user['nama']; ?>" placeholder="Full Name" required>
            <?= form_error('name', '<small class="text-danger pl-3" >', '</small>'); ?>
          </div>

          <div class="form-group">
            <input type="hidden" class="form-control form-control-user" name="telp" value="<?= $user['telp']; ?>" placeholder="Email Address" required>
            <?= form_error('email', '<small class="text-danger pl-3" >', '</small>'); ?>
          </div>


          <div class="form-group">
            <input type="hidden" class="form-control form-control-user" name="email" value="<?= $user['email']; ?>" placeholder="Email Address" required>
            <?= form_error('email', '<small class="text-danger pl-3" >', '</small>'); ?>
          </div>


          <div class="form-group">
            <input type="hidden" class="form-control form-control-user" name="pilihan" value="PHILIPUS INDRA TJAHJANA" placeholder="Email Address" required>
            <?= form_error('email', '<small class="text-danger pl-3" >', '</small>'); ?>
          </div>

          <p>Anda akan memilih coach PHILIPUS INDRA TJAHJANA ?</p>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Belum Yakin</button>
          <button type="submit" class="btn btn-primary">Iya</button>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- Modal coach 5 -->
<div class="modal fade" id="pilihcoach5" tabindex="-1" role="dialog" aria-labelledby="tambahAkunLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: green;">
        <h5 class="modal-title" id="tambahAkunLabel" style="color: white;">Input Pilihan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="user" method="post" action="<?php echo base_url('dashboard/inputpilihan5'); ?>">
        <div class="modal-body">

          <div class="form-group">
            <input type="hidden" class="form-control form-control-user" name="nama" id="exampleFirstName" value="<?= $user['nama']; ?>" placeholder="Full Name" required>
            <?= form_error('name', '<small class="text-danger pl-3" >', '</small>'); ?>
          </div>

          <div class="form-group">
            <input type="hidden" class="form-control form-control-user" name="telp" value="<?= $user['telp']; ?>" placeholder="Email Address" required>
            <?= form_error('email', '<small class="text-danger pl-3" >', '</small>'); ?>
          </div>


          <div class="form-group">
            <input type="hidden" class="form-control form-control-user" name="email" value="<?= $user['email']; ?>" placeholder="Email Address" required>
            <?= form_error('email', '<small class="text-danger pl-3" >', '</small>'); ?>
          </div>


          <div class="form-group">
            <input type="hidden" class="form-control form-control-user" name="pilihan" value="ADITHIA AMIDJAYA" placeholder="Email Address" required>
            <?= form_error('email', '<small class="text-danger pl-3" >', '</small>'); ?>
          </div>

          <p>Anda akan memilih coach ADITHIA AMIDJAYA ?</p>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Belum Yakin</button>
          <button type="submit" class="btn btn-primary">Iya</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal coach 6 -->
<div class="modal fade" id="pilihcoach6" tabindex="-1" role="dialog" aria-labelledby="tambahAkunLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: green;">
        <h5 class="modal-title" id="tambahAkunLabel" style="color: white;">Input Pilihan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="user" method="post" action="<?php echo base_url('dashboard/inputpilihan6'); ?>">
        <div class="modal-body">

          <div class="form-group">
            <input type="hidden" class="form-control form-control-user" name="nama" id="exampleFirstName" value="<?= $user['nama']; ?>" placeholder="Full Name" required>
            <?= form_error('name', '<small class="text-danger pl-3" >', '</small>'); ?>
          </div>

          <div class="form-group">
            <input type="hidden" class="form-control form-control-user" name="telp" value="<?= $user['telp']; ?>" placeholder="Email Address" required>
            <?= form_error('email', '<small class="text-danger pl-3" >', '</small>'); ?>
          </div>


          <div class="form-group">
            <input type="hidden" class="form-control form-control-user" name="email" value="<?= $user['email']; ?>" placeholder="Email Address" required>
            <?= form_error('email', '<small class="text-danger pl-3" >', '</small>'); ?>
          </div>


          <div class="form-group">
            <input type="hidden" class="form-control form-control-user" name="pilihan" value="RAHMADSYAH" placeholder="Email Address" required>
            <?= form_error('email', '<small class="text-danger pl-3" >', '</small>'); ?>
          </div>

          <p>Anda akan memilih coach RAHMADSYAH ?</p>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Belum Yakin</button>
          <button type="submit" class="btn btn-primary">Iya</button>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- Modal coach 7 -->
<div class="modal fade" id="pilihcoach7" tabindex="-1" role="dialog" aria-labelledby="tambahAkunLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: green;">
        <h5 class="modal-title" id="tambahAkunLabel" style="color: white;">Input Pilihan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="user" method="post" action="<?php echo base_url('dashboard/inputpilihan7'); ?>">
        <div class="modal-body">

          <div class="form-group">
            <input type="hidden" class="form-control form-control-user" name="nama" id="exampleFirstName" value="<?= $user['nama']; ?>" placeholder="Full Name" required>
            <?= form_error('name', '<small class="text-danger pl-3" >', '</small>'); ?>
          </div>

          <div class="form-group">
            <input type="hidden" class="form-control form-control-user" name="telp" value="<?= $user['telp']; ?>" placeholder="Email Address" required>
            <?= form_error('email', '<small class="text-danger pl-3" >', '</small>'); ?>
          </div>


          <div class="form-group">
            <input type="hidden" class="form-control form-control-user" name="email" value="<?= $user['email']; ?>" placeholder="Email Address" required>
            <?= form_error('email', '<small class="text-danger pl-3" >', '</small>'); ?>
          </div>


          <div class="form-group">
            <input type="hidden" class="form-control form-control-user" name="pilihan" value="VERLY NURSANTO" placeholder="Email Address" required>
            <?= form_error('email', '<small class="text-danger pl-3" >', '</small>'); ?>
          </div>

          <p>Anda akan memilih coach VERLY NURSANTO ?</p>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Belum Yakin</button>
          <button type="submit" class="btn btn-primary">Iya</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal coach 8 -->
<div class="modal fade" id="pilihcoach8" tabindex="-1" role="dialog" aria-labelledby="tambahAkunLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: green;">
        <h5 class="modal-title" id="tambahAkunLabel" style="color: white;">Input Pilihan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="user" method="post" action="<?php echo base_url('dashboard/inputpilihan8'); ?>">
        <div class="modal-body">

          <div class="form-group">
            <input type="hidden" class="form-control form-control-user" name="nama" id="exampleFirstName" value="<?= $user['nama']; ?>" placeholder="Full Name" required>
            <?= form_error('name', '<small class="text-danger pl-3" >', '</small>'); ?>
          </div>

          <div class="form-group">
            <input type="hidden" class="form-control form-control-user" name="telp" value="<?= $user['telp']; ?>" placeholder="Email Address" required>
            <?= form_error('email', '<small class="text-danger pl-3" >', '</small>'); ?>
          </div>


          <div class="form-group">
            <input type="hidden" class="form-control form-control-user" name="email" value="<?= $user['email']; ?>" placeholder="Email Address" required>
            <?= form_error('email', '<small class="text-danger pl-3" >', '</small>'); ?>
          </div>


          <div class="form-group">
            <input type="hidden" class="form-control form-control-user" name="pilihan" value="SUSANA DEWI" placeholder="Email Address" required>
            <?= form_error('email', '<small class="text-danger pl-3" >', '</small>'); ?>
          </div>

          <p>Anda akan memilih coach SUSANA DEWI ?</p>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Belum Yakin</button>
          <button type="submit" class="btn btn-primary">Iya</button>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- Modal coach 9 -->
<div class="modal fade" id="pilihcoach9" tabindex="-1" role="dialog" aria-labelledby="tambahAkunLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: green;">
        <h5 class="modal-title" id="tambahAkunLabel" style="color: white;">Input Pilihan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="user" method="post" action="<?php echo base_url('dashboard/inputpilihan9'); ?>">
        <div class="modal-body">

          <div class="form-group">
            <input type="hidden" class="form-control form-control-user" name="nama" id="exampleFirstName" value="<?= $user['nama']; ?>" placeholder="Full Name" required>
            <?= form_error('name', '<small class="text-danger pl-3" >', '</small>'); ?>
          </div>

          <div class="form-group">
            <input type="hidden" class="form-control form-control-user" name="telp" value="<?= $user['telp']; ?>" placeholder="Email Address" required>
            <?= form_error('email', '<small class="text-danger pl-3" >', '</small>'); ?>
          </div>


          <div class="form-group">
            <input type="hidden" class="form-control form-control-user" name="email" value="<?= $user['email']; ?>" placeholder="Email Address" required>
            <?= form_error('email', '<small class="text-danger pl-3" >', '</small>'); ?>
          </div>


          <div class="form-group">
            <input type="hidden" class="form-control form-control-user" name="pilihan" value="SALIM SUTIONO" placeholder="Email Address" required>
            <?= form_error('email', '<small class="text-danger pl-3" >', '</small>'); ?>
          </div>

          <p>Anda akan memilih coach SALIM SUTIONO ?</p>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Belum Yakin</button>
          <button type="submit" class="btn btn-primary">Iya</button>
        </div>
      </form>
    </div>
  </div>
</div>







</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

