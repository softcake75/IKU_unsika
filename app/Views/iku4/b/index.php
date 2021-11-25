<?php echo view('layout/header') ?>
<?php echo view('layout/navbar') ?>
<?php echo view('layout/sidebar') ?>

<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>IKU 4 (Sertifikat Kompetensi/Profesi)</h1>
      <div class="section-header-breadcrumb">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#add_iku4_b">Tambah data</button>
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
      <div class="section-body">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4>Tabel IKU 4</h4>
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
                        <th class="text-center">Jenis Lembaga</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">Lembaga Sertifikasi</th>
                        <th class="text-center">Tautan Sertifikat</th>
                        <th class="text-center">Tautan Bukti Update Sister</th>
                        <th class="text-center">Status Validasi</th>
                        <th class="text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $no = 1;
                      foreach ($iku4_b as $row) { ?>
                        <tr>
                          <td class="text-center"><?= $no++; ?></td>
                          <td class="text-center"><?php echo $row['jenis_lembaga']; ?></td>
                          <td class="text-center"><?php echo $row['nama']; ?></td>
                          <td class="text-center"><?php echo $row['lembaga_sertifikasi']; ?></td>
                          <td class="text-center"><?php echo $row['tautan_sertifikat']; ?></td>
                          <td class="text-center"><?php echo $row['bukti_update_sister']; ?></td>
                          <td class="text-center">
                            <?php if ($row['status_validasi'] == 1) {
                              echo '<button class="btn btn-icon btn-success"><i class="fas fa-fw fa-check"></i></button>';
                            } else if ($row['status_validasi'] == 0) {
                              echo '<button class="btn btn-icon btn-danger"><i class="fas fa-fw fa-times"></i></button>';
                            } else {
                              echo '';
                            } ?>
                          </td>
                          <td class="text-center">
                            <div class="btn-group">
                              <a href="<?php echo base_url('/iku4_b/edit/' . $row['id']); ?>" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                              <a href="<?php echo base_url('/iku2_a/delete/' . $row['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus <?php echo $row['nama']; ?>?')"><i class="fas fa-trash-alt"></i></a>
                            </div>
                          </td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
</div>
</div>

<!-- Add Data -->
<form action="/iku4_b/save" method="post">
  <div class="modal fade" id="add_iku4_b" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah data IKU 2 (Pengalaman Diluar Kampus)</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>Jenis Lembaga</label>
            <select type="text" class="form-control" name="jenis_lembaga" placeholder="Masukan Jenis">
              <option value="Lembaga Sertifikasi Profesi (LSP)">Lembaga Sertifikasi Profesi (LSP)</option>
              <option value="Lembaga Sertifikasi Kompetensi (LSK)">Lembaga Sertifikasi Kompetensi (LSK)</option>
              <option value="Lembaga Sertifikasi Internasional">Lembaga Sertifikasi Internasional</option>
              <option value="Sertifikasi Perusahaan Fortune 500">Sertifikasi Perusahaan Fortune 500</option>
              <option value="Sertifikasi Perusahaan BUMN">Sertifikasi Perusahaan BUMN</option>
            </select>
          </div>
          <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" name="nama" placeholder="Masukan Nama">
          </div>
          <div class="form-group">
            <label>Lembaga Serfitikasi</label>
            <input type="text" class="form-control" name="lembaga_sertifikasi" placeholder="Masukan Lembaga Sertifikasi">
          </div>
          <div class="form-group">
            <label>Tautan Sertifikat</label>
            <input type="text" class="form-control" name="tautan_sertifikat" placeholder="Masukan Tautan Sertifikat">
          </div>
          <div class="form-group">
            <label>Tautan Bukti Telah Update di Sister</label>
            <input type="text" class="form-control" name="bukti_update_sister" placeholder="Masukan Tautan Bukti Telah Update di Sister">
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