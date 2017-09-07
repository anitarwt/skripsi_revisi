<div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Form Edit Alternatif</h2>
                  
                  <?php echo $this->session->flashdata('info'); ?>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br />
                  <!--form yang diambil-->
                  <div class="form-horizontal form-label-left">
                    
                 
                <!-- <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" >-->
               <?php if( !empty($pegawai) ) {  ?> 
            <?php foreach ($pegawai as $record): ?>

              
          <?php echo form_open('admin/edit_pegawaidb'); ?>
           
          <?php echo validation_errors(); ?>  

        <?php endforeach; ?>
           <?php } ?>

             <?php 
             if( !empty($single_pegawai) ) {
                        
                        foreach ($single_pegawai as $record): 
                        ?>  
                
                    <div class="form-group">
                      
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        
                        <input type="hidden" name="id"  class="form-control col-md-7 col-xs-12" >
                      </div>
                      <input type="hidden" name="id" id="id" value="<?php echo $record->id_alternatif;?>" />
                    </div>
                    

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="nama" class="form-control col-md-7 col-xs-12" value="<?php echo $record->nama_alternatif ?>">
                      </div>
                    </div>
                   <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <p>
                          Pria:
                        <input type="radio" class="flat" name="jk" id="jkw"  value="pria" <?php echo ($record ->jk == 'pria') ? 'checked' : ''; ?> /> Wanita:
                        <input type="radio" class="flat" name="jk" id="jkp" value="wanita" <?php echo ($record ->jk == 'wanita') ? 'checked' : ''; ?> />
                      </p>
                        </div>
                      </div>
                     <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name" >Tanggal Lahir<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                     <input type="date" name="tanggal_lahir" value="<?php echo $record->tanggal_lahir ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Alamat<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea name="alamat" value="" class="form-control col-md-7 col-xs-12"><?php echo $record->alamat?> </textarea>
                      </div>
                    </div>
                     <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Email<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                     <input type="text" name="email" value="<?php echo $record->email ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">No Handpone<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="hp" value="<?php echo $record->no_hp ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name" >Pendidikan Terakhir<span class="required">*</span>
                      </label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                         <select id="heard" class="form-control"  name="pendidikan" value="">
                       
                        <option value="S2" <?php if($record->pendidikan == "S2"){ echo 'selected="selected"'; } ?> >S2</option>
                          <option value="S1" <?php if($record->pendidikan == "S1"){ echo 'selected="selected"'; } ?> >S1</option>
                          <option  value="D3" <?php if($record->pendidikan == "D3"){ echo 'selected="selected"'; } ?> >D3</option>
                            <option  value="SMU/SMK" <?php if($record->pendidikan == "SMU/SMK"){ echo 'selected="selected"'; } ?> >SMU/SMK</option>
                    </select>   
                  </div>
                  </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Pengalaman Kerja<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                       <textarea name="pengalaman" value="" class="form-control col-md-7 col-xs-12"><?php echo $record->pengalaman_kerja ?></textarea>
                      </div>
                    </div>

                     <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Divisi<span class="required">*</span>
                      </label>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                         <select id="heard" class="form-control"  name="divisi" value="">
                         
                        <option value="sales" <?php if($record->divisi == "sales"){ echo 'selected="selected"'; } ?>>Sales</option>
                          <option value="billing" <?php if($record->divisi == "billing"){ echo 'selected="selected"'; } ?>>Billing</option>
                          <option value="developer" <?php if($record->divisi == "developer"){ echo 'selected="selected"'; } ?> >Developer</option>
                            <option value="teknisi" <?php if($record->divisi == "teknisi"){ echo 'selected="selected"'; } ?> >Teknisi</option>
                    </select>   
                  </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">
                      File(Masukan data Ijazah/CV dalam bentuk .rar max size 2 mb) <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="file" name="file" class="form-control col-md-7 col-xs-12" value="<?php echo $record->file ?>">
                        <label><?php echo $record->file; ?></label>
                        </div>
                    </div>

                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3" align="center">
                        <button type="submit" class="btn btn-success" name="input" value="submit" >Edit</button>
                      </div>
                    </div>
                     </div>
                    
                 <?php endforeach; ?>  
              
<?php } ?>
             
                 <?php echo form_close(); ?>

                </div>
              </div>
            </div>
          </div>

