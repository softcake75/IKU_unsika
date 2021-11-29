<?php echo view('layout/header') ?>
<?php echo view('layout/navbar') ?>
<?php echo view('layout/sidebar') ?>

<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>IKU 5 (Karya Seni)</h1>
      <div class="section-header-breadcrumb">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#add_iku5_c">Tambah data</button>
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
                <h4>Tabel IKU 5</h4>
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
                  <table id="mydata" class="table  table-bordered table-md" style="width:100%">
                    <thead>
                      <tr>
                        <th class="text-center">
                          No
                        </th>
                        <th class="text-center">Jenis Karya</th>
                        <th class="text-center">Judul</th>
                        <th class="text-center">Tautan Katalog Pameran</th>
                        <th class="text-center">Tautan Sertifikat Festival/Pameran/Pemghargaan</th>
                        <th class="text-center">Tautan Sertifikat/Bukti Lolos Kurasi</th>
                        <th class="text-center">Tautan MoU</th>
                        <th class="text-center">Tautan Bukti Update Sister</th>
                        <th class="text-center">Status Validasi</th>
                        <th class="text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $no = 1;
                      foreach ($iku5_c as $row) { ?>
                        <tr>
                          <td class="text-center"><?= $no++; ?></td>
                          <td class="text-center"><?php echo $row['jenis_karya']; ?></td>
                          <td class="text-center"><?php echo $row['judul']; ?></td>
                          <td class="text-center"><?php echo $row['tautan_katalog']; ?></td>
                          <td class="text-center"><?php echo $row['sertif_pameran']; ?></td>
                          <td class="text-center"><?php echo $row['tautan_kurasi']; ?></td>
                          <td class="text-center"><?php echo $row['tautan_mou']; ?></td>
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
                              <a href="<?php echo base_url('/iku5_c/edit/' . $row['id']); ?>" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                              <a href="<?php echo base_url('/iku5_c/delete/' . $row['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus <?php echo $row['judul']; ?>?')"><i class="fas fa-trash-alt"></i></a>
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
<form action="/iku5_c/save" method="post">
  <div class="modal fade" id="add_iku5_c" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data IKU 5 (Karya Seni)</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label>Jenis Karya</label>
                  <input type="text" class="form-control" name="jenis_karya" placeholder="Masukan Jenis Karya">
                </div>
                <div class="form-group">
                  <label>Judul</label>
                  <input type="text" class="form-control" name="judul" placeholder="Masukan Judul">
                </div>
                <div class="form-group">
                  <label>Tautan Katalog</label>
                  <input type="text" class="form-control" name="tautan_katalog" placeholder="Masukan Tautan Katalog">
                </div>
                <div class="form-group">
                  <label>Tautan Sertifikat Festival/Pameran/Pemghargaan</label>
                  <input type="text" class="form-control" name="sertif_pameran" placeholder="Masukan Tautan Sertifikat Festival/Pameran/Pemghargaan">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label>Tautan Sertifikat/Bukti Lolos Kurasi</label>
                  <input type="text" class="form-control" name="tautan_kurasi" placeholder="Masukan Tautan Sertifikat/Bukti Lolos Kurasi">
                </div>
                <div class="form-group">
                  <label>Tautan MoU</label>
                  <input type="text" class="form-control" name="tautan_mou" placeholder="Masukan Tautan MoU">
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
              return 'Details for ' + data[2]
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