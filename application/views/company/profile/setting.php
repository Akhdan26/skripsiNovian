
<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <?php 
        $sidebar['data'] = "dashboard";
        $this->load->view('company/layout/sidebar', $sidebar); 
    ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
    
        <!-- Main Content -->
        <div id="content">

            <?php $this->load->view('company/layout/topbar'); ?>

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Content Row -->
                
                    <div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm border-bottom-primary">
            <div class="card-header bg-white py-3">
                <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                    Form Edit Profile User
                </h4>
            </div>
            <div class="card-body">
                
                <?= $this->session->flashdata('pesan'); ?>
                <!-- <?= form_open_multipart('', [], ['id' => $perusahaan['id']]); ?> -->
                <form action="<?php echo base_url('company/profile/edit_company/'.$perusahaan['id']) ?>" class="form" method="post" enctype="multipart/form-data">
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="foto">Foto</label>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-3">
                                <img src="<?= base_url() ?>assets/upload/<?= $perusahaan['foto']; ?>" alt="<?= $perusahaan['nama_instansi']; ?>" class="rounded-circle shadow-sm img-thumbnail">
                            </div>
                            <div class="col-9">
                                <input type="file" name="foto" id="foto" accept="image/png, image/jpeg, image/jpg, image/gif">
                                <?= form_error('foto', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <input value="<?= $perusahaan['id']; ?>" name="id" id="id" type="hidden" class="form-control" placeholder="Username...">
                <hr>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="username">Username</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-user"></i></span>
                            </div>
                            <input value="<?= $perusahaan['username']; ?>" name="username" id="username" type="text" class="form-control" placeholder="Username...">
                        </div>
                        <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <hr>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="nama">Company Name</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-building"></i></span>
                            </div>
                            <input value="<?= $perusahaan['nama_instansi']; ?>" name="nama_instansi" id="nama_instansi" type="text" class="form-control" placeholder="Your Company Name...">
                        </div>
                        <?= form_error('nama_instansi', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="alamat">Address</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-location-dot"></i></span>
                            </div>
                            <input value="<?= $perusahaan['alamat'] ?>" name="alamat" id="alamat" type="text" class="form-control" placeholder="Address...">
                        </div>
                        <?= form_error('alamat', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="email">Email</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-envelope"></i></span>
                            </div>
                            <input value="<?= $perusahaan['email'] ?>" name="email" id="email" type="email" class="form-control" placeholder="Email...">
                        </div>
                        <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="no_telp">Telephone Number</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-phone"></i></span>
                            </div>
                            <input value="<?= $perusahaan['no_telp'] ?>" name="no_telp" id="no_telp" type="text" class="form-control" placeholder="Telephone Number...">
                        </div>
                        <?= form_error('no_telp', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="no_telp">FAX</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-fax"></i></span>
                            </div>
                            <input value="<?= $perusahaan['fax'] ?>" name="fax" id="fax" type="text" class="form-control" placeholder="Fax...">
                        </div>
                        <?= form_error('fax', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="no_telp">Website</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-blog"></i></span>
                            </div>
                            <input value="<?= $perusahaan['website'] ?>" name="website" id="website" type="text" class="form-control" placeholder="Website...">
                        </div>
                        <?= form_error('website', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="deskripsi">Description</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-file"></i></span>
                            </div>
                            <textarea name="deskripsi" id="deskripsi" type="text" class="form-control" placeholder="Description..."><?= $perusahaan['deskripsi'] ?></textarea>
                        </div>
                        <?= form_error('deskripsi', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <hr>
                <div class="row form-group">
                    <div class="col-md-9 offset-md-3">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </div>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>