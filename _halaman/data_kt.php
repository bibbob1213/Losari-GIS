<?php
  $title="Data Desa"; 
?> <!-- Judul Halaman -->

      <div class="container">
                        <div class="row">
                <div class="col">
                    <div class="btn-group w-100" role="group">
                        <a href="<?=url('data')?>" type="button" class="btn btn btn-primary " >Data 1</a>
                        <a href="<?=url('data_lk')?>" type="button" class="btn btn btn-primary">Data 2</a>
                        <a href="<?=url('data_ll')?>"type="button" class="btn btn btn-primary ">Data 3</a>
                        <a href="<?=url('data_kt')?>"type="button" class="btn btn btn-primary active">Data 4</a>
                    </div>
                </div>
            </div>
                <div class="table-responsive">
                  <table class="table m-0">
                       <?php
                        include "koneksi.php";
                        $query = mysqli_query($connection,"SELECT * FROM desa ORDER BY id_desa ");
                        ?>
                    <thead>
                    <tr>
                      <th>Desa</th>
                      <th>Ketinggian(mdpl)</th>
                     
                     
                    </tr>
                    </thead>
                    <tbody>
                      <?php if(mysqli_num_rows($query)>0){ ?>
                                <?php
                                   
                                    while($data = mysqli_fetch_array($query)){
                                ?>
                                <tr>
                                    
                                    <td><?php echo $data["nama_desa"];?></td>
                                  <td><?php echo $data["mdpl"];?> mdpl</td>
                                  
                                   
                                </tr>
                                <?php  } ?>
                                <?php } ?>
                              </tbody>
                            </table>
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
                            <a href="<?=url('data')?>" class="btn btn-link-default active">
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