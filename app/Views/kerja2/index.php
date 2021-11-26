<?php echo view('layout/header') ?>
<?php echo view('layout/navbar') ?>
<?php echo view('layout/sidebar') ?>

<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Mahasiswa diluar Kampus</h1>
      <div class="section-header-breadcrumb">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#add_kerja1">Tambah data</button>
      </div>
    </div>

    <div class="card">
      <div class="card-header">
        <h4>Tabel Indikator Kinerja</h4>
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
          <table class="table  table-bordered table-md" style="width:100%">
            <thead>
              <tr>
                <th class="text-center">
                  No
                </th>
                <th class="text-center">Indikator Kinerja</th>
                <th class="text-center">Satuan</th>
                <th class="text-center">Target</th>
                <th class="text-center">Realisasi</th>
                <th class="text-center">Capaian</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($kerja2 as $row) { ?>
                <tr>
                  <td class="text-center"><?= $no++; ?></td>
                  <td class=""><?php echo $row['indikator']; ?></td>
                  <td class="text-center"><?php echo $row['satuan']; ?></td>
                  <td class="text-center"><?php echo $row['kinerja_target']; ?></td>
                  <td class="text-center"><?php echo $row['kinerja_realisasi']; ?></td>
                  <td class="text-center"><?php echo $row['kinerja_capaian']; ?></td>
                  
                  <td class="text-center">
                    <div class="btn-group">
                      <a href="<?php echo base_url('/kerja2/edit/' . $row['id']); ?>" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
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
<form action="/kerja2/save" method="post">
  <div class="modal fade" id="add_kerja1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Indikator Kinerja</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-9">
                <div class="form-group">
                  <label>Indikator Kinerja</label>
                  <textarea class="summernote" name="indikator"></textarea>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="form-group">
                  <label>Satuan</label>
                  <input type="text" class="form-control" name="satuan" placeholder="Masukan Satuan">
                </div>
                <div class="form-group">
                  <label>Target</label>
                  <input type="text" class="form-control" name="kinerja_target" placeholder="Masukan Target">
                </div>
                <div class="form-group">
                  <label>Realisasi</label>
                  <input type="text" class="form-control" name="kinerja_realisasi" placeholder="Masukan Realisasi">
                </div>
                <div class="form-group">
                  <label>Capaian</label>
                  <input type="text" class="form-control" name="kinerja_capaian" placeholder="Masukan Capaian">
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