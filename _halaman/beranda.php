<?php
  $title="Beranda"; 
?> <!-- Judul Halaman -->

         <div class="container ">
            <!-- page content here -->
            <section class="jumbotron text-center mt-3 bg-template shadow-sm">
                <div class="container">
                    <img src="<?=templates()?>img/logos.png" alt="logo" class="logo-small">
                    <h1 class="jumbotron-heading font-weight-normal">WebGIS<b>Losari</b></h1>
                    <p class="lead">Kabupaten Brebes, Provinsi Jawa Tengah</p>
                    
                </div>
            </section>
                    <div class="container">
          
            <div class="row">
                <div class="swiper-container icon-slide mb-4">
                    <div class="swiper-wrapper">
                        <a href="#collapsePeta" class="swiper-slide text-center">
                            <div class="avatar avatar-60 no-shadow border-0">
                                <div class="overlay gradient-primary"></div>
                                <i class="material-icons text-templates">map</i>
                            </div>
                            <p class="small mt-2">Peta Wilayah</p>
                        </a>
                        <a href="<?=url('data')?>" class="swiper-slide text-center">
                            <div class="avatar avatar-60 no-shadow border-0">
                                <div class="overlay gradient-primary"></div>
                                <i class="material-icons text-templates">find_in_page</i>
                            </div>
                            <p class="small mt-2">Data Desa</p>
                        </a>

                        <a href="<?=url('tentang')?>" class="swiper-slide text-center">
                            <div class="avatar avatar-60 no-shadow border-0">
                                <div class="overlay gradient-primary"></div>
                                <i class="material-icons text-templates">info</i>
                            </div>
                            <p class="small mt-2">About</p>
                        </a>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>


            
            <br>
            <div class="row">
                <div class="container px-0">
                    <!-- Swiper -->


        <div class="container bg-template" id="collapseData">
            <div class="row">
                <div class="col text-center">
                    <h5 class="subtitle mb-1">Data Geografis Kec.Losari</h5>
                    <p>Wilayah Kecamatan Losari berada di sebelah timur Sungai Cisanggarung yang memanjang dari daerah pantai Laut Jawa di utara ke arah selatan yang menuju akses ke wilayah tengah di Kabupaten Brebes bagian barat yang berbatasan dengan Kecamatan Banjarharjo. </p>
                </div>
            </div>
            <div class="row text-center mt-4">
                <div class="col-6 col-md-3">
                     <a href="<?=url('data')?>">
                    <div class="card shadow border-0 mb-3">
                        <div class="card-body">
                            <div class="avatar avatar-60 no-shadow border-0">
                                <div class="overlay bg-template"></div>
                                <i class="material-icons vm md-36 text-template">local_florist</i>
                            </div>
                            <h3 class="mt-3 mb-0 font-weight-normal text-dark">8.955,87 ha</h3>
                            <p class="text-secondary text-mute small">Lahan Sawah</p>
                        </div>
                    </div>
                </a>
                </div>
                <div class="col-6 col-md-3">
                     <a href="<?=url('data_lk')?>">
                    <div class="card shadow border-0 mb-3">
                        <div class="card-body">
                            <div class="avatar avatar-60 no-shadow border-0">
                                <div class="overlay bg-template"></div>
                                <i class="material-icons vm md-36 text-template">location_city</i>
                            </div>
                            <h3 class="mt-3 mb-0 font-weight-normal text-dark">1.274,60 ha</h3>
                            <p class="text-secondary text-mute small">Pemukiman</p>
                        </div>
                    </div>
                </a>
                </div>
                <div class="col-6 col-md-3">
                    <a href="<?=url('data_ll')?>">
                    <div class="card shadow border-0 mb-3">
                        <div class="card-body">
                            <div class="avatar avatar-60 no-shadow border-0">
                                <div class="overlay bg-template"></div>
                                <i class="material-icons vm md-36 text-template">line_style</i>
                            </div>
                            <h3 class="mt-3 mb-0 font-weight-normal text-dark">2.012,58 ha</h3>
                            <p class="text-secondary text-mute small">Luas Tambak</p>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-6 col-md-3">
                     <a href="<?=url('data_kt')?>">
                    <div class="card shadow border-0 mb-3">
                        <div class="card-body">
                            <div class="avatar avatar-60 no-shadow border-0">
                                <div class="overlay bg-template"></div>
                                <i class="material-icons vm md-36 text-template">filter_hdr</i>
                            </div>
                            <h3 class="mt-3 mb-0 font-weight-normal text-dark">1-5 mdpl</h3>
                            <p class="text-secondary text-mute small">Ketinggian</p>
                        </div>
                    </div>
                </a>
                </div>
            </div>
        </div>
