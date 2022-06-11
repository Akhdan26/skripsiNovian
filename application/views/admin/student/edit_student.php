<?php echo "<script>console.log('" . json_encode($mahasiswa['id_skill']) . "');</script>"; ?>
<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
    
        <!-- Main Content -->
        <div id="content">
    <?php $this->load->view('admin/layout/topbar'); ?><div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm mb-4 border-bottom-primary">
            <div class="card-header bg-white py-3">
                <div class="row">
                    <div class="col">
                        <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                            Edit Student Form
                        </h4>
                    </div>
                    <div class="col-auto">
                        <a href="<?= base_url('admin/student') ?>" class="btn btn-sm btn-secondary btn-icon-split">
                            <span class="icon">
                                <i class="fa fa-arrow-left"></i>
                            </span>
                            <span class="text">
                                Back
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body pb-2">
                <?= $this->session->flashdata('pesan'); ?>
                <form action="<?php echo base_url('admin/student/edit/'.$mahasiswa['id']) ?>" class="form" method="post">
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="nim">NIM</label>
                    <div class="col-md-6">
                        <input value="<?= $mahasiswa['nim'] ?>" type="text" id="nim" name="nim" class="form-control" placeholder="NIM">
                        <?= form_error('nim', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="nama">Full Name</label>
                    <div class="col-md-6">
                        <input value="<?= $mahasiswa['nama'] ?>" type="text" id="nama" name="nama" class="form-control" placeholder="Full Name">
                        <?= form_error('nama', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="tanggal_lahir">Date of Birth</label>
                    <div class="col-md-6">
                        <input value="<?= $mahasiswa['tanggal_lahir'] ?>" type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control" >
                        <?= form_error('tanggal_lahir', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="alamat">Address</label>
                    <div class="col-md-6">
                        <input value="<?= $mahasiswa['alamat'] ?>" type="text" id="alamat" name="alamat" class="form-control" placeholder="Address">
                        <?= form_error('alamat', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="kota">City</label>
                    <div class="col-md-6">
                        <input value="<?= $mahasiswa['kota'] ?>" type="text" id="kota" name="kota" class="form-control" placeholder="City">
                        <?= form_error('kota', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="no_hp">Phone Number</label>
                    <div class="col-md-6">
                        <input value="<?= $mahasiswa['no_hp'] ?>" type="text" id="no_hp" name="no_hp" class="form-control" placeholder="Phone Number">
                        <?= form_error('no_hp', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="email">Email</label>
                    <div class="col-md-6">
                        <input value="<?= $mahasiswa['email'] ?>" type="email" id="email" name="email" class="form-control" placeholder="Email">
                        <?= form_error('email', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="jenjang">Level</label>
                    <div class="col-md-6">
                        <div class="custom-control custom-radio">
                            <?php if($mahasiswa['jenjang']=='D1')
                            {
                                echo '<input '.set_radio('jenjang', 'D1').' value="D1" type="radio" id="D1" name="jenjang" class="custom-control-input" checked>';
                            } else { 
                                echo '<input '.set_radio('jenjang', 'D1').' value="D1" type="radio" id="D1" name="jenjang" class="custom-control-input">' ;
                                } 
                            ?>
                            
                            <label class="custom-control-label" for="D1">D1</label>
                        </div>
                        <div class="custom-control custom-radio">
                        <?php if($mahasiswa['jenjang']=='D2')
                            {
                                echo '<input '.set_radio('jenjang', 'D2').' value="D2" type="radio" id="D2" name="jenjang" class="custom-control-input" checked>';
                            } else { 
                                echo '<input '.set_radio('jenjang', 'D2').' value="D2" type="radio" id="D2" name="jenjang" class="custom-control-input">' ;
                                } 
                            ?>
                            <label class="custom-control-label" for="D2">D2</label>
                        </div>
                        <div class="custom-control custom-radio">
                        <?php if($mahasiswa['jenjang']=='D3')
                            {
                                echo '<input '.set_radio('jenjang', 'D3').' value="D3" type="radio" id="D3" name="jenjang" class="custom-control-input" checked>';
                            } else { 
                                echo '<input '.set_radio('jenjang', 'D3').' value="D3" type="radio" id="D3" name="jenjang" class="custom-control-input">' ;
                            } 
                            ?>
                            <label class="custom-control-label" for="D3">D3</label>
                        </div>
                        <div class="custom-control custom-radio">
                            
                        <?php if($mahasiswa['jenjang']=='D4')
                            {
                                echo '<input '.set_radio('jenjang', 'D4').' value="D4" type="radio" id="D4" name="jenjang" class="custom-control-input" checked>';
                            } else { 
                                echo '<input '.set_radio('jenjang', 'D4').' value="D4" type="radio" id="D4" name="jenjang" class="custom-control-input">' ;
                                } 
                            ?>
                            
                            <label class="custom-control-label" for="D4">D4</label>
                        </div>
                        <div class="custom-control custom-radio">
                        <?php if($mahasiswa['jenjang']=='S1')
                            {
                                echo '<input '.set_radio('jenjang', 'S1').' value="S1" type="radio" id="S1" name="jenjang" class="custom-control-input" checked>';
                            } else { 
                                echo '<input '.set_radio('jenjang', 'S1').' value="S1" type="radio" id="S1" name="jenjang" class="custom-control-input">' ;
                            } 
                            ?>
                            <label class="custom-control-label" for="S1">S1</label>
                        </div>
                        <div class="custom-control custom-radio">
                        <?php if($mahasiswa['jenjang']=='S2')
                            {
                                echo '<input '.set_radio('jenjang', 'S2').' value="S2" type="radio" id="S2" name="jenjang" class="custom-control-input" checked>';
                            } else { 
                                echo '<input '.set_radio('jenjang', 'S2').' value="S2" type="radio" id="S2" name="jenjang" class="custom-control-input">' ;
                                } 
                            ?>
                            <label class="custom-control-label" for="S2">S2</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <?php if($mahasiswa['jenjang']=='S3')
                            {
                                echo '<input '.set_radio('jenjang', 'S3').' value="S3" type="radio" id="S3" name="jenjang" class="custom-control-input" checked>';
                            } else { 
                                echo '<input '.set_radio('jenjang', 'S3').' value="S3" type="radio" id="S3" name="jenjang" class="custom-control-input">' ;
                                } 
                            ?>
                            <label class="custom-control-label" for="S3">S3</label>
                        </div>
                        <?= form_error('jenjang', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="jurusan">Major</label>
                    <div class="col-md-6">
                        <input value="<?= $mahasiswa['jurusan'] ?>" type="text" id="jurusan" name="jurusan" class="form-control" placeholder="Major">
                        <?= form_error('jurusan', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="program_studi">Study Program</label>
                    <div class="col-md-6">
                        <input value="<?= $mahasiswa['program_studi'] ?>" type="text" id="program_studi" name="program_studi" class="form-control" placeholder="Study Program">
                        <?= form_error('program_studi', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="ipk">IPK</label>
                    <div class="col-md-6">
                        <input value="<?= $mahasiswa['ipk'] ?>" type="text" id="ipk" name="ipk" class="form-control" placeholder="IPK">
                        <?= form_error('ipk', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="tahun_lulus">Graduation Year</label>
                    <div class="col-md-6">
                        <input value="<?= $mahasiswa['tahun_lulus'] ?>" type="int" id="tahun_lulus" name="tahun_lulus" class="form-control" placeholder="Graduation Year">
                        <?= form_error('tahun_lulus', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="jenis_kelamin">Gender</label>
                    <div class="col-md-6">
                        <div class="custom-control custom-radio">
                            <?php if($mahasiswa['jenis_kelamin']=='Male')
                            {
                                echo '<input '.set_radio('jenis_kelamin', 'male').' value="Male" type="radio" id="male" name="jenis_kelamin" class="custom-control-input" checked>';
                            } else { 
                                echo '<input '.set_radio('jenis_kelamin', 'male').' value="Male" type="radio" id="male" name="jenis_kelamin" class="custom-control-input">' ;
                                } 
                            ?>
                            <label class="custom-control-label" for="male">Male</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <?php if($mahasiswa['jenis_kelamin']=='Female')
                            {
                                echo '<input '.set_radio('jenis_kelamin', 'female').' value="Female" type="radio" id="female" name="jenis_kelamin" class="custom-control-input" checked>';
                            } else { 
                                echo '<input '.set_radio('jenis_kelamin', 'female').' value="Female" type="radio" id="female" name="jenis_kelamin" class="custom-control-input">' ;
                                } 
                            ?>
                            <label class="custom-control-label" for="female">Female</label>
                        </div>
                        <?= form_error('jenis_kelamin', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="nama_skill">Job Skill</label>
                    <div class="col-md-6">
                        <select id="id_skill" name="id_skill[]" class="form-control" multiple="multiple">
                            <option value=""></option>
                            <?php
                            $no = 1;
                            if ($skills) :
                                foreach ($skills as $data_skill) :
                                    ?> 
                                    <option value="<?= $data_skill['id'] ?>"><?= $data_skill['nama_skill'] ?></option>
                                <?php endforeach;
                                else : ?>
                                <tr>
                                    <td colspan="8" class="text-center">No Job Vacancies </td>
                                </tr>
                            <?php endif; ?>
                        </select>
                        <?= form_error('nama_skill', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>
                <!-- <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="password">Password</label>
                    <div class="col-md-6">
                        <input value="<?= $mahasiswa['password'] ?>" type="text" id="password" name="password" class="form-control" placeholder="Password">
                        <?= form_error('password', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div> -->
                <input value="<?= $mahasiswa['password'] ?>" type="hidden" id="password" name="password" class="form-control" placeholder="Password">
                <br>
                <div class="row form-group justify-content-end">
                    <div class="col-md-8">
                        <button type="submit" class="btn btn-primary btn-icon-split">
                            <span class="icon"><i class="fa fa-save"></i></span>
                            <span class="text">Save</span>
                        </button>
                        <button type="reset" class="btn btn-secondary">
                            Reset
                        </button>
                    </div>
                </div>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>
</div>
        <!-- End of Content Wrapper -->
        <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
        </footer>
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?php echo base_url('admin/login/logout'); ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/admin/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/admin/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/admin/'); ?>js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url('assets/admin/'); ?>vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url('assets/admin/'); ?>js/demo/chart-area-demo.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>js/demo/chart-pie-demo.js"></script>

    <script>
        $(document).ready(function () {
            $("#id_skill").select2({
                placeholder: "Silahkan Pilih"
            });

            /* Syntax untuk mengambil php lalu dari string diubah ke array */
            const str = <?php echo(json_encode($mahasiswa['id_skill'])) ?>;
            const arr = str.split(',');

            /* fungsi console untuk menampilkan hasil dari variable arr ke konsol */
            //console.log(arr);

            /* fungsi untuk menampilkan data dari database ke select2 */ 
            $('#id_skill').val(arr).change();
        });
    </script>

    </body>

</html>