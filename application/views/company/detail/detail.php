<body id="page-top">

    <!-- <?php echo "<script>console.log('" . json_encode($applicant) . "');</script>"; ?> -->

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php
        $sidebar['data'] = "applicant";
        $this->load->view('company/layout/sidebar', $sidebar);
        ?>

        <script>
        </script>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php $this->load->view('company/layout/topbar'); ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-lg-12">

                            <!-- Overflow Hidden -->
                            <div class="card mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Biodata Pelamar</h6>
                                </div>
                                <div class="card-body">
                                    </center>
                                    <div class="mb-4" style="margin-left: 70px;">
                                        <table cellpadding="10">
                                            <tr>
                                                <td>Nama Lengkap</td>
                                                <td>:</td>
                                                <td><?= $mahasiswa->nama ?></td>
                                            </tr>
                                            <tr>
                                                <td>Nim</td>
                                                <td>:</td>
                                                <td><?= $mahasiswa->nim ?></td>
                                            </tr>
                                            <tr>
                                                <td>Tanggal Lahir</td>
                                                <td>:</td>
                                                <td><?= $mahasiswa->tanggal_lahir ?></td>
                                            </tr>
                                            <tr>
                                                <td>Alamat</td>
                                                <td>:</td>
                                                <td><?= $mahasiswa->alamat ?></td>
                                            </tr>
                                            <tr>
                                                <td>Asal Kota</td>
                                                <td>:</td>
                                                <td><?= $mahasiswa->kota ?></td>
                                            </tr>
                                            <tr>
                                                <td>Nomor HP</td>
                                                <td>:</td>
                                                <td><?= $mahasiswa->no_hp ?></td>
                                            </tr>
                                            <tr>
                                                <td>Jenjang Pendidikan</td>
                                                <td>:</td>
                                                <td><?= $mahasiswa->jenjang ?></td>
                                            </tr>
                                            <tr>
                                                <td>Jurusan</td>
                                                <td>:</td>
                                                <td><?= $mahasiswa->jurusan ?></td>
                                            </tr>
                                            <tr>
                                                <td>Program Studi</td>
                                                <td>:</td>
                                                <td><?= $mahasiswa->program_studi ?></td>
                                            </tr>
                                            <tr>
                                                <td>Indeks Prestasi Kumulatif</td>
                                                <td>:</td>
                                                <td><?= $mahasiswa->ipk ?></td>
                                            </tr>
                                            <tr>
                                                <td>Tahun Lulus</td>
                                                <td>:</td>
                                                <td><?= $mahasiswa->tahun_lulus ?></td>
                                            </tr>
                                            <tr>
                                                <td>Jenis Kelamin</td>
                                                <td>:</td>
                                                <td><?= $mahasiswa->jenis_kelamin ?></td>
                                            </tr>

                                        </table>
                                    </div>
                                </div>
                            </div>

                            <!-- Progress Small -->
                            <div class="card mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Resume & Certificate</h6>
                                </div>
                                <div class="card-body">
                                    <h5>Curriculum vitae </h5>
                                    <div class="mb-4" style="margin-left: 70px;">
                                        <table cellpadding="10">
                                            <tr>
                                                <td>1.</td>
                                                <td><?= $mahasiswa->resume?></td>
                                                <td></td>
                                                <td><i class="fa fa-download"></i>&nbsp;&nbsp;<a href="<?= base_url()?>assets/upload/cv/<?= $mahasiswa->resume ?>">Download</a></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <hr>
                                    <h5>Certificate</h5>
                                    <div class="mb-4" style="margin-left: 70px;">
                                        <table cellpadding="10">
                                            <?php
                                            $no = 1;
                                            foreach ($sertif as $key => $data) { ?>
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $data->nama_file ?></td>
                                                    <td></td>
                                                    <td><i class="fa fa-download"></i>&nbsp;&nbsp;<a href="<?= base_url()?>assets/upload/sertif/<?= $data->nama_file ?>">Download</a></td>
                                                </tr>
                                            <?php } ?>

                                        </table>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">



                        </div>

                    </div>

                </div>
                <!-- /.container-fluid --