  <div class="x_panel">
                  <div class="x_title">
                    <h2>Tabel Nilai Vektor</small></h2>
                    
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix">
                      
                    </div>
                  </div>
                  <div class="x_content">
            
                    <?php if($this->session->flashdata('info')): ?>

                   <div class="alert alert-success alert-dismissible fade in">
                   <?php echo $this->session->flashdata('info'); ?> </div> 

                 <?php endif; ?>
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Alternatif</th>
                          <th>Divisi</th>
                          <th>Nilai Vektor S</th>
                          <th>Nilai Vektor V</th>
                        </tr>

                       
                        <?php 
                        $no=1;
                        foreach ($vektor as $vek) {
                        ?> 
                        <tr>
                          <td><?php echo $no++ ?></td>
                           <td><?php echo $vek->nama_alternatif ?></td>
                               <td><?php echo $vek->divisi ?></td>
                            <td><?php echo round(($vek->vektor_s),4); ?></td>
                             <td><?php echo round(($vek->vektor_v),8); ?></td>
                        
                               

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
                