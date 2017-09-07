  <div class="x_panel">
                  <div class="x_title">
                    <h2>Tabel Alternatif</small></h2>
                    
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
            
                    <?php if($this->session->flashdata('info')): ?>

                   <div class="alert alert-success alert-dismissible fade in">
                   <?php echo $this->session->flashdata('info'); ?> </div> 

                 <?php endif; ?>
                    <table id="datatable-responsive" class="table table-striped table-condensed table-bordered dt-responsive nowrap table-hover"  cellspacing="0" width="100%">
                      <thead>
                        <tr>
                        
                          <th>Nama</th>
                          <th>Jenis Kelamin</th>
                           <th>Tanggal Lahir</th>
                          <th>Alamat</th>
                          <th>Email</th>
                          <th>No Handpone</th>
                          <th>Pendidikan Terakhir</th>
                          <th>Pengalaman Kerja</th>
                          <th>Divisi</th>
                          <th>File</th>
                          <th>Aksi</th>
                        
                        </tr>

                       
                        <?php 
                        $no=1;
                        foreach ($pegawai as $peg) {
                        ?> 
                        <tr>
                         
                           <td><?php echo $peg->nama_alternatif ?></td> 
                            <td><?php echo $peg->jk ?></td>
                            <td><?php echo $peg->tanggal_lahir ?></td>
                            <td><?php echo $peg->alamat ?></td>
                            <td><?php echo $peg->email ?></td>
                            <td><?php echo $peg->no_hp ?></td>
                            <td><?php echo $peg->pendidikan ?></td>
                            <td><?php echo $peg->pengalaman_kerja ?></td>
                            <td><?php echo $peg->divisi ?></td>
                            <td> <?php echo $peg->file ?>  </td>
                             <td>
                             

                              <a href="<?php echo base_url().'admin/edit_pegawai/'.$peg->id_alternatif;?> ">
                              <button class="btn btn-info btn-sm" name="input"><i class="glyphicon glyphicon-pencil"></i></button></a>
 
                              
                            <a href="<?php echo base_url().'admin/hapus_pegawai/'.$peg->id_alternatif; ?> ">
                                <button class="btn btn-danger btn-sm" name="input" onclick="return confirm('Anda Yakin menghapus data ini?')"><i class="glyphicon glyphicon-trash"></i></button></a>

                      
                                 
                            
                             </div>   
                              </td>    

                        </tr>
                        
                        <?php 
                        }

                         ?>
                      </thead>
                      <tbody>
                        </tr>
                      </tbody>
                    </table>
          
          
                  </div>
                