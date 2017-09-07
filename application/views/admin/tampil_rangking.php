<div class="x_panel">
    <div class="x_title">
        <h2>Laporan</small></h2>

        <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
        </ul>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">

        <?php if ($this->session->flashdata('info')): ?>

            <div class="alert alert-success alert-dismissible fade in">
                <?php echo $this->session->flashdata('info'); ?> </div>

        <?php endif; ?>
        <label>Cetak Laporan ke pdf</label>
        <button><a href="<?php echo base_url('admin/cetak'); ?>">Cetak</a>  </button>
           <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
               width="100%">
            <thead>
            <tr>
                <th rowspan="2">No</th>
                <th rowspan="2">Nama Pegawai</th>
                <th rowspan="2">Divisi</th>
                <th colspan="<?= sizeof($kriteria) ?>" style="text-align: center;">Nilai Angka</th>
                
            </tr>
            <tr>
                <?php
                foreach ($kriteria as $k){
                ?>
                    <th><?=$k->nama_kriteria?></th>
                <?php
                }
                ?>
            </tr>

            </thead>
            <tbody>
            <?php
            $no = 1;
            foreach ($nilai as $n) {
                ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $n->nama_alternatif ?></td>
                    <td><?php echo $n->divisi ?></td>

                    <?php

                    foreach ($n->nilai as $n_alternatif){
                    ?>
                        <td><?=$n_alternatif->nilai?></td>
                    <?php
                    }
                    ?>

                    

                </tr>

                <?php
            }

            ?>
            </tbody>
        </table>

        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
               width="100%">
            <thead>
            <tr>
               
                <th>Nama</th>
            
                <th>Vector S</th>
                <th>Vector V</th>
                 <th>Ranking</th>
            </tr>


            <?php
            $no = 1;
            foreach ($rangking as $rang) {
                ?>
                <tr>
                   
                    <td><?php echo $rang->nama_alternatif ?></td>
                   
                     
                    <td><?php echo round(($rang->vektor_s),8) ?></td>
                    <td><?php echo round(($rang->vektor_v),8) ?></td>
                     <td><?php echo $no++ ?></td>

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
                