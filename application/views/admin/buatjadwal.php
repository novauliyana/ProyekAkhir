<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="main-panel w-100  documentation">
        <div class="content-wrapper">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12 doc-header">
                <a class="btn btn-success" href="<?php echo site_url('admin/index')?>"><i class="mdi mdi-home mr-2"></i>Kembali Ke Halaman</a>
                <a class="btn btn-success" href="../index.html"><i class="mdi mdi-home mr-2"></i>Buat Jadwal</a>
                <h3 class="text-primary mt-4">Jadwal Pelajaran</h3>
                
              </div>
            </div>
            

            <div class="row doc-content">
              <div class="col-12">
                <div class="col-12 grid-margin scroll" >
                    <div class="card">
                        <div class="card-body horizontal-scrollable"">
                            <form class="form-sample" method="post" action="<?= base_url('admin/tambahjadwal_aksi') ?>">
                            <select class="form-control" name="id_h">
                                        <option value="disabled diselected">--Hari--</option>
                                        <?php foreach ($hari as $hari){?>
                                        <option value="<?php echo $hari->id_h ?>"><?php echo $hari->hari ?></option>
                                        <?php }?>
                                    </select>
                                    <?= form_error('id_h', '<div class="text-danger small ml-3">','</div>')?>
                    
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="table-responsive pt-3">
                                            <table class="table table-bordered">
                                                <thead valign="center">
                                                    <tr>
                                                        <th rowspan="2">Jam</th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <select class="form-control" name="id_kelas">
                                                                <option value="disabled diselected">--Kelas--</option>
                                                                <?php foreach ($kelas as $kelassenin){?>
                                                                <option value="<?php echo $kelassenin->id_kelas ?>"><?php echo $kelassenin->nama_kelas ?></option>
                                                                <?php }?>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                </thead>
                                                
                                                <tbody>
                                                <?php foreach ($jampel as $jamsenin) : ?>
                                                    <tr>
                                                            <td><select class="form-control" name="id_j[]">
                                                                <!-- <option value="disabled diselected">--Jam--</option> -->
                                                                <option value="<?php echo $jamsenin->id_j?>"><?php echo $jamsenin->jam ?></option>
                                                            </select></td>
                                                        <!-- <td name="id_j" class="form-control" value="<?php echo $jamsenin->id_j?>"><?php echo $jamsenin->jam?></td> -->
                                                        <td>
                                                            <select class="form-control" name="id_mapel[]">
                                                                <option value="disabled diselected">--Mapel--</option>
                                                                <?php foreach ($mapel as $mapelsenin){?>
                                                                <option value="<?php echo $mapelsenin->id_mapel?>"><?php echo $mapelsenin->nama_mapel ?></option>
                                                                <?php }?>
                                                            </select>
                                                        </td>
                                                    
                                                    </tr>
                                                </tbody>
                                                <?php endforeach;?>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="table-responsive pt-3">
                                            <table class="table table-bordered">
                                                <thead valign="center">
                                                    <tr>
                                                        <th rowspan="2">Jam</th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <select class="form-control" name="id_kelas">
                                                                <option value="disabled diselected">--Kelas--</option>
                                                                <?php foreach ($kelas as $kelassenin){?>
                                                                <option value="<?php echo $kelassenin->id_kelas ?>"><?php echo $kelassenin->nama_kelas ?></option>
                                                                <?php }?>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                </thead>
                                                
                                                <tbody>
                                                <?php foreach ($jampel as $jamsenin) : ?>
                                                    <tr>
                                                            <td><select class="form-control" name="id_j[]">
                                                                <!-- <option value="disabled diselected">--Jam--</option> -->
                                                                <option value="<?php echo $jamsenin->id_j?>"><?php echo $jamsenin->jam ?></option>
                                                            </select></td>
                                                        <!-- <td name="id_j" class="form-control" value="<?php echo $jamsenin->id_j?>"><?php echo $jamsenin->jam?></td> -->
                                                        <td>
                                                            <select class="form-control" name="id_mapel[]">
                                                                <option value="disabled diselected">--Mapel--</option>
                                                                <?php foreach ($mapel as $mapelsenin){?>
                                                                <option value="<?php echo $mapelsenin->id_mapel?>"><?php echo $mapelsenin->nama_mapel ?></option>
                                                                <?php }?>
                                                            </select>
                                                        </td>
                                                    
                                                    </tr>
                                                </tbody>
                                                <?php endforeach;?>
                                            </table>
                                        </div>
                                    </div>
                                    
                                    
                              
                                </div>

                                
                                <button type="submit" class="btn btn-primary mt-2 mt-xl-0" >Tambah</button>
                                <button type="submit" class="btn btn-danger mt-2 mt-xl-0" >Batal</button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- <div class="col-12 grid-margin" >
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
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
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
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
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
                                    <?php foreach ($jampel as $jamkamis) : ?>
                                        <tr>
                                            <td><?php echo $jamkamis->jam?></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
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
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                        </tr>
                                        
                                    </tbody>
                                    <?php endforeach;?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>