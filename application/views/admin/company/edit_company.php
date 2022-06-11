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
                            Edit Company Form 
                        </h4>
                    </div>
                    <div class="col-auto">
                        <a href="<?= base_url('admin/company') ?>" class="btn btn-sm btn-secondary btn-icon-split">
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
                <form action="<?php echo base_url('admin/company/edit/'.$perusahaan['id']) ?>" class="form" method="post">
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="nim">Username</label>
                    <div class="col-md-6">
                        <input value="<?= $perusahaan['username'] ?>" type="text" id="username" name="username" class="form-control" placeholder="Username">
                        <?= form_error('username', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="nama_instansi">Company Name</label>
                    <div class="col-md-6">
                        <input value="<?= $perusahaan['nama_instansi'] ?>" type="text" id="nama_instansi" name="nama_instansi" class="form-control" placeholder="Company Name">
                        <?= form_error('nama_instansi', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="alamat">Address</label>
                    <div class="col-md-6">
                        <input value="<?= $perusahaan['alamat'] ?>" type="text" id="alamat" name="alamat" class="form-control" placeholder="Address">
                        <?= form_error('alamat', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="email">Email</label>
                    <div class="col-md-6">
                        <input value="<?= $perusahaan['email'] ?>" type="email" id="email" name="email" class="form-control" placeholder="Email">
                        <?= form_error('email', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="no_telp">Telephone Number</label>
                    <div class="col-md-6">
                        <input value="<?= $perusahaan['no_telp'] ?>" type="text" id="no_telp" name="no_telp" class="form-control" placeholder="Telephone Number">
                        <?= form_error('no_telp', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="fax">FAX</label>
                    <div class="col-md-6">
                        <input value="<?= $perusahaan['fax'] ?>" type="text" id="fax" name="fax" class="form-control" placeholder="FAX">
                        <?= form_error('fax', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="website">Website</label>
                    <div class="col-md-6">
                        <input value="<?= $perusahaan['website'] ?>" type="text" id="website" name="website" class="form-control" placeholder="Website">
                        <?= form_error('website', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="deskripsi">Description</label>
                    <div class="col-md-6">
                        <textarea value="<?= $perusahaan['deskripsi'] ?>" type="text" id="deskripsi" name="deskripsi" class="form-control" placeholder="Description"></textarea>
                        <?= form_error('deskripsi', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>
                <!-- <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="password">Password</label>
                    <div class="col-md-6">
                        <input value="<?= $perusahaan['password'] ?>" type="text" id="password" name="password" class="form-control" placeholder="Password">
                        <?= form_error('password', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div> -->
                <input value="<?= $perusahaan['password'] ?>" type="hidden" id="password" name="password" class="form-control" placeholder="Password">
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