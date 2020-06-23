<?php
  $title="Peta Kecamatan Losari"; 

?> <!-- Judul Halaman -->

        <div class="container">

            <section class="jumbotron text-center mt-3 bg-template shadow-sm">
                <div class="container">
                    <img src="<?=templates()?>img/logos.png" alt="logo" class="logo-small">
                    <h1 class="jumbotron-heading font-weight-normal">WebGIS<b>Losari</b></h1>
                    <p class="lead">Kabupaten Brebes, Provinsi Jawa Tengah</p>
                    
                </div>
            </section>

            <div class="card bg-template shadow mt-4 h-190">
                <div class="card-body">
                    <div class="row">
                        <div class="col-auto">
                            <figure class="avatar avatar-60"><img src="<?=templates()?>img/yo.png" alt=""></figure>
                        </div>
                        <div class="col pl-0 align-self-center">
                            <h5 class="mb-1">Habib Khoirul Fajar</h5>
                            <p class="text-mute small">Developer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container top-100">
            <div class="card mb-4 shadow">
                <div class="card-body border-bottom">
                         <h6 class="subtitle">Contact Information</h6>
                        <dl class="row mb-4">
                            <dt class="col-3 text-secondary font-weight-normal">Email</dt>
                            <dd class="col-9"><a href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcSHvbGcNnZzJTtdJPCsFCVmJgJkNRLLxKjVmXjkJjrJndXlPXRQbDBbcbpLSnMZDJdTXbCQb">hkf013@gmail.com</a></dd>
                            <dt class="col-3 text-secondary font-weight-normal">Instagram</dt>
                            <dd class="col-9"><a href="https://www.instagram.com/bibbob_13/">@bibbob_13</a></dd>
                            <dt class="col-3 text-secondary font-weight-normal">Facebook</dt>
                            <dd class="col-9"><a href="https://facebook.com/habib.khoirulfajar">Habib Khoirul Fajar</a></dd>
                        </dl>

                </div>
     
            </div>
        </div>
 
   
     <div class="footer">
            
            <div class="no-gutters">
                <div class="col-auto mx-auto">
                    <div class="row no-gutters justify-content-center">
                        <div class="col-auto">
                            <a href="<?=url('beranda')?>" class="btn btn-link-default ">
                                <i class="material-icons">home</i>
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="<?=url('peta_wl')?>" class="btn btn-link-default  ">
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
                            <a href="<?=url('tentang')?>" class="btn btn-link-default active">
                                <i class="material-icons">info</i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer ends-->

    </div>