
<body id="page-top">

<?php echo "<script>console.log('" . json_encode($perusahaan) . "');</script>"; ?>

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
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card shadow-sm border-bottom-primary">
            <div class="card-header bg-white py-3">
                <div class="row">
                    <div class="col">
                        <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                            Detail Company
                        </h4>
                    </div>
                    <div class="col-auto">
                        <a href="<?= base_url('admin/company/') ?>" class="btn btn-sm btn-secondary btn-icon-split">
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
            <div class="card-body">
                <?= $this->session->flashdata('pesan'); ?>
                <?= form_open('', [], ['id' => $perusahaan['id']]); ?>
                <table class="table table-bordered no-margin">
                    <tbody>
                        <tr>
                            <th style="width: 35%;">Username</th>
                            <td><span id="nim"></span><?= $perusahaan['username']?></td>
                        </tr>
                        <tr>
                            <th style="width: 35%;">Company Name</th>
                            <td><span id="nama"></span><?= $perusahaan['nama_instansi']?></td>
                        </tr>
                        <tr>
                            <th style="width: 35%;">Address</th>
                            <td><span id="alamat"></span><?= $perusahaan['alamat']?></td>
                        </tr>
                        <tr>
                            <th style="width: 35%;">Email</th>
                            <td><span id="email"></span><?= $perusahaan['email']?></td>
                        </tr>
                        <tr>
                            <th style="width: 35%;">Telephone Number</th>
                            <td><span id="no_telp"></span><?= $perusahaan['no_telp']?></td>
                        </tr>
                        <tr>
                            <th style="width: 35%;">FAX</th>
                            <td><span id="fax"></span><?= $perusahaan['fax']?></td>
                        </tr>
                        <tr>
                            <th style="width: 35%;">Website</th>
                            <td><span id="website"></span><?= $perusahaan['website']?></td>
                        </tr>
                        <tr>
                            <th style="width: 35%;">Description</th>
                            <td><span id="deskripsi"></span><?= $perusahaan['deskripsi']?></td>
                        </tr>
                    </tbody>
                </table>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>