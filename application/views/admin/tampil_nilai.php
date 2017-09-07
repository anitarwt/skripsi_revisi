<div class="x_panel">
    <div class="x_title">
        <h2>Tabel Nilai </h2>
        <ul class="nav navbar-right panel_toolbox pull-right">
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
        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
               width="100%">
            <thead>
            <tr>
                <th rowspan="2">No</th>
                <th rowspan="2">Nama Pegawai</th>
                <th rowspan="2">Divisi</th>
                <th colspan="<?= sizeof($kriteria) ?>" style="text-align: center;">Nilai Angka</th>
                <th rowspan="2" style="text-align: center;">Aksi</th>
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

                    <td>
                         <div>

                            <a href="<?php echo base_url() . 'admin/edit_nilai/' . $n->id_alternatif; ?> ">
                                <button class="btn btn-info" name="input"><i class="glyphicon glyphicon-pencil"></i></button>
                            </a>

            
                            <a href="<?php echo base_url() . 'admin/hapus_nilai/' . $n->id_alternatif; ?> ">
                                <button class="btn btn-danger btn-sm" name="input" onclick="return confirm('Anda Yakin menghapus data ini?')"><i class="glyphicon glyphicon-trash"></i></button>
                            </a></div>
                    </td>

                </tr>

                <?php
            }

            ?>
            </tbody>
        </table>


    </div>
                