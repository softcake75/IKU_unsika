<?php echo view('layout/header')?>
<?php echo view('layout/navbar')?>
<?php echo view('layout/sidebar')?>


<div class="col-12">
            <div class="card">
                  <div class="card-header">
                    <h4>Edit Table Iku 1</h4>
                  </div>
                <form action="<?php echo base_url('iku1/update/'.$iku_1['id']); ?>" method="post">
                  <div class="card-body">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenis</label>
                      <div class="col-sm-12 col-md-7">
                        <input name="jenis" type="text"class="form-control" value="<?php echo $iku_1['jenis']; ?>">
                          <!-- <option  value="Bapenda">Bapenda</option>
                          <option  value="Dinkes">Dinkes</option>
                          <option  value="Disdik">Disdik</option> -->
                        </select>
                        
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="nama" value="<?php echo $iku_1['nama']; ?>">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">NIM</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="nim" value="<?php echo $iku_1['nim']; ?>">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenjang</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="jenjang" value="<?php echo $iku_1['jenjang']; ?>">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Prodi</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="prodi" value="<?php echo $iku_1['prodi']; ?>">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Fakultas</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="fakultas" value="<?php echo $iku_1['fakultas']; ?>">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">No. Ijazah</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="no_ijazah" value="<?php echo $iku_1['no_ijazah']; ?>">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Masa Tunggu</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="masa_tunggu" value="<?php echo $iku_1['masa_tunggu']; ?>">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Perusahaan</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="nama_perusahaan" value="<?php echo $iku_1['nama_perusahaan']; ?>">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Lokasi Perusahaan</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="lokasi_perusahaan" value="<?php echo $iku_1['lokasi_perusahaan']; ?>">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pendapatan</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="pendapatan" value="<?php echo $iku_1['pendapatan']; ?>">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Lanjut Studi</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="lanjut_studi" value="<?php echo $iku_1['lanjut_studi']; ?>">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tautan Bukti</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="tautan_bukti" value="<?php echo $iku_1['tautan_bukti']; ?>">
                      </div>
                    </div>
                    
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary">Update</button>
                        <a href="<?= base_url('iku1')?>" class="btn btn-danger">Back</a>
                      </div>
                    </div>
                  </div>
</form>
                
                
            </div>
</div>




<?php echo view('layout/footer')?>