<?php echo view('layout/header')?>
<?php echo view('layout/navbar')?>
<?php echo view('layout/sidebar')?>

      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>IKU 7 (Pembelajaran Dalam Kelas)</h1>
            <div class="section-header-breadcrumb">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#add_iku7">Tambah data</button>
            </div>
          </div>

          <div class="card">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Tabel IKU 7</h4>
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
                              <th class="text-center">Mata Kuliah</th>
                              <th class="text-center">Jumlah SKS</th>
                              <th class="text-center">Prodi</th>
                              <th class="text-center">Jenjang</th>
                              <th class="text-center">Jenis Mata Kuliah</th>
                              <th class="text-center">Jenis Pembelajaran</th>
                              <th class="text-center">Formula Penilaian</th>
                              <th class="text-center">Tautan RPS</th>
                              <th class="text-center">Tautan Laporan</th>
                              <th class="text-center">Tautan Bukti PDDIKTI</th>
                              <th class="text-center">Status Validasi</th>
                              <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php 
                          $no = 1;
                            foreach($iku7 as $row) { ?>
                              <tr>
                                  <td class="text-center"><?= $no++; ?></td>
                                  <td class="text-center"><?php echo $row['nama_matkul']; ?></td>
                                  <td class="text-center"><?php echo $row['sks']; ?></td>
                                  <td class="text-center"><?php echo $row['prodi']; ?></td>
                                  <td class="text-center"><?php echo $row['jenjang']; ?></td>
                                  <td class="text-center"><?php echo $row['jenis_matkul']; ?></td>
                                  <td class="text-center"><?php echo $row['jenis_pembelajaran']; ?></td>
                                  <td class="text-center"><?php echo $row['formula_penilaian']; ?></td>
                                  <td class="text-center"><?php echo $row['tautan_rps']; ?></td>
                                  <td class="text-center"><?php echo $row['tautan_laporan']; ?></td>
                                  <td class="text-center"><?php echo $row['bukti_pddikti']; ?></td>
                                  <td class="text-center">
                                      <?php if (session()->get('status_validasi') == 1) {
                                      echo ' <button class="btn btn-icon btn-success"><i class="fas fa-check"></i></button>';
                                    } else if (session()->get('status_validasi') == 0) {
                                        echo '<button class="btn btn-icon btn-danger"><i class="fas fa-times"></i></button>';
                                    } else {
                                        echo'';
                                    } ?>
                                </td>
                                  <td class="text-center">
                                      <div class="btn-group">
                                      <a href="<?php echo base_url('/iku7/edit/'.$row['id']); ?>" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                          
                                          <a href="<?php echo base_url('/iku7/delete/'.$row['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus produk <?php echo $row['jenis_kegiatan']; ?> ini?')"><i class="fas fa-trash-alt"></i></a>
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
    <form action="/iku7/save" method="post">
        <div class="modal fade" id="add_iku7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <label>Mata Kuliah</label>
                    <input type="text" class="form-control" name="nama_matkul" placeholder="Masukan Jenis Kegiatan">
                </div>
                <div class="form-group">
                    <label>Jumlah SKS</label>
                    <input type="text" class="form-control" name="sks" placeholder="Masukan Jenis Kegiatan">
                </div>
                <div class="form-group">
                    <label>Prodi</label>
                    <input type="text" class="form-control" name="prodi" placeholder="Masukan Nama">
                </div>
                <div class="form-group">
                    <label>Jenjang</label>
                    <input type="number" class="form-control" name="jenjang" placeholder="Masukan NIM">
                </div>
                <div class="form-group">
                    <label>Jenis Matakuliah</label>
                    <input type="number" class="form-control" name="jenis_matkul" placeholder="Masukan NIM">
                </div>
                <div class="form-group">
                    <label>Jenis Pembelajaran</label>
                    <input type="number" class="form-control" name="jenis_pembelajaran" placeholder="Masukan NIM">
                </div>
                <div class="form-group">
                    <label>Formula Penilaian</label>
                    <input type="number" class="form-control" name="formula_penilaian" placeholder="Masukan NIM">
                </div>
                <div class="form-group">
                    <label>Tautan RPS</label>
                    <input type="number" class="form-control" name="tautan_rps" placeholder="Masukan NIM">
                </div>
                <div class="form-group">
                    <label>Tautan Laporan</label>
                    <input type="number" class="form-control" name="tautan_laporan" placeholder="Masukan NIM">
                </div>
                <div class="form-group">
                    <label>Tautan Bukti PDDIKTI</label>
                    <input type="text" class="form-control" name="bukti_pddikti" placeholder="Masukan Program/Kegiatan">
                </div>
                <div class="form-group">
                    <label>Status Validasi</label><br>
                    <!-- <input type="radio" class="form-control" name="status_validasi" value="1" placeholder="MAsukan Tanggal">/Yes -->
                    <input type="checkbox" value="1" id="" name="status_validasi">
                    <label for="status_validasi">Yes</label>
                    <input type="checkbox" value="0" id="" name="status_validasi">
                    <label for="status_validasi">NO</label>
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

<?php echo view('layout/footer')?>

<script>
$(document).ready( function () {
    $('#mydata').DataTable();
} );
</script>


<script type="text/javascript" language="javascript" >
$(document).ready(function() {
  var dataTable = $('#tabel_serverside').DataTable( {
  "processing" : true,
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
    "stateSave" : true,
  "scrollX": true,
  "ajax":{
          url :"<?php echo base_url("Utama/listdata"); ?>", // json datasource
          type: "post",  // method  , by default get
          error: function(){  // error handling
            $(".tabel_serverside-error").html("");
            $("#tabel_serverside").append('<tbody class="tabel_serverside-error"><tr><th colspan="3">Data Tidak Ditemukan di Server</th></tr></tbody>');
            $("#tabel_serverside_processing").css("display","none");
 
          }
        }
  });
});