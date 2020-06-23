<?php
  $title="Peta Kecamatan Losari"; 

?> <!-- Judul Halaman -->

        <div class="container">
            <div class="card shadow mt-4 h-200 overflow-hidden">
                <div class="card-body">
                    <h3 class="mb-0 font-weight-normal">$ 1548.00</h3>
                    <p class="text-mute text-secondary">My Balance</p>

                </div>
                <div class="h-200 top-100">
                    <canvas id="linechart"></canvas>
                </div>
            </div>
        </div>
        <div class="container top-30">
            <div class="card mb-4 shadow">
                <div class="card-body bg-none py-3">
                    <div class="row">
                        <div class="col text-right">
                            <p>$ 90 <i class="material-icons text-danger vm small">arrow_downward</i><br><small class="text-mute">Income</small></p>
                        </div>
                        <div class="col border-left-dotted">
                            <p><i class="material-icons text-success vm small mr-1">arrow_upward</i>$ 105<br><small class="text-mute">Expense</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <h6 class="subtitle">Expensive Categories</h6>
            <div class="row">
                <div class="swiper-container icon-slide mb-4">
                    <div class="swiper-wrapper">
                        <a href="<?=url('peta_w')?>" class="swiper-slide text-center">
                            <div class="avatar avatar-60 no-shadow border-0">
                                <div class="overlay gradient-success"></div>
                                <i class="material-icons text-success">map</i>
                            </div>
                            <p class="small mt-2">Wilayah</p>
                        </a>
                        <a href="<?=url('peta_lk')?>" class="swiper-slide text-center">
                            <div class="avatar avatar-60 no-shadow border-0">
                                <div class="overlay gradient-warning"></div>
                                <i class="material-icons text-warning">map</i>
                            </div>
                            <p class="small mt-2">Luas Lahan</p>
                        </a>
                        <a href="<?=url('peta_ll')?>" class="swiper-slide text-center">
                            <div class="avatar avatar-60 no-shadow border-0">
                                <div class="overlay gradient-danger"></div>
                                <i class="material-icons text-danger">map</i>
                            </div>
                            <p class="small mt-2">Luas Tambak</p>
                        </a>
                        <a href="<?=url('peta_kt')?>" class="swiper-slide text-center">
                            <div class="avatar avatar-60 no-shadow border-0">
                                <div class="overlay gradient-info"></div>
                                <i class="material-icons text-info">map</i>
                            </div>
                            <p class="small mt-2">Ketinggian</p>
                        </a>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <div class="card shadow border-0 mb-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <p class="text-mute small text-secondary ">20d to pay electricity bill</p>
                        </div>
                        <div class="col-auto">
                            <h5 class="font-weight-normal ">$ 1548.00 </h5>
                        </div>
                    </div>
                    <div class="progress h-4">
                        <div class="progress-bar bg-success" role="progressbar" style="width:35%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                </div>
            </div>
            <div class="card shadow border-0 mb-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <p class="text-mute small text-secondary ">33 days to pay gas bill</p>
                        </div>
                        <div class="col-auto">
                            <h5 class="font-weight-normal ">$ 106.00 </h5>
                        </div>
                    </div>
                    <div class="progress h-4">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 65%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <h6 class="subtitle">Extra expenses</h6>
            <div class="row ">
                <div class="container px-0">
                    <!-- Swiper -->
                    <div class="swiper-container offer-slide">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card shadow border-0">
                                    <div class="card-body">
                                        <div class="row h-100">
                                            <div class="col-auto pr-0">
                                                <div class="avatar avatar-60 no-shadow border-0">
                                                    <div class="overlay gradient-danger"></div>
                                                    <i class="material-icons text-danger">favorite</i>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <p>$ 150.00<br><small class="text-secondary">Medical Treatment</small></p>
                                                <p class="text-secondary text-mute small">Due to long illness and food infection medical treatment undergone 3 days</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card shadow border-0">
                                    <div class="card-body">
                                        <div class="row h-100">
                                            <div class="col-auto pr-0">
                                                <div class="avatar avatar-60 no-shadow border-0">
                                                    <div class="overlay gradient-success"></div>
                                                    <i class="material-icons text-success">pets</i>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <p>$ 100.00<br><small class="text-secondary">Pets Food</small></p>
                                                <p class="text-secondary text-mute small">Due to long illness and food infection medical treatment undergone 3 days</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card shadow border-0">
                                    <div class="card-body">
                                        <div class="row h-100">
                                            <div class="col-auto pr-0">
                                                <div class="avatar avatar-60 no-shadow border-0">
                                                    <div class="overlay gradient-warning"></div>
                                                    <i class="material-icons text-warning">directions_car</i>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <p>$ 150.00<br><small class="text-secondary">Transportation</small></p>
                                                <p class="text-secondary text-mute small">Way ahead of the decided to go, more distance more money wasted these days</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                          
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <h6 class="subtitle">Loan Status </h6>
            <div class="card shadow border-0 mb-3">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-auto pr-0">
                            <div class="avatar avatar-50 no-shadow border-0">
                                <div class="overlay bg-template"></div>
                                <i class="material-icons vm text-template">local_atm</i>
                            </div>
                        </div>
                        <div class="col-4 align-self-center">
                            <h6 class="font-weight-normal mb-1">EMI</h6>
                            <p class="text-mute small text-secondary">Home Loan</p>
                        </div>
                        <div class="col-auto align-self-center border-left">
                            <h6 class="font-weight-normal mb-1">$ 1548.00</h6>
                            <p class="text-mute small text-secondary">Due: 15-12-2019</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow border-0 mb-3">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-auto pr-0">
                            <div class="avatar avatar-50 no-shadow border-0">
                                <div class="overlay bg-template"></div>
                                <i class="material-icons vm text-template">local_atm</i>
                            </div>
                        </div>
                        <div class="col-4 align-self-center">
                            <h6 class="font-weight-normal mb-1">EMI</h6>
                            <p class="text-mute small text-secondary">Car Loan</p>
                        </div>
                        <div class="col-auto align-self-center border-left">
                            <h6 class="font-weight-normal mb-1">$ 658.00</h6>
                            <p class="text-mute small text-secondary">Due: 18-12-2019</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
        <div class="container">
            <h6 class="subtitle">News Updates</h6>
            <div class="row">
                <!-- Swiper -->
                <div class="swiper-container news-slide">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card shadow border-0 bg-template text-white">
                                <div class="card-body">
                                    <a href="#" class="btn btn-default btn-rounded-36 shadow-sm float-bottom-right"><i class="material-icons md-18">arrow_forward</i></a>
                                    <h5 class="small">Multipurpose Juice allows you to grow faster</h5>
                                    <p class="text-mute small">By Anand Mangal</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card shadow border-0 bg-template text-white">
                                <div class="card-body">
                                    <a href="#" class="btn btn-default btn-rounded-36 shadow-sm float-bottom-right"><i class="material-icons md-18">arrow_forward</i></a>
                                    <h5 class="small">Multipurpose Juice allows you to grow faster</h5>
                                    <p class="text-mute small">By Anand Mangal</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card shadow border-0 bg-template text-white">
                                <div class="card-body">
                                    <a href="#" class="btn btn-default btn-rounded-36 shadow-sm float-bottom-right"><i class="material-icons md-18">arrow_forward</i></a>
                                    <h5 class="small">Multipurpose Juice allows you to grow faster</h5>
                                    <p class="text-mute small">By Anand Mangal</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card shadow border-0 bg-template text-white">
                                <div class="card-body">
                                    <a href="#" class="btn btn-default btn-rounded-36 shadow-sm float-bottom-right"><i class="material-icons md-18">arrow_forward</i></a>
                                    <h5 class="small">Multipurpose Juice allows you to grow faster</h5>
                                    <p class="text-mute small">By Anand Mangal</p>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>


