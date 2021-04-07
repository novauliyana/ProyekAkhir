<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="main-panel w-100  documentation">
        <div class="content-wrapper">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12 doc-header">
                <a class="btn btn-success" href="<?php echo site_url('admin/dashboard')?>"><i class="mdi mdi-home mr-2"></i>Kembali Ke Halaman</a>
                <a class="btn btn-success" href="<?php echo site_url('admin/buatjadwal')?>"><i class="mdi mdi-home mr-2"></i>Buat Jadwal</a>
                <h3 class="text-primary mt-4">Jadwal Pelajaran</h3>
                <?php echo $this->session->flashdata('pesan') ?>
                <ul class="nav nav-pills mb-3 nav-justified" id="pills-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link text-black " href="#senin"  role="tab"><h5>Senin</h5></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-black"  href="#selasa"  role="tab"><h5>Selasa</h5></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-black" href="#rabu" role="tab"><h5>Rabu</h5></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-black" href="#kamis" role="tab"><h5>Kamis</h5></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-black" href="#jumat" role="tab"><h5>Jumat</h5></a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="row doc-content">
            
              <div class="col-12">
                <div class="col-12 grid-margin" id="senin" >
                    <div class="card">
                        <div class="card-body">
                        <h3 class="mb-5 mt-5">Senin</h3>
                            <div class="table-responsive pt-3">
                                <table class="table table-bordered">
                                    <thead valign="center">
                                        <tr>
                                            <th rowspan="2">Jam</th>
                                            <th colspan="4">X</th>
                                            <th colspan="4">XI</th>
                                            <th colspan="4">XII</th>
                                        </tr>
                                        <tr>
                                            <td>IPA 1</td>
                                            <td>IPA 2</td>
                                            <td>IPS 1</td>
                                            <td>IPS 2</td>
                                            <td>IPA 1</td>
                                            <td>IPA 2</td>
                                            <td>IPS 1</td>
                                            <td>IPS 2</td>
                                            <td>IPA 1</td>
                                            <td>IPA 2</td>
                                            <td>IPS 1</td>
                                            <td>IPS 2</td>
                                            
                                        </tr>
                                       
                                    </thead>
                                    <tbody>
                                    <?php foreach ($jampel as $jamsenin) : ?>
                                        <tr>
                                            <td><?php echo $jamsenin->jam?></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        
                                    </tbody>
                                    <?php endforeach;?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="col-12 grid-margin" id="senin" >
                    <div class="card">
                        <div class="card-body">
                        <h3 class="mb-5 mt-5">Senin</h3>
                            <div class="table-responsive pt-3">
                                <table class="table table-bordered">
                                    <thead valign="center">
                                        <tr>
                                            <th rowspan="2">Jam</th>
                                            <th colspan="4">X</th>
                                            <th colspan="4">XI</th>
                                            <th colspan="4">XII</th>
                                        </tr>
                                        <tr>
                                            <td>IPA 1</td>
                                            <td>IPA 2</td>
                                            <td>IPS 1</td>
                                            <td>IPS 2</td>
                                            <td>IPA 1</td>
                                            <td>IPA 2</td>
                                            <td>IPS 1</td>
                                            <td>IPS 2</td>
                                            <td>IPA 1</td>
                                            <td>IPA 2</td>
                                            <td>IPS 1</td>
                                            <td>IPS 2</td>
                                            
                                        </tr>
                                       
                                    </thead>
                                    <tbody>
                                    <?php foreach ($jampel as $jamsenin) : ?>
                                        <tr>
                                            <td><?php echo $jamsenin->jam?></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        
                                    </tbody>
                                    <?php endforeach;?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> -->

                <div class="col-12 grid-margin" >
                    <div class="card" id="selasa">
                        <div class="card-body">
                        <h3 class="mb-5 mt-5">Selasa</h3>
                            <div class="table-responsive pt-3">
                            <table class="table table-bordered">
                                    <thead valign="center">
                                        <tr>
                                            <th rowspan="2">Jam</th>
                                            <th colspan="4">X</th>
                                            <th colspan="4">XI</th>
                                            <th colspan="4">XII</th>
                                        </tr>
                                        <tr>
                                            <td>IPA 1</td>
                                            <td>IPA 2</td>
                                            <td>IPS 1</td>
                                            <td>IPS 2</td>
                                            <td>IPA 1</td>
                                            <td>IPA 2</td>
                                            <td>IPS 1</td>
                                            <td>IPS 2</td>
                                            <td>IPA 1</td>
                                            <td>IPA 2</td>
                                            <td>IPS 1</td>
                                            <td>IPS 2</td>
                                            
                                        </tr>
                                       
                                    </thead>
                                    <tbody>
                                    <?php foreach ($jampel as $jamselasa) : ?>
                                        <tr>
                                            <td><?php echo $jamselasa->jam?></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        
                                    </tbody>
                                    <?php endforeach;?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 grid-margin" >
                    <div class="card" id="rabu">
                        <div class="card-body">
                        <h3 class="mb-5 mt-5">Rabu</h3>
                            <div class="table-responsive pt-3">
                                <table class="table table-bordered">
                                    <thead valign="center">
                                        <tr>
                                            <th rowspan="2">Jam</th>
                                            <th colspan="4">X</th>
                                            <th colspan="4">XI</th>
                                            <th colspan="4">XII</th>
                                        </tr>
                                        <tr>
                                            <td>IPA 1</td>
                                            <td>IPA 2</td>
                                            <td>IPS 1</td>
                                            <td>IPS 2</td>
                                            <td>IPA 1</td>
                                            <td>IPA 2</td>
                                            <td>IPS 1</td>
                                            <td>IPS 2</td>
                                            <td>IPA 1</td>
                                            <td>IPA 2</td>
                                            <td>IPS 1</td>
                                            <td>IPS 2</td>
                                            
                                        </tr>
                                       
                                    </thead>
                                    <tbody>
                                    <?php foreach ($jampel as $jamrabu) : ?>
                                        <tr>
                                            <td><?php echo $jamrabu->jam?></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        
                                    </tbody>
                                    <?php endforeach;?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 grid-margin" >
                    <div class="card" id="kamis">
                        <div class="card-body">
                        <h3 class="mb-5 mt-5">Kamis</h3>
                            <div class="table-responsive pt-3">
                                <table class="table table-bordered">
                                    <thead align="center">
                                        <tr >
                                            <th rowspan="2" align="middle">Jam</th>
                                            <th colspan="4">X</th>
                                            <th colspan="4">XI</th>
                                            <th colspan="4">XII</th>
                                        </tr>
                                        <tr>
                                            <td>IPA 1</td>
                                            <td>IPA 2</td>
                                            <td>IPS 1</td>
                                            <td>IPS 2</td>
                                            <td>IPA 1</td>
                                            <td>IPA 2</td>
                                            <td>IPS 1</td>
                                            <td>IPS 2</td>
                                            <td>IPA 1</td>
                                            <td>IPA 2</td>
                                            <td>IPS 1</td>
                                            <td>IPS 2</td>
                                            
                                        </tr>
                                       
                                    </thead>
                                    <tbody>
                                    <?php foreach ($jampel as $jamkamis) : ?>
                                        <tr>
                                            <td><?php echo $jamkamis->jam?></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        
                                    </tbody>
                                    <?php endforeach;?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 grid-margin" >
                    <div class="card" id="jumat">
                        <div class="card-body">
                        <h3 class="mb-5 mt-5">Jumat</h3>
                            <div class="table-responsive pt-3">
                                <table class="table table-bordered">
                                    <thead align="center">
                                        <tr>
                                            <th rowspan="2" align="middle">Jam</th>
                                            <th colspan="4">X</th>
                                            <th colspan="4">XI</th>
                                            <th colspan="4">XII</th>
                                        </tr>
                                        <tr>
                                            <td>IPA 1</td>
                                            <td>IPA 2</td>
                                            <td>IPS 1</td>
                                            <td>IPS 2</td>
                                            <td>IPA 1</td>
                                            <td>IPA 2</td>
                                            <td>IPS 1</td>
                                            <td>IPS 2</td>
                                            <td>IPA 1</td>
                                            <td>IPA 2</td>
                                            <td>IPS 1</td>
                                            <td>IPS 2</td>
                                            
                                        </tr>
                                       
                                    </thead>
                                    <tbody>
                                    <?php foreach ($jampel as $jamjumat) : ?>
                                        <tr>
                                            <td><?php echo $jamjumat->jam?></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        
                                    </tbody>
                                    <?php endforeach;?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>