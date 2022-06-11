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
                
                    <div class="card p-2 shadow-sm border-bottom-primary">
                        <div class="card-header bg-white">
                            <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                                <?= $perusahaan['username']; ?>
                            </h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2 mb-4 mb-md-0">
                                    <img src="<?= base_url() ?>assets/upload/<?= $perusahaan['foto']; ?>" alt="" class="img-thumbnail rounded mb-2">
                                    <a href="<?= base_url('company/profile/setting'); ?>" class="btn btn-sm btn-block btn-primary"><i class="fa fa-edit"></i> Edit Profile</a>
                                    <!-- <a href="<?= base_url('profile/ubahpassword'); ?>" class="btn btn-sm btn-block btn-primary"><i class="fa fa-lock"></i> Ubah Password</a> -->
                                </div>
                                <div class="col-md-10">
                                    <table class="table">
                                        <tr>
                                            <th width="200">Company Name</th>
                                            <td><?= $perusahaan['nama_instansi']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Address</th>
                                            <td><?= $perusahaan['alamat']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td><?= $perusahaan['email']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Phone Number</th>
                                            <td><?= $perusahaan['no_telp']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>FAX</th>
                                            <td><?= $perusahaan['fax']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Website</th>
                                            <td><?= $perusahaan['website']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Description</th>
                                            <td><?= $perusahaan['deskripsi']; ?></td>
                                        </tr>
                                    </table>
                                </div>
            </div>
    </div>
</div>
