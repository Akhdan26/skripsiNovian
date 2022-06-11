<?php echo "<script>console.log('" . json_encode($skill) . "');</script>"; ?>

<div class="container-fluid" style="padding-right: 15%; padding-left: 15%;">
    <!-- Content Row -->

    <div class="card p-2 shadow-sm border-bottom-primary">
        <div class="card-header bg-white">
            <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                <?= $mahasiswa['nama']; ?>
            </h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-2 mb-4 mb-md-0">
                    <!-- <img src="<?= base_url() ?>assets/upload/<?= $mahasiswa['foto']; ?>" alt="" class="img-thumbnail rounded mb-2"> -->

                    <!-- <a href="<?= base_url('profile/ubahpassword'); ?>" class="btn btn-sm btn-block btn-primary"><i class="fa fa-lock"></i> Ubah Password</a> -->
                </div>
                <div class="col-md-10">

                    <table class="table">
                        <tr>
                            <th width="200">NIM</th>
                            <td><?= $mahasiswa['nim']; ?></td>
                        </tr>
                        <tr>
                            <th>Full Name</th>
                            <td><?= $mahasiswa['nama']; ?></td>
                        </tr>
                        <tr>
                            <th>Date of Birth</th>
                            <td><?= $mahasiswa['tanggal_lahir']; ?></td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td><?= $mahasiswa['alamat']; ?></td>
                        </tr>
                        <tr>
                            <th>City</th>
                            <td><?= $mahasiswa['kota']; ?></td>
                        </tr>
                        <tr>
                            <th>Phone Number</th>
                            <td><?= $mahasiswa['no_hp']; ?></td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td><?= $mahasiswa['email']; ?></td>
                        </tr>
                        <tr>
                            <th>Level</th>
                            <td><?= $mahasiswa['jenjang']; ?></td>
                        </tr>
                        <tr>
                            <th>Major</th>
                            <td><?= $mahasiswa['jurusan']; ?></td>
                        </tr>
                        <tr>
                            <th>Study Program</th>
                            <td><?= $mahasiswa['program_studi']; ?></td>
                        </tr>
                        <tr>
                            <th>IPK</th>
                            <td><?= $mahasiswa['ipk']; ?></td>
                        </tr>
                        <tr>
                            <th>Graduation Year</th>
                            <td><?= $mahasiswa['tahun_lulus']; ?></td>
                        </tr>
                        <tr>
                            <th>Gender</th>
                            <td><?= $mahasiswa['jenis_kelamin']; ?></td>
                        </tr>
                        <tr>
                            <th style="width: 35%;">Job Skill</th>
                            <td><span id="deskripsi"></span>
                                <!-- <?= $data->nama_skill; ?> -->
                                <?php
                                if ($skill) :
                                    foreach ($skill as $key1 => $data1) :
                                ?>
                                        - <?= $data1['nama_skill'] ?> <br>
                                    <?php endforeach;
                                else : ?>
                                    No Skill Data
                                <?php endif; ?>
                            </td>
                        </tr>
                        <tr>
                            <th>CV</th>
                            <td><?= $mahasiswa['resume']; ?></td>
                        </tr>
                        <tr>
                            <th>Certificate</th>
                            <!-- <?php foreach ($sertif as $key => $data) { ?>
                                <td><?= $data->nama_file ?></td>
                            <?php } ?> -->
                            <td>
                                <div class="row form-group">
                                    <div class="col-md-1">
                                        <div class="row">
                                            <div class="col-9">
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                                    Upload Certificate
                                                </button>

                                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLongTitle">You can upload more than one certificate file</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="<?= base_url('student/profile/sertifikat/') ?>" class="form" method="post" enctype="multipart/form-data">
                                                                    <input type="hidden" name="id_mahasiswa" value="<?= $mahasiswa['id']; ?>">
                                                                    <table class="table table-bordered table-striped" id="example1">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Nama File</th>
                                                                                <th>Aksi</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <?php foreach ($sertif as $key => $data) { ?>
                                                                                <tr>
                                                                                    <td><input type="hidden" name="id_sertif" value="<?= $data->id_sertif ?>"><?= $data->nama_file ?></td>
                                                                                    <td>
                                                                                        <center>
                                                                                            <a href="<?= base_url()?>assets/upload/sertif/<?= $data->nama_file?>" target="_blank" style="color: black;"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                                                            <a href="<?= site_url('student/profile/deleteSertifikat/' . $data->id_sertif) ?>" onclick="return confirm('Apakah Anda Yakin ?')" style="color: black;"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                                                        </center>
                                                                                    </td>
                                                                                </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                    <hr>
                                                                    <div>
                                                                        <label for="file">Upload File Baru</label>
                                                                        <input type="file" name="files[]" id="sertifikat" class="form-control" multiple="multiple" required>
                                                                        <small style="color: red;">*Format file must PDF</small>
                                                                        <?= form_error('sertifikat', '<small class="text-danger">', '</small>'); ?>
                                                                    </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-primary">Save</button>
                                                                <?= form_close(); ?>
                                                            </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>

                        </tr>
                    </table>
                    <a href="<?= base_url('student/profile/setting'); ?>" class="btn btn-sm btn-block btn-primary"><i class="fa fa-edit"></i> Edit Profile</a>
                </div>
            </div>

            <script src="<?= base_url('assets/js/'); ?>vendor/modernizr-3.5.0.min.js"></script>
            <!-- Jquery, Popper, Bootstrap -->
            <script src="<?= base_url('assets/js/'); ?>vendor/jquery-1.12.4.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
            <script src="<?= base_url('assets/js/'); ?>popper.min.js"></script>
            <script src="<?= base_url('assets/js/'); ?>bootstrap.min.js"></script>
            <!-- Jquery Mobile Menu -->
            <script src="<?= base_url('assets/js/'); ?>jquery.slicknav.min.js"></script>

            <!-- Jquery Slick , Owl-Carousel Plugins -->
            <script src="<?= base_url('assets/js/'); ?>owl.carousel.min.js"></script>
            <script src="<?= base_url('assets/js/'); ?>slick.min.js"></script>
            <script src="<?= base_url('assets/js/'); ?>price_rangs.js"></script>

            <!-- One Page, Animated-HeadLin -->
            <script src="<?= base_url('assets/js/'); ?>wow.min.js"></script>
            <script src="<?= base_url('assets/js/'); ?>animated.headline.js"></script>
            <script src="<?= base_url('assets/js/'); ?>jquery.magnific-popup.js"></script>

            <!-- Scrollup, nice-select, sticky -->
            <script src="<?= base_url('assets/js/'); ?>jquery.scrollUp.min.js"></script>
            <!-- <script src="<?= base_url('assets/js/'); ?>jquery.nice-select.min.js"></script> -->
            <script src="<?= base_url('assets/js/'); ?>jquery.sticky.js"></script>

            <!-- contact js -->
            <script src="<?= base_url('assets/js/'); ?>contact.js"></script>
            <script src="<?= base_url('assets/js/'); ?>jquery.form.js"></script>
            <script src="<?= base_url('assets/js/'); ?>jquery.validate.min.js"></script>
            <script src="<?= base_url('assets/js/'); ?>mail-script.js"></script>
            <script src="<?= base_url('assets/js/'); ?>jquery.ajaxchimp.min.js"></script>