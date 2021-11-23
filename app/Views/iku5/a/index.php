<?php echo view('layout/header')?>
<?php echo view('layout/navbar')?>
<?php echo view('layout/sidebar')?>

      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>IKU 5 (Karya Ilmiah)</h1>
            <div class="section-header-breadcrumb">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#add_iku5_a">Tambah data</button>
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
                      <!-- <table class="table table-striped" id="table-1"> -->
                      <table id="mydata" class="table  table-bordered table-md" style="width:100%">
                        <thead>
                            <tr>
                              <th class="text-center">
                                No
                              </th>
                              <th class="text-center">Jenis Karya</th>
                              <th class="text-center">Judul</th>
                              <th class="text-center">Penulis</th>
                              <th class="text-center">Afiliasi</th>
                              <th class="text-center">Penerbit</th>
                              <th class="text-center">Quartile</th>
                              <th class="text-center">Link Scopus</th>
                              <th class="text-center">Volume</th>
                              <th class="text-center">Nomor</th>
                              <th class="text-center">Tautan Jurnal</th>
                              <th class="text-center">Tautan Buku</th>
                              <th class="text-center">Tautan Sertifikat</th>
                              <th class="text-center">Tautan Tangkapan Layar</th>
                              <th class="text-center">Jumlah Sitasi</th>
                              <th class="text-center">Tautan Laporan Case Study</th>
                              <th class="text-center">Tautan MoU</th>
                              <th class="text-center">Tautan Bukti Update Sister</th>
                              <th class="text-center">Status Validasi</th>
                              <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php 
                          $no = 1;
                            foreach($iku5_a as $row) { ?>
                              <tr>
                                  <td class="text-center"><?= $no++; ?></td>
                                  <td class="text-center"><?php echo $row['karya_ilmiah']; ?></td>
                                  <td class="text-center"><?php echo $row['judul']; ?></td>
                                  <td class="text-center"><?php echo $row['penulis']; ?></td>
                                  <td class="text-center"><?php echo $row['afiliasi']; ?></td>
                                  <td class="text-center"><?php echo $row['penerbit']; ?></td>
                                  <td class="text-center"><?php echo $row['quartile']; ?></td>
                                  <td class="text-center"><?php echo $row['link_scopus']; ?></td>
                                  <td class="text-center"><?php echo $row['volume']; ?></td>
                                  <td class="text-center"><?php echo $row['nomor']; ?></td>
                                  <td class="text-center"><?php echo $row['tautan_jurnal']; ?></td>
                                  <td class="text-center"><?php echo $row['tautan_buku']; ?></td>
                                  <td class="text-center"><?php echo $row['tautan_sertifikat']; ?></td>
                                  <td class="text-center"><?php echo $row['tautan_ss']; ?></td>
                                  <td class="text-center"><?php echo $row['jml_sitasi']; ?></td>
                                  <td class="text-center"><?php echo $row['tautan_case_study']; ?></td>
                                  <td class="text-center"><?php echo $row['tautan_laporan_penelitian']; ?></td>
                                  <td class="text-center"><?php echo $row['tautan_mou']; ?></td>
                                  <td class="text-center"><?php echo $row['bukti_update_sister']; ?></td>
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
                                      <a href="<?php echo base_url('/iku5_a/edit/'.$row['id']); ?>" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                          
                                          <a href="<?php echo base_url('/iku5_a/delete/'.$row['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus produk <?php echo $row['jenis_kegiatan']; ?> ini?')"><i class="fas fa-trash-alt"></i></a>
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
    <form action="/iku5_a/save" method="post">
        <div class="modal fade" id="add_iku5_a" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <label>Karya Ilmiah</label>
                    <input type="text" class="form-control" name="karya_ilmiah" placeholder="Masukan Jenis Kegiatan">
                </div>
                <div class="form-group">
                    <label>Judul</label>
                    <input type="text" class="form-control" name="judul" placeholder="Masukan Jenis Kegiatan">
                </div>
                <div class="form-group">
                    <label>Penulis</label>
                    <input type="text" class="form-control" name="penulis" placeholder="Masukan Nama">
                </div>
                <div class="form-group">
                    <label>Afiliasi</label>
                    <input type="text" class="form-control" name="afiliasi" placeholder="Masukan NIM">
                </div>
                <div class="form-group">
                    <label>Penerbit</label>
                    <input type="text" class="form-control" name="penerbit" placeholder="Masukan NIM">
                </div>
                <div class="form-group">
                    <label>Quartile</label>
                    <input type="text" class="form-control" name="quartile" placeholder="Masukan NIM">
                </div>
                <div class="form-group">
                    <label>Link Scopus</label>
                    <input type="text" class="form-control" name="link_scopus" placeholder="Masukan NIM">
                </div>
                <div class="form-group">
                    <label>Volume</label>
                    <input type="text" class="form-control" name="volume" placeholder="Masukan NIM">
                </div>
                <div class="form-group">
                    <label>Nomor</label>
                    <input type="text" class="form-control" name="nomor" placeholder="Masukan NIM">
                </div>
                <div class="form-group">
                    <label>Tautan Jurnal</label>
                    <input type="text" class="form-control" name="tautan_jurnal" placeholder="Masukan NIM">
                </div>
                <div class="form-group">
                    <label>Tautan Buku</label>
                    <input type="text" class="form-control" name="tautan_buku" placeholder="Masukan NIM">
                </div>
                <div class="form-group">
                    <label>Tautan Sertifikat</label>
                    <input type="text" class="form-control" name="tautan_sertifikat" placeholder="Masukan NIM">
                </div>
                <div class="form-group">
                    <label>Tautan Tangkapan Layar</label>
                    <input type="text" class="form-control" name="tautan_ss" placeholder="Masukan NIM">
                </div>
                <div class="form-group">
                    <label>Jumlah Sitasi</label>
                    <input type="text" class="form-control" name="jml_sitasi" placeholder="Masukan NIM">
                </div>
                <div class="form-group">
                    <label>Tautan Laporan Case Study</label>
                    <input type="text" class="form-control" name="tautan_case_study" placeholder="Masukan NIM">
                </div>
                <div class="form-group">
                    <label>Tautan Laporan Penelitian</label>
                    <input type="text" class="form-control" name="tautan_laporan_penelitian" placeholder="Masukan NIM">
                </div>
                <div class="form-group">
                    <label>Tautan MoU</label>
                    <input type="text" class="form-control" name="tautan_mou" placeholder="Masukan NIM">
                </div>
                <div class="form-group">
                    <label>Tautan Bukti Telah Update di Sister</label>
                    <input type="text" class="form-control" name="bukti_update_sister" placeholder="Masukan Program/Kegiatan">
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