</div>

      <div class="container bg-white" id="collapsePeta">
            <div class="row">
                <div class="col text-center">
                    <h5 class="subtitle mb-1">Peta Geografis Kec.Losari</h5>
                </div>
            </div>
            <div class="row text-center mt-4">
                <div class="col-6 col-md-3">
                     <a href="<?=url('peta_w')?>">
                    <div class="card shadow border-0 mb-3 bg-template">
                        <div class="card-body">
                            <div class="avatar avatar-60 no-shadow border-0">
                                <div class="overlay bg-white"></div>
                                <i class="material-icons vm md-36 text-template">map</i>
                            </div>
                            <p class="text small">Peta Kec.Losari Berdasarkan Wilayah Desa</p>
                        </div>
                    </div>
                </a>
                </div>
                <div class="col-6 col-md-3">
                     <a href="<?=url('peta_lk')?>">
                    <div class="card shadow border-0 mb-3 bg-template">
                        <div class="card-body">
                            <div class="avatar avatar-60 no-shadow border-0">
                                <div class="overlay bg-white"></div>
                                <i class="material-icons vm md-36 text-template">map</i>
                            </div>
                            <p class="text small">Peta Kec.Losari Berdasarkan Luas Lahan</p>
                        </div>
                    </div>
                </a>
                </div>
                <div class="col-6 col-md-3">
                    <a href="<?=url('peta_ll')?>">
                    <div class="card shadow border-0 mb-3 bg-template">
                        <div class="card-body">
                            <div class="avatar avatar-60 no-shadow border-0">
                                <div class="overlay bg-white"></div>
                                <i class="material-icons vm md-36 text-template">map</i>
                            </div>
                            <p class="text small">Peta Kec.Losari Berdasarkan Luas Tambak</p>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-6 col-md-3">
                     <a href="<?=url('peta_kt')?>">
                    <div class="card shadow border-0 mb-3 bg-template">
                        <div class="card-body">
                            <div class="avatar avatar-60 no-shadow border-0">
                                <div class="overlay bg-white"></div>
                                <i class="material-icons vm md-36 text-template">map</i>
                            </div>
                            <p class="text small">Peta Kec.Losari Berdasarkan Ketinggian</p>
                        </div>
                    </div>
                </a>
                </div>
            </div>
        </div>
</div>
</div>

        <div class="footer">
            
            <div class="no-gutters">
                <div class="col-auto mx-auto">
                    <div class="row no-gutters justify-content-center">
                        <div class="col-auto">
                            <a href="<?=url('beranda')?>" class="btn btn-link-default active">
                                <i class="material-icons">home</i>
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="<?=url('peta_wl')?>" class="btn btn-link-default ">
                                <i class="material-icons">map</i>
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="<?=url('data')?>" class="btn btn-link-default ">
                                <i class="material-icons">find_in_page</i>
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="<?=url('login')?>" class="btn btn-link-default ">
                                <i class="material-icons">edit</i>
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="<?=url('tentang')?>" class="btn btn-link-default ">
                                <i class="material-icons">info</i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer ends-->

    </div>



