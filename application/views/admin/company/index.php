<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <?php 
        $sidebar['data'] = "company";
        $this->load->view('admin/layout/sidebar', $sidebar); 
    ?>

    <script>
    </script>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
    
        <!-- Main Content -->
        <div id="content">

            <?php $this->load->view('admin/layout/topbar'); ?>

            <!-- Begin Page Content -->
            <div class="container-fluid">
            <?= $this->session->flashdata('pesan'); ?>
            <div class="card shadow-sm mb-4 border-bottom-primary">
                <div class="card-header bg-white py-3">
                    <div class="row">
                        <div class="col">
                            <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                                Company Data
                            </h4>
                        </div>
                        <div class="col-auto">
                            <a href="#" class="btn btn-sm btn-primary btn-icon-split" data-toggle="modal" data-target="#addModal">
                            <!-- <a href="<?= base_url('admin/student/add_company') ?>" class="btn btn-sm btn-primary btn-icon-split"> -->
                                <span class="icon">
                                    <i class="fa fa-user-plus"></i>
                                </span>
                                <span class="text">
                                    Add Company
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped dt-responsive nowrap" id="dataTable">
                        <thead>
                            <tr>
                                <th width="30">No.</th>
                                <th>Username</th>
                                <th>Company Name</th>
                                <!-- <th>Username</th> -->
                                <th>Email</th>
                                <!-- <th>No. telp</th> -->
                                <!-- <th>Role</th> -->
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            if ($users) :
                                foreach ($users as $user) :
                                    ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <!-- <td>
                                            <img width="30" src="<?= base_url() ?>assets/img/avatar/<?= $user['foto'] ?>" alt="<?= $user['nama']; ?>" class="img-thumbnail rounded-circle">
                                        </td> -->
                                        <td><?= $user['username']; ?></td>
                                        <td><?= $user['nama_instansi']; ?></td>
                                        <td><?= $user['email']; ?></td>
                                        <!-- <td><?= $user['no_telp']; ?></td> -->
                                        <!-- <td><?= $user['role']; ?></td> -->
                                        <td>
                                            <a href="<?= base_url('admin/company/detail_company/') . $user['id'] ?>" class="btn btn-circle btn-sm btn-detail">
                                                <i class="fa fa-info"></i>
                                            </a>
                                            <a href="<?= base_url('admin/company/toggle/') . $user['id'] ?>" class="btn btn-circle btn-sm <?= $user['is_active'] ? 'btn-secondary' : 'btn-success' ?>" title="<?= $user['is_active'] ? 'Disable User' : 'Activate User' ?>">
                                                <i class="fa fa-fw fa-power-off"></i>
                                            </a>
                                            <a href="<?= base_url('admin/company/edit_company/') . $user['id'] ?>" class="btn btn-circle btn-sm btn-warning">
                                                <i class="fa fa-fw fa-edit"></i>
                                            </a>
                                            <a onclick="return confirm('Yakin ingin menghapus data?')" href="<?= base_url('admin/company/delete/') . $user['id'] ?>" class="btn btn-circle btn-sm btn-danger">
                                                <i class="fa fa-fw fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach;
                                else : ?>
                                <tr>
                                    <td colspan="8" class="text-center">Silahkan tambahkan user baru</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
            <!-- End of Main Content -->
         <!-- Add Modal-->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Company Data</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <?= $this->session->flashdata('pesan'); ?>
                    <form action="<?php echo base_url('admin/company/add') ?>" class="form" method="post">
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="username">Username</label>
                    <div class="col-md-6">
                        <input value="<?= set_value('username'); ?>" type="text" id="username" name="username" class="form-control" placeholder="Username">
                        <?= form_error('username', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="nama_instansi">Company Name</label>
                    <div class="col-md-6">
                        <input type="text" id="nama_instansi" name="nama_instansi" class="form-control" placeholder="Company Name">
                        <?= form_error('nama_instansi', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="alamat">Address</label>
                    <div class="col-md-6">
                        <input type="text" id="alamat" name="alamat" class="form-control" placeholder="Address">
                        <?= form_error('alamat', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="email">Email</label>
                    <div class="col-md-6">
                        <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                        <?= form_error('email', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="no_telp">Telephone Number</label>
                    <div class="col-md-6">
                        <input type="text" id="no_telp" name="no_telp" class="form-control" placeholder="Telephone Number">
                        <?= form_error('no_telp', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="fax">FAX</label>
                    <div class="col-md-6">
                        <input type="text" id="fax" name="fax" class="form-control" placeholder="FAX">
                        <?= form_error('fax', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="website">Website</label>
                    <div class="col-md-6">
                        <input type="text" id="website" name="website" class="form-control" placeholder="Website">
                        <?= form_error('website', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="deskipsi">Description</label>
                    <div class="col-md-6">
                        <textarea id="deskripsi" name="deskripsi" class="form-control" placeholder="Description"></textarea>
                        <?= form_error('deskripsi', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="password">Password</label>
                    <div class="col-md-6">
                        <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                        <?= form_error('password', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>
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
            </form>
                </div>
            </div>
        </div>
    </div>
</div>
