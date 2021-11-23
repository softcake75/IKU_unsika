<?php echo view('layout/header')?>
<?php echo view('layout/navbar')?>
<?php echo view('layout/sidebar')?>

      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>User</h1>
            <div class="section-header-breadcrumb">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addModal">Tambah data</button>
            </div>
          </div>

          <div class="card">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Tabel User</h4>
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
                              <th class="text-center">NIDN</th>
                              <th class="text-center">Fakultas</th>
                              <th class="text-center">Prodi</th>
                              <th class="text-center">Keterangan</th>
                              <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php 
                          $no = 1;
                          $urut = 1;
                            foreach($user as $row) { ?>
                              <tr>
                                  <td class="text-center"><?= $no++; ?></td>
                                  <td class="text-center"><?php echo $row['nama_user']; ?></td>
                                  <td class="text-center"><?php echo $row['nidn_user']; ?></td>
                                  <td class="text-center"><?php echo $row['fakultas']; ?></td>
                                  <td class="text-center"><?php echo $row['prodi']; ?></td>
                                  <td class="text-center"><?php echo $row['keterangan']; ?></td>
                                  <td class="text-center">
                                      <div class="btn-group">
                                      <a href="<?php echo base_url('/user/edit/'.$row['id_user']); ?>" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                          
                                          <a href="<?php echo base_url('/user/delete/'.$row['id_user']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus produk <?php echo $row['skpd']; ?> ini?')"><i class="fas fa-trash-alt"></i></a>
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
    <form action="/user/store" method="post">
        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah data SURAT Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
             
                <div class="form-group">
                    <label>SKPD</label>
                    <select name="skpd" class="form-control">
                        <option type="text" value="Bapenda">Bapenda</option>
                        <option type="text" value="Distik">Distik</option>
                        <option type="text" value="Dinkes">Dinkes</option>
                    </select>
                </div>
                 
                <div class="form-group">
                    <label>Tanggal</label>
                    <input type="date" class="form-control" name="tanggal" placeholder="MAsukan Tanggal">
                </div>

                <div class="form-group">
                    <label>No. Skpd</label>
                    <select name="no_skpd" class="form-control">
                        <option type="text" value="Bapenda">Bapenda</option>
                        <option type="text" value="Distik">Distik</option>
                        <option type="text" value="Dinkes">Dinkes</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Jumlah</label>
                    <input type="text" class="form-control" name="jumlah" placeholder="Masukan Jumlah">
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

<!-- Edit Data -->
<?php 
      $no = 1;
      $urut = 1;
    foreach($user as $row) : $no++; $urut++;  ?>
        <div class="modal fade" id="editData<?php echo $row['id_skpd']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit data SURAT Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
             
                <div class="form-group">
                    <label>SKPD</label>
                    <select name="skpd" class="form-control">
                        <option type="text" value="Bapenda">Bapenda</option>
                        <option type="text" value="Distik">Distik</option>
                        <option type="text" value="Dinkes">Dinkes</option>
                    </select>
                </div>
                 
                <div class="form-group">
                    <label>Tanggal</label>
                    <input type="date" class="form-control" name="tanggal" placeholder="MAsukan Tanggal">
                </div>

                <div class="form-group">
                    <label>No. Skpd</label>
                    <input type="text" class="form-control" name="no_skpd" placeholder="Masukan No. SKPD">
                </div>

                <div class="form-group">
                    <label>Jumlah</label>
                    <input type="text" class="form-control" name="jumlah" placeholder="Masukan Jumlah">
                </div>
             
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
            </div>
        </div>
        </div>
    <?php endforeach; ?>
<!-- End Edit data -->



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

<!-- <script type="text/javascript">
        $(document).ready(function() {
            var table = $('#user-table').DataTable({
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    "url": "<?php echo site_url('Utama/ajaxList') ?>",
                    "type": "POST"
                },
                "columnDefs": [{
                    "targets": [],
                    "orderable": false,
                }, ],
            });
        });
</script> -->

<!-- <script type="text/javascript">

    function tampildata()
    {
      $('#listdata').DataTable({
        processing: true,
        serverSide: true,
        ajax:{
          url: '<?= site_url('report/ambildata')?>'
        },
        columns: [
          {data: 'skpd', name: 'skpd'},
          {data: 'tanggal', name: 'tanggal'},
          {data: 'no_skpd', name: 'no_skpd'}
          {data: 'jumlah', name: 'jumlah'}
        ]
      });
    }

    $(document).ready(function () {
        tampildata();
    });
    </script> -->