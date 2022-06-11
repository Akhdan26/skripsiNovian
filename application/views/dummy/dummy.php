
                                            <?php if($role == 1){ echo 
                                                '<li><a href="">Home</a></li>
                                                <li><a href="job_listing.html">Find a Jobs </a></li>
                                                <li><a href="about.html">About</a></li>
                                                <li><a href="#">Page</a>
                                                    <ul class="submenu">
                                                        <li><a href="blog.html">Blog</a></li>
                                                        <li><a href="single-blog.html">Blog Details</a></li>
                                                        <li><a href="elements.html">Elements</a></li>
                                                        <li><a href="job_details.html">job Details</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="contact.html">Contact</a></li>'
                                             ; } 
                                            else { echo 
                                                '<li><a href="index.html">Home</a></li>
                                                <li><a href="about.html">About</a></li>
                                                <li><a href="contact.html">Contact</a></li>'
                                             ;} ?> 

                                            <!-- Button lolos tidak lolos Applicant list -->
                                            <?php
                                                if ($data->status_daftar == 'lolos') {
                                                    echo '<a href="#" class="btn btn-circle btn-sm btn-success">
                                                        <i class="fa fa-fw fa-check"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-circle btn-sm btn-grey">
                                                        <i class="fa fa-fw fa-times"></i>
                                                    </a>';
                                                } elseif ($data->status_daftar == 'tidak lolos') {
                                                    echo '<a href="#" class="btn btn-circle btn-sm btn-grey">
                                                        <i class="fa fa-fw fa-check"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-circle btn-sm btn-danger">
                                                        <i class="fa fa-fw fa-times"></i>
                                                    </a>';
                                                } else {
                                                    echo '<a href="' .base_url('company/applicant_list/applicant_lolos/') . $data->id_pelamar. '" class="btn btn-circle btn-sm btn-success">
                                                        <i class="fa fa-fw fa-check"></i>
                                                    </a>
                                                    <a href="' .base_url('company/applicant_list/applicant_tidak_lolos/') . $data->id_pelamar. '" class="btn btn-circle btn-sm btn-danger">
                                                        <i class="fa fa-fw fa-times"></i>
                                                    </a>';
                                                }
                                            ?>

                                                    if ($data->status_daftar == 'lolos') {
                                                        echo '<div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item" href="' .base_url('company/applicant_list/applicant_lolos/') . $data->id_pelamar. '">Tahap 1 - Seleksi Berkas</a>
                                                            <a class="dropdown-item" href="#">Tahap 2 - Tes</a>
                                                            <a class="dropdown-item" href="#">Tahap 3 - Interview</a>
                                                            <a class="dropdown-item" href="' .base_url('company/applicant_list/applicant_tidak_lolos/') . $data->id_pelamar. '">Tidak Lolos</a>
                                                        </div>';
                                                    } elseif ($data->status_daftar == 'tidak lolos') {
                                                        echo '<div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item" href="' .base_url('company/applicant_list/applicant_lolos/') . $data->id_pelamar. '">Tahap 1 - Seleksi Berkas</a>
                                                            <a class="dropdown-item" href="#">Tahap 2 - Tes</a>
                                                            <a class="dropdown-item" href="#">Tahap 3 - Interview</a>
                                                            <a class="dropdown-item" href="' .base_url('company/applicant_list/applicant_tidak_lolos/') . $data->id_pelamar. '">Tidak Lolos</a>
                                                        </div>';
                                                    } else {
                                                        echo '<div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item" href="' .base_url('company/applicant_list/applicant_lolos/') . $data->id_pelamar. '">Tahap 1 - Seleksi Berkas</a>
                                                            <a class="dropdown-item" href="#">Tahap 2 - Tes</a>
                                                            <a class="dropdown-item" href="#">Tahap 3 - Interview</a>
                                                            <a class="dropdown-item" href="' .base_url('company/applicant_list/applicant_tidak_lolos/') . $data->id_pelamar. '">Tidak Lolos</a>
                                                        </div>';
                                                    }