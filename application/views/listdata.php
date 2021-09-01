<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lihat Data</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  </head>
  <body>
  <section class="section">
    <div class="container">
      <table class="table table-striped table-hover dt-responsive display nowrap" id="tabeluser">

							<thead>
								<tr>
									<th>Nomor</th>
									<th>Nama Pemilih</th>
									<th>Telp/Watshapp</th>
									<th>Email</th>
									<th>Coach Yang Dipilih</th>
									
								</tr>
							</thead>
							<tbody>

								<?php
								$no = 1;
								foreach ($record as $show) : ?>
									<tr>
										<td scope="row"><?= $no++ ?></td>
										<td><?= $show['nama'] ?></td>
										<td><?= $show['telp'] ?></td>
										<td><?= $show['email'] ?></td>
										<td><?= $show['pilihan'] ?></td>


									</tr>
								

							<?php endforeach; ?>
							  </tbody>
      </table>
      <p class="subtitle">
        Refresh data secara berkala
      </p>
    </div>
  </section>
  </body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function() {
      $('#tabeluser')
      .dataTable({
                    "responsive": true
                  });
       });
  </script>
</html>