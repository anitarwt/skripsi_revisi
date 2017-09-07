<div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Form Pegawai</h2>
                  
                  <?php echo $this->session->flashdata('info'); ?>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br />
                  <!--form yang diambil-->
                  <div class="form-horizontal form-label-left">
                    
                 
                <!-- <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" >-->
            
                    
          
         
          <?php echo form_open_multipart('staff/tambah_pegawaidb'); ?>
           
          <?php echo validation_errors(); ?>       
                


                      
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="hidden" name="id" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="nama" value="<?php echo set_value('nama') ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                   <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <p>
                          Pria:
                        <input type="radio" class="flat" name="jk" id="jkw" value="wanita" checked="wanita" /> Wanita:
                        <input type="radio" class="flat" name="jk" id="jkp" value="pria" checked="pria" />
                      </p>
                        </div>
                      </div>
                     <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tanggal Lahir<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                       <input type="date" name="tanggal" value="" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Alamat<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea name="alamat"  class="form-control col-md-7 col-xs-12"><?php echo set_value('alamat') ?></textarea>
                      </div>
                    </div>
                     <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Email<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                     <input type="text" name="email" value="<?php echo set_value('email') ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">No Handpone<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="hp" value="<?php echo set_value('hp') ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name" >Pendidikan Terakhir<span class="required">*</span>
                      </label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                         <select id="heard" class="form-control"  name="pendidikan" value="<?php echo set_value('pendidikan') ?>">
                         <option value="">--Jenjang Pendidikan--</option>
                        <option value="S2">S2</option>
                          <option value="S1">S1</option>
                          <option value="D3">D3</option>
                            <option value="SMU">SMU/SMK</option>
                    </select>   
                  </div>
                  </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Pengalaman Kerja<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                       <textarea name="pengalaman"  class="form-control col-md-7 col-xs-12"><?php echo set_value('pengalaman') ?></textarea>
                      </div>
                    </div>

                     <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Divisi<span class="required">*</span>
                      </label>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                         <select id="heard" class="form-control"  name="divisi" value="<?php echo set_value('divisi') ?>">
                         <option value="">--Divisi--</option>
                        <option value="sales">Sales</option>
                          <option value="billing">Billing</option>
                          <option value="developer">Developer</option>
                            <option value="teknisi">Teknisi</option>
                    </select>  

                  </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">
                      File(Masukan data Ijazah/CV dalam bentuk .rar max size 2 mb) <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="file" name="file" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>

                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3" align="center">
                        <button type="submit" class="btn btn-success" name="input" >Input</button>
                      </div>
                    </div>
                     </div>
                    
                 <?php echo form_close(); ?>


                </div>
              </div>
            </div>
          </div>