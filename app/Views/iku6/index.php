<?php echo view('layout/header') ?>
<?php echo view('layout/navbar') ?>
<?php echo view('layout/sidebar') ?>

<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>IKU 6 (Kemitraan Program Studi)</h1>
      <div class="section-header-breadcrumb">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#add_iku6">Tambah data</button>
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
                <h4>Tabel IKU 6</h4>
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
                        <th class="text-center">Prodi</th>
                        <th class="text-center">Jenjang</th>
                        <th class="text-center">Fakultas</th>
                        <th class="text-center">Status Keaktifan</th>
                        <th class="text-center">Bentuk Kerjasama</th>
                        <th class="text-center">Kriteria Mitra</th>
                        <th class="text-center">Nama Mitra</th>
                        <th class="text-center">Kegiatan Kerjasama</th>
                        <th class="text-center">Periode Kerjasama</th>
                        <th class="text-center">Tautan MoU</th>
                        <th class="text-center">Tautan MoA</th>
                        <th class="text-center">Tautan IA</th>
                        <th class="text-center">Jenis Luaran Kerjasama</th>
                        <th class="text-center">Jumlah Luaran Kerjasama</th>
                        <th class="text-center">Status Validasi</th>
                        <th class="text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $no = 1;
                      foreach ($iku6 as $row) { ?>
                        <tr>
                          <td class="text-center"><?= $no++; ?></td>
                          <td class="text-center"><?php echo $row['prodi']; ?></td>
                          <td class="text-center"><?php echo $row['jenjang']; ?></td>
                          <td class="text-center"><?php echo $row['fakultas']; ?></td>
                          <td class="text-center"><?php echo $row['status_keaktifan']; ?></td>
                          <td class="text-center"><?php echo $row['bentuk_kerjasama']; ?></td>
                          <td class="text-center"><?php echo $row['kriteria_mitra']; ?></td>
                          <td class="text-center"><?php echo $row['nama_mitra']; ?></td>
                          <td class="text-center"><?php echo $row['kegiatan_kerjasama']; ?></td>
                          <td class="text-center"><?php echo $row['periode']; ?></td>
                          <td class="text-center"><?php echo $row['mou']; ?></td>
                          <td class="text-center"><?php echo $row['moa']; ?></td>
                          <td class="text-center"><?php echo $row['ia']; ?></td>
                          <td class="text-center"><?php echo $row['jenis_luaran']; ?></td>
                          <td class="text-center"><?php echo $row['jumlah_luaran']; ?></td>
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
                              <a href="<?php echo base_url('/iku6/edit/' . $row['id']); ?>" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                              <a href="<?php echo base_url('/iku6/delete/' . $row['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus <?php echo $row['prodi']; ?>?')"><i class="fas fa-trash-alt"></i></a>
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
<form action="/iku6/save" method="post">
  <div class="modal fade" id="add_iku6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data IKU 6 (Kemitraan Program Studi)</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label>Prodi</label>
                  <input type="text" class="form-control" name="prodi" placeholder="Masukan Prodi">
                </div>
                <div class="form-group">
                  <label>Jenjang</label>
                  <input type="text" class="form-control" name="jenjang" placeholder="Masukan Jenjang">
                </div>
                <div class="form-group">
                  <label>Fakultas</label>
                  <input type="text" class="form-control" name="fakultas" placeholder="Masukan Fakultas">
                </div>
                <div class="form-group mb-4">
                  <label class="mb-3">Status Keaktifan</label><br>
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
                  <label>Bentuk Kerjasama</label>
                  <input type="text" class="form-control" name="bentuk_kerjasama" placeholder="Masukan Bentuk Kerjasama">
                </div>
                <div class="form-group">
                  <label>Kriteria Mitra</label>
                  <select type="text" class="form-control" name="kriteria_mitra">
                    <option value="Perusahaan Multinasional">Perusahaan Multinasional</option>
                    <option value="Perusahaan Nasional Berstandar Tinggi">Perusahaan Nasional Berstandar Tinggi</option>
                    <option value="Perusahaan Teknologi Global">Perusahaan Teknologi Global</option>
                    <option value="Perusahaan Rintisan (Startup Company) Teknologi">Perusahaan Rintisan (Startup Company) Teknologi</option>
                    <option value="Organisasi Nirlaba Kelas Dunia">Organisasi Nirlaba Kelas Dunia</option>
                    <option value="Institusi/Organisasi Multilateral">Institusi/Organisasi Multilateral</option>
                    <option value="Perguruan Tinggi QS100 by Subject">Perguruan Tinggi QS100 by Subject</option>
                    <option value="Instansi Pemerintah, BUMN, dan/atau BUMD">Instansi Pemerintah, BUMN, dan/atau BUMD</option>
                    <option value="Rumah Sakit">Rumah Sakit</option>
                    <option value="UMKM">UMKM</option>
                    <option value="Lembaga Riset Pemerintah, Swasta, Nasional, maupun Internasional">Lembaga Riset Pemerintah, Swasta, Nasional, maupun Internasional</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Nama Mitra</label>
                  <input type="text" class="form-control" name="nama_mitra" placeholder="Masukan Nama Mitra">
                </div>
                <div class="form-group">
                  <label>Kegiatan Kerjasama</label>
                  <input type="text" class="form-control" name="kegiatan_kerjasama" placeholder="Masukan Kegiatan Kerjasama">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label>Periode Kerjasama</label>
                  <input type="text" class="form-control" name="periode" placeholder="Masukan Periode Kerjasama">
                </div>
                <div class="form-group">
                  <label>Tautan MoU</label>
                  <input type="text" class="form-control" name="mou" placeholder="Masukan Tautan MoU">
                </div>
                <div class="form-group">
                  <label>Tautan MoA</label>
                  <input type="text" class="form-control" name="moa" placeholder="Masukan Tautan MoU">
                </div>
                <div class="form-group">
                  <label>Tautan IA</label>
                  <input type="text" class="form-control" name="ia" placeholder="Masukan Tautan IA">
                </div>
                <div class="form-group">
                  <label>Jenis Luaran Kerjasama</label>
                  <input type="text" class="form-control" name="jenis_luaran" placeholder="Masukan Jenis Luaran Kerjasama">
                </div>
                <div class="form-group">
                  <label>Jumlah Luaran Kerjasama</label>
                  <input type="text" class="form-control" name="jumlah_luaran" placeholder="Masukan Jumlah Luaran Kerjasama">
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
              return 'Details for ' + data[1]
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