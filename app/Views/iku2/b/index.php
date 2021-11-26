<?php echo view('layout/header') ?>
<?php echo view('layout/navbar') ?>
<?php echo view('layout/sidebar') ?>

<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>IKU 2 (Prestasi)</h1>
      <div class="section-header-breadcrumb">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#add_iku2_b">Tambah data</button>
      </div>
    </div>

    <div class="card card-statistic-2">
      <div class="card-icon shadow-primary bg-primary">
        <i class="fas fa-user-graduate"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Total Mahasiswa</h4>
        </div>
        <div class="card-body">
          <?= '10' //$totalMhs 
          ?>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header">
        <h4>Tabel IKU 2</h4>
      </div>
      <div class="card-body">
        <?php if (!empty(session()->getFlashdata('message'))) : ?>
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo session()->getFlashdata('message'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <?php endif; ?>
        <div class="table-responsive">
          <!-- <table class="table table-striped" id="table-1"> -->
          <table id="mydata" class="table  table-bordered table-md" style="width:100%">
            <thead>
              <tr>
                <th class="text-center">
                  No
                </th>
                <th class="text-center">Nama</th>
                <th class="text-center">NIM</th>
                <th class="text-center">Prodi</th>
                <th class="text-center">Fakultas</th>
                <th class="text-center">Nama Kompetisi/Lomba</th>
                <th class="text-center">Tingkat Kompetisi/Lomba</th>
                <th class="text-center">Penyelenggara</th>
                <th class="text-center">Prestasi</th>
                <th class="text-center">Dosen Pembimbing</th>
                <th class="text-center">Tautan Sk Dosen Pembimbing</th>
                <th class="text-center">Tautan Sertif/Piagam/Bukti Prestasi</th>
                <th class="text-center">Tautan Bukti Isian di PDDIKTI</th>
                <th class="text-center">Status Validasi</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($iku_2_b as $row) { ?>
                <tr>
                  <td class="text-center"><?= $no++; ?></td>
                  <td class="text-center"><?php echo $row['nama']; ?></td>
                  <td class="text-center"><?php echo $row['nim']; ?></td>
                  <td class="text-center"><?php echo $row['prodi']; ?></td>
                  <td class="text-center"><?php echo $row['fakultas']; ?></td>
                  <td class="text-center"><?php echo $row['nama_lomba']; ?></td>
                  <td class="text-center"><?php echo $row['tingkat_lomba']; ?></td>
                  <td class="text-center"><?php echo $row['penyelenggara']; ?></td>
                  <td class="text-center"><?php echo $row['prestasi']; ?></td>
                  <td class="text-center"><?php echo $row['dospem']; ?></td>
                  <td class="text-center"><?php echo $row['sk_dospem']; ?></td>
                  <td class="text-center"><?php echo $row['tautan_sertif']; ?></td>
                  <td class="text-center"><?php echo $row['tautan_bukti_pddikti']; ?></td>
                  <td class="text-center">
                    <?php if ($row['status_validasi'] == 1) {
                      echo ' <button class="btn btn-icon btn-success"><i class="fas fa-fw fa-check"></i></button>';
                    } else if ($row['status_validasi'] == 0) {
                      echo '<button class="btn btn-icon btn-danger"><i class="fas fa-fw fa-times"></i></button>';
                    } else {
                      echo '';
                    } ?>
                  </td>
                  <td class="text-center">
                    <div class="btn-group">
                      <a href="<?php echo base_url('/iku2_b/edit/' . $row['id']); ?>" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                      <a href="<?php echo base_url('/iku2_b/delete/' . $row['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus <?php echo $row['nama']; ?>?')"><i class="fas fa-trash-alt"></i></a>
                    </div>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
  </section>
</div>
</div>

<!-- Add Data -->
<form action="/iku2_b/save" method="post">
  <div class="modal fade" id="add_iku2_b" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data IKU 2 (Prestasi)</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control" name="nama" placeholder="Masukan Nama">
                </div>
                <div class="form-group">
                  <label>NIM</label>
                  <input type="number" class="form-control" name="nim" placeholder="Masukan NIM">
                </div>
                <div class="form-group">
                  <label>Prodi</label>
                  <input type="text" class="form-control" name="prodi" placeholder="Masukan Prodi">
                </div>
                <div class="form-group">
                  <label>Fakultas</label>
                  <input type="text" class="form-control" name="fakultas" placeholder="Masukan Fakultas">
                </div>
                <div class="form-group">
                  <label>Nama Kompetisi/Lomba</label>
                  <input type="text" class="form-control" name="nama_lomba" placeholder="Masukan Nama Kompetisi/Lomba">
                </div>
                <div class="form-group">
                  <label>Tingkat Kompetisi/Lomba</label>
                  <input type="text" class="form-control" name="tingkat_lomba" placeholder="Masukan Tingkat Kompetisi/Lomba">
                </div>
                <div class="form-group">
                  <label>Penyelenggara</label>
                  <input type="text" class="form-control" name="penyelenggara" placeholder="Masukan Penyelenggara">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label>Prestasi</label>
                  <input type="text" class="form-control" name="prestasi" placeholder="Masukan Prestasi">
                </div>
                <div class="form-group">
                  <label>Dosen Pembimbing</label>
                  <input type="text" class="form-control" name="dospem" placeholder="Masukan Dosen Pembimbing">
                </div>
                <div class="form-group">
                  <label>Tautan SK Dosen Pembimbing</label>
                  <input type="text" class="form-control" name="sk_dospem" placeholder="Masukan Tautan SK Dosen Pembimbing">
                </div>
                <div class="form-group">
                  <label>Tautan Sertifikat/Piagam/Bukti Prestasi</label>
                  <input type="text" class="form-control" name="tautan_sertif" placeholder="Masukan Tautan SK">
                </div>
                <div class="form-group">
                  <label>Tautan Bukti Isian di PDDIKTI </label>
                  <input type="text" class="form-control" name="tautan_bukti_pddikti" placeholder="Masukan Tautan Bukti PDDIKTI">
                </div>
                <div class="form-group">
                  <label>Status Validasi</label><br>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="ya" name="status_validasi" class="custom-control-input" value="1">
                    <label class="custom-control-label" for="ya">Ya</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="tidak" name="status_validasi" class="custom-control-input" value="0">
                    <label class="custom-control-label" for="tidak">Tidak</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
          <button type="submit" class="btn btn-success">Simpan</button>
        </div>
      </div>
    </div>
  </div>
</form>
<!-- End Add data -->

<?php echo view('layout/footer') ?>

<script>
  $(document).ready(function() {
    $('#mydata').DataTable({
      responsive: {
        details: {
          display: $.fn.dataTable.Responsive.display.modal({
            header: function(row) {
              var data = row.data();
              return 'Details for ' + data[0] + ' ' + data[2];
            }
          }),
          renderer: $.fn.dataTable.Responsive.renderer.tableAll({
            tableClass: 'table'
          })
        }
      }
    });
  });
</script>


<script type="text/javascript" language="javascript">
  $(document).ready(function() {
    var dataTable = $('#tabel_serverside').DataTable({
      "processing": true,
      "oLanguage": {
        "sLengthMenu": "Tampilkan _MENU_ data per halaman",
        "sSearch": "Pencarian: ",
        "sZeroRecords": "Maaf, tidak ada data yang ditemukan",
        "sInfo": "Menampilkan _START_ s/d _END_ dari _TOTAL_ data",
        "sInfoEmpty": "Menampilkan 0 s/d 0 dari 0 data",
        "sInfoFiltered": "(di filter dari _MAX_ total data)",
        "oPaginate": {
          "sFirst": "<<",
          "sLast": ">>",
          "sPrevious": "<",
          "sNext": ">"
        }
      },
      columnDefs: [{
        targets: [0],
        orderable: false
      }],
      "ordering": true,
      "info": true,
      "serverSide": true,
      "stateSave": true,
      "scrollX": true,
      "ajax": {
        url: "<?php echo base_url("Utama/listdata"); ?>", // json datasource
        type: "post", // method  , by default get
        error: function() { // error handling
          $(".tabel_serverside-error").html("");
          $("#tabel_serverside").append('<tbody class="tabel_serverside-error"><tr><th colspan="3">Data Tidak Ditemukan di Server</th></tr></tbody>');
          $("#tabel_serverside_processing").css("display", "none");

        }
      }
    });
  });
</script>