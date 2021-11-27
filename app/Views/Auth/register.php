<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Modules &rsaquo; IKU &mdash; UNSIKA</title>

    <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="<?php echo base_url('assets/modules/bootstrap/css/bootstrap.min.css')?>"> -->
  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/bootstrap-daterangepicker/daterangepicker.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/select2/dist/css/select2.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/jquery-selectric/selectric.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')?>">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/components.css')?>">

  <!-- Datatables -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <img src="<?= base_url('assets/img/unsika.png')?>" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Register</h4></div>

              <div class="card-body">
              <?php if (session()->getFlashdata('success')) { ?>
                                <div class="alert alert-success">
                                    <?php echo session()->getFlashdata('success'); ?>
                                </div>
                            <?php } ?>

                            <?php if (session()->getFlashdata('error')) { ?>
                                <div class="alert alert-danger">
                                    <?php foreach (session()->getFlashdata('error') as $field => $error) : ?>
                                        <p><?= $error ?></p>
                                    <?php endforeach ?>
                                </div>
                            <?php } ?>

                            <?= form_open('register'); ?>
                                <div class="row">
                                    <div class="form-group col-6">
                                    <label for="name">Nama</label>
                                    <input id="name" type="text" class="form-control" name="name" autofocus>
                                    </div>
                                    <div class="form-group col-6">
                                    <label for="nidn">Nidn</label>
                                    <input id="nidn" type="text" class="form-control" name="nidn">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-6">
                                    <label for="password" class="d-block">Password</label>
                                    <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password">
                                    <div id="pwindicator" class="pwindicator">
                                        <div class="bar"></div>
                                        <div class="label"></div>
                                    </div>
                                    </div>
                                    <div class="form-group col-6">
                                    <label for="password2" class="d-block">Password Confirmation</label>
                                    <input id="password2" type="password" class="form-control" name="password-confirm">
                                    </div>
                                </div>

                                

                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="agree" class="custom-control-input" id="agree">
                                    <label class="custom-control-label" for="agree">I agree with the terms and conditions</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                                    Register
                                    </button>
                                </div>
                            <?= form_close(); ?>
              </div>
            </div>
            <div class="simple-footer">
              Copyright &copy; Subagja_Dev 2021
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="<?= base_url('assets/modules/jquery.min.js')?>"></script>
  <script src="<?= base_url('assets/modules/popper.js')?>"></script>
  <script src="<?= base_url('assets/modules/tooltip.js')?>"></script>
  <script src="<?= base_url('assets/modules/bootstrap/js/bootstrap.min.js')?>"></script>
  <script src="<?= base_url('assets/modules/nicescroll/jquery.nicescroll.min.js')?>"></script>
  <script src="<?= base_url('assets/modules/moment.min.js')?>"></script>
  <script src="<?= base_url('assets/js/stisla.js')?>"></script>
  
  <!-- JS Libraies -->
  <script src="<?= base_url('assets/modules/jquery-pwstrength/jquery.pwstrength.min.js')?>"></script>
  <script src="<?= base_url('assets/modules/jquery-selectric/jquery.selectric.min.js')?>"></script>

  <!-- Page Specific JS File -->
  <script src="<?= base_url('assets/js/page/auth-register.js')?>"></script>
  
  <!-- Template JS File -->
  <script src="<?= base_url('assets/js/scripts.js')?>"></script>
  <script src="<?= base_url('assets/js/custom.js')?>"></script>
</body>
</html>