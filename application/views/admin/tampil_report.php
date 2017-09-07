<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=$title.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>


        <h2>Laporan Hasil</small></h2>

       
    
          <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
               width="100%" border="1">
            <thead>
            <tr style="background-color: #F0F8FF">
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
<br>
<br>


  <table border="1" width="100%">
            <thead>
            <tr style="background-color: #82E0AA">
               
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
                