<?php echo view('layout/header') ?>
<?php echo view('layout/navbar') ?>
<?php echo view('layout/sidebar') ?>

<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>IKU 1 (Lulusan)</h1>
      <div class="section-header-breadcrumb">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#add_iku1">Tambah data</button>
      </div>
    </div>
    <div class="section-header">
      <div class="form-group">
        <h6>Total Jumlah Lulusan S1/D4/D3/D2 = <button class="card bg-danger"><?= $totalMhs ?></button></h6>
      </div>
    </div>

    <div class="card">
      <div class="card-header">
        <h4>Tabel IKU 1</h4>
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
                <th class="text-center">Jenis</th>
                <th class="text-center">Nama</th>
                <th class="text-center">NIM</th>
                <th class="text-center">Jenjang</th>
                <th class="text-center">Prodi</th>
                <th class="text-center">Fakultas</th>
                <th class="text-center">No.Ijazah</th>
                <th class="text-center">Masa Tunggu</th>
                <th class="text-center">Nama Perusahaan</th>
                <th class="text-center">Lokasi Perusahaan</th>
                <th class="text-center">Pendapatan</th>
                <th class="text-center">Lanjut Studi</th>
                <th class="text-center">Tautan Bukti</th>
                <th class="text-center">Status Validasi</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($iku_1 as $row) { ?>
                <tr>
                  <td class="text-center"><?= $no++; ?></td>
                  <td class="text-center"><?php echo $row['jenis']; ?></td>
                  <td class="text-center"><?php echo $row['nama']; ?></td>
                  <td class="text-center"><?php echo $row['nim']; ?></td>
                  <td class="text-center"><?php echo $row['jenjang']; ?></td>
                  <td class="text-center"><?php echo $row['prodi']; ?></td>
                  <td class="text-center"><?php echo $row['fakultas']; ?></td>
                  <td class="text-center"><?php echo $row['no_ijazah']; ?></td>
                  <td class="text-center"><?php echo $row['masa_tunggu']; ?></td>
                  <td class="text-center"><?php echo $row['nama_perusahaan']; ?></td>
                  <td class="text-center"><?php echo $row['lokasi_perusahaan']; ?></td>
                  <td class="text-center"><?php echo $row['pendapatan']; ?></td>
                  <td class="text-center"><?php echo $row['lanjut_studi']; ?></td>
                  <td class="text-center"><?php echo $row['tautan_bukti']; ?></td>
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
                      <a href="<?php echo base_url('/iku1/edit/' . $row['id']); ?>" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                      <a href="<?php echo base_url('/iku1/delete/' . $row['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus produk <?php echo $row['jenis']; ?> ini?')"><i class="fas fa-trash-alt"></i></a>
                    </div>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
</div>


<!-- Add Data -->
<form action="/iku1/save" method="post">
  <div class="modal fade" id="add_iku1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah data IKU 1</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>Jenis</label>
            <select type="text" class="form-control" name="jenis" placeholder="Masukan Jenis">
              <option value="Mendapat Pekerjaan">Mendapat Pekerjaan</option>
              <option value="Melanjutkan Studi">Melanjutkan Studi</option>
              <option value="Menjadi Wiraswasta">Menjadi Wiraswasta</option>
            </select>
          </div>
          <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" name="nama" placeholder="MAsukan Nama">
          </div>
          <div class="form-group">
            <label>NIM</label>
            <input type="number" class="form-control" name="nim" placeholder="MAsukan NIM">
          </div>
          <div class="form-group">
            <label>Jenjang</label>
            <input type="text" class="form-control" name="jenjang" placeholder="Masukan Jenjang">
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
            <label>No.Ijazah</label>
            <input type="text" class="form-control" name="no_ijazah" placeholder="Masukan No.Ijazah">
          </div>
          <div class="form-group">
            <label>Masa Tunggu</label>
            <input type="number" class="form-control" name="masa_tunggu" placeholder="Masukan Masa Tunggu">
          </div>
          <div class="form-group">
            <label>Nama Perusahaan</label>
            <input type="text" class="form-control" name="nama_perusahaan" placeholder="Masukan Nama Perusahaan">
          </div>
          <div class="form-group">
            <label>Lokasi Perusahaan</label>
            <input type="text" class="form-control" name="lokasi_perusahaan" placeholder="Masukan Lokasi Perusahaan">
          </div>
          <div class="form-group">
            <label>Pendapatan</label>
            <input type="text" class="form-control" name="pendapatan" placeholder="Masukan Pendapatan">
          </div>
          <div class="form-group">
            <label>Lanjut Studi</label>
            <input type="text" class="form-control" name="lanjut_studi" placeholder="Masukan Lanjut Studi">
          </div>
          <div class="form-group">
            <label>Tautan Bukti</label>
            <input type="text" class="form-control" name="tautan_bukti" placeholder="Masukan Tautan">
          </div>
          <div class="form-group">
            <label>Status Validasi</label><br>
            <!-- <input type="radio" class="form-control" name="status_validasi" value="1" placeholder="MAsukan Tanggal">/Yes -->
            <input type="checkbox" value="1" id="" name="status_validasi">
            <label for="status_validasi">Yes</label>
            <input type="checkbox" value="0" id="" name="status_validasi">
            <label for="status_validasi">NO</label>
          </div>fta
        </div>
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

      }
    });
  });