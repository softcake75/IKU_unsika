<?php echo view('layout/header') ?>
<?php echo view('layout/navbar') ?>
<?php echo view('layout/sidebar') ?>

<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1 class="text-center">DAFTAR DOSEN</h1>
      <div class="section-header-breadcrumb">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#add_dafdos">Tambah data</button>
      </div>
    </div>

    <div class="card">
      <div class="section-body">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4>Tabel</h4>
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
                        <th class="text-center">Tanggal Lahir</th>
                        <th class="text-center">NIDN/NIDK</th>
                        <th class="text-center">Status Kepegawaian</th>
                        <th class="text-center">Prodi Mengajar</th>
                        <th class="text-center">Status Keaktifan</th>
                        <th class="text-center">Jenjang Pendidikan Terakhir</th>
                        <th class="text-center">Jenis Kelamin</th>
                        <th class="text-center">IPT - Perguruan Tinggi</th>
                        <th class="text-center">Bidang Ilmu</th>
                        <th class="text-center">Jabatan Fungsional</th>
                        <th class="text-center">Kepakaran</th>
                        <th class="text-center">Status Validasi</th>
                        <th class="text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $no = 1;
                      foreach ($dafdos as $row) { ?>
                        <tr>
                          <td class="text-center"><?= $no++; ?></td>
                          <td class="text-center"><?php echo $row['nama']; ?></td>
                          <td class="text-center"><?php echo $row['ttl']; ?></td>
                          <td class="text-center"><?php echo $row['nidn']; ?></td>
                          <td class="text-center"><?php echo $row['status_kepegawaian']; ?></td>
                          <td class="text-center"><?php echo $row['prodi_mengajar']; ?></td>
                          <td class="text-center">
                            <?php if ($row['status_keaktifan'] == 1) {
                              echo '<span class="badge badge-icon badge-success">Aktif</span>';
                            } else if ($row['status_keaktifan'] == 0) {
                              echo '<span class="badge badge-icon badge-danger">Tidak Aktif</span>';
                            } else {
                              echo '';
                            } ?>
                          </td>
                          <td class="text-center"><?php echo $row['pendidikan_terakhir']; ?></td>
                          <td class="text-center"><?php echo $row['jk']; ?></td>
                          <td class="text-center"><?php echo $row['pt']; ?></td>
                          <td class="text-center"><?php echo $row['bidang_ilmu']; ?></td>
                          <td class="text-center"><?php echo $row['jabatan']; ?></td>
                          <td class="text-center"><?php echo $row['kepakaran']; ?></td>
                          <td class="text-center">
                            <?php if ($row['validasi'] == 1) {
                              echo '<button class="btn btn-icon btn-success"><i class="fas fa-fw fa-check"></i></button>';
                            } else if ($row['validasi'] == 0) {
                              echo '<button class="btn btn-icon btn-danger"><i class="fas fa-fw fa-times"></i></button>';
                            } else {
                              echo '';
                            } ?>
                          </td>
                          <td class="text-center">
                            <div class="btn-group">
                              <a href="<?php echo base_url('/dafdos/edit/' . $row['id']); ?>" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                              <a href="<?php echo base_url('/dafdos/delete/' . $row['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus <?php echo $row['nama']; ?>?')"><i class="fas fa-trash-alt"></i></a>
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
<form action="/dafdos/save" method="post">
  <div class="modal fade" id="add_dafdos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Dosen</h5>
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
                  <label>Tanggal Lahir</label>
                  <input type="text" name="ttl" value="" class="form-control datepicker">
                </div>
                <div class="form-group">
                  <label>NIDN/NIDK</label>
                  <input type="number" class="form-control" name="nidn" placeholder="Masukan NIDN/NIDK">
                </div>
                <div class="form-group">
                  <label>Status Kepegawaian</label>
                  <select type="text" class="form-control" name="status_kepegawaian">
                    <option value="PNS">PNS</option>
                    <option value="Tetap Non PNS">Tetap Non PNS</option>
                    <option value="PPPK">PPPK</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Prodi Mengajar</label>
                  <input type="text" class="form-control" name="prodi_mengajar" placeholder="Masukan Prodi Mengajar">
                </div>
                <div class="form-group">
                  <label>Status</label><br>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="aktif" name="status_keaktifan" class="custom-control-input" value="1">
                    <label class="custom-control-label" for="aktif">Aktif</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="tidak_aktif" name="status_keaktifan" class="custom-control-input" value="0">
                    <label class="custom-control-label" for="tidak_aktif">Tidak Aktif</label>
                  </div>
                </div>
                <div class="form-group">
                  <label>Pendidikan Terakhir</label>
                  <input type="text" class="form-control" name="pendidikan_terakhir" placeholder="Masukan Pendidikan Terakhir">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label>Jenis Kelamin</label><br>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="laki_laki" name="jk" class="custom-control-input" value="Laki-laki">
                    <label class="custom-control-label" for="laki_laki">Laki-laki</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="perempuan" name="jk" class="custom-control-input" value="Perempuan">
                    <label class="custom-control-label" for="perempuan">Perempuan</label>
                  </div>
                </div>
                <div class="form-group">
                  <label>IPT - Perguruan Tinggi</label>
                  <input type="text" class="form-control" name="pt" placeholder="Masukan Perguruan Tinggi">
                </div>
                <div class="form-group">
                  <label>Bidang Ilmu</label>
                  <input type="text" class="form-control" name="bidang_ilmu" placeholder="Masukan Bidang Ilmu">
                </div>
                <div class="form-group">
                  <label>Jabatan</label>
                  <input type="text" class="form-control" name="jabatan" placeholder="Masukan Jabatan">
                </div>
                <div class="form-group">
                  <label>Kepakaran</label>
                  <input type="text" class="form-control" name="kepakaran" placeholder="Masukan Kepakaran">
                </div>
                <div class="form-group">
                  <label>Validasi</label><br>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sudah" name="validasi" class="custom-control-input" value="Sudah">
                    <label class="custom-control-label" for="sudah">Sudah</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="belum" name="validasi" class="custom-control-input" value="Belum">
                    <label class="custom-control-label" for="belum">Belum</label>
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