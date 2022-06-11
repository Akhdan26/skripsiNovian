<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <?php 
        $sidebar['data'] = "job";
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
                                Job Data
                            </h4>
                        </div>
                        <!-- <div class="col-auto">
                            <a href="#" class="btn btn-sm btn-primary btn-icon-split" data-toggle="modal" data-target="#addModal"> -->
                            <!-- <a href="<?= base_url('admin/student/add_company') ?>" class="btn btn-sm btn-primary btn-icon-split"> -->
                                <!-- <span class="icon">
                                    <i class="fa fa-user-plus"></i>
                                </span>
                                <span class="text">
                                    Add Company
                                </span>
                            </a>
                        </div> -->
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped dt-responsive nowrap" id="dataTable">
                        <thead>
                            <tr>
                                <th width="30">No.</th>
                                <!-- <th>Foto</th> -->
                                <th>Job Name</th>
                                <!-- <th>Username</th> -->
                                <th>Company</th>
                                <!-- <th>No. telp</th> -->
                                <!-- <th>Role</th> -->
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            if ($job) :
                                foreach ($job as $key => $data) :
                                    ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <!-- <td>
                                            <img width="30" src="<?= base_url() ?>assets/img/avatar/<?= $job['foto'] ?>" alt="<?= $job['nama']; ?>" class="img-thumbnail rounded-circle">
                                        </td> -->
                                        <?php echo "<script>console.log('" . json_encode($data) . "');</script>"; ?>
                                        <td><?= $data->nama_pekerjaan; ?></td>
                                        <!-- <td><?= $job['username']; ?></td> -->
                                        <td><?= $data->nama_instansi; ?></td>
                                        <!-- <td><?= $job['no_telp']; ?></td> -->
                                        <!-- <td><?= $job['role']; ?></td> -->
                                        <td>
                                            <a href="<?= base_url('admin/job/detail_job/') . $data->id_pekerjaan;  ?>" class="btn btn-circle btn-sm btn-detail">
                                                <i class="fa fa-info"></i>
                                            </a>
                                            <!-- <a href="<?= base_url('admin/company/toggle/') . $user['id'] ?>" class="btn btn-circle btn-sm <?= $user['is_active'] ? 'btn-secondary' : 'btn-success' ?>" title="<?= $user['is_active'] ? 'Disable User' : 'Activate User' ?>"> 
                                                <i class="fa fa-fw fa-power-off"></i>
                                            </a> -->
                                            <!-- <a href="<?= base_url('admin/company/edit_company/') . $user['id'] ?>" class="btn btn-circle btn-sm btn-warning">
                                                <i class="fa fa-fw fa-edit"></i>
                                            </a>  -->
                                            <a onclick="return confirm('Yakin ingin menghapus data?')" href="<?= base_url('admin/job/delete/') . $data->id_pekerjaan; ?>" class="btn btn-circle btn-sm btn-danger">
                                                <i class="fa fa-fw fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach;
                                else : ?>
                                <tr>
                                    <td colspan="8" class="text-center">No Job Data</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
            <!-- End of Main Content -->
