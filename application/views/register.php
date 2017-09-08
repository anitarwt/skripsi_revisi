<div class="container">

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center">
        <div id="banner">
            <h1>Are You <strong>Looking For challenge?</strong> Come Joint Us</h1>

            <h5><strong>rumahweb.com/career</strong></h5>

        </div>
    
    </div>
   <div class="form-horizontal">
   <?php echo $this->session->flashdata('info'); ?>

 <?php echo form_open_multipart('home/tambah_pegawaidb'); ?>


    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="registrationform">
          
      
     <?php echo validation_errors(); ?> 
        
                <legend><p align="center"><i class="fa fa-pencil "></i> Form Registrasi</p></legend>
               
                <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="hidden" name="id" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                <div class="form-group">
                    <label for="nama" class="col-lg-3 control-label">Nama</label>
                    <div class="col-lg-8">
                        <input type="text" name="nama" class="form-control" id="nama" placeholder="nama" value="<?php echo set_value('nama') ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label" for="jk">
                        Jenis Kelamin</label>
                    <div class="col-lg-8">
                        <div class="radio">
                            <label>
                                <input type="radio" class="flat" name="jk" id="jk" value="wanita" checked="wanita"/>
                                Wanita
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" class="flat" name="jk" id="jk" value="pria" checked="pria"/>Pria
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="col-lg-3 control-label" name="tanggal">Tanggal lahir</label>
                    <div class="col-lg-8">
                        <input type="text" name="tanggal" value="" id="tanggal" class="form-control col-md-7 col-xs-12">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-3 control-label" id="alamat">Alamat</label>
                    <div class="col-lg-8">
                        <textarea name="alamat" id="alamat"
                                  class="form-control col-md-7 col-xs-12"><?php echo set_value('alamat') ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-3 control-label" id="email">Email</label>
                    <div class="col-lg-8">
                        <input type="text" name="email" class="form-control" id="email" placeholder="Email" value="<?php echo set_value('email') ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-3 control-label" id="hp">No Handpone</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" id="hp" name="hp" placeholder="no handpone" value="<?php echo set_value('hp') ?>">
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-lg-3 control-label" id="pendidikan">Pendidikan Terakhir</label>
                    <div class="col-lg-8">
                        <select class="form-control" id="pendidikan" name="pendidikan" value="<?php echo set_value('pendidikan') ?>">
                            <option value="S2">S2</option>
                            <option value="S1">S1</option>
                            <option value="D3">D3</option>
                            <option value="SMU">SMU/SMK</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="textArea" class="col-lg-3 control-label" id="pengalaman">Pengalaman Kerja</label>
                    <div class="col-lg-8">
                        <textarea class="form-control" rows="3" id="pengalaman" name="pengalaman"> <?php echo set_value('pengalaman') ?></textarea>
                        
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label" id="divisi">Divisi</label>
                    <div class="col-lg-8">
                        <select class="form-control" id="select"  id="divisi" name="divisi" value="<?php echo set_value('divisi') ?>">
                            <option value="Teknik">Teknik</option>
                            <option value="Sales">Sales</option>
                            <option value="Billing">Billing</option>
                            <option value="Developer">Developer</option>
                        </select>

                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-3"id="file">File</label>
                    <div class="col-lg-8">
                        <span class="required">*</span>
                        (Ijazah/CV dalam bentuk .rar max size 2 mb)

                        <input type="file" name="file" class="form-control col-md-7 col-xs-12" id="file" value="<?php echo set_value('file') ?>">
                    </div>
                </div>
                <div class="form-group">
                     
                <?php echo $captcha?>
           
                </div>

                <div class="form-group">
                    <div class="col-lg-8 col-lg-offset-3">
                        <button type="submit" name="kirim" id="kirim" 
                        class="btn btn-primary">
                            Kirim
                        </button>
                    </div>
                </div>
        <?php echo form_close(); ?>
   </div>
        </div>
    </div>

</div>

 <script type="text/javascript">
  $(document).ready(function() {
   $("form").submit(function(event){
   event.preventDefault();
   //mengambil data dari form
   var nama_value= $("#nama").val();
   var jk_value= $("#jk").val();
   var tanggal_value= $("#tanggal").val();
   var alamat_value= $("#alamat").val();    
   var email_value= $("#email").val();
   var hp_value= $("#hp").val();    
   var pendidikan_value= $("#pendidikan").val();
   var pengalaman_value= $("#pengalaman").val();
   var divisi_value= $("#divisi").val();
   var file_value= $("#file").val();        

   jQuery.ajax({
   type: "POST",
   url: "<?php echo base_url(); ?>"+"home/tambah_pegawaidb",
   dataType: 'json',
   //mengirim data dengan type post
   data: {nama: nama_value, jk : jk_value, tanggal : tanggal_value , alamat : alamat_value, email: email_value,
   hp: hp_value, pendidikan: pendidikan_value, pengalaman: pengalaman_value, divisi: divisi_value, file: file_value},
   //menerima result dari controller
   success: function(res) {
    if(res.hasil == 'true'){
     swal({
      title: "Sukses",
      text: "Data Di Tambahkan",
      showConfirmButton: true,
      confirmButtonColor: '#0760ef',
      type:"success"
     },
     function(){
       document.getElementById('form').reset();
     });
    }
    if(res.hasil == 'false'){
     swal({
      title: "Gagal",
      text: "Data Gagal Tambahkan",
      showConfirmButton: true,
      confirmButtonColor: '#0760ef',
      type:"error"
     },
     function(){
      
     });
    }
   }
  });
 });
});
 </script>